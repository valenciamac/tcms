<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeparationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('separation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('days_work');
			$table->float('amtpay');
			$table->string('reason');
			$table->string('firstN');
			$table->string('middleN');
			$table->string('lastN');
			$table->DATE('sepdate');
			$table->integer('employee_id')->unsigned();
			$table->timestamps();
			$table->foreign('employee_id')->references('id')->on('employ')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('separation');
	}

}
