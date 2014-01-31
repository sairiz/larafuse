<?php namespace Saiffil\Larafuse\Data;

use DateTimeZone;
use Carbon\Carbon;
use Fuse;
use Config;
use Exception;
use Fetch;

class Sync extends BaseData {

    /**
     * Main sync function
     * @param null $table
     * @param null $limit
     * @return array|string
     */
    public function sync($table = null, $limit = null)
    {
        if ($table === null) {

            $ignore = Config::get('larafuse::syncIgnore');

            $tables = array_diff(Fetch::getTables(), $ignore);

            foreach ($tables as $iTable) {
                $data[] = $this->syncer(ucfirst($iTable));
            }

        } else
            $data = $this->syncer(ucfirst($table),$limit);

        return $data;
    }

    /**
     * Sync order group
     * @return array
     */
    public function syncOrderGroup($limit = null)
    {
        $tables = Config::get('larafuse::syncOrderGroup');

        if(!isset($limit))
            $limit = Config::get('larafuse::syncOrderGroupLimit');

        foreach ($tables as $table) {
            $data[] = $this->syncer($table,$limit);
        }

        return $data;
    }

    /**
     * Sync main group
     * @return array
     */
    public function syncMain($limit = null)
    {
        $tables = Config::get('larafuse::syncMain');

        if(!isset($limit))
            $limit = Config::get('larafuse::syncMainLimit');

        foreach ($tables as $table) {
            $data[] = $this->syncer($table,$limit);
        }

        return $data;
    }

    /**
     * Main sync missing function
     * @param null $table
     * @return array
     */
    public function syncMissing($table = null)
    {
        if ($table === null) {

            $ignore = Config::get('larafuse::syncMissingIgnore');

            $tables = array_diff(Fetch::getTables(), $ignore);

            foreach ($tables as $table) {
                $data[] = $this->syncMissingId(ucfirst($table));
            }

        } else
            $data = $this->syncMissingId(ucfirst($table));

        return $data;
    }

    /**
     * Sync deleted id
     * @param $table
     * @return array
     */
    public function syncMissingId($table)
    {
        $missId = $this->checkMissingId($table);

        if($missId[0] === 0)
            return 0;

        $inst = $this->createInstance($table);

        if($missId[0] === 1) {
            $inst::destroy($missId[1]);
        }
        elseif($missId[0] === -1) {
            foreach ($missId[1] as $diff) {
                Fetch::fetchId($table,$diff);
            }
        }

        return $missId[1];
    }

    /**
     * Check missing id
     * @param $table
     * @return array [status code, missing id]
     */
    public function checkMissingId($table)
    {
        $status = $this->checkDataStatus($table);

        if($status[0] === 0)
            return [0];

        for($i = 0; $i <= $status[1]; $i++) {
            $retData = Fuse::dsQueryOrderBy($table,1000,$i,['Id' => '%'],['Id'],'Id');
            foreach($retData as $data)
                $fuseId[] = $data['Id'];
        }

        $inst = $this->createInstance($table);

        $localId = $inst::all()->lists('Id');

        if($status[0] === 1)
            $diff = array_diff($localId,$fuseId);
        elseif($status[0] === -1)
            $diff = array_diff($fuseId,$localId);

        return [$status[0],$diff];
    }

    /**
     * Check data status
     * @param $table
     * @return array [status code, page count]
     */
    public function checkDataStatus($table)
    {
        $inst = $this->createInstance($table);

        $local = $inst::all()->count();

        $live = Fuse::dsCount($table,['Id' => '%']);

        $page = (int)($live/1000);

        if($local === $live)
            return [0];
        elseif($local > $live)
            return [1,$page];

        return [-1,$page];
    }

    /**
     * Sync data from Infusionsoft and Larafuse
     * @param $table
     * @param null $limit
     * @return array|string
     */
    public function syncer($table, $limit = null)
    {
        $retFields = $this->returnFields($table);

        if(!isset($limit))
            $limit = 1000;

        $qryDate = Carbon::now(new DateTimeZone('EST'));

        Carbon::setToStringFormat('Y-m-d H:');

        $query = ['Id' => '%'];

        $sortBy = $this->sortBy($table);

        $inst = $this->createInstance($table);

        if (in_array($table,['StageMove','JobRecurringInstance']))
        {
            // Retrieve 1 hour interval for 58 min frequency
            try {
                $marker = $inst::latest('DateCreated')->first()->DateCreated->format('Ymd\TH:i:s');
            } catch (Exception $e) {}
            $query = ['DateCreated' => $qryDate->subMinutes(Config::get('larafuse::freqStage')+2).'%'];
            $retData = Fuse::dsQueryOrderBy($table,$limit,0,$query,$retFields,$sortBy,false);
        }
        elseif (in_array($table,['Contact','ContactAction']))
        {
            // Retrieve 10 min interval for 8 min frequency
            try {
                $marker = $inst::latest('LastUpdated')->first()->LastUpdated->format('Ymd\TH:i:s');
            } catch (Exception $e) {}
            $query = ['LastUpdated' => $qryDate->subMinutes(Config::get('larafuse::freqContact')+2).'%'];
            $retData = Fuse::dsQueryOrderBy($table,$limit,0,$query,$retFields,$sortBy,false);
        }
        elseif (in_array($table,['Invoice','InvoiceItem','InvoicePayment','Payment','Job','OrderItem']))
        {
            try {
                $marker = $inst::latest('LastUpdated')->first()->LastUpdated->format('Ymd\TH:i:s');
            } catch (Exception $e){}
            $retData = Fuse::dsQueryOrderBy($table,$limit,0,$query,$retFields,$sortBy,false);
        }
        else $retData = Fuse::dsQueryOrderBy($table,$limit,0,$query,$retFields,$sortBy,false);

        if(!is_array($retData))
            return 'Table '.$table.' is not returning array data';
        elseif(empty($retData))
            return 'Nothing to sync for table '.$table;

        foreach ($retData as $isi) {
            if (in_array($table,['StageMove','JobRecurringInstance']))
            {
                if(!isset($marker) || $marker < $isi['DateCreated'])
                {
                    $newInst = $inst::find($isi['Id']);
                    if(isset($newInst))
                        $newInst->update($isi);
                    else $inst::create($isi);
                }
            }
            elseif (in_array($table,['Contact','ContactAction','Invoice','InvoiceItem','InvoicePayment','Payment','Job','OrderItem']))
            {
                if(!isset($marker) || $marker < $isi['LastUpdated'])
                {
                    $newInst = $inst::find($isi['Id']);
                    if(isset($newInst))
                        $newInst->update($isi);
                    else $inst::create($isi);
                }
            }
            elseif ($table === 'DataFormField')
            {
                $newInst = $inst::find($isi['Id']);
                if(isset($newInst))
                { 
                    try 
                    {
                        $newInst->update($isi);   
                    } catch (Exception $e) {
                        $isi['Values'] = json_encode($isi['Values'], JSON_FORCE_OBJECT);
                        $newInst->update($isi);
                    }
                }
                else 
                {
                    try 
                    {
                        $newInst::create($isi);   
                    } catch (Exception $e) {
                        $isi['Values'] = json_encode($isi['Values'], JSON_FORCE_OBJECT);
                        $newInst::create($isi);
                    }
                }
            }
            else
            {
                $newInst = $inst::find($isi['Id']);
                if(isset($newInst))
                    $newInst->update($isi);
                else $inst::create($isi);
            }
        }

        return $retData;
    }

    /**
     * @param $table
     * @return string
     */
    public function sortBy($table)
    {
        $lastUpdated = ['Contact','ContactAction','Invoice','InvoiceItem','InvoicePayment',
                        'Payment','Job','OrderItem'];

        $dateCreated = ['StageMove','JobRecurringInstance'];

        if(in_array($table,$lastUpdated))
            return 'LastUpdated';
        elseif(in_array($table,$dateCreated))
            return 'DateCreated';

        return 'Id';
    }

    /**
     * Sync table record accoring to their id
     * @param $table
     * @param $Id
     * @return array|string
     */
    public function syncId($table, $Id)
    {
        $table = ucfirst($table);

        $retData = $this->load($table,$Id);

        if(!is_array($retData))
            return 'Record Id = '.$Id.' from table '.$table.' was not found';

        $inst = $this->createInstance($table);

        $newInst = $inst::find($Id);

        if(isset($newInst))
            $newInst->update($retData);
        else $inst::create($retData);

        return $retData;
    }


    public function syncField()
    {
        $fields = \Larafuse::where('Field','LIKE','\_%')->get(['Fusetable','Field']);


        return $fields;
    }
}
