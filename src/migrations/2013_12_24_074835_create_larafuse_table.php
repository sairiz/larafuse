<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLarafuseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Larafuse', function(Blueprint $table) {
			$table->increments('Id');
			$table->string('Fusetable');
			$table->string('Field');
			$table->string('Type');
			$table->string('Access');
			$table->text('Value');
			$table->string('Label');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Larafuse');
	}

}
