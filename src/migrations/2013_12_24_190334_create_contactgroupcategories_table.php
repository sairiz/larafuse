<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactGroupCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ContactGroupCategory', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('CategoryName');
			$table->string('CategoryDescription');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ContactGroupCategory');
	}

}
