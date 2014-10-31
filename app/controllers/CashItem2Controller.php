<?php

class CashItem2Controller extends BaseController {

public function index()
	{

	}

public function show($checkno)
	{
		$vitem = Cashitem::where('cashvouchers_checkno', '=', $checkno)->get();
		$vouch = Cashvouchers::where('checkno', '=', $checkno)->get();
		return View::make('users.accounting.cashvouchersitems2')->withCashvouchers($vouch)->withCashitem($vitem);
	}
}