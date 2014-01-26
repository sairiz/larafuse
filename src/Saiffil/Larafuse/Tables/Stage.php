<?php namespace Saiffil\Larafuse\Tables;

class Stage extends BaseTable {

	protected $table = 'Stage';
	public static $rules = array(
		'Id' => 'required',
		'StageName' => 'required',
		'StageOrder' => 'required',
		'TargetNumDays' => 'required'
	);
}
