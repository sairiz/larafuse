<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CampaignStep', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('CampaignId');
			$table->integer('TemplateId');
			$table->string('StepStatus');
			$table->string('StepTitle');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CampaignStep');
	}

}
