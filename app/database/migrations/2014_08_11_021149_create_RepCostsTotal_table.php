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
			$table->double('repCostTJanuary');
			$table->double('repCostTFebruary');
			$table->double('repCostTMarch');
			$table->double('repCostTApril');
			$table->double('repCostTMay');
			$table->double('repCostTJune');
			$table->double('repCostTJuly');
			$table->double('repCostTAugust');
			$table->double('repCostTSeptember');
			$table->double('repCostTOctober');
			$table->double('repCostTNovember');
			$table->double('repCostTDecember');
			$table->double('repCostTTotal');
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
