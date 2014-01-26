<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('AffResource', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('Title');
			$table->string('ResourceType');
			$table->string('ResourceOrder');
			$table->string('ResourceHTML');
			$table->string('ResourceHREF');
			$table->string('Notes');
			$table->string('ProgramIds');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('AffResource');
	}

}
