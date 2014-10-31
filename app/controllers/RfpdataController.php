<?php

class RfpdataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /rfpdata
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /rfpdata/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /rfpdata
	 *
	 * @return Response
	 */
	public function store()
	{
	
		$rfp = new Rfp;
		$rfp->reason = Input::get('reason');
		$rfp->payee = Input::get('supp');
		$rfp->project_id = Input::get('project');
		$rfp->save();

		$rfpno = $rfp->id;
		$up = Po::query()->where('payment','=',0)->where('suppler_name','=',Input::get('supp'))->where('complete','=',1)->where('paid','=',0)->update(array(
			'payment'=>$rfpno
			));

		return Redirect::to('rfp');

	}

	/**
	 * Display the specified resource.
	 * GET /rfpdata/{id}
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
	 * GET /rfpdata/{id}/edit
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
	 * PUT /rfpdata/{id}
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
	 * DELETE /rfpdata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}