<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('User', function(Blueprint $table) {
			$table->integer('Id')->primary();;
			$table->string('City');
			$table->string('Email');
			$table->string('EmailAddress2');
			$table->string('EmailAddress3');
			$table->string('FirstName');
			$table->string('HTMLSignature');
			$table->string('LastName');
			$table->string('MiddleName');
			$table->string('Nickname');
			$table->string('Phone1');
			$table->string('Phone1Ext');
			$table->string('Phone1Type');
			$table->string('Phone2');
			$table->string('Phone2Ext');
			$table->string('Phone2Type');
			$table->string('PostalCode');
			$table->string('Signature');
			$table->string('SpouseName');
			$table->string('State');
			$table->string('StreetAddress1');
			$table->string('StreetAddress2');
			$table->string('Suffix');
			$table->string('Title');
			$table->string('ZipFour1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('User');
	}

}
