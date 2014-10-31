<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ci', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('po_po')->unsigned();
			$table->integer('num')->unique()->index();
			$table->timestamps();

			$table->foreign('po_po')->references('id')->on('pos')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ci');
	}

}
