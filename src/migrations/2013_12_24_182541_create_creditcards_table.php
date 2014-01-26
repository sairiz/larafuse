<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CreditCard', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->string('BillName');
			$table->string('FirstName');
			$table->string('LastName');
			$table->string('PhoneNumber');
			$table->string('Email');
			$table->string('BillAddress1');
			$table->string('BillAddress2');
			$table->string('BillCity');
			$table->string('BillState');
			$table->string('BillZip');
			$table->string('BillCountry');
			$table->string('ShipFirstName');
			$table->string('ShipMiddleName');
			$table->string('ShipLastName');
			$table->string('ShipCompanyName');
			$table->string('ShipPhoneNumber');
			$table->string('ShipAddress1');
			$table->string('ShipAddress2');
			$table->string('ShipCity');
			$table->string('ShipState');
			$table->string('ShipZip');
			$table->string('ShipCountry');
			$table->string('ShipName');
			$table->string('NameOnCard');
			// $table->string('CardNumber'); Add only
			$table->string('Last4');
			$table->string('ExpirationMonth');
			$table->string('ExpirationYear');
			$table->string('CVV2');
			$table->integer('Status');
			$table->string('CardType');
			$table->string('StartDateMonth');
			$table->string('StartDateYear');
			$table->string('MaestroIssueNumber');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CreditCard');
	}

}
