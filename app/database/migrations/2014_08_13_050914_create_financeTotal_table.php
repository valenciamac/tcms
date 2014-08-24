<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financeTotal', function(Blueprint $table)
		{
			$table->string('contractIncomeTotal');
			$table->string('contractPurchaseTotal');
			$table->string('contractSubconTotal');
			$table->string('contractInhouseTotal');
			$table->string('contractTruckingTotal');
			$table->string('contractFormworksTotal');
			$table->string('salaryMonthlyTotal');
			$table->string('salaryWeeklyTotal');
			$table->string('totalTotal');
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
		Schema::drop('financeTotal');
	}

}
