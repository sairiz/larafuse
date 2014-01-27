<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactGroupAssignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ContactGroupAssign', function(Blueprint $table) {
			$table->integer('GroupId');
		});

		$username = Config::get('database.connections.mysql.username');
		$password = Config::get('database.connections.mysql.password');
		$database = Config::get('database.connections.mysql.database');
		
		$con = mysqli_connect("localhost",$username,$password,$database);
		$sql = "ALTER TABLE ContactGroupAssign
				  ADD (	ContactGroup varchar(255),
						DateCreated datetime,
						ContactId int,
						`Contact.Address1Type` varchar(255),
						`Contact.Address2Street1` varchar(255),
						`Contact.Address2Street2` varchar(255),
						`Contact.Address2Type` varchar(255),
						`Contact.Address3Street1` varchar(255),
						`Contact.Address3Street2` varchar(255),
						`Contact.Address3Type` varchar(255),
						`Contact.Anniversary` date,
						`Contact.AssistantName` varchar(255),
						`Contact.AssistantPhone` varchar(255),
						`Contact.BillingInformation` varchar(255),
						`Contact.Birthday` varchar(255),
						`Contact.City` varchar(255),
						`Contact.City2` varchar(255),
						`Contact.City3` varchar(255),
						`Contact.Company` varchar(255),
						`Contact.CompanyID` int,
						`Contact.ContactNotes` varchar(255),
						`Contact.ContactType` varchar(255),
						`Contact.Country` varchar(255),
						`Contact.Country2` varchar(255),
						`Contact.Country3` varchar(255),
						`Contact.CreatedBy` int,
						`Contact.CustomDate1` datetime,
						`Contact.CustomDate2` datetime,
						`Contact.CustomDate3` datetime,
						`Contact.CustomDate4` datetime,
						`Contact.CustomDate5` datetime,
						`Contact.CustomDbl1` double,
						`Contact.CustomDbl2` double,
						`Contact.CustomDbl3` double,
						`Contact.CustomDbl4` double,
						`Contact.CustomDbl5` double,
						`Contact.CustomField1` varchar(255),
						`Contact.CustomField10` varchar(255),
						`Contact.CustomField2` varchar(255),
						`Contact.CustomField3` varchar(255),
						`Contact.CustomField4` varchar(255),
						`Contact.CustomField5` varchar(255),
						`Contact.CustomField6` varchar(255),
						`Contact.CustomField7` varchar(255),
						`Contact.CustomField8` varchar(255),
						`Contact.CustomField9` varchar(255),
						`Contact.DateCreated` datetime,
						`Contact.Email` varchar(255),
						`Contact.EmailAddress2` varchar(255),
						`Contact.EmailAddress3` varchar(255),
						`Contact.Fax1` varchar(255),
						`Contact.Fax1Type` varchar(255),
						`Contact.Fax2` varchar(255),
						`Contact.Fax2Type` varchar(255),
						`Contact.FirstName` varchar(255),
						`Contact.Groups` varchar(255),
						`Contact.HTMLSignature` varchar(255),
						`Contact.Id` int,
						`Contact.JobTitle` varchar(255),
						`Contact.LastName` varchar(255),
						`Contact.LastUpdated` varchar(255),
						`Contact.LastUpdatedBy` varchar(255),
						`Contact.Leadsource` varchar(255),
						`Contact.MiddleName` varchar(255),
						`Contact.Nickname` varchar(255),
						`Contact.OwnerID` int,
						`Contact.Phone1` varchar(255),
						`Contact.Phone1Ext` varchar(255),
						`Contact.Phone1Type` varchar(255),
						`Contact.Phone2` varchar(255),
						`Contact.Phone2Ext` varchar(255),
						`Contact.Phone2Type` varchar(255),
						`Contact.Phone3` varchar(255),
						`Contact.Phone3Ext` varchar(255),
						`Contact.Phone3Type` varchar(255),
						`Contact.Phone4` varchar(255),
						`Contact.Phone4Ext` varchar(255),
						`Contact.Phone4Type` varchar(255),
						`Contact.Phone5` varchar(255),
						`Contact.Phone5Ext` varchar(255),
						`Contact.Phone5Type` varchar(255),
						`Contact.PostalCode` varchar(255),
						`Contact.PostalCode2` varchar(255),
						`Contact.PostalCode3` varchar(255),
						`Contact.ReferralCode` varchar(255),
						`Contact.Signature` varchar(255),
						`Contact.SpouseName` varchar(255),
						`Contact.State` varchar(255),
						`Contact.State2` varchar(255),
						`Contact.State3` varchar(255),
						`Contact.StreetAddress1` varchar(255),
						`Contact.StreetAddress2` varchar(255),
						`Contact.Suffix` varchar(255),
						`Contact.Title` varchar(255),
						`Contact.Website` varchar(255),
						`Contact.ZipFour1` varchar(255),
						`Contact.ZipFour2` varchar(255),
						`Contact.ZipFour3` varchar(255)
					);";
		mysqli_query($con,$sql);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ContactGroupAssign');
	}

}
