<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepSalaryWeeklyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repSalaryWeekly', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('weeklyJanuary');
			$table->double('weeklyFebruary');
			$table->double('weeklyMarch');
			$table->double('weeklyApril');
			$table->double('weeklyMay');
			$table->double('weeklyJune');
			$table->double('weeklyJuly');
			$table->double('weeklyAugust');
			$table->double('weeklySeptember');
			$table->double('weeklyOctober');
			$table->double('weeklyNovember');
			$table->double('weeklyDecember');
			$table->double('weeklyTotal');
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
		Schema::drop('repSalaryweekly');
	}

}
