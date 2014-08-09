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
			$table->double('monthlyJanuary');
			$table->double('monthlyFebruary');
			$table->double('monthlyMarch');
			$table->double('monthlyApril');
			$table->double('monthlyMay');
			$table->double('monthlyJune');
			$table->double('monthlyJuly');
			$table->double('monthlyAugust');
			$table->double('monthlySeptember');
			$table->double('monthlyOctober');
			$table->double('monthlyNovember');
			$table->double('monthlyDecember');
			$table->double('monthlyTotal');
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
