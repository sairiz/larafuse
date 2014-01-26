<?php namespace Saiffil\Larafuse\Tables;

class Contact extends BaseTable {

	protected $table = 'Contact';

	protected $fillable = ["Address1Type","Address2Street1","Address2Street2","Address2Type","Address3Street1","Address3Street2","Address3Type",
	"Anniversary","AssistantName","AssistantPhone","BillingInformation","Birthday","City","City2","City3","Company","AccountId","CompanyID",
	"ContactNotes","ContactType","Country","Country2","Country3","CreatedBy","DateCreated","Email","EmailAddress2","EmailAddress3","Fax1",
	"Fax1Type","Fax2","Fax2Type","FirstName","Groups","Id","JobTitle","LastName","LastUpdated","LastUpdatedBy","Leadsource","LeadSourceId",
	"MiddleName","Nickname","OwnerID","Password","Phone1","Phone1Ext","Phone1Type","Phone2","Phone2Ext","Phone2Type","Phone3","Phone3Ext",
	"Phone3Type","Phone4","Phone4Ext","Phone4Type","Phone5","Phone5Ext","Phone5Type","PostalCode","PostalCode2","PostalCode3","ReferralCode",
	"SpouseName","State","State2","State3","StreetAddress1","StreetAddress2","Suffix","Title","Username","Validated","Website","ZipFour1","ZipFour2",
	"ZipFour3","_IdentityCard","_Gender"];

	public static $rules = array( /*
		'Id' => 'required',
		'Address1Type' => 'required',
		'Address2Street1' => 'required',
		'Address2Street2' => 'required',
		'Address2Type' => 'required',
		'Address3Street1' => 'required',
		'Address3Street2' => 'required',
		'Address3Type' => 'required',
		'Anniversary' => 'required',
		'AssistantName' => 'required',
		'AssistantPhone' => 'required',
		'BillingInformation' => 'required',
		'Birthday' => 'required',
		'City' => 'required',
		'City2' => 'required',
		'City3' => 'required',
		'Company' => 'required',
		'AccountId' => 'required',
		'CompanyID' => 'required',
		'ContactNotes' => 'required',
		'ContactType' => 'required',
		'Country' => 'required',
		'Country2' => 'required',
		'Country3' => 'required',
		'CreatedBy' => 'required',
		'DateCreated' => 'required',
		'Email' => 'required',
		'EmailAddress2' => 'required',
		'EmailAddress3' => 'required',
		'Fax1' => 'required',
		'Fax1Type' => 'required',
		'Fax2' => 'required',
		'Fax2Type' => 'required',
		'FirstName' => 'required',
		'Groups' => 'required',
		'JobTitle' => 'required',
		'LastName' => 'required',
		'LastUpdated' => 'required',
		'LastUpdatedBy' => 'required',
		'Leadsource' => 'required',
		'LeadSourceId' => 'required',
		'MiddleName' => 'required',
		'Nickname' => 'required',
		'OwnerID' => 'required',
		'Password' => 'required',
		'Phone1' => 'required',
		'Phone1Ext' => 'required',
		'Phone1Type' => 'required',
		'Phone2' => 'required',
		'Phone2Ext' => 'required',
		'Phone2Type' => 'required',
		'Phone3' => 'required',
		'Phone3Ext' => 'required',
		'Phone3Type' => 'required',
		'Phone4' => 'required',
		'Phone4Ext' => 'required',
		'Phone4Type' => 'required',
		'Phone5' => 'required',
		'Phone5Ext' => 'required',
		'Phone5Type' => 'required',
		'PostalCode' => 'required',
		'PostalCode2' => 'required',
		'PostalCode3' => 'required',
		'ReferralCode' => 'required',
		'SpouseName' => 'required',
		'State' => 'required',
		'State2' => 'required',
		'State3' => 'required',
		'StreetAddress1' => 'required',
		'StreetAddress2' => 'required',
		'Suffix' => 'required',
		'Title' => 'required',
		'Username' => 'required',
		'Validated' => 'required',
		'Website' => 'required',
		'ZipFour1' => 'required',
		'ZipFour2' => 'required',
		'ZipFour3' => 'required',
		'_Gender' => 'required',
		'_IdentityCard0' => 'required',
		'_Password0' => 'required',
		'_LastLogin' => 'required',
		'_Race' => 'required',
		'_Religion' => 'required',
		'_FacebookType' => 'required',
		'_Facebook' => 'required',
		'_SkypeID' => 'required',
		'_YahooID' => 'required',
		'_Bank0' => 'required',
		'_AccountHolder' => 'required',
		'_AccountNumber' => 'required',
		'_MSNID' => 'required',
		'_LinkedIn' => 'required',
		'_Google' => 'required',
		'_Twitter' => 'required',
		'_TrackingNo' => 'required',
		'_OrderID1' => 'required',
		'_OrderID2' => 'required',
		'_Company0' => 'required' */
	);
}