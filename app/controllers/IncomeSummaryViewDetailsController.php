<?php

class IncomeSummaryViewDetailsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /incomesummaryedit
	 *
	 * @return Response
	 */
	public function index()
	{
		// $year = IncomeSummaryViewDetails::all();
		// return View::make('users.financing.IncomeSummaryViewDetails', compact('year'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /incomesummaryedit/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /incomesummaryedit
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /incomesummaryedit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $project_id = Project::where('id', '=', $id)->first();

		$year = IncomeSummaryViewDetails::with('project')->where('project_id', '=', $id)->get();
		// $year = IncomeSummaryViewDetails::find($project_id);
		// $mrs->project_id = $project_id->id;
		// $mrs->mrsno = Input::get('mrsno');
		// $mrs->save();
		// return $year;
		return View::make('users.financing.IncomeSummaryViewDetails', compact('year'));

		// $mrsItem = $mrs->id;

		// $items = Mrs::where('project_id', '=' , $mrsItem)->get();

		// return Redirect::route('mrs.show', ['pid' => $mrsItem])->withMrs($mrsItem);

		// $year = IncomeSummaryViewDetails::where('id', '=', $id)->get();

        // return View::make('users.financing.IncomeSummaryViewDetails')->withIncomeSummaryViewDetails($year);
        // return View::make('users.financing.IncomeSummaryViewDetails', compact('year', 'project'));
	}

	public function show2($pid)
	{
		$project = Project::where('id', '=', $pid)->get();

		// return View::make('users.admin.addmrsitem')->withProject($project)->withMrs($mrsitems);
		return Redirect::route('income.show', ['pid' => $mrsItem])->withMrs($mrsItem);
		$year = IncomeSummaryViewDetails::where('id', '=', $id)->get();

        // return View::make('users.financing.IncomeSummaryViewDetails')->withIncomeSummaryViewDetails($year);
        return View::make('users.financing.IncomeSummaryViewDetails', compact('year', 'project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /incomesummaryedit/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /incomesummaryedit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}