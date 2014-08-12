<?php

class IncomeSummaryController extends \BaseController {

	public function store()
	{
		

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
