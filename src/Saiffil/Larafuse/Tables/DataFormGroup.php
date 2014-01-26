<?php namespace Saiffil\Larafuse\Tables;

class DataFormGroup extends BaseTable {

	protected $table = 'DataFormGroup';
	public static $rules = array(
		'Id' => 'required',
		'TabId' => 'required',
		'Name' => 'required'
	);
}
