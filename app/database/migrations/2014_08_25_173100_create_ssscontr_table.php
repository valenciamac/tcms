<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsscontrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ssscontr', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rangemin');
			$table->string('rangemax');
			$table->string('credit');
			$table->string('ssempershare');
			$table->string('ssempeeshare');
			$table->string('sstotal');
			$table->string('ecempershare');
			$table->string('tcempershare');
			$table->string('tcempeeshare');
			$table->string('tctotal');
			

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ssscontr');
	}

}
