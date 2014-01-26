<?php namespace Saiffil\Larafuse\Tables;

class ProductInterest extends BaseTable {

	protected $table = 'ProductInterest';
	public static $rules = array(
		'Id' => 'required',
		'ObjectId' => 'required',
		'ObjType' => 'required',
		'ProductId' => 'required',
		'ProductType' => 'required',
		'Qty' => 'required',
		'DiscountPercent' => 'required'
	);
}
