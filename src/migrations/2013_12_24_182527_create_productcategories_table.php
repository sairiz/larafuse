<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProductCategory', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('CategoryDisplayName');
			$table->binary('CategoryImage');
			$table->integer('CategoryOrder');
			$table->integer('ParentId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProductCategory');
	}

}
