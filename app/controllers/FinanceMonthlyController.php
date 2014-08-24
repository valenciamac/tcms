<?php

class FinanceMonthlyController extends \BaseController {

	public function monthly()
	{

		$monthly = FinanceMonthly::all();

		return View::make('users.financing.monthlyGraph')
			->with('rMonth', $monthly->lists('month'))
			->with('rIncome', $monthly->lists('income'))
			->with('rExpenses', $monthly->lists('expenses'));

	}

	public function refresh()
	{
		// income from contracts
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

        // salovoth
        $salovothJanuary = DB::table('repsalovothtotal')
										->sum('salovothJanuary');
                
        $salovothFebruary = DB::table('repsalovothtotal')
                                        ->sum('salovothFebruary');
                
        $salovothMarch = DB::table('repsalovothtotal')
                                        ->sum('salovothMarch');

        $salovothApril = DB::table('repsalovothtotal')
                                        ->sum('salovothApril');

        $salovothMay = DB::table('repsalovothtotal')
										->sum('salovothMay');
                
        $salovothJune = DB::table('repsalovothtotal')
                                        ->sum('salovothJune');
                
        $salovothJuly = DB::table('repsalovothtotal')
                                        ->sum('salovothJuly');
                                        
        $salovothAugust = DB::table('repsalovothtotal')
                                        ->sum('salovothAugust');

        $salovothSeptember = DB::table('repsalovothtotal')
										->sum('salovothSeptember');
                
        $salovothOctober = DB::table('repsalovothtotal')
                                        ->sum('salovothOctober');
                
        $salovothNovember = DB::table('repsalovothtotal')
                                        ->sum('salovothNovember');
                                        
        $salovothDecember = DB::table('repsalovothtotal')
                                        ->sum('salovothDecember');
                        
        DB::table('financemonthly')->truncate();

        DB::table('financemonthly')->insert(
                array(
                        array(
                        		'month' => 'January',
                                'income' => $incomeJanuaryTotal,
                                'expenses' => $salovothJanuary,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'February',
                                'income' => $incomeFebruaryTotal,
                                'expenses' => $salovothFebruary,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'March',
                                'income' => $incomeMarchTotal,
                                'expenses' => $salovothMarch,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'April',
                                'income' => $incomeAprilTotal,
                                'expenses' => $salovothApril,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'May',
                                'income' => $incomeMayTotal,
                                'expenses' => $salovothMay,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'June',
                                'income' => $incomeJuneTotal,
                                'expenses' => $salovothJune,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'July',
                                'income' => $incomeJulyTotal,
                                'expenses' => $salovothJuly,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'August',
                                'income' => $incomeAugustTotal,
                                'expenses' => $salovothAugust,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'September',
                                'income' => $incomeSeptemberTotal,
                                'expenses' => $salovothSeptember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'October',
                                'income' => $incomeOctoberTotal,
                                'expenses' => $salovothOctober,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'November',
                                'income' => $incomeNovemberTotal,
                                'expenses' => $salovothNovember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'December',
                                'income' => $incomeDecemberTotal,
                                'expenses' => $salovothDecember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		return Redirect::to('financing');

	}

}
