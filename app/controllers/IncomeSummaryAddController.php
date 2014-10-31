<?php

class IncomeSummaryAddController extends \BaseController {

	
	// public function show($id)
	// {
	// 	return View::make('users.financing.incomeSummaryAdd');
	// }

	public function store()
	{
		$pname = Input::get('pname');
		$project_id = Project::where('project_name', '=', $pname)->first();

		$detail = new IncomeSummaryAdd;
		$detail->project_id = $project_id->id;
		$detail->incomeJanuary= Input::get('incomeJanuary');
		$detail->incomeFebruary = Input::get('incomeFebruary');
		$detail->incomeMarch= Input::get('incomeMarch');
		$detail->incomeApril= Input::get('incomeApril');
		$detail->incomeMay= Input::get('incomeMay');
		$detail->incomeJune= Input::get('incomeJune');
		$detail->incomeJuly= Input::get('incomeJuly');
		$detail->incomeAugust= Input::get('incomeAugust');
		$detail->incomeSeptember= Input::get('incomeSeptember');
		$detail->incomeOctober= Input::get('incomeOctober');
		$detail->incomeNovember= Input::get('incomeNovember');
		$detail->incomeDecember= Input::get('incomeDecember');
		$total=$detail->incomeJanuary+$detail->incomeFebruary+
				$detail->incomeMarch+$detail->incomeApril+
				$detail->incomeMay+$detail->incomeJune+
				$detail->incomeJuly+$detail->incomeAugust+
				$detail->incomeSeptember+$detail->incomeOctober+
				$detail->incomeNovember+$detail->incomeDecember;
		$detail->incomeTotal = $total;	
		$detail->save();

		// return Redirect::route('incomesummaryadd.show', ['pid' => $mrsItem])->withMrs($mrsItem);
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

	// public function show($pid)
	// {
	// 	$project = Project::where('id', '=', $pid)->get();

	// 	$mrsitems = Mrs::where('project_id', '=', $pid)->get();

	// 	return View::make('users.admin.addmrsitem')->withProject($project)->withMrs($mrsitems);
	// }

	public function edit($id)
	{
		$detail = IncomeSummaryAdd::where('id', '=', $id)->get();

		return View::make('users.financing.incomeSummaryAdd', compact('detail'));
		// return View::make('users.sysAdmin.profile')->withUsers($user);
	}

	

	// public function create()
	// {
	// 	return View::make('users.financing.incomeSummaryAdd');
	// }
}
