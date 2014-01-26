<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFileBoxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FileBox', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('FileName');
			$table->string('Extension');
			$table->bigInteger('FileSize');
			$table->integer('ContactId');
			$table->integer('Public');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FileBox');
	}

}
