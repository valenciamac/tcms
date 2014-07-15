<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceYearlyReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financeYearlyReports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('year');
			$table->double('income');
			$table->double('expenses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('financeYearlyReports');
	}

}
