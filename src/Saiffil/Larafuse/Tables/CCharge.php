<?php namespace Saiffil\Larafuse\Tables;

class CCharge extends BaseTable {

	protected $table = 'CCharge';
	public static $rules = array(
		'Id' => 'required',
		'CCId' => 'required',
		'PaymentId' => 'required',
		'MerchantId' => 'required',
		'OrderNum' => 'required',
		'RefNum' => 'required',
		'ApprCode' => 'required',
		'Amt' => 'required'
	);
}
