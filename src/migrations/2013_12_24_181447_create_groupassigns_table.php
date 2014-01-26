<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupAssignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('GroupAssign', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('UserId');
			$table->integer('GroupId');
			$table->integer('Admin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('GroupAssign');
	}

}
