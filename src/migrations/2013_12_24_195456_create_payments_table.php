<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Payment', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->date('PayDate');
			$table->integer('UserId');
			$table->double('PayAmt');
			$table->string('PayType');
			$table->integer('ContactId');
			$table->string('PayNote');
			$table->integer('InvoiceId');
			$table->integer('RefundId');
			$table->integer('ChargeId');
			$table->integer('Commission');
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
		Schema::drop('Payment');
	}

}
