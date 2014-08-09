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
			$table->double('purchaseJanuary');
			$table->double('purchaseFebruary');
			$table->double('purchaseMarch');
			$table->double('purchaseApril');
			$table->double('purchaseMay');
			$table->double('purchaseJune');
			$table->double('purchaseJuly');
			$table->double('purchaseAugust');
			$table->double('purchaseSeptember');
			$table->double('purchaseOctober');
			$table->double('purchaseNovember');
			$table->double('purchaseDecember');
			$table->double('purchaseTotal');
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
