<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductInterestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProductInterest', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ObjectId');
			$table->string('ObjType');
			$table->integer('ProductId');
			$table->string('ProductType');
			$table->integer('Qty');
			$table->integer('DiscountPercent');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProductInterest');
	}

}
