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
			$table->double('allTJanuary');
			$table->double('allTFebruary');
			$table->double('allTMarch');
			$table->double('allTApril');
			$table->double('allTMay');
			$table->double('allTJune');
			$table->double('allTJuly');
			$table->double('allTAugust');
			$table->double('allTSeptember');
			$table->double('allTOctober');
			$table->double('allTNovember');
			$table->double('allTDecember');
			$table->double('allTTotal');
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
