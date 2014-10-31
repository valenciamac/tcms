<?php

class MrsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accounts
	 *
	 * @return Response
	 */
	public function index()
	{
		$proj = Project::all();
		return View::make('users.admin.mrs')->withProject($proj);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function store()
	{	
		$mrs = new Mrs;
		$mrs->project_id = Input::get('projid');
		$mrs->unit = Input::get('unit');
		$mrs->save();


		$pid = $mrs->project_id;
		$mid = $mrs->id;
		$query = array($pid, $mid);
		return Redirect::route('mrsshows', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($pid)
	{
		$proj = Project::with(array('invitem'=>function($ok)
			{
				$ok->where('qty','=',0);
			}))->where('id', '=', $pid)->get();
		$mrsitems = Mrs::where('project_id','=', $pid)->get();

		return View::make('users.admin.addmrsitem')->withProject($proj)->withMrs($mrsitems);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accounts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($pid, $mid)
	{
		$proj = Project::with('invitem')->where('id', '=', $pid)->get();
		$mrs = Mrs::with('mrsinv')->where('id','=',$mid)->get();
		
		return View::make('users.admin.mrsinv')->withProject($proj)->withMrs($mrs);
	}
	public function view($pid, $mid)
	{
		$proj = Project::with('invitem')->where('id', '=', $pid)->get();
		$mrs = Mrs::with('mrsinv')->where('id','=',$mid)->get();

		return View::make('users.admin.mrsview')->withProject($proj)->withMrs($mrs);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($pid,$mid,$id)
	{

		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('invid')); $i++) 
		{
			$mrsform = InvItem::find(Input::get('invid')[$i]);
			$mrsform->qty = $mrsform->qty - Input::get('delivered')[$i];
			$good = $mrsform->save();
			if($good)
			{
				if (Input::get('delivered')[$i] > 0) {
					
					Mrsinv::query()->insert(array(
							'invName' => Input::get('invname')[$i],
							'mrsnum' => Input::get('mrsno')[$i],
							'qty' => Input::get('delivered')[$i],
							'idesc' => Input::get('idesc')[$i]
				));
				$mason = Masonry::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($mason))
				{
					$mason->edit_this = $mason->edit_this + Input::get('delivered')[$i];
					$mason->save();
				}
				$form = Formworks::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($form))
				{
					$form->edit_this = $form->edit_this + Input::get('delivered')[$i];
					$form->save();
				}
				$steel = Steel::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($steel))
				{
					$steel->edit_this = $steel->edit_this + Input::get('delivered')[$i];
					$steel->save();
				}
				$carp = Carpentry::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($carp))
				{
					$carp->edit_this = $carp->edit_this + Input::get('delivered')[$i];
					$carp->save();
				}
				$tin = Thinmistry::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($tin))
				{
					$tin->edit_this = $tin->edit_this + Input::get('delivered')[$i];
					$tin->save();
				}
				$truss = Truss::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($truss))
				{
					$truss->edit_this = $truss->edit_this + Input::get('delivered')[$i];
					$truss->save();
				}
				$ware = Hardware::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($ware))
				{
					$ware->edit_this = $ware->edit_this + Input::get('delivered')[$i];
					$ware->save();
				}
				$tile = Tile::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($tile))
				{
					$tile->edit_this = $tile->edit_this + Input::get('delivered')[$i];
					$tile->save();
				}
				$tile = Tile::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($tile))
				{
					$tile->edit_this = $tile->edit_this + Input::get('delivered')[$i];
					$tile->save();
				}
				$doors = Door::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($doors))
				{
					$doors->edit_this = $doors->edit_this + Input::get('delivered')[$i];
					$doors->save();
				}
				$elec = Electrical::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($elec))
				{
					$elec->edit_this = $elec->edit_this + Input::get('delivered')[$i];
					$elec->save();
				}
				$plum = Plumbing::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($plum))
				{
					$plum->edit_this = $plum->edit_this + Input::get('delivered')[$i];
					$plum->save();
				}
				$paint = Paint::where('itemdesc','=',Input::get('invname')[$i])->first();
				if(!empty($paint))
				{
					$paint->edit_this = $paint->edit_this + Input::get('delivered')[$i];
					$paint->save();
				}
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
			$mrsform->qty = $mrsform->qty - Input::get('delivered')[$j];
			$good = $mrsform->save();
			
		}
		/*$mrsform = InvItem::find($id);
	
		$mrsform->qty = $mrsform->qty - Input::get('delivered');
		$good = $mrsform->save();
		*/
		for ($i=1; $i < Input::get('count')[0]; $i++) { 
			if($good)

			{
					$j = $i - 1;
					Mrsinv::query()->insert(array(
							'invName' => Input::get('invname')[$j],
							'mrsnum' => Input::get('mrsno')[$j],
							'qty' => Input::get('delivered')[$j],
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
	 * DELETE /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}