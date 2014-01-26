<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InvoicePayment', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('InvoiceId');
			$table->double('Amt');
			$table->date('PayDate');
			$table->string('PayStatus');
			$table->integer('PaymentId');
			$table->integer('SkipCommission');
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
		Schema::drop('InvoicePayment');
	}

}
