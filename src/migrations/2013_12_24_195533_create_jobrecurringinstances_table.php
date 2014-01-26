<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobRecurringInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('JobRecurringInstance', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('RecurringId');
			$table->integer('InvoiceItemId');
			$table->integer('Status');
			$table->integer('AutoCharge');
			$table->date('StartDate');
			$table->date('EndDate');
			$table->dateTime('DateCreated');
			$table->string('Description');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('JobRecurringInstance');
	}

}
