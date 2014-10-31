<?php

class CashDetails3Controller extends BaseController {

public function index()
	{

	}
public function store()
	{
		$vitems = new Cashitem3;
		$vitems->cashvouchers_checkno = Input::get('cashvouchers_checkno');
		$vitems->po_po = Input::get('po_po');
		$vitems->check = Input::get('check');
		$vitems->project = Input::get('project');
		$vitems->amount = Input::get('amount');
		$vitems->acctitle1 = Input::get('acctitle1');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$vitems->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new voucher item';
		$activity->identifier = Input::get('check');
		$activity->save();

		return Redirect::back();
	}

public function show($checkno)
	{
		$vitem = Cashitem3::where('cashvouchers_checkno', '=', $checkno)->get();
		$vouch = Cashvouchers::where('checkno', '=', $checkno)->get();
		$purchase = Po::with('project')->orderby('po')->get();
		$item =Item::with('po')->get();
		$acctitle = Accounttitle::get();
		return View::make('users.accounting.cashvouchersdetails3')->withCashvouchers($vouch)->withCashitem3($vitem)->withPo($purchase)->withItem($item)->withAccounttitle($acctitle);
	}

}