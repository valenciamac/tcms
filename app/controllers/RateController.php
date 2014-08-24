<?php

class RateController extends BaseController {
	public function index()
	{

	}
public function store()
	{
		$rates = new Rate;
		$rates->otpayrate = Input::get('otpayrate');
		$rates->otrestnspecholdrate = Input::get('otrestnspecholdrate');
		$rates->otrestspecholdrate = Input::get('otrestspecholdrate');
		$rates->otregholdrate = Input::get('otregholdrate');
		$rates->otrestonreghold = Input::get('otrestonreghold');
		$rates->save();

		return Redirect::to('rates');
	}
public function show()
	{
		
			$rates = Rate::all();
	

		return View::make('users.accounting.rates')->withRate($rates);
	}

public function editrate($id)
	{
		$rates = Rate::where('id', '=', $id)->get();

		return View::make('users.accounting.changerates')->withRate($rates);
	}
public function updaterate($id)
	{
		$rates = Rate::find($id);
		$rates->otpayrate = Input::get('otpayrate');
		$rates->otrestnspecholdrate = Input::get('otrestnspecholdrate');
		$rates->otrestspecholdrate = Input::get('otrestspecholdrate');
		$rates->otregholdrate = Input::get('otregholdrate');
		$rates->otrestonreghold = Input::get('otrestonreghold');
		$saved = $rates->save();

		if ($saved)
		{
			return Redirect::to('rates');
		}
		else
		{
			return 'not saved';
		}
	}
public function destroy($id)
	{
		$rates = Rate::find($id);

		$rates->delete();

		return Redirect::back();
	}
	
	}
