<?php namespace Saiffil\Larafuse\Tables;

class RecurringOrder extends BaseTable {

	protected $table = 'RecurringOrder';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'OriginatingOrderId' => 'required',
		'ProgramId' => 'required',
		'SubscriptionPlanId' => 'required',
		'ProductId' => 'required',
		'StartDate' => 'required',
		'EndDate' => 'required',
		'LastBillDate' => 'required',
		'NextBillDate' => 'required',
		'PaidThruDate' => 'required',
		'BillingCycle' => 'required',
		'Frequency' => 'required',
		'BillingAmt' => 'required',
		'Status' => 'required',
		'ReasonStopped' => 'required',
		'AutoCharge' => 'required',
		'CC1' => 'required',
		'CC2' => 'required',
		'NumDaysBetweenRetry' => 'required',
		'MaxRetry' => 'required',
		'MerchantAccountId' => 'required',
		'AffiliateId' => 'required',
		'PromoCode' => 'required',
		'LeadAffiliateId' => 'required',
		'Qty' => 'required',
		'ShippingOptionId' => 'required'
	);
}
