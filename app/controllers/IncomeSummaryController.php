<?php

class IncomeSummaryController extends \BaseController {

	public function computeStoreTotal()
	{

	}

	public function run()
	{
		// computation for total of income from contracts
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
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));
		
		// computation for purchase, subcon, inhouse, trucking & formworks total
		// purchase computation
		$purchaseJanuary = DB::table('repcostpurchase')
										->sum('purchaseJanuary');
                
        $purchaseFebruary = DB::table('repcostpurchase')
                                        ->sum('purchaseFebruary');
                
        $purchaseMarch = DB::table('repcostpurchase')
                                        ->sum('purchaseMarch');

        $purchaseApril = DB::table('repcostpurchase')
                                        ->sum('purchaseApril');

        $purchaseMay = DB::table('repcostpurchase')
										->sum('purchaseMay');
                
        $purchaseJune = DB::table('repcostpurchase')
                                        ->sum('purchaseJune');
                
        $purchaseJuly = DB::table('repcostpurchase')
                                        ->sum('purchaseJuly');
                                        
        $purchaseAugust = DB::table('repcostpurchase')
                                        ->sum('purchaseAugust');

        $purchaseSeptember = DB::table('repcostpurchase')
										->sum('purchaseSeptember');
                
        $purchaseOctober = DB::table('repcostpurchase')
                                        ->sum('purchaseOctober');
                
        $purchaseNovember = DB::table('repcostpurchase')
                                        ->sum('purchaseNovember');
                                        
        $purchaseDecember = DB::table('repcostpurchase')
                                        ->sum('purchaseDecember');

        $purchaseTotal = $purchaseJanuary+$purchaseFebruary+$purchaseMarch
        					+$purchaseApril+$purchaseMay+$purchaseJune
        					+$purchaseJuly+$purchaseAugust+$purchaseSeptember
        					+$purchaseOctober+$purchaseNovember+$purchaseDecember;


		// subcon computation
		$subconJanuary = DB::table('repcostsubcon')
										->sum('subconJanuary');
                
        $subconFebruary = DB::table('repcostsubcon')
                                        ->sum('subconFebruary');
                
        $subconMarch = DB::table('repcostsubcon')
                                        ->sum('subconMarch');

        $subconApril = DB::table('repcostsubcon')
                                        ->sum('subconApril');

        $subconMay = DB::table('repcostsubcon')
										->sum('subconMay');
                
        $subconJune = DB::table('repcostsubcon')
                                        ->sum('subconJune');
                
        $subconJuly = DB::table('repcostsubcon')
                                        ->sum('subconJuly');
                                        
        $subconAugust = DB::table('repcostsubcon')
                                        ->sum('subconAugust');

        $subconSeptember = DB::table('repcostsubcon')
										->sum('subconSeptember');
                
        $subconOctober = DB::table('repcostsubcon')
                                        ->sum('subconOctober');
                
        $subconNovember = DB::table('repcostsubcon')
                                        ->sum('subconNovember');
                                        
        $subconDecember = DB::table('repcostsubcon')
                                        ->sum('subconDecember');

        $subconTotal = $subconJanuary+$subconFebruary+$subconMarch
        					+$subconApril+$subconMay+$subconJune
        					+$subconJuly+$subconAugust+$subconSeptember
        					+$subconOctober+$subconNovember+$subconDecember;

		// inhouse computation
		$inhouseJanuary = DB::table('repcostinhouse')
										->sum('inhouseJanuary');
                
        $inhouseFebruary = DB::table('repcostinhouse')
                                        ->sum('inhouseFebruary');
                
        $inhouseMarch = DB::table('repcostinhouse')
                                        ->sum('inhouseMarch');

        $inhouseApril = DB::table('repcostinhouse')
                                        ->sum('inhouseApril');

        $inhouseMay = DB::table('repcostinhouse')
										->sum('inhouseMay');
                
        $inhouseJune = DB::table('repcostinhouse')
                                        ->sum('inhouseJune');
                
        $inhouseJuly = DB::table('repcostinhouse')
                                        ->sum('inhouseJuly');
                                        
        $inhouseAugust = DB::table('repcostinhouse')
                                        ->sum('inhouseAugust');

        $inhouseSeptember = DB::table('repcostinhouse')
										->sum('inhouseSeptember');
                
        $inhouseOctober = DB::table('repcostinhouse')
                                        ->sum('inhouseOctober');
                
        $inhouseNovember = DB::table('repcostinhouse')
                                        ->sum('inhouseNovember');
                                        
        $inhouseDecember = DB::table('repcostinhouse')
                                        ->sum('inhouseDecember');

        $inhouseTotal = $inhouseJanuary+$inhouseFebruary+$inhouseMarch
        					+$inhouseApril+$inhouseMay+$inhouseJune
        					+$inhouseJuly+$inhouseAugust+$inhouseSeptember
        					+$inhouseOctober+$inhouseNovember+$inhouseDecember;

		// trucking computation
		$truckingJanuary = DB::table('repcosttrucking')
										->sum('truckingJanuary');
                
        $truckingFebruary = DB::table('repcosttrucking')
                                        ->sum('truckingFebruary');
                
        $truckingMarch = DB::table('repcosttrucking')
                                        ->sum('truckingMarch');

        $truckingApril = DB::table('repcosttrucking')
                                        ->sum('truckingApril');

        $truckingMay = DB::table('repcosttrucking')
										->sum('truckingMay');
                
        $truckingJune = DB::table('repcosttrucking')
                                        ->sum('truckingJune');
                
        $truckingJuly = DB::table('repcosttrucking')
                                        ->sum('truckingJuly');
                                        
        $truckingAugust = DB::table('repcosttrucking')
                                        ->sum('truckingAugust');

        $truckingSeptember = DB::table('repcosttrucking')
										->sum('truckingSeptember');
                
        $truckingOctober = DB::table('repcosttrucking')
                                        ->sum('truckingOctober');
                
        $truckingNovember = DB::table('repcosttrucking')
                                        ->sum('truckingNovember');
                                        
        $truckingDecember = DB::table('repcosttrucking')
                                        ->sum('truckingDecember');

        $truckingTotal = $truckingJanuary+$truckingFebruary+$truckingMarch
        					+$truckingApril+$truckingMay+$truckingJune
        					+$truckingJuly+$truckingAugust+$truckingSeptember
        					+$truckingOctober+$truckingNovember+$truckingDecember;

		// formworks computation
		$formworksJanuary = DB::table('repcostformworks')
										->sum('formworksJanuary');
                
        $formworksFebruary = DB::table('repcostformworks')
                                        ->sum('formworksFebruary');
                
        $formworksMarch = DB::table('repcostformworks')
                                        ->sum('formworksMarch');

        $formworksApril = DB::table('repcostformworks')
                                        ->sum('formworksApril');

        $formworksMay = DB::table('repcostformworks')
										->sum('formworksMay');
                
        $formworksJune = DB::table('repcostformworks')
                                        ->sum('formworksJune');
                
        $formworksJuly = DB::table('repcostformworks')
                                        ->sum('formworksJuly');
                                        
        $formworksAugust = DB::table('repcostformworks')
                                        ->sum('formworksAugust');

        $formworksSeptember = DB::table('repcostformworks')
										->sum('formworksSeptember');
                
        $formworksOctober = DB::table('repcostformworks')
                                        ->sum('formworksOctober');
                
        $formworksNovember = DB::table('repcostformworks')
                                        ->sum('formworksNovember');
                                        
        $formworksDecember = DB::table('repcostformworks')
                                        ->sum('formworksDecember');

        $formworksTotal = $formworksJanuary+$formworksFebruary+$formworksMarch
        					+$formworksApril+$formworksMay+$formworksJune
        					+$formworksJuly+$formworksAugust+$formworksSeptember
        					+$formworksOctober+$formworksNovember+$formworksDecember;
                        
        $repcostJanuaryTotal = $purchaseJanuary+$subconJanuary+$inhouseJanuary
        					+$truckingJanuary+$formworksJanuary;
        $repcostFebruaryTotal = $purchaseFebruary+$subconFebruary+$inhouseFebruary
        					+$truckingFebruary+$formworksFebruary;
        $repcostMarchTotal = $purchaseMarch+$subconMarch+$inhouseMarch
        					+$truckingMarch+$formworksMarch;
        $repcostAprilTotal = $purchaseApril+$subconApril+$inhouseApril
        					+$truckingApril+$formworksApril;
        $repcostMayTotal = $purchaseMay+$subconMay+$inhouseMay
        					+$truckingMay+$formworksMay;
        $repcostJuneTotal = $purchaseJune+$subconJune+$inhouseJune
        					+$truckingJune+$formworksJune;
        $repcostJulyTotal = $purchaseJuly+$subconJuly+$inhouseJuly
        					+$truckingJuly+$formworksJuly;
        $repcostAugustTotal = $purchaseAugust+$subconAugust+$inhouseAugust
        					+$truckingAugust+$formworksAugust;
        $repcostSeptemberTotal = $purchaseSeptember+$subconSeptember+$inhouseSeptember
        					+$truckingSeptember+$formworksSeptember;
        $repcostOctoberTotal = $purchaseOctober+$subconOctober+$inhouseOctober
        					+$truckingOctober+$formworksOctober;
        $repcostNovemberTotal = $purchaseNovember+$subconNovember+$inhouseNovember
        					+$truckingNovember+$formworksNovember;
        $repcostDecemberTotal = $purchaseDecember+$subconDecember+$inhouseDecember
        					+$truckingDecember+$formworksDecember;
        $repcostTotalTotal = $purchaseTotal+$subconTotal+$inhouseTotal
        					+$truckingTotal+$formworksTotal;

        DB::table('repcoststotal')->truncate();

        DB::table('repcoststotal')->insert(
                array(
                        array(
                                'repcostTJanuary' => $repcostJanuaryTotal,
                                'repcostTFebruary' => $repcostFebruaryTotal,
                                'repcostTMarch'  => $repcostMarchTotal,
                                'repcostTApril'  => $repcostAprilTotal,
                                'repcostTMay'  => $repcostMayTotal,
                                'repcostTJune'  => $repcostJuneTotal,
                                'repcostTJuly'  => $repcostJulyTotal,
                                'repcostTAugust'  => $repcostAugustTotal,
                                'repcostTSeptember'  => $repcostSeptemberTotal,
                                'repcostTOctober'  => $repcostOctoberTotal,
                                'repcostTNovember'  => $repcostNovemberTotal,
                                'repcostTDecember'  => $repcostDecemberTotal,
                                'repcostTTotal'  => $repcostTotalTotal,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		// computation for monthly/weekly salary & other exps
		// monthly salary computation
		$monthlyJanuary = DB::table('repsalarymonthly')
										->sum('monthlyJanuary');
                
        $monthlyFebruary = DB::table('repsalarymonthly')
                                        ->sum('monthlyFebruary');
                
        $monthlyMarch = DB::table('repsalarymonthly')
                                        ->sum('monthlyMarch');

        $monthlyApril = DB::table('repsalarymonthly')
                                        ->sum('monthlyApril');

        $monthlyMay = DB::table('repsalarymonthly')
										->sum('monthlyMay');
                
        $monthlyJune = DB::table('repsalarymonthly')
                                        ->sum('monthlyJune');
                
        $monthlyJuly = DB::table('repsalarymonthly')
                                        ->sum('monthlyJuly');
                                        
        $monthlyAugust = DB::table('repsalarymonthly')
                                        ->sum('monthlyAugust');

        $monthlySeptember = DB::table('repsalarymonthly')
										->sum('monthlySeptember');
                
        $monthlyOctober = DB::table('repsalarymonthly')
                                        ->sum('monthlyOctober');
                
        $monthlyNovember = DB::table('repsalarymonthly')
                                        ->sum('monthlyNovember');
                                        
        $monthlyDecember = DB::table('repsalarymonthly')
                                        ->sum('monthlyDecember');

        $monthlyTotal = $monthlyJanuary+$monthlyFebruary+$monthlyMarch
        					+$monthlyApril+$monthlyMay+$monthlyJune
        					+$monthlyJuly+$monthlyAugust+$monthlySeptember
        					+$monthlyOctober+$monthlyNovember+$monthlyDecember;

		// weekly salary computation
		$weeklyJanuary = DB::table('repsalaryweekly')
										->sum('weeklyJanuary');
                
        $weeklyFebruary = DB::table('repsalaryweekly')
                                        ->sum('weeklyFebruary');
                
        $weeklyMarch = DB::table('repsalaryweekly')
                                        ->sum('weeklyMarch');

        $weeklyApril = DB::table('repsalaryweekly')
                                        ->sum('weeklyApril');

        $weeklyMay = DB::table('repsalaryweekly')
										->sum('weeklyMay');
                
        $weeklyJune = DB::table('repsalaryweekly')
                                        ->sum('weeklyJune');
                
        $weeklyJuly = DB::table('repsalaryweekly')
                                        ->sum('weeklyJuly');
                                        
        $weeklyAugust = DB::table('repsalaryweekly')
                                        ->sum('weeklyAugust');

        $weeklySeptember = DB::table('repsalaryweekly')
										->sum('weeklySeptember');
                
        $weeklyOctober = DB::table('repsalaryweekly')
                                        ->sum('weeklyOctober');
                
        $weeklyNovember = DB::table('repsalaryweekly')
                                        ->sum('weeklyNovember');
                                        
        $weeklyDecember = DB::table('repsalaryweekly')
                                        ->sum('weeklyDecember');

        $weeklyTotal = $weeklyJanuary+$weeklyFebruary+$weeklyMarch
        					+$weeklyApril+$weeklyMay+$weeklyJune
        					+$weeklyJuly+$weeklyAugust+$weeklySeptember
        					+$weeklyOctober+$weeklyNovember+$weeklyDecember;

        // computation for monthly/weekly salary total
		$monweekJanuary = $monthlyJanuary+$weeklyJanuary;
        $monweekFebruary = $monthlyFebruary+$weeklyFebruary;
        $monweekMarch = $monthlyMarch+$weeklyMarch;
        $monweekApril = $monthlyApril+$weeklyApril;
        $monweekMay = $monthlyMay+$weeklyMay;
        $monweekJune = $monthlyJune+$weeklyJune;
        $monweekJuly = $monthlyJuly+$weeklyJuly;
        $monweekAugust = $monthlyAugust+$weeklyAugust;
        $monweekSeptember = $monthlySeptember+$weeklySeptember;
        $monweekOctober = $monthlyOctober+$weeklyOctober;
        $monweekNovember = $monthlyNovember+$weeklyNovember;
        $monweekDecember = $monthlyDecember+$weeklyDecember;
        $monweekTotal = $monthlyTotal+$weeklyTotal;

		// computation for other exps
		$otherexpsJanuary = DB::table('repotherexps')
										->sum('otherexpsJanuary');
                
        $otherexpsFebruary = DB::table('repotherexps')
                                        ->sum('otherexpsFebruary');
                
        $otherexpsMarch = DB::table('repotherexps')
                                        ->sum('otherexpsMarch');

        $otherexpsApril = DB::table('repotherexps')
                                        ->sum('otherexpsApril');

        $otherexpsMay = DB::table('repotherexps')
										->sum('otherexpsMay');
                
        $otherexpsJune = DB::table('repotherexps')
                                        ->sum('otherexpsJune');
                
        $otherexpsJuly = DB::table('repotherexps')
                                        ->sum('otherexpsJuly');
                                        
        $otherexpsAugust = DB::table('repotherexps')
                                        ->sum('otherexpsAugust');

        $otherexpsSeptember = DB::table('repotherexps')
										->sum('otherexpsSeptember');
                
        $otherexpsOctober = DB::table('repotherexps')
                                        ->sum('otherexpsOctober');
                
        $otherexpsNovember = DB::table('repotherexps')
                                        ->sum('otherexpsNovember');
                                        
        $otherexpsDecember = DB::table('repotherexps')
                                        ->sum('otherexpsDecember');

        $otherexpsTotal = $otherexpsJanuary+$otherexpsFebruary+$otherexpsMarch
        					+$otherexpsApril+$otherexpsMay+$otherexpsJune
        					+$otherexpsJuly+$otherexpsAugust+$otherexpsSeptember
        					+$otherexpsOctober+$otherexpsNovember+$otherexpsDecember;

        // total salary + overhead exps + other exps
        $salovothJanuary = $monweekJanuary+$otherexpsJanuary;
        $salovothFebruary = $monweekFebruary+$otherexpsFebruary;
        $salovothMarch = $monweekMarch+$otherexpsMarch;
        $salovothApril = $monweekApril+$otherexpsApril;
        $salovothMay = $monweekMay+$otherexpsMay;
        $salovothJune = $monweekJune+$otherexpsJune;
        $salovothJuly = $monweekJuly+$otherexpsJuly;
        $salovothAugust = $monweekAugust+$otherexpsAugust;
        $salovothSeptember = $monweekSeptember+$otherexpsSeptember;
        $salovothOctober = $monweekOctober+$otherexpsOctober;
        $salovothNovember = $monweekNovember+$otherexpsNovember;
        $salovothDecember = $monweekDecember+$otherexpsDecember;
        $salovothTotal = $monweekTotal+$otherexpsTotal;

		DB::table('repsalovothtotal')->truncate();

        DB::table('repsalovothtotal')->insert(
                array(
                        array(
                                'salovothJanuary' => $salovothJanuary,
                                'salovothFebruary' => $salovothFebruary,
                                'salovothMarch'  => $salovothMarch,
                                'salovothApril'  => $salovothApril,
                                'salovothMay'  => $salovothMay,
                                'salovothJune'  => $salovothJune,
                                'salovothJuly'  => $salovothJuly,
                                'salovothAugust'  => $salovothAugust,
                                'salovothSeptember'  => $salovothSeptember,
                                'salovothOctober'  => $salovothOctober,
                                'salovothNovember'  => $salovothNovember,
                                'salovothDecember'  => $salovothDecember,
                                'salovothTotal'  => $salovothTotal,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));
		
		// computation for total cost of contracts
		$costContractsTJanuary = $repcostJanuaryTotal+$salovothJanuary;
        $costContractsTFebruary = $repcostFebruaryTotal+$salovothFebruary;
        $costContractsTMarch = $repcostMarchTotal+$salovothMarch;
        $costContractsTApril = $repcostAprilTotal+$salovothApril;
        $costContractsTMay = $repcostMayTotal+$salovothMay;
        $costContractsTJune = $repcostJuneTotal+$salovothJune;
        $costContractsTJuly = $repcostJulyTotal+$salovothJuly;
        $costContractsTAugust = $repcostAugustTotal+$salovothAugust;
        $costContractsTSeptember = $repcostSeptemberTotal+$salovothSeptember;
        $costContractsTOctober = $repcostOctoberTotal+$salovothOctober;
        $costContractsTNovember = $repcostNovemberTotal+$salovothNovember;
        $costContractsTDecember = $repcostDecemberTotal+$salovothDecember;
        $costContractsTTotal = $repcostTotalTotal+$salovothTotal;

        DB::table('repcostcontractstotal')->truncate();

        DB::table('repcostcontractstotal')->insert(
                array(
                        array(
                                'costContractsTJanuary' => $costContractsTJanuary,
                                'costContractsTFebruary' => $costContractsTFebruary,
                                'costContractsTMarch'  => $costContractsTMarch,
                                'costContractsTApril'  => $costContractsTApril,
                                'costContractsTMay'  => $costContractsTMay,
                                'costContractsTJune'  => $costContractsTJune,
                                'costContractsTJuly'  => $costContractsTJuly,
                                'costContractsTAugust'  => $costContractsTAugust,
                                'costContractsTSeptember'  => $costContractsTSeptember,
                                'costContractsTOctober'  => $costContractsTOctober,
                                'costContractsTNovember'  => $costContractsTNovember,
                                'costContractsTDecember'  => $costContractsTDecember,
                                'costContractsTTotal'  => $costContractsTTotal,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		// computation for income
		$allTJanuary = $incomeJanuaryTotal-($repcostJanuaryTotal+$salovothJanuary);
        $allTFebruary = $incomeFebruaryTotal-($repcostFebruaryTotal+$salovothFebruary);
        $allTMarch = $incomeMarchTotal-($repcostMarchTotal+$salovothMarch);
        $allTApril = $incomeAprilTotal-($repcostAprilTotal+$salovothApril);
        $allTMay = $incomeMayTotal-($repcostMayTotal+$salovothMay);
        $allTJune = $incomeJuneTotal-($repcostJuneTotal+$salovothJune);
        $allTJuly = $incomeJulyTotal-($repcostJulyTotal+$salovothJuly);
        $allTAugust = $incomeAugustTotal-($repcostAugustTotal+$salovothAugust);
        $allTSeptember = $incomeSeptemberTotal-($repcostSeptemberTotal+$salovothSeptember);
        $allTOctober = $incomeOctoberTotal-($repcostOctoberTotal+$salovothOctober);
        $allTNovember = $incomeNovemberTotal-($repcostNovemberTotal+$salovothNovember);
        $allTDecember = $incomeDecemberTotal-($repcostDecemberTotal+$salovothDecember);
        $allTTotal = $incomeTotalTotal-($repcostTotalTotal+$salovothTotal);

        DB::table('repalltotal')->truncate();

        DB::table('repalltotal')->insert(
                array(
                        array(
                                'allTJanuary' => $allTJanuary,
                                'allTFebruary' => $allTFebruary,
                                'allTMarch'  => $allTMarch,
                                'allTApril'  => $allTApril,
                                'allTMay'  => $allTMay,
                                'allTJune'  => $allTJune,
                                'allTJuly'  => $allTJuly,
                                'allTAugust'  => $allTAugust,
                                'allTSeptember'  => $allTSeptember,
                                'allTOctober'  => $allTOctober,
                                'allTNovember'  => $allTNovember,
                                'allTDecember'  => $allTDecember,
                                'allTTotal'  => $allTTotal,
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		return Redirect::to('incomeSummary')->with('totalCompute_success', 'Total Computed!');
	}

	public function show($pickYear)
	{
		// $additem = Po::where('po', '=', $po)->get();

		$pickedYear = IncomeSummary::where('year', '=', $pickYear)->get();

		return View::make('users.financing.incomeSummary', compact('pickedYear'));
		// return View::make('users.financing.year', compact('alls'));
	

		// $income = new IncomeSummary;
		// $income->contractTitle = Input::get('contractTitle');
		// $income->incomeJanuary= Input::get('incomeJanuary');
		// $income->incomeFebruary = Input::get('incomeFebruary');
		// $income->incomeMarch= Input::get('incomeMarch');
		// $income->incomeApril= Input::get('incomeApril');
		// $income->incomeMay= Input::get('incomeMay');
		// $income->incomeJune= Input::get('incomeJune');
		// $income->incomeJuly= Input::get('incomeJuly');
		// $income->incomeAugust= Input::get('incomeAugust');
		// $income->incomeSeptember= Input::get('incomeSeptember');
		// $income->incomeOctober= Input::get('incomeOctober');
		// $income->incomeNovember= Input::get('incomeNovember');
		// $income->incomeDecember= Input::get('incomeDecember');

		// $activity = new Activity;
		// $activity->user_id = Auth::user()->id;
		// $activity->action = 'added new Contract (Details)';
		// $activity->identifier = Input::get('contractTitle');
		
		// if($income->save())
		// {
		// 	$income = $income->contractTitle;
		
		// 	$activity->save();	
		// 	return Redirect::route('incomeSummary.show', ['contractTitle' => $income]);
		// }
	}

	public function chooseYear()
	{
		if ( $search = Request::get('search'))
		{
			$chooseYear = IncomeSummary::search($search)->paginate(6);
		}
		else
		{
			$chooseYear = IncomeSummary::paginate(6);
		}
		
		return View::make('users.financing.IncomeSummary', compact('chooseYear'));
	}

}
