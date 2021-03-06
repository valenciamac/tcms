<?php

class DrController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dr
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dr/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dr
	 *
	 * @return Response
	 */
	public function store()
	{
		$dr = new Dr;
		$dr->po_po = Input::get('po');
		$dr->num = Input::get('dr');
		$dr->save();
		$num = $dr->num;
		$po = $dr->po_po;
		$query = array($po, $num);
		return Redirect::route('drinv', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /dr/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($po, $num)
	{
		$ponum = Po::where('po','=', $po)->get();
		$purchase = Item::where('po_po', '=', $po)->get();
		$drs = Dr::with('po')->where('num' , '=', $num)->get();


		return View::make('users.admin.drinv')->withDr($drs)
						->withPo($ponum)
						->withItem($purchase);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dr/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($po,$num,$id)
	{
		$invform = Item::find($id);

		$invform->delivered = Input::get('delivered');
		$invform->edit_this = $invform->edit_this-Input::get('delivered');
		$good = $invform->save();

		$check = Item::with('po')->where('edit_this','>',0)->where('po_po','=',Input::get('po'))->get();

		if(empty($check->count()))
		{
			$checked = Po::where('po','=',Input::get('po'))->get();
			foreach($checked as $done)
			{
						$done->complete = 1;
						$done->due_date = Carbon::now()->addDays($done->terms);
						$done->save();
			}
		}

		if ($good)
		{

			$iid = Input::get('invnum');
			$iname = Input::get('iname');

			$exid = Drinv::where('invnum', '=', $iid)->where('iname', '=', $iname)->where('idesc', '=', Input::get('idesc'))->get();
			if ($exid->count())
			{
				foreach($exid as $ex)
				{
					$ex->iqty = $ex->iqty + Input::get('delivered');
					$ok = $ex->save();

					if($ok)
					{
						return Redirect::back();
					}
				}
			}
			else
			{
			$inv = new InvItem;
			$inv->project_id = Input::get('projid');
			$inv->invName = Input::get('iname');
			$inv->idesc = Input::get('idesc');
			$inv->qty = Input::get('delivered');
			$inv->save();
			
			$num = new Drinv;
			$num->invnum = Input::get('invnum');
			$num->iname = Input::get('iname');
			$num->idesc = Input::get('idesc');
			$num->iprice = Input::get('iprice');
			$num->iqty = Input::get('delivered');
			$num->save();
					return Redirect::back();
			}				
		}

		else
		{
		return 'not saved';
		}
}		

	/**
	 * Update the specified resource in storage.
	 * PUT /dr/{id}
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
	 * DELETE /dr/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}