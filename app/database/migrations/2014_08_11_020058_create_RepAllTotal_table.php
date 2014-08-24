<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepAllTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepAllTotal', function(Blueprint $table)
		{
			$table->string('allTJanuary');
			$table->string('allTFebruary');
			$table->string('allTMarch');
			$table->string('allTApril');
			$table->string('allTMay');
			$table->string('allTJune');
			$table->string('allTJuly');
			$table->string('allTAugust');
			$table->string('allTSeptember');
			$table->string('allTOctober');
			$table->string('allTNovember');
			$table->string('allTDecember');
			$table->string('allTTotal');
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
		Schema::drop('RepAllTotal');
	}

}
