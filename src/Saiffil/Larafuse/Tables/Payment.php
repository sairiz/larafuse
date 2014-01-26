<?php namespace Saiffil\Larafuse\Tables;

class Payment extends BaseTable {

	protected $table = 'Payment';
	public static $rules = array(
		'Id' => 'required',
		'PayDate' => 'required',
		'UserId' => 'required',
		'PayAmt' => 'required',
		'PayType' => 'required',
		'ContactId' => 'required',
		'PayNote' => 'required',
		'InvoiceId' => 'required',
		'RefundId' => 'required',
		'ChargeId' => 'required',
		'Commission' => 'required',
		'Synced' => 'required',
		'LastUpdated' => 'required'
	);
}
