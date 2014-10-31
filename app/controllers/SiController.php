<?php

class SiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /si
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /si/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /si
	 *
	 * @return Response
	 */
	public function store()
	{
		$si = new Si;
		$si->po_po = Input::get('po');
		$si->num = Input::get('si');
		$si->save();

		$num = $si->num;
		$po = $si->po_po;
		$query = array($po, $num);
		return Redirect::route('siinv', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /si/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($po, $num)
	{
		$ponum = Po::where('id','=', $po)->get();
		$purchase = Item::where('po_po', '=', $po)->get();
		$sis = Si::with('po')->where('num' , '=', $num)->get();


		return View::make('users.admin.sinv')->withSi($sis)
						->withPo($ponum)
						->withItem($purchase);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /si/{id}/edit
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
	 * PUT /si/{id}
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
	 * DELETE /si/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}