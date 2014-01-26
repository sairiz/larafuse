<?php namespace Saiffil\Larafuse\Tables;

class PayPlanItem extends BaseTable {

	protected $table = 'PayPlanItem';
	public static $rules = array(
		'Id' => 'required',
		'PayPlanId' => 'required',
		'DateDue' => 'required',
		'AmtDue' => 'required',
		'Status' => 'required',
		'AmtPaid' => 'required'
	);
}
