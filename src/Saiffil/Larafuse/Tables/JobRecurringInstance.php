<?php namespace Saiffil\Larafuse\Tables;

class JobRecurringInstance extends BaseTable {

	protected $table = 'JobRecurringInstance';
	public static $rules = array(
		'Id' => 'required',
		'RecurringId' => 'required',
		'InvoiceItemId' => 'required',
		'Status' => 'required',
		'AutoCharge' => 'required',
		'StartDate' => 'required',
		'EndDate' => 'required',
		'DateCreated' => 'required',
		'Description' => 'required'
	);
}
