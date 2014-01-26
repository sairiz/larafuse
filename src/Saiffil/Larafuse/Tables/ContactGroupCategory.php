<?php namespace Saiffil\Larafuse\Tables;

class ContactGroupCategory extends BaseTable {

	protected $table = 'ContactGroupCategory';
	public static $rules = array(
		'Id' => 'required',
		'CategoryName' => 'required',
		'CategoryDescription' => 'required'
	);
}
