<?php namespace Saiffil\Larafuse\Tables;

class PayPlan extends BaseTable {

	protected $table = 'PayPlan';
	public static $rules = array(
		'Id' => 'required',
		'InvoiceId' => 'required',
		'DateDue' => 'required',
		'AmtDue' => 'required',
		'Type' => 'required',
		'InitDate' => 'required',
		'StartDate' => 'required',
		'FirstPayAmt' => 'required'
	);
}
