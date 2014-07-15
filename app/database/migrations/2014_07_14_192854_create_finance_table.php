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
			$table->increments('id');
			$table->string('clientName');
			$table->string('projectTitle');
			$table->double('projectBudget');
			$table->double('siteSalaryTotal');
			$table->double('officeSalaryTotal');
			$table->double('priceOfMaterialsTotal');
			$table->double('misc');
			$table->double('expensesTotal');
			$table->double('incomeTotal');
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
