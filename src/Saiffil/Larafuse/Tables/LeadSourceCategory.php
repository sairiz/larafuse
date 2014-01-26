<?php namespace Saiffil\Larafuse\Tables;

class LeadSourceCategory extends BaseTable {

	protected $table = 'LeadSourceCategory';
	public static $rules = array(
		'Id' => 'required',
		'Name' => 'required',
		'Description' => 'required'
	);
}
