<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IncomeFromContractsTotalSeederTableSeeder extends Seeder {

	public function run()
	{

		$incomeJanuaryTotal = DB::table('repincomefromcontracts')
										->sum('incomeJanuary');
                
        $incomeFebruaryTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeFebruary');
                
        $incomeMarchTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeMarch');

        $incomeAprilTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeApril');

        $incomeMayTotal = DB::table('repincomefromcontracts')
										->sum('incomeMay');
                
        $incomeJuneTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeJune');
                
        $incomeJulyTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeJuly');
                                        
        $incomeAugustTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeAugust');

        $incomeSeptemberTotal = DB::table('repincomefromcontracts')
										->sum('incomeSeptember');
                
        $incomeOctoberTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeOctober');
                
        $incomeNovemberTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeNovember');
                                        
        $incomeDecemberTotal = DB::table('repincomefromcontracts')
                                        ->sum('incomeDecember');

        $incomeTotalTotal = $incomeJanuaryTotal+$incomeFebruaryTotal+$incomeMarchTotal
        					+$incomeAprilTotal+$incomeMayTotal+$incomeJuneTotal
        					+$incomeJulyTotal+$incomeAugustTotal+$incomeSeptemberTotal
        					+$incomeOctoberTotal+$incomeNovemberTotal+$incomeDecemberTotal;
                        
        DB::table('repincomefromcontractstotal')->truncate();

        DB::table('repincomefromcontractstotal')->insert(
                array(
                        array(
                                'incomeTJanuary' => $incomeJanuaryTotal,
                                'incomeTFebruary' => $incomeFebruaryTotal,
                                'incomeTMarch'  => $incomeMarchTotal,
                                'incomeTApril'  => $incomeAprilTotal,
                                'incomeTMay'  => $incomeMayTotal,
                                'incomeTJune'  => $incomeJuneTotal,
                                'incomeTJuly'  => $incomeJulyTotal,
                                'incomeTAugust'  => $incomeAugustTotal,
                                'incomeTSeptember'  => $incomeSeptemberTotal,
                                'incomeTOctober'  => $incomeOctoberTotal,
                                'incomeTNovember'  => $incomeNovemberTotal,
                                'incomeTDecember'  => $incomeDecemberTotal,
                                'incomeTTotal'  => $incomeTotalTotal,
                        ),
                ));
	}

}