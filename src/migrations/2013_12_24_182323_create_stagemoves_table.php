<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStagemovesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('StageMove', function(Blueprint $table) {
			$table->bigInteger('Id')->primary();
			$table->bigInteger('OpportunityId');
			$table->dateTime('MoveDate');
			$table->bigInteger('MoveToStage');
			$table->bigInteger('MoveFromStage');
			$table->dateTime('PrevStageMoveDate');
			$table->bigInteger('CreatedBy');
			$table->dateTime('DateCreated');
			$table->bigInteger('UserId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('StageMove');
	}

}
