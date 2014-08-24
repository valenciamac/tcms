<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MonthlyGraphTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	MonthlyGraph::create([

		// 	]);
		// }

		DB::table('financeMonthly')->insert(
                        array(
                                array('month' => 'January'),
                                array('month' => 'February'),
                                array('month' => 'March'),
                                array('month' => 'April'),
                                array('month' => 'May'),
                                array('month' => 'June'),    
                                array('month' => 'July'),
                                array('month' => 'August'),
                                array('month' => 'September'),    
                                array('month' => 'October'),
                                array('month' => 'November'),
                                array('month' => 'December'),                                
                        ));
	}

}