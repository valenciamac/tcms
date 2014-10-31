<?php

class ModelhouseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /modelhouse
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /modelhouse/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /modelhouse
	 *
	 * @return Response
	 */
	public function store()
	{
		$modelhouse = new Modelhouse;
		$modelhouse->modelName = Input::get('modelName');
		$modelhouse->project_id= Input::get('projectid');
		$modelhouse->save();

		$id=$modelhouse->id;
		return Redirect::route('bomitem.show', ['id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /modelhouse/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /modelhouse/{id}/edit
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
	 * PUT /modelhouse/{id}
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
	 * DELETE /modelhouse/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}