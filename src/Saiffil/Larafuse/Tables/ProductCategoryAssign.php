<?php namespace Saiffil\Larafuse\Tables;

class ProductCategoryAssign extends BaseTable {

	protected $table = 'ProductCategoryAssign';
	public static $rules = array(
		'Id' => 'required',
		'ProductId' => 'required',
		'ProductCategoryId' => 'required'
	);
}
