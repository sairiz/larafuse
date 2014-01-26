<?php namespace Saiffil\Larafuse\Tables;

class CreditCard extends BaseTable {

	protected $table = 'CreditCard';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'BillName' => 'required',
		'FirstName' => 'required',
		'LastName' => 'required',
		'PhoneNumber' => 'required',
		'Email' => 'required',
		'BillAddress1' => 'required',
		'BillAddress2' => 'required',
		'BillCity' => 'required',
		'BillState' => 'required',
		'BillZip' => 'required',
		'BillCountry' => 'required',
		'ShipFirstName' => 'required',
		'ShipMiddleName' => 'required',
		'ShipLastName' => 'required',
		'ShipCompanyName' => 'required',
		'ShipPhoneNumber' => 'required',
		'ShipAddress1' => 'required',
		'ShipAddress2' => 'required',
		'ShipCity' => 'required',
		'ShipState' => 'required',
		'ShipZip' => 'required',
		'ShipCountry' => 'required',
		'ShipName' => 'required',
		'NameOnCard' => 'required',
		'CardNumber' => 'required',
		'Last4' => 'required',
		'ExpirationMonth' => 'required',
		'ExpirationYear' => 'required',
		'CVV2' => 'required',
		'Status' => 'required',
		'CardType' => 'required',
		'StartDateMonth' => 'required',
		'StartDateYear' => 'required',
		'MaestroIssueNumber' => 'required'
	);
}
