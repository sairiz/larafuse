<?php namespace Saiffil\Larafuse\Tables;

class Status extends BaseTable {

	protected $table = 'Status';
	public static $rules = array(
		'Id' => 'required',
		'StatusName' => 'required',
		'StatusOrder' => 'required',
		'TargetNumDays' => 'required'
	);
}
