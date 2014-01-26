<?php namespace Saiffil\Larafuse\Tables;

class Invoice extends BaseTable {

	protected $table = 'Invoice';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'JobId' => 'required',
		'DateCreated' => 'required',
		'InvoiceTotal' => 'required',
		'TotalPaid' => 'required',
		'TotalDue' => 'required',
		'PayStatus' => 'required',
		'CreditStatus' => 'required',
		'RefundStatus' => 'required',
		'PayPlanStatus' => 'required',
		'AffiliateId' => 'required',
		'LeadAffiliateId' => 'required',
		'PromoCode' => 'required',
		'InvoiceType' => 'required',
		'Description' => 'required',
		'ProductSold' => 'required',
		'Synced' => 'required',
		'LastUpdated' => 'required'
	);
}
