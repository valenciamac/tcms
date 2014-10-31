<?php

use Carbon\Carbon;
class PoController extends \BaseController {

	public function store()
	{

		$po = new Po;
		$po->suppler_name = Input::get('suppler_name');
		$po->prs= Input::get('prs');
		$po->address= Input::get('address');
		$po->due_date= Carbon::now()->addDays(Input::get('terms'));
		$po->terms= Input::get('terms');
		$po->supplier_code= Input::get('supplier_code');
		$po->deliverTo= Input::get('deliverTo');
		$po->proj_id= Input::get('proj');
		$po->payment= 0;
		$po->save();
		
		if($po->save())
		{
			$pos = $po->id;
			$prs = Input::get('prs');
			$query = array($pos,$prs);
			return Redirect::route('prspongie', $query);
		}


		
		
	}
	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$purchase = Po::search($search)->paginate(5);
		}
		else
		{
			$purchase = Po::paginate(5);
		}
		

		return View::make('users.purchasing.view')->withPo($purchase);
	}

public function edit($id)
	{
		$purchase = Po::where('id', '=', $id)->get();

		return View::make('users.purchasing.edit')->withPo($purchase);
	}
	public function update($id)
	{
		$purchase = Po::find($id);
		$purchase->suppler_name = Input::get('suppler_name');
		$purchase->prs= Input::get('prs');
		$purchase->po = Input::get('po');
		$purchase->po_date= Input::get('po_date');
		$purchase->address= Input::get('address');
		$purchase->terms= Input::get('terms');
		$purchase->supplier_code= Input::get('supplier_code');
		$purchase->deliverTo= Input::get('deliverTo');

		$saved = $purchase->save();

		if ($saved)
		{
			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'edited a Purchase Order #';
			$activity->identifier = Input::get('po');
			$activity->save();
			return Redirect::to('view');
		}
		else
		{
			return 'not saved';
		}
	}
	public function destroy($id)
	{
		$purchase = Po::find($id);

		$purchase->delete();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'deleted a Purchase Order #';
		$activity->identifier = $purchase->po;
		$activity->save();

		return Redirect::back();
	}
	public function create()
	{
		$unrel = Checkvouchers::where('released','=','1')->get();
		$pay = Po::with('item', 'project')->where('paid','=','0')->get();
		$unpaid = Po::with('item')->where('paid','=','0')->get();
		$paid = Po::with('item')->where('paid','=','1')->get();
		return View::make('users.accounting.payable')->withCheckvouchers($unrel)->withPo($pay)->withUnpaid($unpaid)->withPaid($paid);
	}
}