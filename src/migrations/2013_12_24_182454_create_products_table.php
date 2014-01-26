<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Product', function(Blueprint $table) {
			$table->integer('Id')->primary();
			$table->string('ProductName');
			$table->double('ProductPrice');
			$table->string('Sku');
			$table->string('ShortDescription');
			$table->integer('Taxable');
			$table->integer('CountryTaxable');
			$table->integer('StateTaxable');
			$table->integer('CityTaxable');
			$table->double('Weight');
			$table->integer('IsPackage');
			$table->integer('NeedsDigitalDelivery');
			$table->string('Description');
			$table->integer('HideInStore');
			$table->integer('Status');
			$table->string('TopHTML');
			$table->string('BottomHTML');
			$table->string('ShippingTime');
			$table->binary('LargeImage');
			$table->string('InventoryNotifiee');
			$table->integer('InventoryLimit');
			$table->integer('Shippable');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Product');
	}

}
