<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlumbingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plumbing', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('itemdesc');
			$table->integer('model_id')->unsigned();
			$table->integer('nopieces');
			$table->string('unitmeasure');
			$table->integer('unitprice');
			$table->integer('edit_this')->nullable();
				$table->integer('pending')->nullable();
			$table->integer('limit')->nullable();
			$table->timestamps();

			$table->foreign('model_id')->references('id')->on('modelhouse')->onUpdate('cascade')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plumbing');
	}

}
