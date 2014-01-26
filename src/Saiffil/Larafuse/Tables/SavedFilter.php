<?php namespace Saiffil\Larafuse\Tables;

class SavedFilter extends BaseTable {

	protected $table = 'SavedFilter';
	public static $rules = array(
		'Id' => 'required',
		'FilterName' => 'required',
		'ReportStoredName' => 'required',
		'UserId' => 'required'
	);
}
