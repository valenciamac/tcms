<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class YearlyGraphTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	YearlyGraph::create([

		// 	]);
		// }

		DB::table('financeYearly')->insert(
                        array(
                                array('year' => '2010'),
                                array('year' => '2011'),
                                array('year' => '2012'),
                                array('year' => '2013'),                              
                        ));
	}

}