<?php namespace Saiffil\Larafuse\Tables;

class Campaign extends BaseTable {

	protected $table = 'Campaign';
	public static $rules = array(
		'Id' => 'required',
		'Name' => 'required',
		'Status' => 'required'
	);
}
