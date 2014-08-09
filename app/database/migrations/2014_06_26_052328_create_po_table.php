<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('po')->unique();
			$table->string('suppler_name');
			$table->string('prs');
			$table->DATE('due_date');
			$table->string('address');
			$table->string('terms');
			$table->string('supplier_code');
			$table->string('deliverTo');
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
		Schema::drop('pos');
	}

}
