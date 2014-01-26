<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadSourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LeadSource', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('Name');
			$table->string('Description');
			$table->date('StartDate');
			$table->date('EndDate');
			$table->string('CostPerLead');
			$table->string('Vendor');
			$table->string('Medium');
			$table->string('Message');
			$table->integer('LeadSourceCategoryId');
			$table->string('Status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('LeadSource');
	}

}
