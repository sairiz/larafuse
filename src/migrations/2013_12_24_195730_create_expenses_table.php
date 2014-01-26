<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Expense', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->enum('ExpenseType',array());
			$table->integer('TypeId');
			$table->double('ExpenseAmt');
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
		Schema::drop('Expense');
	}

}
