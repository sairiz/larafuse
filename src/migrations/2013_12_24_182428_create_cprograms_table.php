<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CProgram', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('ProgramName');
			$table->double('DefaultPrice');
			$table->string('DefaultCycle');
			$table->integer('DefaultFrequency');
			$table->string('Sku');
			$table->string('ShortDescription');
			$table->string('BillingType');
			$table->string('Description');
			$table->integer('HideInStore');
			$table->integer('Status');
			$table->boolean('Active');
			$table->binary('LargeImage');
			$table->integer('Taxable');
			$table->string('Family');
			$table->integer('ProductId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CProgram');
	}

}
