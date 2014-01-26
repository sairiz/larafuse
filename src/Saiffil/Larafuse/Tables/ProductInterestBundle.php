<?php namespace Saiffil\Larafuse\Tables;

class ProductInterestBundle extends BaseTable {

	protected $table = 'ProductInterestBundle';
	public static $rules = array(
		'Id' => 'required',
		'BundleName' => 'required',
		'Description' => 'required'
	);
}
