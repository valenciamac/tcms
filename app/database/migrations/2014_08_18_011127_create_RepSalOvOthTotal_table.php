<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepSalOvOthTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepSalOvOthTotal', function(Blueprint $table)
		{
			$table->string('SalOvOthJanuary');
			$table->string('SalOvOthFebruary');
			$table->string('SalOvOthMarch');
			$table->string('SalOvOthApril');
			$table->string('SalOvOthMay');
			$table->string('SalOvOthJune');
			$table->string('SalOvOthJuly');
			$table->string('SalOvOthAugust');
			$table->string('SalOvOthSeptember');
			$table->string('SalOvOthOctober');
			$table->string('SalOvOthNovember');
			$table->string('SalOvOthDecember');
			$table->string('SalOvOthTotal');
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
		Schema::drop('RepSalOvOthTotal');
	}

}
