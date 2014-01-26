<?php namespace Saiffil\Larafuse\Tables;

class ContactGroup extends BaseTable {

	protected $table = 'ContactGroup';
	public static $rules = array(
		'Id' => 'required',
		'GroupName' => 'required',
		'GroupCategoryId' => 'required',
		'GroupDescription' => 'required'
	);
}
