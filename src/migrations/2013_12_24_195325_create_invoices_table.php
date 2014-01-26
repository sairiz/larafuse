<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Invoice', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->integer('JobId');
			$table->dateTime('DateCreated');
			$table->double('InvoiceTotal');
			$table->double('TotalPaid');
			$table->double('TotalDue');
			$table->integer('PayStatus');
			$table->integer('CreditStatus');
			$table->integer('RefundStatus');
			$table->integer('PayPlanStatus');
			$table->integer('AffiliateId');
			$table->integer('LeadAffiliateId');
			$table->string('PromoCode');
			$table->string('InvoiceType');
			$table->string('Description');
			$table->string('ProductSold');
			$table->integer('Synced');
			$table->dateTime('LastUpdated');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Invoice');
	}

}
