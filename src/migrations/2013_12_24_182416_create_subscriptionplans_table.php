<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SubscriptionPlan', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('ProductId');
			$table->string('Cycle');
			$table->integer('Frequency');
			$table->double('PreAuthorizeAmount');
			$table->boolean('Prorate');
			$table->boolean('Active');
			$table->double('PlanPrice');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('SubscriptionPlan');
	}

}
