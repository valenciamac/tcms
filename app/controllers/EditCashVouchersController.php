<?php

class EditCashVouchersController extends BaseController {

public function index()
	{

	}
public function editcash($id)
	{
		$cash = Cashvouchers::where('id', '=', $id)->get();

		return View::make('users.accounting.editcash')->withCashvouchers($cash);
	}
public function editCI($id)
	{
		$cash = Cashitem::where('id', '=', $id)->get();
		$emp = Employee::with('payroll')->where('department','=','worksite')->get();
		$vouch = Cashvouchers::get();
		$lab = Labor::get();	

		return View::make('users.accounting.editCashItem')->withCashitem($cash)->withEmployee($emp)->withLabor($lab)->withCashvouchers($vouch);
	}
public function editCI3($id)
	{
		$cash = Cashitem3::where('id', '=', $id)->get();
		$emp = Employee::with('payroll')->where('department','=','worksite')->get();
		$vouch = Cashvouchers::get();
		$lab = Labor::get();	
		return View::make('users.accounting.editCashItem3')->withCashitem3($cash)->withCashvouchers($vouch)->withEmployee($emp)->withLabor($lab);
	}
public function update($id)
	{
		$voucher = Cashvouchers::find($id);
		$voucher->rfrom = Input::get('rfrom');
		$voucher->rpb = Input::get('rpb');
		$voucher->checkno = Input::get('checkno');
		$voucher->prepared = Input::get('prepared');
		$voucher->checked = Input::get('checked');
		$voucher->approved = Input::get('approved');
		$saved = $voucher->save();

		if ($saved)
		{
			return Redirect::to('cashvouchers');
		}
		else
		{
			return 'not saved';
		}
	}
public function updateCI($id)
	{
		$vitems = Cashitem::find($id);
		$vitems->payee = Input::get('payee');
		$vitems->labor = Input::get('labor');
		$vitems->descr = Input::get('descr');
		$vitems->amount = Input::get('amount');
		$vitems->less = Input::get('less');
		$vitems->acctitle = Input::get('acctitle');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$saved = $vitems->save();

		if ($saved)
		{
			return Redirect::to('cashvouchers');
		}
		else
		{
			return 'not saved';
		}
	}
public function updateCI3($id)
	{
		$vitems = Cashitem::find($id);
		$vitems->po_po = Input::get('po_po');
		$vitems->check = Input::get('check');
		$vitems->payee = Input::get('payee');
		$vitems->project = Input::get('project');
		$vitems->amount = Input::get('amount');
		$vitems->acctitle1 = Input::get('acctitle1');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$saved = $vitems->save();

		if ($saved)
		{
			return Redirect::to('cashvouchers');
		}
		else
		{
			return 'not saved';
		}
	}
}