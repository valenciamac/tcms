<?php

class PoController extends \BaseController {

	public function store()
	{
		

		$po = new Po;
		$po->suppler_name = Input::get('suppler_name');
		$po->prs= Input::get('prs');
		$po->po = Input::get('po');
		$po->po_date= Input::get('po_date');
		$po->address= Input::get('address');
		$po->terms= Input::get('terms');
		$po->supplier_code= Input::get('supplier_code');
		$po->deliverTo= Input::get('deliverTo');

		$item = new Item;
		$item->qty = Input::get('qty');
		$item->name = Input::get('name');
		$item->desc = Input::get('desc');
		$item->price = Input::get('price');
		$item->amount = Input::get('amount');
		$item->po = Input::get('po');

		$item->save();
		$po->save();

		return Redirect::to('purchaseOrder');
		
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

		return Redirect::back();
	}

}