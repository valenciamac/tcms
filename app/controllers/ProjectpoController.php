<?php

class ProjectpoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projectpo
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$prpo = Project::with(array('pos'=>function($q)
			{
				$q->with('item');
			}))->where('id','=',$id)->get();
		$pitem = Prs::get();

		return View::make('users.purchasing.projectpo')->withPrpo($prpo)->withPrs($pitem);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projectpo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projectpo
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /projectpo/{id}
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
	 * GET /projectpo/{id}/edit
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
	 * PUT /projectpo/{id}
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
	 * DELETE /projectpo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}