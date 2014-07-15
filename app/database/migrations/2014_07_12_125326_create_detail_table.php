<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('po_number');
			$table->integer('dr_number');
			$table->integer('si_number');
			$table->integer('ci_number');
			$table->integer('so_number');
			$table->string('others');
			$table->string('description');
			$table->float('amount');
			$table->integer('controlNo');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detail');
	}

}
