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
			$table->string('position');
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
			$table->string('rate');
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
