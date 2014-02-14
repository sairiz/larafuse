<?php namespace Sairiz\Larafuse\Data;

use Larafuse;
use Fuse;
use DB;

abstract class BaseData {

    /*
     * Disable query log to increase performance
     */
    public function __construct()
    {
        DB::connection()->disableQueryLog();
    }

    /*
     * Convert DataType to mysql DataType
     *
     * @return array
     */
    public function getFormIdDataType($dataType)
    {
        $string = [1,2,5,7,8,10,15,16,17,18,20,21,22,23];

        $double = [3,4,6,9,11,19];

        if($dataType === 12)
            return 'Integer';
        elseif($dataType === 13)
            return 'Date';
        elseif($dataType === 14)
            return 'DateTime';
        elseif(in_array($dataType, $string))
            return 'String';
        elseif(in_array($dataType, $double))
            return 'Double';
        else
            return 'String';
    }

    /*
     * Match formId with the correct table
     *
     * @return string
     */
    protected function getFormIdTable($formId)
    {
        switch ($formId) {
            case -1:
                return 'Contact';
                break;
            case -3:
                return 'Affiliate';
                break;
            case -4:
                return 'Lead';
                break;    
            case -5:
                return 'ContactAction';
                break;    
            case -6:
                return 'Company';
                break;
            case -9:
                return 'Job';
                break;
            default:
                return false;
                break;
        }
    }

    /*
     * Match table with the correct formid
     *
     * @return int
     */
    protected function getTableFormId($table)
    {
        $table = ucfirst($table);

        switch ($table) {
            case 'Contact':
                return -1;
                break;
            case 'Affiliate':
                return -3;
                break;
            case 'Lead':
                return -4;
                break;    
            case 'ContactAction':
                return -5;
                break;    
            case 'Company':
                return -6;
                break;
            case 'Job':
                return -9;
                break;
            default:
                return 0;
                break;
        }
    }

	/*
     * List return field available for a table
     *
     * @return array
     */
    protected function returnFields($table)
    {
        return Larafuse::whereFusetable($table)->lists('field');
    }

    /*
     * Count the available page for query
     *
     * @return int
     */
    protected function pageCount($table)
    {
        $data = Fuse::dsCount($table,['Id' => '%']);

        return (int)($data/1000);
    }

    /*
     * Instantiate table model
     *
     * @return table instance
     */
    protected function createInstance($table)
    {
        $inst = '\Sairiz\Larafuse\Tables\\'.$table;

        return new $inst;
    }

    /*
     * dsLoad for fetchId
     *
     * @return array/string
     */
    protected function load($table,$Id)
    {
        $retFields = $this->returnFields($table);

        return Fuse::dsLoad($table,$Id,$retFields);
    }
}
