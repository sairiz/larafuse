<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Company', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('Address1Type');
			$table->string('Address2Street1');
			$table->string('Address2Street2');
			$table->string('Address2Type');
			$table->string('Address3Street1');
			$table->string('Address3Street2');
			$table->string('Address3Type');
			$table->date('Anniversary');
			$table->string('AssistantName');
			$table->string('AssistantPhone');
			$table->string('BillingInformation');
			$table->date('Birthday');
			$table->string('City');
			$table->string('City2');
			$table->string('City3');
			$table->string('Company');
			$table->integer('AccountId');
			$table->integer('CompanyID');
			$table->string('ContactNotes');
			$table->string('ContactType');
			$table->string('Country');
			$table->string('Country2');
			$table->string('Country3');
			$table->integer('CreatedBy');
			$table->dateTime('DateCreated');
			$table->string('Email');
			$table->string('EmailAddress2');
			$table->string('EmailAddress3');
			$table->string('Fax1');
			$table->string('Fax1Type');
			$table->string('Fax2');
			$table->string('Fax2Type');
			$table->string('FirstName');
			$table->string('Groups');
			$table->string('JobTitle');
			$table->string('LastName');
			$table->dateTime('LastUpdated');
			$table->integer('LastUpdatedBy');
			$table->string('MiddleName');
			$table->string('Nickname');
			$table->integer('OwnerID');
			$table->string('Password');
			$table->string('Phone1');
			$table->string('Phone1Ext');
			$table->string('Phone1Type');
			$table->string('Phone2');
			$table->string('Phone2Ext');
			$table->string('Phone2Type');
			$table->string('Phone3');
			$table->string('Phone3Ext');
			$table->string('Phone3Type');
			$table->string('Phone4');
			$table->string('Phone4Ext');
			$table->string('Phone4Type');
			$table->string('Phone5');
			$table->string('Phone5Ext');
			$table->string('Phone5Type');
			$table->string('PostalCode');
			$table->string('PostalCode2');
			$table->string('PostalCode3');
			$table->string('ReferralCode');
			$table->string('SpouseName');
			$table->string('State');
			$table->string('State2');
			$table->string('State3');
			$table->string('StreetAddress1');
			$table->string('StreetAddress2');
			$table->string('Suffix');
			$table->string('Title');
			$table->string('Username');
			$table->string('Validated');
			$table->string('Website');
			$table->string('ZipFour1');
			$table->string('ZipFour2');
			$table->string('ZipFour3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Company');
	}

}
