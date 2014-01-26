<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductOptValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProductOptValue', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ProductOptionId');
			$table->string('Label');
			$table->string('Sku');
			$table->integer('IsDefault');
			$table->string('Name');
			$table->integer('OptionIndex');
			$table->double('PriceAdjustment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProductOptValue');
	}

}
