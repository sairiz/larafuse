<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffiliatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Affiliate', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ContactId');
			$table->integer('ParentId');
			$table->double('LeadAmt');
			$table->double('LeadPercent');
			$table->double('SaleAmt');
			$table->double('SalePercent');
			$table->integer('PayoutType');
			$table->integer('DefCommissionType');
			$table->integer('Status');
			$table->string('AffName');
			$table->string('Password');
			$table->string('AffCode');
			$table->integer('NotifyLead');
			$table->integer('NotifySale');
			$table->integer('LeadCookieFor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Affiliate');
	}

}
