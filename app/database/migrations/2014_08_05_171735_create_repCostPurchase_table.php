<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepCostPurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repCostPurchase', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('purchaseJanuary');
			$table->string('purchaseFebruary');
			$table->string('purchaseMarch');
			$table->string('purchaseApril');
			$table->string('purchaseMay');
			$table->string('purchaseJune');
			$table->string('purchaseJuly');
			$table->string('purchaseAugust');
			$table->string('purchaseSeptember');
			$table->string('purchaseOctober');
			$table->string('purchaseNovember');
			$table->string('purchaseDecember');
			$table->string('purchaseTotal');
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
		Schema::drop('repCostPurchase');
	}

}
