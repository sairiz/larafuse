<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Job', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('JobTitle');
			$table->integer('ContactId');
			$table->date('StartDate');
			$table->date('DueDate');
			$table->string('JobNotes');
			$table->integer('ProductId');
			$table->string('JobStatus');
			$table->dateTime('DateCreated');
			$table->dateTime('LastUpdated');
			$table->integer('JobRecurringId');
			$table->string('OrderType');
			$table->integer('OrderStatus');
			$table->string('ShipFirstName');
			$table->string('ShipMiddleName');
			$table->string('ShipLastName');
			$table->string('ShipCompany');
			$table->string('ShipPhone');
			$table->string('ShipStreet1');
			$table->string('ShipStreet2');
			$table->string('ShipCity');
			$table->string('ShipState');
			$table->string('ShipZip');
			$table->string('ShipCountry');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Job');
	}

}
