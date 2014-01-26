<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecurringOrderWithContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RecurringOrderWithContact', function(Blueprint $table) {
			$table->integer('RecurringOrderId');
			$table->integer('ContactId');
			$table->integer('ProgramId');
			$table->integer('SubscriptionPlanId');
			$table->integer('ProductId');
			$table->date('StartDate');
			$table->date('EndDate');
			$table->date('LastBillDate');
			$table->date('NextBillDate');
			$table->date('PaidThruDate');
			$table->string('BillingCycle');
			$table->integer('Frequency');
			$table->double('BillingAmt');
			$table->string('Status');
			$table->string('ReasonStopped');
			$table->integer('AutoCharge');
			$table->integer('CC1');
			$table->integer('CC2');
			$table->integer('NumDaysBetweenRetry');
			$table->integer('MaxRetry');
			$table->integer('MerchantAccountId');
			$table->integer('AffiliateId');
			$table->string('PromoCode');
			$table->integer('LeadAffiliateId');
			$table->integer('Qty');
			$table->string('City');
			$table->string('Email');
			$table->string('EmailAddress2');
			$table->string('EmailAddress3');
			$table->string('FirstName');
			$table->string('HTMLSignature');
			$table->string('LastName');
			$table->string('MiddleName');
			$table->string('Nickname');
			$table->string('Phone1');
			$table->string('Phone1Ext');
			$table->string('Phone1Type');
			$table->string('Phone2');
			$table->string('Phone2Ext');
			$table->string('Phone2Type');
			$table->string('PostalCode');
			$table->string('Signature');
			$table->string('SpouseName');
			$table->string('State');
			$table->string('Country');
			$table->string('StreetAddress1');
			$table->string('StreetAddress2');
			$table->string('Suffix');
			$table->string('Title');
			$table->string('ZipFour1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RecurringOrderWithContact');
	}

}
