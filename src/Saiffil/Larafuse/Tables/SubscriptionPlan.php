<?php namespace Saiffil\Larafuse\Tables;

class SubscriptionPlan extends BaseTable {

	protected $table = 'SubscriptionPlan';
	public static $rules = array(
		'Id' => 'required',
		'ProductId' => 'required',
		'Cycle' => 'required',
		'Frequency' => 'required',
		'PreAuthorizeAmount' => 'required',
		'Prorate' => 'required',
		'Active' => 'required',
		'PlanPrice' => 'required'
	);
}
