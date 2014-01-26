<?php namespace Saiffil\Larafuse\Tables;

class DataFormTab extends BaseTable {

	protected $table = 'DataFormTab';
	public static $rules = array(
		'Id' => 'required',
		'FormId' => 'required',
		'TabName' => 'required'
	);
}
