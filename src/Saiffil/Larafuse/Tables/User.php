<?php namespace Saiffil\Larafuse\Tables;

class User extends BaseTable {

	protected $table = 'User';
	public static $rules = array(
		'Id' => 'required',
		'City' => 'required',
		'Email' => 'required',
		'EmailAddress2' => 'required',
		'EmailAddress3' => 'required',
		'FirstName' => 'required',
		'HTMLSignature' => 'required',
		'LastName' => 'required',
		'MiddleName' => 'required',
		'Nickname' => 'required',
		'Phone1' => 'required',
		'Phone1Ext' => 'required',
		'Phone1Type' => 'required',
		'Phone2' => 'required',
		'Phone2Ext' => 'required',
		'Phone2Type' => 'required',
		'PostalCode' => 'required',
		'Signature' => 'required',
		'SpouseName' => 'required',
		'State' => 'required',
		'StreetAddress1' => 'required',
		'StreetAddress2' => 'required',
		'Suffix' => 'required',
		'Title' => 'required',
		'ZipFour1' => 'required'
	);
}
