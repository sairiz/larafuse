<?php namespace Saiffil\Larafuse\Tables;

class ProductOption extends BaseTable {

	protected $table = 'ProductOption';
	public static $rules = array(
		'Id' => 'required',
		'ProductId' => 'required',
		'Label' => 'required',
		'IsRequired' => 'required',
		'Order' => 'required',
		'Name' => 'required',
		'MaxChars' => 'required',
		'CanEndWith' => 'required',
		'MinChars' => 'required',
		'AllowSpaces' => 'required',
		'TextMessage' => 'required',
		'OptionType' => 'required',
		'CanContain' => 'required',
		'CanStartWith' => 'required'
	);
}
