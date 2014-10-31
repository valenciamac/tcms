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
		$rfp = Rfp::all();
		$suppliers = Suppliers::with('po')->get();
		$proj = Project::all();
		return View::make('users.purchasing.rfpindex')->withSuppliers($suppliers)
		->withRfp($rfp)
		->withProj($proj);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /rfp/create
	 *
	 * @return Response
	 */
	public function create($id,$supp,$project)
	{
		$rfpshow = Po::with('si.invoiceitem','dr.drinv','ci.ciitem','so.soitem','item')->where('payment','=',$id)->get();
		return View::make('users.purchasing.viewrfp')->withPo($rfpshow);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /rfp
	 *
	 * @return Response
	 */
	public function store()
	{
		$supp = Input::get('rfpname');
		$project = Input::get('project');
		$query = array($supp,$project);
		return Redirect::route('rfpshow', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /rfp/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($supp, $project)
	{
		$proj = Project::where('project_name','=',$project)->first();
		$project = $proj->id;
		$po = Po::with(array('si.invoiceitem','dr.drinv','ci.ciitem','so.soitem'))->where('complete', '=', 1)->where('suppler_name','=',$supp)->where('proj_id','=',$project)->where('paid','=',0)->where('payment','=',0)->get();
		
		return View::make('users.purchasing.newrfp')->withPo($po)->withProj($proj);
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
		$rfp = Rfp::with('project')->find($id);
		$po = Po::where('payment','=',$id)->get();
		return View::make('users.purchasing.viewrfpinfo')
		->withRfp($rfp)
		->withPo($po);
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
		//
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
		//
	}

}