<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance', function(Blueprint $table)
		{
			$table->increments('rNo');
			$table->string('contractTitle');
			$table->string('contractIncome');
			$table->string('contractPurchase');
			$table->string('contractSubcon');
			$table->string('contractInhouse');
			$table->string('contractTrucking');
			$table->string('contractFormworks');
			$table->string('salaryMonthly');
			$table->string('salaryWeekly');
			$table->string('totalIncome');
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
		Schema::drop('finance');
	}

}
