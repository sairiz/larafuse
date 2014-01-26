<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataFormFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DataFormField', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('DataType');
			$table->integer('FormId');
			$table->integer('GroupId');
			$table->string('Name');
			$table->string('Label');
			$table->string('DefaultValue');
			$table->string('Values');
			$table->integer('ListRows');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DataFormField');
	}

}
