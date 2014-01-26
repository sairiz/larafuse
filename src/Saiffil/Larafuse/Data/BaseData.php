<?php namespace Saiffil\Larafuse\Data;

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
        $inst = '\Saiffil\Larafuse\Tables\\'.$table;

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
