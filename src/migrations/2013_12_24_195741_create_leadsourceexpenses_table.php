<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadSourceExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LeadSourceExpense', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('LeadSourceRecurringExpenseId');
			$table->integer('LeadSourceId');
			$table->string('Title');
			$table->string('Notes');
			$table->double('Amount');
			$table->dateTime('DateIncurred');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('LeadSourceExpense');
	}

}
