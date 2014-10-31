<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('po_po')->unsigned();
			$table->integer('qty');
			$table->string('iname');
			$table->string('desc');
			$table->float('price');
			$table->integer('delivered');
			$table->integer('edit_this');
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
		Schema::drop('item');
	}

}
