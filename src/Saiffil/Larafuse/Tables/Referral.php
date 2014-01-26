<?php namespace Saiffil\Larafuse\Tables;

class Referral extends BaseTable {

	protected $table = 'Referral';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'AffiliateId' => 'required',
		'DateSet' => 'required',
		'DateExpires' => 'required',
		'IPAddress' => 'required',
		'Source' => 'required',
		'Info' => 'required',
		'Type' => 'required',
		'_CurrentTotalProductsSold' => 'required',
		'_CurrentLumiGlow0' => 'required',
		'_CurrentXSotikaCoffee' => 'required',
		'_CurrentRedYeastCoffee' => 'required',
		'_TotalProductsSold' => 'required',
		'_LumiGlow' => 'required',
		'_XSotikaCoffee' => 'required',
		'_RedYeastCoffee' => 'required',
		'_CurrentMTouchMembership' => 'required',
		'_MTouchMembership' => 'required',
		'_CurrentXSotikaCoffeeTrial0' => 'required',
		'_XSotikaCoffeeTrial0' => 'required'
	);
}
