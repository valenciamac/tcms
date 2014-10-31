<?php

class RejectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reject
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reject/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reject
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /reject/{id}
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
	 * GET /reject/{id}/edit
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
	 * PUT /reject/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('invid')); $i++) {
			$mrsform = InvItem::find(Input::get('invid')[$i]);
			$mrsform->qty = $mrsform->qty - Input::get('rejects')[$i];
			$good = $mrsform->save();
			echo Input::get('invname')[$i];
			echo ' '.$good.' ';
			if($good)
			{
				if (Input::get('rejects')[$i] > 0) {
					
					Rejects::query()->insert(array(
							'invName' => Input::get('invname')[$i],
							'project_id' => $id,
							'qty' => Input::get('rejects')[$i],
							'idesc' => Input::get('idesc')[$i]
				));
				}
			}
		}
		return Redirect::back();
		die();
		// --check madapaka

		//d(count(Input::all())); die();

		for ($i=1; $i <= Input::get('count')[0]; $i++) {
			$j = $i - 1;
			$mrsform = InvItem::find(Input::get('invid')[$j]);
			//$mrsform = InvItem::find($id);
			//echo $id;
			$mrsform->qty = $mrsform->qty - Input::get('rejects')[$j];
			$good = $mrsform->save();
			
		}
		/*$mrsform = InvItem::find($id);
	
		$mrsform->qty = $mrsform->qty - Input::get('rejects');
		$good = $mrsform->save();
		*/
		for ($i=1; $i < Input::get('count')[0]; $i++) { 
			if($good)

			{
					$j = $i - 1;
					Mrsinv::query()->insert(array(
							'invName' => Input::get('invname')[$j],
							'mrsnum' => Input::get('mrsno')[$j],
							'qty' => Input::get('rejects')[$j],
							'idesc' => Input::get('idesc')[$j]
				));
				return Redirect::back();
			}
		}

		$delItem = InvItem::where('qty', '<=', 0)->delete();
		$delmrs = Mrsinv::where('qty', '<=', 0)->delete();
		$delete = Mrs::whereNotExists('mrsinv')->delete();
		return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /reject/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function kill($id)
	{	
		$p = Project::find($id);
		$inv = Invitem::with('project')->where('project_id' , '=' , $id)->get();
		return View::make('users.admin.reject')->withInvitem($inv)->withPro($p);
	}
}