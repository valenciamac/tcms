<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepcostinhouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repcostinhouse', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('inhouseJanuary');
			$table->string('inhouseFebruary');
			$table->string('inhouseMarch');
			$table->string('inhouseApril');
			$table->string('inhouseMay');
			$table->string('inhouseJune');
			$table->string('inhouseJuly');
			$table->string('inhouseAugust');
			$table->string('inhouseSeptember');
			$table->string('inhouseOctober');
			$table->string('inhouseNovember');
			$table->string('inhouseDecember');
			$table->string('inhouseTotal');
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
		Schema::drop('repcostinhouse');
	}

}
