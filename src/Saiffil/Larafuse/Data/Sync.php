<?php namespace Saiffil\Larafuse\Data;

use DateTimeZone;
use Carbon\Carbon;
use Fuse;
use Config;
use Exception;
use Larafuse;
use Schema;
use Illuminate\Database\Schema\Blueprint;
use DB;

class Sync extends BaseData {

    protected $fetch;

    protected $fuseId;

    protected $localId;

    protected $inst;

    protected $destroy;

    protected $create;

    protected $liveField;

    protected $localField;

    protected $drop;

    protected $add;

    protected $customFields;

    public function __construct(Fetch $fetch)
    {
        parent::__construct();

        $this->fetch = $fetch;
    }

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

            $tables = array_diff($this->fetch->getTables(), $ignore);

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

            $tables = array_diff($this->fetch->getTables(), $ignore);

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
     * @return int
     */
    public function syncMissingId($table)
    {
        if($this->checkMissingId($table))
        {
            if($this->destroy)
            {
                $this->inst->destroy($this->destroy);
            }

            if($this->create)
            {
                foreach($this->create as $data)
                {
                    $this->fetch->fetchId($table,$data);
                }

            }

            return 1;
        }
        else 
        {
            return 0;
        }
    }

    /**
     * Check missing id
     * @param $table
     * @return boolean
     */
    public function checkMissingId($table)
    {
        if($this->checkDataStatus($table))
        {
            $this->destroy = array_diff($this->localId,$this->fuseId);

            $this->create = array_diff($this->fuseId,$this->localId);

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Check data status
     * @param $table
     * @return boolean
     */
    public function checkDataStatus($table)
    {
        $live = Fuse::dsCount($table,['Id' => '%']);

        $page = (int)($live/1000);

        for($i = 0; $i <= $page; $i++) {
            $retData = Fuse::dsQueryOrderBy($table,1000,$i,['Id' => '%'],['Id'],'Id');
            foreach($retData as $data)
                $this->fuseId[] = $data['Id'];
        }

        $this->inst = $this->createInstance($table);

        $this->localId = $this->inst->all()->lists('Id');

        sort( $this->fuseId ); 
        sort( $this->localId ); 

        if($this->fuseId == $this->localId)
            return false;

        return true; 
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

    /**
     * Main sync missing function
     * @param null $table
     * @return array
     */
    public function syncField($table = null)
    {
        if ($table === null) {

            $tables = ['Contact','Job','Affiliate','ContactAction','Lead','Company'];

            foreach ($tables as $table) {
                $data[] = $this->syncMissingField(ucfirst($table));
            }

        } else
            $data = $this->syncMissingField(ucfirst($table));

        DB::table('Larafuse')->truncate();

        $columns = $this->fetch->getColumnsWithCustom();

        foreach($columns as $column) {
            Larafuse::create($column);
        }

        return $data;
    }

    /**
     * Sync missing field
     * @param $table
     * @return array
     */
    public function syncMissingField($tableDatabase)
    {
        if($this->checkMissingField($tableDatabase))
        {
            if($this->drop)
            {
                Schema::table($tableDatabase, function(Blueprint $table)
                {
                    $table->dropColumn($this->drop);
                });
            }

            if($this->add)
            {
                Schema::table($tableDatabase, function(Blueprint $table)
                {
                    foreach($this->add as $data)
                    {
                        foreach($this->customFields as $tmp)
                        {
                            if($tmp['field'] == $data)
                                $type = lcfirst($tmp['type']);
                        }
                        $table->$type($data);
                    }
                });
            }

            return 1;
        }
        else 
        {
            return 0;
        }
    }

    /**
     * Check missing field
     * @param $table
     * @return boolean
     */
    public function checkMissingField($table)
    {
        if($this->checkFieldStatus($table))
        {
            $this->drop = array_diff($this->localField,$this->liveField);

            $this->add = array_diff($this->liveField,$this->localField);

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Check field status
     * @param $table
     * @return boolean
     */
    public function checkFieldStatus($table)
    {
        $this->customFields = $this->fetch->getCustomColumns($table);

        $columns = [];

        foreach($this->customFields as $tmp)
        {
            $columns[] = $tmp['field']; 
        }
        
        $this->liveField = $columns;

        $this->localField = Larafuse::whereFusetable($table)->where('Field','LIKE','\_%')->lists('Field');

        sort( $this->liveField );
        sort( $this->localField );

        if($this->liveField == $this->localField)
            return false;

        return true; 
    }
}
