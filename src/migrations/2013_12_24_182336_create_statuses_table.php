<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Status', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('StatusName');
			$table->string('StatusOrder');
			$table->string('TargetNumDays');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Status');
	}

}
