<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Contact', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('Address1Type',10);
			$table->string('Address2Street1',100);
			$table->string('Address2Street2',100);
			$table->string('Address2Type',10);
			$table->string('Address3Street1',100);
			$table->string('Address3Street2',100);
			$table->string('Address3Type',10);
			$table->date('Anniversary');
			$table->string('AssistantName',50);
			$table->string('AssistantPhone',20);
			$table->string('BillingInformation');
			$table->date('Birthday');
			$table->string('City',20);
			$table->string('City2',20);
			$table->string('City3',20);
			$table->string('Company',50);
			$table->smallInteger('AccountId')->unsigned();
			$table->smallInteger('CompanyID')->unsigned();
			$table->string('ContactNotes');
			$table->string('ContactType',20);
			$table->string('Country',20);
			$table->string('Country2',20);
			$table->string('Country3',20);
			$table->smallInteger('CreatedBy');
			$table->dateTime('DateCreated');
			$table->string('Email',50)->index();
			$table->string('EmailAddress2',50);
			$table->string('EmailAddress3',50);
			$table->string('Fax1',20);
			$table->string('Fax1Type',20);
			$table->string('Fax2',20);
			$table->string('Fax2Type',20);
			$table->string('FirstName')->index();
			$table->string('Groups');
			$table->string('JobTitle',20);
			$table->string('LastName',50);
			$table->dateTime('LastUpdated');
			$table->smallInteger('LastUpdatedBy');
			$table->string('Leadsource',20);
			$table->smallInteger('LeadSourceId')->unsigned();
			$table->string('MiddleName',50);
			$table->string('Nickname',50);
			$table->smallInteger('OwnerID')->unsigned();
			$table->string('Password',50);
			$table->string('Phone1')->index();
			$table->string('Phone1Ext',20);
			$table->string('Phone1Type',20);
			$table->string('Phone2',20);
			$table->string('Phone2Ext',20);
			$table->string('Phone2Type',20);
			$table->string('Phone3',20);
			$table->string('Phone3Ext',20);
			$table->string('Phone3Type',20);
			$table->string('Phone4',20);
			$table->string('Phone4Ext',20);
			$table->string('Phone4Type',20);
			$table->string('Phone5',20);
			$table->string('Phone5Ext',20);
			$table->string('Phone5Type',20);
			$table->string('PostalCode',10);
			$table->string('PostalCode2',10);
			$table->string('PostalCode3',10);
			$table->string('ReferralCode',20);
			$table->string('SpouseName',50);
			$table->string('State',20);
			$table->string('State2',20);
			$table->string('State3',20);
			$table->string('StreetAddress1',100);
			$table->string('StreetAddress2',100);
			$table->string('Suffix',20);
			$table->string('Title',20);
			$table->string('Username',20);
			$table->string('Validated',20);
			$table->string('Website',50);
			$table->string('ZipFour1',10);
			$table->string('ZipFour2',10);
			$table->string('ZipFour3',10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Contact');
	}

}
