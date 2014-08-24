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
			$table->string('weeklyJanuary');
			$table->string('weeklyFebruary');
			$table->string('weeklyMarch');
			$table->string('weeklyApril');
			$table->string('weeklyMay');
			$table->string('weeklyJune');
			$table->string('weeklyJuly');
			$table->string('weeklyAugust');
			$table->string('weeklySeptember');
			$table->string('weeklyOctober');
			$table->string('weeklyNovember');
			$table->string('weeklyDecember');
			$table->string('weeklyTotal');
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
