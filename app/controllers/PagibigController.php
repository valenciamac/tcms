<?php

class PagibigController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pagibig
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pagibig/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pagibig
	 *
	 * @return Response
	 */
	public function store()
	{
		$pagibig= new Pagibig;
		$pagibig->pagibigmin=Input::get('pagibigmin');
		$pagibig->pagibigmax=Input::get('pagibigmax');
		$pagibig->employeeshare= Input::get('employeeshare');
		$pagibig->save();

		return Redirect::to('ratesf');
	}

	/**
	 * Display the specified resource.
	 * GET /pagibig/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$pagibig = Pagibig::all();
		

		return View::make('users.accounting.ratesf')->withPagibig($pagibig);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pagibig/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pagibig = Pagibig::where('id', '=', $id)->get();

		return View::make('users.accounting.changepagibig')->withPagibig($pagibig);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pagibig/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pagibig = Pagibig::find($id);
		$pagibig->pagibigmin=Input::get('pagibigmin');
		$pagibig->pagibigmax=Input::get('pagibigmax');
		$pagibig->employeeshare= Input::get('employeeshare');

		$saved = $pagibig->save();

		if ($saved)
		{
			return Redirect::to('ratesf');
		}
		else
		{
			return 'not saved';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pagibig/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pagibig = Pagibig::find($id);

		$pagibig->delete();


		return Redirect::back();
	}

}