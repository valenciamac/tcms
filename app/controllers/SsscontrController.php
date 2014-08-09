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
		$ssscontr->save();
		return Redirect::to('rates3');
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
		if ( $search = Request::get('search'))
		{
			$ssscont = Ssscontr::search($search)->get();
		}
		else
		{
			$ssscont = Ssscontr::all();
		}

		return View::make('users.accounting.rates3')->withSsscontr($ssscont);
	}


	public function editrate($id)
	{
		$ssscont = Ssscontr::where('id', '=', $id)->get();

		return View::make('users.accounting.changesss')->withSsscontr($ssscont);
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
		$ssscont = Ssscontr::find($id);
		$ssscont->range = Input::get('range');
		$ssscont->credit= Input::get('credit');
		$ssscont->ssempershare = Input::get('ssempershare');
		$ssscont->ssempeeshare= Input::get('ssempeeshare');
		$ssscont->sstotal= Input::get('sstotal');
		$ssscont->ecempershare= Input::get('ecempershare');
		$ssscont->tcempershare= Input::get('tcempershare');
		$ssscont->tcempeeshare= Input::get('tcempeeshare');
		$ssscont->tctotal= Input::get('tctotal');
		$ssscont->totalcontr= Input::get('totalcontr');

		$saved = $ssscont->save();

		if ($saved)
		{
			return Redirect::to('rates3');
		}
		else
		{
			return 'not saved';
		}
	}
		public function destroy($id)
	{
		
		$ssscont = Ssscontr::find($id);

		$ssscont->delete();


		return Redirect::back();
	}

}