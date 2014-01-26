<?php namespace Saiffil\Larafuse\Tables;

class GroupAssign extends BaseTable {

	protected $table = 'GroupAssign';
	public static $rules = array(
		'Id' => 'required',
		'UserId' => 'required',
		'GroupId' => 'required',
		'Admin' => 'required'
	);
}
