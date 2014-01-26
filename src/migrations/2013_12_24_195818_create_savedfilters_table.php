<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSavedFiltersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SavedFilter', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('FilterName');
			$table->string('ReportStoredName');
			$table->integer('UserId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('SavedFilter');
	}

}
