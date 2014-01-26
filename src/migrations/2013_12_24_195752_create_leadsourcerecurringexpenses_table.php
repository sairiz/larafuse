<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadSourceRecurringExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LeadSourceRecurringExpense', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('LeadSourceId');
			$table->string('Title');
			$table->string('Notes');
			$table->double('Amount');
			$table->dateTime('StartDate');
			$table->dateTime('EndDate');
			$table->dateTime('NextExpenseDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('LeadSourceRecurringExpense');
	}

}
