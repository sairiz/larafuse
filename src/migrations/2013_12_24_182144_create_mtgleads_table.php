<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMtgLeadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MtgLead', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->dateTime('DateAppraisalOrdered');
			$table->dateTime('DateAppraisalDone');
			$table->dateTime('DateAppraisalReceived');
			$table->dateTime('DateTitleOrdered');
			$table->dateTime('DateTitleReceived');
			$table->dateTime('DateRateLocked');
			$table->dateTime('DateRateLockExpires');
			$table->dateTime('CreditReportDate');
			$table->dateTime('ApplicationDate');
			$table->dateTime('ActualCloseDate');
			$table->dateTime('FundingDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MtgLead');
	}

}
