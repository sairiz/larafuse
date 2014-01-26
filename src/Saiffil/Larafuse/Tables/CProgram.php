<?php namespace Saiffil\Larafuse\Tables;

class CProgram extends BaseTable {

	protected $table = 'CProgram';
	public static $rules = array(
		'Id' => 'required',
		'ProgramName' => 'required',
		'DefaultPrice' => 'required',
		'DefaultCycle' => 'required',
		'DefaultFrequency' => 'required',
		'Sku' => 'required',
		'ShortDescription' => 'required',
		'BillingType' => 'required',
		'Description' => 'required',
		'HideInStore' => 'required',
		'Status' => 'required',
		'Active' => 'required',
		'LargeImage' => 'required',
		'Taxable' => 'required',
		'Family' => 'required',
		'ProductId' => 'required'
	);
}
