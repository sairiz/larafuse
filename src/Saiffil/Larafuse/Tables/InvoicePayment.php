<?php namespace Saiffil\Larafuse\Tables;

class InvoicePayment extends BaseTable {

	protected $table = 'InvoicePayment';
	public static $rules = array(
		'Id' => 'required',
		'InvoiceId' => 'required',
		'Amt' => 'required',
		'PayDate' => 'required',
		'PayStatus' => 'required',
		'PaymentId' => 'required',
		'SkipCommission' => 'required',
		'LastUpdated' => 'required'
	);
}
