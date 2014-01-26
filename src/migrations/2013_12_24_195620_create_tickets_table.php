<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ticket', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('IssueId');
			$table->integer('ContactId');
			$table->integer('UserId');
			$table->integer('DevId');
			$table->string('TicketTitle');
			$table->string('TicketApplication');
			$table->integer('TicketCategory');
			$table->integer('TicketTypeId');
			$table->string('Summary');
			$table->integer('Stage');
			$table->integer('Priority');
			$table->integer('Ordering');
			$table->dateTime('DateCreated');
			$table->integer('CreatedBy');
			$table->dateTime('LastUpdated');
			$table->integer('LastUpdatedBy');
			$table->date('CloseDate');
			$table->date('FolowUpDate');
			$table->date('TargetCompletionDate');
			$table->date('DateInStage');
			$table->double('TimeSpent');
			$table->integer('HasCustomerCalled');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Ticket');
	}

}
