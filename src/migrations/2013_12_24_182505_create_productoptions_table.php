<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProductOption', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ProductId');
			$table->string('Label');
			$table->integer('IsRequired');
			$table->integer('Order');
			$table->string('Name');
			$table->integer('MaxChars');
			$table->integer('CanEndWith');
			$table->integer('MinChars');
			$table->integer('AllowSpaces');
			$table->integer('TextMessage');
			$table->enum('OptionType',array());
			$table->string('CanContain');
			$table->string('CanStartWith');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProductOption');
	}

}
