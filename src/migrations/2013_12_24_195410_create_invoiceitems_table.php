<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InvoiceItem', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->integer('InvoiceId');
			$table->integer('OrderItemId');
			$table->double('InvoiceAmt');
			$table->double('Discount');
			$table->dateTime('DateCreated');
			$table->string('Description');
			$table->integer('CommissionStatus');
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
		Schema::drop('InvoiceItem');
	}

}
