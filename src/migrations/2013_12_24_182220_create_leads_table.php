<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Lead', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('OpportunityTitle');
			$table->integer('ContactID');
			$table->integer('AffiliateId');
			$table->integer('UserID');
			$table->integer('StageID');
			$table->integer('StatusID');
			$table->string('Leadsource');
			$table->string('Objection');
			$table->double('ProjectedRevenueLow');
			$table->double('ProjectedRevenueHigh');
			$table->string('OpportunityNotes');
			$table->dateTime('DateCreated');
			$table->dateTime('LastUpdated');
			$table->integer('LastUpdatedBy');
			$table->integer('CreatedBy');
			$table->dateTime('EstimatedCloseDate');
			$table->dateTime('NextActionDate');
			$table->string('NextActionNotes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Lead');
	}

}
