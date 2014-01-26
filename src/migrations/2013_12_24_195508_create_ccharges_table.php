<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCChargesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CCharge', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('CCId');
			$table->string('PaymentId');
			$table->string('MerchantId');
			$table->string('OrderNum');
			$table->string('RefNum');
			$table->string('ApprCode');
			$table->double('Amt');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CCharge');
	}

}
