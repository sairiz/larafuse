<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ContactAction', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->integer('OpportunityId');
			$table->string('ActionType');
			$table->string('ActionDescription');
			$table->dateTime('CreationDate');
			$table->string('CreationNotes');
			$table->dateTime('CompletionDate');
			$table->dateTime('ActionDate');
			$table->dateTime('EndDate');
			$table->dateTime('PopupDate');
			$table->integer('UserID');
			$table->integer('Accepted');
			$table->integer('CreatedBy');
			$table->dateTime('LastUpdated');
			$table->integer('LastUpdatedBy');
			$table->integer('Priority');
			$table->integer('IsAppointment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ContactAction');
	}

}
