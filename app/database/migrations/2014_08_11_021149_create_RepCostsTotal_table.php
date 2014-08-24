<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepCostsTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepCostsTotal', function(Blueprint $table)
		{
			$table->string('repCostTJanuary');
			$table->string('repCostTFebruary');
			$table->string('repCostTMarch');
			$table->string('repCostTApril');
			$table->string('repCostTMay');
			$table->string('repCostTJune');
			$table->string('repCostTJuly');
			$table->string('repCostTAugust');
			$table->string('repCostTSeptember');
			$table->string('repCostTOctober');
			$table->string('repCostTNovember');
			$table->string('repCostTDecember');
			$table->string('repCostTTotal');
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
		Schema::drop('RepCostsTotal');
	}

}
