<?php

class IncomeSummaryAddController extends \BaseController {

	
	public function store()
	{
		$incomeSummary = new IncomeSummaryAdd;
		$incomeSummary->contractTitle = Input::get('contractTitle');
		$incomeSummary->incomeJanuary= Input::get('incomeJanuary');
		$incomeSummary->incomeFebruary = Input::get('incomeFebruary');
		$incomeSummary->incomeMarch= Input::get('incomeMarch');
		$incomeSummary->incomeApril= Input::get('incomeApril');
		$incomeSummary->incomeMay= Input::get('incomeMay');
		$incomeSummary->incomeJune= Input::get('incomeJune');
		$incomeSummary->incomeJuly= Input::get('incomeJuly');
		$incomeSummary->incomeAugust= Input::get('incomeAugust');
		$incomeSummary->incomeSeptember= Input::get('incomeSeptember');
		$incomeSummary->incomeOctober= Input::get('incomeOctober');
		$incomeSummary->incomeNovember= Input::get('incomeNovember');
		$incomeSummary->incomeDecember= Input::get('incomeDecember');
		$total=$incomeSummary->incomeJanuary+$incomeSummary->incomeFebruary+
				$incomeSummary->incomeMarch+$incomeSummary->incomeApril+
				$incomeSummary->incomeMay+$incomeSummary->incomeJune+
				$incomeSummary->incomeJuly+$incomeSummary->incomeAugust+
				$incomeSummary->incomeSeptember+$incomeSummary->incomeOctober+
				$incomeSummary->incomeNovember+$incomeSummary->incomeDecember;
		$incomeSummary->incomeTotal = $total;	
		$incomeSummary->save();

		return Redirect::to('incomeSummaryAdd');

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

	public function create()
	{
		return View::make('users.financing.incomeSummaryAdd');
	}
}
