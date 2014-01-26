<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ContactGroup', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('GroupName');
			$table->integer('GroupCategoryId');
			$table->string('GroupDescription');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ContactGroup');
	}

}
