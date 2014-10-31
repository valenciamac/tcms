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

        // cost of contracts total
        $repcostTJanuary = DB::table('repcoststotal')
                                        ->sum('repcostTJanuary');
        $repcostTFebruary = DB::table('repcoststotal')
                                        ->sum('repcostTFebruary');
        $repcostTMarch = DB::table('repcoststotal')
                                        ->sum('repcostTMarch');
        $repcostTApril = DB::table('repcoststotal')
                                        ->sum('repcostTApril');
        $repcostTMay = DB::table('repcoststotal')
                                        ->sum('repcostTMay');
        $repcostTJune = DB::table('repcoststotal')
                                        ->sum('repcostTJune');
        $repcostTJuly = DB::table('repcoststotal')
                                        ->sum('repcostTJuly');
        $repcostTAugust = DB::table('repcoststotal')
                                        ->sum('repcostTAugust');
        $repcostTSeptember = DB::table('repcoststotal')
                                        ->sum('repcostTSeptember');
        $repcostTOctober = DB::table('repcoststotal')
                                        ->sum('repcostTOctober');
        $repcostTNovember = DB::table('repcoststotal')
                                        ->sum('repcostTNovember');
        $repcostTDecember = DB::table('repcoststotal')
                                        ->sum('repcostTDecember');
        $repcostTTotal = DB::table('repcoststotal')
                                        ->sum('repcostTTotal');

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
        $salovothTotal = DB::table('repsalovothtotal')
                                        ->sum('salovothTotal');
                        
        // add coc total & salovoth
        $expensesTJanuary = $repcostTJanuary + $salovothJanuary;
        $expensesTFebruary = $repcostTFebruary + $salovothFebruary;
        $expensesTMarch = $repcostTMarch + $salovothMarch;
        $expensesTApril = $repcostTApril + $salovothApril;
        $expensesTMay = $repcostTMay + $salovothMay;
        $expensesTJune = $repcostTJune + $salovothJune;
        $expensesTJuly = $repcostTJuly + $salovothJuly;
        $expensesTAugust = $repcostTAugust + $salovothAugust;
        $expensesTSeptember = $repcostTSeptember + $salovothSeptember;
        $expensesTOctober = $repcostTOctober + $salovothOctober;
        $expensesTNovember = $repcostTNovember + $salovothNovember;
        $expensesTDecember = $repcostTDecember + $salovothDecember;
        $expensesTTotal = $repcostTTotal + $salovothTotal;

        DB::table('financemonthly')->truncate();

        DB::table('financemonthly')->insert(
                array(
                        array(
                        		'month' => 'January',
                                'income' => $incomeJanuaryTotal,
                                'expenses' => $expensesTJanuary,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'February',
                                'income' => $incomeFebruaryTotal,
                                'expenses' => $expensesTFebruary,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'March',
                                'income' => $incomeMarchTotal,
                                'expenses' => $expensesTMarch,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'April',
                                'income' => $incomeAprilTotal,
                                'expenses' => $expensesTApril,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'May',
                                'income' => $incomeMayTotal,
                                'expenses' => $expensesTMay,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'June',
                                'income' => $incomeJuneTotal,
                                'expenses' => $expensesTJune,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'July',
                                'income' => $incomeJulyTotal,
                                'expenses' => $expensesTJuly,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'August',
                                'income' => $incomeAugustTotal,
                                'expenses' => $expensesTAugust,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'September',
                                'income' => $incomeSeptemberTotal,
                                'expenses' => $expensesTSeptember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'October',
                                'income' => $incomeOctoberTotal,
                                'expenses' => $expensesTOctober,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'November',
                                'income' => $incomeNovemberTotal,
                                'expenses' => $expensesTNovember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'month' => 'December',
                                'income' => $incomeDecemberTotal,
                                'expenses' => $expensesTDecember,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		return Redirect::to('financing');

	}

}
