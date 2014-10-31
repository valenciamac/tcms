<?php

class SsscontrController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ssscontr
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ssscontr/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ssscontr
	 *
	 * @return Response
	 */
	public function store()
	{
		$ssscontr = new Ssscontr;
		$ssscontr->rangemin = Input::get('rangemin');
		$ssscontr->rangemax = Input::get('rangemax');
		$ssscontr->credit= Input::get('credit');
		$ssscontr->ssempershare = Input::get('ssempershare');
		$ssscontr->ssempeeshare= Input::get('ssempeeshare');
		$ssscontr->sstotal= Input::get('sstotal');
		$ssscontr->ecempershare= Input::get('ecempershare');
		$ssscontr->tcempershare= Input::get('tcempershare');
		$ssscontr->tcempeeshare= Input::get('tcempeeshare');
		$ssscontr->tctotal= Input::get('tctotal');
		$ssscontr->save();
		return Redirect::to('ratesg');
	}

	/**
	 * Display the specified resource.
	 * GET /ssscontr/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
			$ssscontr = Ssscontr::all();
		

		return View::make('users.accounting.ratesg')->withSsscontr($ssscontr);
	}


	public function editrate($id)
	{
		$ssscontr = Ssscontr::where('id', '=', $id)->get();

		return View::make('users.accounting.changesss')->withSsscontr($ssscontr);
	}
	/**
	 * Show the form for editing the specified resource.
	 * GET /ssscontr/{id}/edit
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
	 * PUT /ssscontr/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ssscontr = Ssscontr::find($id);
		$ssscontr->range = Input::get('range');
		$ssscontr->credit= Input::get('credit');
		$ssscontr->ssempershare = Input::get('ssempershare');
		$ssscontr->ssempeeshare= Input::get('ssempeeshare');
		$ssscontr->sstotal= Input::get('sstotal');
		$ssscontr->ecempershare= Input::get('ecempershare');
		$ssscontr->tcempershare= Input::get('tcempershare');
		$ssscontr->tcempeeshare= Input::get('tcempeeshare');
		$ssscontr->tctotal= Input::get('tctotal');
		$ssscontr->totalcontr= Input::get('totalcontr');

		$saved = $ssscontr->save();

		if ($saved)
		{
			return Redirect::to('ratesg');
		}
		else
		{
			return 'not saved';
		}
	}
		public function destroy($id)
	{
		
		$ssscontr = Ssscontr::find($id);

		$ssscontr->delete();


		return Redirect::back();
	}

}