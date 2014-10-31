<?php
use Carbon\Carbon; 

class purchasesController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 * GET /adminpos
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchases = Po::all();
		return View::make('users.admin.adminPOs.index')->withPo($purchases);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminpos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$supplier = Suppliers::all();
		$proj = Project::with('pos')->get();
		$po = Po::where('created_at','>=', Carbon::now()->subweek())->get();
		
		return View::make('users.purchasing.purchaseOrder')->withSuppliers($supplier)
		->withProject($proj)
		->withPo($po);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminpos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /adminpos/{id}
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
	 * GET /adminpos/{id}/edit
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
	 * PUT /adminpos/{id}
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
	 * DELETE /adminpos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}