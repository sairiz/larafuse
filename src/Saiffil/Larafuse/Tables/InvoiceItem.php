<?php namespace Saiffil\Larafuse\Tables;

class InvoiceItem extends BaseTable {

	protected $table = 'InvoiceItem';
	public static $rules = array(
		'Id' => 'required',
		'InvoiceId' => 'required',
		'OrderItemId' => 'required',
		'InvoiceAmt' => 'required',
		'Discount' => 'required',
		'DateCreated' => 'required',
		'Description' => 'required',
		'CommissionStatus' => 'required',
		'LastUpdated' => 'required'
	);
}
