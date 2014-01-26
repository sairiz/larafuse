<?php namespace Saiffil\Larafuse\Helpers;

use Larafuse;
use Fetch;

class Generate
{
    /**
     * Generate array for getDates function in baseTable
     *
     * @echo string
     */
    public static function genGetDates()
    {
        $dataA = Larafuse::whereType('DateTime')->lists('Field');

        $dataB = Larafuse::whereType('Date')->lists('Field');

        $datas =array_merge($dataA,$dataB);

        $str = "";

        echo "[";

        foreach ($datas as $data) {
            $str = ",'".$data."'".$str;
        }

        echo ltrim($str,',').']';
    }

    /**
     * Generate fillable array for tables/model
     *
     * @echo string
     */
    public static function genFillArray()
    {
        $tables = ['Contact','Job','Company','Referral'];

        foreach ($tables as $table) {

            echo $table.'<br /><br />';

            $fields = Larafuse::whereFusetable($table)->lists('Field');

            $str = "";

            echo '$fillable = [';

            foreach ($fields as $field) {
               $str = ",'".$field."'".$str;
            }

            echo ltrim($str,',');

            echo '];<br /><br /><br /><br />';
        }
    }

    /**
     * Generate public function set attributes for dates in BaseModel
     * generate:scaffold for a given table
     *
     * @echo string
     */
    public static function genSetDateFunction()
    {

        $datas = array_unique(Larafuse::whereType('DateTime')->lists('Field'));

        foreach($datas as $data) {
            $data = str_replace(".","",$data);
            echo 'public function set'.$data.'Attribute($value)<br />{
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->attributes[\''.$data.'\'] = (new Carbon($value))->toDateTimeString();';
            echo '<br />}<br /><br />';
        }

        $datas2 = array_unique(Larafuse::whereType('Date')->lists('Field'));

        foreach($datas2 as $data) {
            $data = str_replace(".","",$data);
            echo 'public function set'.$data.'Attribute($value)<br />{
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->attributes[\''.$data.'\'] = (new Carbon($value))->toDateString();';
            echo '<br />}<br /><br />';
        }
    }

    /**
     * Generate public function get attributes for dates in BaseModel
     *
     * @echo string
     */
    public static function genGetDateFunction()
    {

        $datas = array_unique(Larafuse::whereType('DateTime')->lists('Field'));

        foreach($datas as $data) {
            $data = str_replace(".","",$data);
            echo 'public function get'.$data.'Attribute($value)<br />{
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $value->toDateTimeString();';
            echo '<br />}<br /><br />';
        }

        $datas2 = array_unique(Larafuse::whereType('Date')->lists('Field'));

        foreach($datas2 as $data) {
            $data = str_replace(".","",$data);
            echo 'public function get'.$data.'Attribute($value)<br />{
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $value->toDateString();';
            echo '<br />}<br /><br />';
        }
    }

    /**
     * Generate command line for artisan
     * generate:scaffold for a given table
     *
     * @param string $table
     * @echo string
     */
    public static function genScaffComm($table)
    {

        $rows = Larafuse::whereFusetable($table)->get()->toArray();

        $field = '';

        foreach ($rows as $row) {
            if($row['Field'] == 'Id')
                $field = $field . ', '. $row['Field']. ':' .lcfirst($row['Type']);
        }

        foreach ($rows as $row) {
            if($row['Field'] != 'Id')
                $field = $field . ', '. $row['Field']. ':' .lcfirst($row['Type']);
        }

        $field = ltrim($field,', ');

        echo 'php artisan generate:scaffold --fields="' .$field. '" ' .lcfirst($table);
    }

    /**
     * Generate command line for artisan
     * generate:scaffold for all tables
     *
     * @echo string
     */
    public static function genScaffCommAll()
    {
        $tables = self::getTables();

        foreach ($tables as $table) {
            self::genScaffComm($table);
            echo '<br /><br />';
        }
    }

    /**
     * Generate schema code for adding
     * custom columns to tables (migration)
     *
     * @echo string
     */
    public static function genSchemaCustomColumns()
    {
        $tables = Larafuse::where('Field','LIKE','\_%')->groupBy('Fusetable')->lists('Fusetable'); /// aray of table with custom columns

        $columns = Larafuse::where('Field','LIKE','\_%')->get();

        echo "FUNCTION UP START ----><br /><br />";

        foreach ($tables as $table) {
            echo "Schema::table('$table', function(Blueprint \$table)<br />{<br />";

            foreach ($columns as $column) {
                if ($column['Fusetable'] == $table) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$table->" . lcfirst($column['Type']) . "('" . $column['Field'] . "');<br />";
                }
            }

            echo "});<br /><br />";
        }

        echo "<br /><br />FUNCTION DOWN START ----><br /><br />";

        foreach ($tables as $table) {
            echo "Schema::table('$table', function(Blueprint \$table)<br />{<br />";

            foreach ($columns as $column) {
                if ($column['Fusetable'] == $table) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$table->dropColumn('" . $column['Field'] . "');<br />";
                }
            }

            echo "});<br /><br />";
        }
    }
}
