<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecurringOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RecurringOrder', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->integer('OriginatingOrderId');
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
			$table->integer('ShippingOptionId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RecurringOrder');
	}

}
