<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('department');
			$table->DATE('paydate');
			$table->string('position');
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
			$table->string('rate');
			$table->string('days');
			$table->float('basic');
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
		Schema::drop('employee');
	}

}
