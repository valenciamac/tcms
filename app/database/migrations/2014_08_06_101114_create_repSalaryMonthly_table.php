<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepSalaryMonthlyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repSalaryMonthly', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('monthlyJanuary');
			$table->string('monthlyFebruary');
			$table->string('monthlyMarch');
			$table->string('monthlyApril');
			$table->string('monthlyMay');
			$table->string('monthlyJune');
			$table->string('monthlyJuly');
			$table->string('monthlyAugust');
			$table->string('monthlySeptember');
			$table->string('monthlyOctober');
			$table->string('monthlyNovember');
			$table->string('monthlyDecember');
			$table->string('monthlyTotal');
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
		Schema::drop('repSalaryMonthly');
	}

}
