<?php namespace Saiffil\Larafuse\Data;

use Config;
use Symfony\Component\DomCrawler\Crawler;
use Fuse;
use Exception;
use Cache;

class Fetch extends BaseData {

    /**
     * Main fetch method
     * @param null $table
     * @return array
     */
    public function fetchTable($table, $page = null, $continue = false)
    {
        set_time_limit(0);

        if($page === null)
            $page = 0;

        if($table == 'all')
        {
            $tables = $this->getTables();

            Cache::put('tableid',0,90);

            $table = $tables[0];

            $continue = true;
        }

        $totalPage = $this->pageCount($table);

        if($page < $totalPage)
        {
            $nextPage = $page + 1;
            $nextTable = null;
        }
        else 
        {
            $nextPage = null;

            if($continue)
            {
                $tableId = Cache::get('tableid') + 1;
                if($tableId < 58)
                {
                    $tables = $this->getTables();
                    $nextTable = $tables[$tableId];
                    Cache::put('tableid',$tableId,90);
                } 
                else {
                    $nextTable = 'done';
                    Cache::forget('tableid');
                }
            } 
            else {
                $nextTable = 'done';
                Cache::forget('tableid');
            }
        }

        $data = $this->fetcher(ucfirst($table),$page);

        return [$table,$data,$nextPage,$nextTable,$continue];
    }

    /**
     * Main fetch method
     * @param null $table
     * @return array
     */
    public function fetch($table = null)
    {
        set_time_limit(0);

        if($table)
        {
            $data = $this->fetchTable(ucfirst($table));

            return $data;
        }
        else
        {
            $this->fetchTable('all');
        }
    }


    /**
     * Fetch table record accoring to their id
     * @param $table
     * @param $Id
     * @return array|string
     */
    public function fetchId($table, $Id)
    {
        $table = ucfirst($table);

        $retData = $this->load($table,$Id);

        if(!is_array($retData))
            return 'Record Id = '.$Id.' from table '.$table.' was not found';

        $inst = $this->createInstance($table);

        $inst::create($retData);

        return $retData;
    }


    /**
     * Fetch data from Infusionsoft and insert into database
     * @param $table
     * @return array|int
     */
    private function fetcher($table,$page = null)
    {
        $retData = $this->query($table,$page);

        if(!is_array($retData))
            return $retData;
        elseif(empty($retData))
            return $retData;

        $inst = $this->createInstance($table);

        if($page === 0 || $page === null)
            $inst::truncate();

        foreach ($retData as $data) {
            try 
            {
                $inst::create($data);   
            } catch (Exception $e) {
                if($table === 'DataFormField')
                {
                    $data['Values'] = json_encode($data['Values'], JSON_FORCE_OBJECT);
                    $inst::create($data);
                }
            }       
        }

        return count($retData);
    }

    /**
     * dsQuery for fetcher
     * @param $table
     * @return array
     */
    private function query($table,$page)
    {
        if($page === null)
            $page = 0;

        $retFields = $this->returnFields($table);

        $retData = Fuse::dsQueryOrderBy($table,1000,$page,['Id' => '%'],$retFields,'Id');

        return $retData;
    }

    /**
     * get total row of tables data from infusionsoft
     *
     * @return array
     */
    public function getRowCount()
    {
        $num = 0;

        $except = ['CreditCard','RecurringOrderWithContact', 'ContactGroupAssign','Ticket'];

        $tables = array_diff($this->getTables(), $except);

        foreach($tables as $table)
        {
            $num = Fuse::dsCount($table,['Id' => '%']);
            $data[$table] = $num;
        }

        return $data;
    }

    /**
     * Get all tables' name
     *
     * @return array
     */
    public function getTables()
    {
        $crawler = new Crawler(file_get_contents( __DIR__ . '/../Docs/index.html'));

        return $crawler->filter('a')->extract(['_text']);
    }

    /**
     * Get all column for all table
     *
     * @return array
     */
    public function getColumns()
    {
        $tables = $this->getTables();

        foreach ($tables as $table) {
            $fields[$table] = $this->getColumnAttr($table);
            foreach ($fields[$table] as $field) {
                $columns[] = $field;
            }
        }

        return $columns;
    }

    /**
     * Get all column for all table with custom field column
     *
     * @return array
     */
    public function getColumnsWithCustom()
    {
        return array_merge($this->getColumns(),$this->getCustomColumns());
    }

    /**
     * Get all column for given table
     *
     * @param  string $table
     * @return array
     */
    private function getColumnAttr($table)
    {
        $crawler = new Crawler(file_get_contents( __DIR__ . '/../Docs/'.$table.'.html'));

        $columnRaw = $crawler->filter('td')->extract(['_text']);

        $n = count($columnRaw)/4;
        $k = 0;

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $label = $this->attrLabel($j);
                $columns[$i]['fusetable'] = $table;
                if ($columnRaw[$k]) {
                    if($columnRaw[$k] == "Blob")
                        $columnRaw[$k] = "Binary";
                    elseif ($columnRaw[$k] == "Long")
                        $columnRaw[$k] = "BigInteger";
                    $columns[$i][$label] = trim($columnRaw[$k],' ');;
                }
                $k++;
            }
        }

        if ($this->checkMissingColumns($table)) {
            $i++;
            $columns[$i]['fusetable'] = $table;
            $columns[$i]['field'] = 'LastUpdated';
            $columns[$i]['type'] = 'DateTime';
            $columns[$i]['access'] = 'Read';
        }

        return $columns;
    }

    /**
     * Get attr label name for columns
     *
     * @param  int 0-3
     * @return string
     */
    private function attrLabel($num)
    {
        switch ($num) {
            case 0:
                $label = 'field';
                break;
            case 1:
                $label = 'type';
                break;
            case 2:
                $label = 'access';
                break;
            case 3:
                $label = 'value';
                break;
        }

        return $label;
    }

    /**
     * Check if given table had missing 'LastUpdated'
     * column which are not in the official documentation
     *
     * @param  string $table
     * @return bool
     */
    private function checkMissingColumns($table)
    {
        $miss = ['','Job','Invoice','InvoiceItem','OrderItem','InvoicePayment','Payment'];

        if(array_search($table,$miss))
            return true;

        return false;
    }

    /**
     * Get custom columns
     *
     * @return array
     */
    public function getCustomColumns()
    {
        $retFields = ['Name','FormId','DataType','Label'];
        $retData = Fuse::dsQuery("DataFormField",1000,0,['Id' => '%'],$retFields);

        $i = 0;

        foreach ($retData as $data) {
            switch ($data['FormId']) {
                case -1:
                    $table = 'Contact';
                    break;
                case -3:
                    $table = 'Referral';
                    break;
                case -6:
                    $table = 'Company';
                    break;
                case -9:
                    $table = 'Job';
                    break;
                default:
                    $table = false;
                    break;
            }

            switch ($data['DataType']) {
                case 1:
                    $datatype = 'String';
                    break;
                case 2:
                    $datatype = 'String';
                    break;
                case 3:
                    $datatype = 'Double';
                    break;
                case 4:
                    $datatype = 'Double';
                    break;
                case 5:
                    $datatype = 'String';
                    break;
                case 6:
                    $datatype = 'Double';
                    break;
                case 7:
                    $datatype = 'String';
                    break;
                case 8:
                    $datatype = 'String';
                    break;
                case 9:
                    $datatype = 'Double';
                    break;
                case 10:
                    $datatype = 'String';
                    break;
                case 11:
                    $datatype = 'Double';
                    break;
                case 12:
                    $datatype = 'Integer';
                    break;
                case 13:
                    $datatype = 'Date';
                    break;
                case 14:
                    $datatype = 'DateTime';
                    break;
                case 15:
                    $datatype = 'String';
                    break;
                case 16:
                    $datatype = 'String';
                    break;
                case 17:
                    $datatype = 'String';
                    break;
                case 18:
                    $datatype = 'String';
                    break;
                case 19:
                    $datatype = 'Double';
                case 20:
                    $datatype = 'String';
                    break;
                case 21:
                    $datatype = 'String';
                    break;
                case 22:
                    $datatype = 'String';
                    break;
                case 23:
                    $datatype = 'String';
                    break;
                default:
                    $datatype = 'String';
                    break;
            }

            if ($table) {
                $fields[$i]['fusetable'] = $table;
                $fields[$i]['field'] = '_'.$data['Name'];
                $fields[$i]['type'] = $datatype;
                $fields[$i]['access'] = 'Edit Delete Add Read';
                $fields[$i]['label'] = $data['Label'];
                $i++;
            }
        }

        foreach ($fields as $field) {
            $columns[] = $field;
        }

        return $columns;
    }
}
