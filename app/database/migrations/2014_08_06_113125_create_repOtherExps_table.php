<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepOtherExpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repOtherExps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('otherExpsTitle');
			$table->string('otherExpsJanuary');
			$table->string('otherExpsFebruary');
			$table->string('otherExpsMarch');
			$table->string('otherExpsApril');
			$table->string('otherExpsMay');
			$table->string('otherExpsJune');
			$table->string('otherExpsJuly');
			$table->string('otherExpsAugust');
			$table->string('otherExpsSeptember');
			$table->string('otherExpsOctober');
			$table->string('otherExpsNovember');
			$table->string('otherExpsDecember');
			$table->string('otherExpsTotal');
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
		Schema::drop('repOtherExps');
	}

}
