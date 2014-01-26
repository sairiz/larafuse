<?php namespace Saiffil\Larafuse\Tables;

class DataFormField extends BaseTable {

	protected $table = 'DataFormField';
	public static $rules = array(
		'Id' => 'required',
		'DataType' => 'required',
		'FormId' => 'required',
		'GroupId' => 'required',
		'Name' => 'required',
		'Label' => 'required',
		'DefaultValue' => 'required',
		'Values' => 'required',
		'ListRows' => 'required'
	);
}
