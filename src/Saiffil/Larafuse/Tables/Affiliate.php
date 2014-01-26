<?php namespace Saiffil\Larafuse\Tables;

class Affiliate extends BaseTable {

	protected $table = 'Affiliate';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'ParentId' => 'required',
		'LeadAmt' => 'required',
		'LeadPercent' => 'required',
		'SaleAmt' => 'required',
		'SalePercent' => 'required',
		'PayoutType' => 'required',
		'DefCommissionType' => 'required',
		'Status' => 'required',
		'AffName' => 'required',
		'Password' => 'required',
		'AffCode' => 'required',
		'NotifyLead' => 'required',
		'NotifySale' => 'required',
		'LeadCookieFor' => 'required'
	);
}
