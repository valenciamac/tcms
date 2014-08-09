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
			$table->double('contractIncome');
			$table->double('contractPurchase');
			$table->double('contractSubcon');
			$table->double('contractInhouse');
			$table->double('contractTrucking');
			$table->double('contractFormworks');
			$table->double('salaryMonthly');
			$table->double('salaryWeekly');
			$table->double('overheadExps');
			$table->double('otherExps');
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
