<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PayPlan', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('InvoiceId');
			$table->date('DateDue');
			$table->double('AmtDue');
			$table->integer('Type');
			$table->date('InitDate');
			$table->date('StartDate');
			$table->double('FirstPayAmt');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PayPlan');
	}

}
