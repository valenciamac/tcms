<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FinancereportTableSeeder extends Seeder {

	public function run()
	{
		DB::table('finance')->truncate();

		DB::table('finance')->insert(
                        array(
                                array('contractTitle' => 'Delfin Hermanos Inc.',
                                	'contractIncome' => '350000',
                                	'contractpurchase' => '3354',
                                	'contractsubcon' => '3028',
                                	'contractinhouse' => '3552',
                                	'contracttrucking' => '3788',
                                	'contractformworks' => '4025',
                                	'salarymonthly' => '2925',
                                	'salaryweekly' => '3578',
                                	'totalincome' => '325750',
                                	'created_at' => date('Y-m-d H:i:s'),
                                	'updated_at' => date('Y-m-d H:i:s')),  

                            	array('contractTitle' => 'Dolmar Property Ventures',
                                	'contractIncome' => '751256.15',
                                	'contractpurchase' => '9288.31',
                                	'contractsubcon' => '15551.83',
                                	'contractinhouse' => '8326.57',
                                	'contracttrucking' => '17960.04',
                                	'contractformworks' => '9110.21',
                                	'salarymonthly' => '9110.21',
                                	'salaryweekly' => '11802.69',
                                	'totalincome' => '670106.29',
                                	'created_at' => date('Y-m-d H:i:s'),
                                	'updated_at' => date('Y-m-d H:i:s')),  

                            	array('contractTitle' => 'Pallas Homes Inc.',
                                	'contractIncome' => '85000',
                                	'contractpurchase' => '315',
                                	'contractsubcon' => '1385',
                                	'contractinhouse' => '1435',
                                	'contracttrucking' => '660',
                                	'contractformworks' => '1190',
                                	'salarymonthly' => '570',
                                	'salaryweekly' => '725',
                                	'totalincome' => '78720.00',
                                	'created_at' => date('Y-m-d H:i:s'),
                                	'updated_at' => date('Y-m-d H:i:s')),   

                            	array('contractTitle' => 'D.L. Lazaro, Inc.',
                                	'contractIncome' => '499699.01',
                                	'contractpurchase' => '55000',
                                	'contractsubcon' => '5000',
                                	'contractinhouse' => '31000',
                                	'contracttrucking' => '43000',
                                	'contractformworks' => '8000',
                                	'salarymonthly' => '18000',
                                	'salaryweekly' => '116950',
                                	'totalincome' => '222749.01',
                                	'created_at' => date('Y-m-d H:i:s'),
                                	'updated_at' => date('Y-m-d H:i:s')),                                           
                        ));
	}

}