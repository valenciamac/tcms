<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rfp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('controlNo');
			$table->string('payee');
			$table->DATE('requestedDate');
			$table->string('reason');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rfp');
	}

}
