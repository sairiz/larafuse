<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionSequencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ActionSequence', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('TemplateName');
			$table->string('VisibleToTheseUsers');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ActionSequence');
	}

}
