<?php namespace Saiffil\Larafuse\Tables;

class ProductOptValue extends BaseTable {

	protected $table = 'ProductOptValue';
	public static $rules = array(
		'Id' => 'required',
		'ProductOptionId' => 'required',
		'Label' => 'required',
		'Sku' => 'required',
		'IsDefault' => 'required',
		'Name' => 'required',
		'OptionIndex' => 'required',
		'PriceAdjustment' => 'required'
	);
}
