<?php

class RateController extends BaseController {
	public function index()
	{

	}
public function store()
	{
		$rat = new Rate;
		$rat->otpayrate = Input::get('otpayrate');
		$rat->otrestnspecholdrate = Input::get('otrestnspecholdrate');
		$rat->otrestspecholdrate = Input::get('otrestspecholdrate');
		$rat->otregholdrate = Input::get('otregholdrate');
		$rat->otrestonreghold = Input::get('otrestonreghold');
		$rat->save();

		return Redirect::to('ratesb');
	}
public function show()
	{
		if ( $search = Request::get('search'))
		{
			$rat = Rate::search($search)->get();
		}
		else
		{
			$rat = Rate::all();
		}

		return View::make('users.accounting.rates')->withRate($rat);
	}

public function editrate($id)
	{
		$rat = Rate::where('id', '=', $id)->get();

		return View::make('users.accounting.changerates')->withRate($rat);
	}
public function updaterate($id)
	{
		$rat = Rate::find($id);
		$rat->otpayrate = Input::get('otpayrate');
		$rat->otrestnspecholdrate = Input::get('otrestnspecholdrate');
		$rat->otrestspecholdrate = Input::get('otrestspecholdrate');
		$rat->otregholdrate = Input::get('otregholdrate');
		$rat->otrestonreghold = Input::get('otrestonreghold');
		$saved = $rat->save();

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
		$rat = Rate::find($id);

		$rat->delete();

		return Redirect::to('ratesb');
	}
	
	}
