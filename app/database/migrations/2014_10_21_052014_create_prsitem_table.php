<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrsitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prsitem', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->integer('prs')->unsigned();
			$table->string('itemdesc');
			$table->integer('nopieces');
			$table->string('unitmeasure');
			$table->float('unitprice');
			$table->timestamps();
			
			$table->foreign('prs')->references('id')->on('prs')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prsitem');
	}

}
