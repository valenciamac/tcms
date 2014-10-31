<?php

class InventoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /inventory
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /inventory/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.sysAdmin.inventorymain');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /inventory
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /inventory/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = $addproject = Project::where('id', '=', $id)->get();
		$inventory = InvItem::with('InvDesc')->where('project_id', $id)->get();

		return View::make('users.sysAdmin.inventory')->withInvItem($inventory)->withProject($addproject);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /inventory/{id}/edit
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
	 * PUT /inventory/{id}
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
	 * DELETE /inventory/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}