<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaigneesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Campaignee', function(Blueprint $table) {
			$table->integer('Id')->primary(); // Not in documentation
			$table->integer('CampaignId');
			$table->enum('Status',array());
			$table->string('Campaign');
			$table->integer('ContactId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Campaignee');
	}

}
