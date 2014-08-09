<?php

class HoursController extends BaseController {
	public function index()
	{

	}
public function store()
	{
		$hours = new Hoursrate;
		$hours->resthour = Input::get('resthour');
		$hours->specialhour= Input::get('specialhour');
		$hours->reghour = Input::get('reghour');
		$hours->resthold = Input::get('resthold');
		$hours->save();

		return Redirect::to('ratesd');
	}
public function show()
	{
		if ( $search = Request::get('search'))
		{
			$hour = Hoursrate::search($search)->get();
		}
		else
		{
			$hour = Hoursrate::all();
		}

		return View::make('users.accounting.ratesd')->withHoursrate($hour);
	}

public function edithours($id)
	{
		$hours = Hoursrate::where('id', '=', $id)->get();

		return View::make('users.accounting.changehours')->withHoursrate($hour);
	}

public function updatehours($id)
	{
		$hours = new Hoursrate;
		$hours->resthour = Input::get('resthour');
		$hours->specialhour = Input::get('specialhour');
		$hours->reghour= Input::get('reghour');
		$hours->resthold= Input::get('resthold');
		if ($saved)
		{
			return Redirect::to('hoursrate');
		}
		else
		{
			return 'not saved';
		}
	}
public function destroy($id)
	{
		$hours = hourse::find($id);

		$hours->delete();

		return Redirect::to('rates');
	}
}