<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Stage', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('StageName');
			$table->integer('StageOrder');
			$table->integer('TargetNumDays');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Stage');
	}

}
