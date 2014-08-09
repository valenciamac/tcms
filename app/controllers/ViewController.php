<?php

class ViewController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /view
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /view/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /view
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /view/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()

	{
		if($search = Request::get('search'))
		{
			$purchase = User::search($search)->get();
		}
		else
		{
			$purchase = User::all();
		}
		return View::make('view')->withPo($purchase);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /view/{id}/edit
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
	 * PUT /view/{id}
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
	 * DELETE /view/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}