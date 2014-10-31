<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagibigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagibig', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('pagibigmin');
			$table->float('pagibigmax');
			$table->float('employeeshare');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagibig');
	}

}
