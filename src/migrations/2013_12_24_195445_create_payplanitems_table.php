<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayPlanItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PayPlanItem', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('PayPlanId');
			$table->date('DateDue');
			$table->double('AmtDue');
			$table->integer('Status');
			$table->double('AmtPaid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PayPlanItem');
	}

}
