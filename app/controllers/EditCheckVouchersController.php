<?php

class EditCheckVouchersController extends BaseController {

public function index()
	{

	}
public function editcheck($id)
	{
		$check = Checkvouchers::where('id', '=', $id)->get();

		return View::make('users.accounting.editcheck')->withCheckvouchers($check);
	}
public function editCI($id)
	{
		$check = Checkitem::where('id', '=', $id)->get();
		$vouch = Checkvouchers::where('id', '=', $id)->get();
		$banks = Bank::get();

		return View::make('users.accounting.editcheckitem')->withCheckitem($check)->withCheckvouchers($vouch)->withBank($banks);
	}
public function update($id)
	{
		$voucher = Checkvouchers::find($id);
		$voucher->rfrom = Input::get('rfrom');
		$voucher->rpb = Input::get('rpb');
		$voucher->checkno = Input::get('checkno');
		$voucher->prepared = Input::get('prepared');
		$voucher->checked = Input::get('checked');
		$voucher->approved = Input::get('approved');
		$saved = $voucher->save();

		if ($saved)
		{
			return Redirect::to('checkvouchers');
		}
		else
		{
			return 'not saved';
		}
	}
public function updateCI($id)
	{
		$vitems = Checkitem::find($id);
		$vitems->po_po = Input::get('po_po');
		$vitems->check = Input::get('check');
		$vitems->project = Input::get('project');
		$vitems->checkdate = Input::get('checkdate');
		$vitems->payee = Input::get('payee');
		$vitems->bank = Input::get('bank');
		$vitems->acctitle1 = Input::get('acctitle1');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$saved = $vitems->save();

		if ($saved)
		{
			return Redirect::to('checkvouchersitems');
		}
		else
		{
			return 'not saved';
		}
	}
}