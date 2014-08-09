<?php

class DetailController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /detail
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /detail/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /detail
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /detail/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$info = Detail::search($search)->paginate(5);
		}
		else
		{
			$info = Detail::paginate(5);
		}
		

		return View::make('users.purchasing.view4')->withDetail($info);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /detail/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$info = Detail::where('id', '=', $id)->get();

		return View::make('users.purchasing.edit3')->withDetail($info);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /detail/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$info = Detail::find($id);
		$info->po_number = Input::get('po_number');
		$info->dr_number= Input::get('dr_number');
		$info->si_number= Input::get('si_number');
		$info->ci_number= Input::get('ci_number');
		$info->so_number= Input::get('so_number');
		$info->others= Input::get('others');
		$info->description= Input::get('description');
		$info->amount= Input::get('amount');

		$saved = $info->save();

		if ($saved)
		{
			return Redirect::to('view4');
		}
		else
		{
			return 'not saved';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /detail/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$info = Detail::find($id);

		$info->delete();

		return Redirect::back();
	}

}