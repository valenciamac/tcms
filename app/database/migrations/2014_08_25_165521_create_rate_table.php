<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rate', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('otpayrate');
			$table->float('otrestnspecholdrate');
			$table->float('otrestspecholdrate');
			$table->float('otregholdrate');
			$table->float('otrestonreghold');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rate');
	}

}
