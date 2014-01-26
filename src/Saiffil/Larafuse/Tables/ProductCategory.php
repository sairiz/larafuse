<?php namespace Saiffil\Larafuse\Tables;

class ProductCategory extends BaseTable {

	protected $table = 'ProductCategory';
	public static $rules = array(
		'Id' => 'required',
		'CategoryDisplayName' => 'required',
		'CategoryImage' => 'required',
		'CategoryOrder' => 'required',
		'ParentId' => 'required'
	);
}
