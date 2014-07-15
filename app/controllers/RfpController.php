<?php

class RfpController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /rfp
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /rfp/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /rfp
	 *
	 * @return Response
	 */
	public function store()
	{
		$rfp = new Rfp;
		$rfp->controlNo = Input::get('controlNo');
		$rfp->payee = Input::get('payee');
		$rfp->requestedDate = Input::get('requestedDate');
		$rfp->reason = Input::get('reason');

		$detail = new Detail;
		$detail->po_number = Input::get('po_number');
		$detail->dr_number = Input::get('dr_number');
		$detail->si_number = Input::get('si_number');
		$detail->ci_number = Input::get('ci_number');
		$detail->so_number = Input::get('so_number');
		$detail->others = Input::get('others');
		$detail->description = Input::get('description');
		$detail->amount = Input::get('amount');
		$detail->controlNo = Input::get('controlNo');
		$detail->save();

		$rfp->save();
		return Redirect::to('payment');
	}

	/**
	 * Display the specified resource.
	 * GET /rfp/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$prf = Rfp::search($search)->paginate(5);
		}
		else
		{
			$prf = Rfp::paginate(5);
		}
		

		return View::make('users.purchasing.view3')->withRfp($prf);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /rfp/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prf = Rfp::where('id', '=', $id)->get();

		return View::make('users.purchasing.edit4')->withRfp($prf);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /rfp/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$prf= Rfp::find($id);
		$prf->controlNo = Input::get('controlNo');
		$prf->payee= Input::get('payee');
		$prf->requestedDate= Input::get('requestedDate');
		$prf->reason= Input::get('reason');

		$saved = $prf->save();

		if ($saved)
		{
			return Redirect::to('view3');
		}
		else
		{
			return 'not saved';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /rfp/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prf= Rfp::find($id);

		$prf->delete();

		return Redirect::back();
	}

}