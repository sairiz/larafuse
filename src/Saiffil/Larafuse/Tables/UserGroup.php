<?php namespace Saiffil\Larafuse\Tables;

class UserGroup extends BaseTable {

	protected $table = 'UserGroup';
	public static $rules = array(
		'Id' => 'required',
		'Name' => 'required',
		'OwnerId' => 'required'
	);
}
