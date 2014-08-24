<?php

class FinanceController extends \BaseController {

	
	public function run()
	{
		// computation for total of financial reports
		$contractIncomeTotal = DB::table('finance')
										->sum('contractIncome');
                
        $contractPurchaseTotal = DB::table('finance')
                                        ->sum('contractPurchase');
                
        $contractSubconTotal = DB::table('finance')
                                        ->sum('contractSubcon');

        $contractInhouseTotal = DB::table('finance')
                                        ->sum('contractInhouse');

        $contractTruckingTotal = DB::table('finance')
										->sum('contractTrucking');
                
        $contractFormworksTotal = DB::table('finance')
                                        ->sum('contractFormworks');
                
        $salaryMonthlyTotal = DB::table('finance')
                                        ->sum('salaryMonthly');
                                        
        $salaryWeeklyTotal = DB::table('finance')
                                        ->sum('salaryWeekly');

        $totalIncome = $contractIncomeTotal-($contractPurchaseTotal+$contractSubconTotal
        					+$contractInhouseTotal+$contractTruckingTotal+$contractFormworksTotal
        					+$salaryMonthlyTotal+$salaryWeeklyTotal);
                        
     //    $contractIncome = DB::table('finance')
     //                                    ->select('contractIncome');
     //    $contractPurchase = DB::table('finance')
     //                                    ->select('contractPurchase');
     //    $contractSubcon = DB::table('finance')
     //                                    ->select('contractSubcon');
     //    $contractInhouse = DB::table('finance')
     //                                    ->select('contractInhouse');
     //    $contractTrucking = DB::table('finance')
     //                                    ->select('contractTrucking');
     //    $contractFormworks = DB::table('finance')
     //                                    ->select('contractFormworks');
     //    $salaryMonthly = DB::table('finance')
     //                                    ->select('salaryMonthly');
     //    $salaryWeekly = DB::table('finance')
     //                                    ->select('salaryWeekly');    
    	// $incomeOfContract = ($contractPurchase+$contractSubcon
     //    					+$contractInhouse+$contractTrucking+$contractFormworks
     //    					+$salaryMonthly+$salaryWeekly)-$contractIncome;     

     //    DB::table('finance')->insert(
     //            array(
     //                    array(
     //                            'totalIncome'  => $incomeOfContract,
     //                            'created_at' => date('Y-m-d H:i:s'),
     //                            'updated_at' => date('Y-m-d H:i:s'),
     //                    ),
     //            ));


        DB::table('financeTotal')->truncate();

        DB::table('financeTotal')->insert(
                array(
                        array(
                                'contractIncomeTotal' => $contractIncomeTotal,
                                'contractPurchaseTotal' => $contractPurchaseTotal,
                                'contractSubconTotal'  => $contractSubconTotal,
                                'contractInhouseTotal'  => $contractInhouseTotal,
                                'contractTruckingTotal'  => $contractTruckingTotal,
                                'contractFormworksTotal'  => $contractFormworksTotal,
                                'salaryMonthlyTotal'  => $salaryMonthlyTotal,
                                'salaryWeeklyTotal'  => $salaryWeeklyTotal,
                                'totalTotal'  => $totalIncome,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));



        return Redirect::to('financialReports')->with('totalCompute_success', 'Total Computed!');
    }

	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$incomes = Income::search($search)->paginate(6);
		}
		else
		{
			$incomes = Income::paginate(6);
		}
		
		return View::make('users.financing.financialReports')->withIncome($incomes);
	}

	public function printShow()
	{
		
		$incomes = Income::all();
		
		return View::make('users.financing.printfr')->withIncome($incomes);
	}

	public function update()
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Income::find($id);

		$user->delete();

		return Redirect::back();
	}


}
