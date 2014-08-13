<?php

class MrsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accounts
	 *
	 * @return Response
	 */
	public function index()
	{
		$proj = Project::all();
		return View::make('users.admin.mrs')->withProject($proj);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function store()
	{	
		$pname = Input::get('pname');
		$project_id = Project::where('project_name', '=', $pname)->first();

		$mrs = new Mrs;
		$mrs->project_id = $project_id->id;
		$mrs->mrsno = Input::get('mrsno');
		$mrs->save();

		$mrsItem = $mrs->id;

		$items = Mrs::where('project_id', '=' , $mrsItem)->get();

	return Redirect::route('mrs.show', ['pid' => $mrsItem])->withMrs($mrsItem);
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($pid)
	{
		$project = Project::where('id', '=', $pid)->get();

		$mrsitems = Mrs::where('project_id', '=', $pid)->get();

		return View::make('users.admin.addmrsitem')->withProject($project)->withMrs($mrsitems);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accounts/{id}/edit
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
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}