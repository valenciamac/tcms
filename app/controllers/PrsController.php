<?php

class PrsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /prs
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$proprs = Project::all();
		return View::make('users.engineer.prs')->withProject($proprs);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prs
	 *
	 * @return Response
	 */
	public function store()
	{

		$prs = new Prs;
		$prs->proj_id=Input::get('project_id');
		$prs->model_id=Input::get('modelId');
		$prs->save();
		$id=$prs->id;
		$mod=$prs->model_id;
		$query = array($mod, $id);
		return Redirect::route('prsitem1', $query);

		
		
	}

	/**
	 * Display the specified resource.
	 * GET /prs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /prs/{id}/edit
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
	 * PUT /prs/{id}
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
	 * DELETE /prs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}