<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('OrderItem', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('OrderId');
			$table->integer('ProductId');
			$table->integer('SubscriptionPlanId');
			$table->string('ItemName');
			$table->integer('Qty');
			$table->double('CPU');
			$table->double('PPU');
			$table->string('ItemDescription');
			$table->integer('ItemType');
			$table->string('Notes');
			$table->dateTime('LastUpdated');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('OrderItem');
	}

}
