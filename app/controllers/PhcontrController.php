<?php

class PhcontrController extends BaseController {
	public function index()
	{

	}

public function store()
	{
		$phcontr = new Phcontr;
		$phcontr->salbracket = Input::get('salbracket');
		$phcontr->salrange = Input::get('salrange');
		$phcontr->salbase = Input::get('salbase');
		$phcontr->tmp = Input::get('tmp');
		$phcontr->empeeshare = Input::get('empeeshare');
		$phcontr->empershare = Input::get('empershare');
		$phcontr->save();

		return Redirect::to('rates2');
	}
public function show()
	{
		if ( $search = Request::get('search'))
		{
			$phealth = Phcontr::search($search)->get();
		}
		else
		{
			$phealth = Phcontr::all();
		}

		return View::make('users.accounting.rates2')->withPhcontr($phealth);
	}

public function editrate($id)
	{
		$phealth = Phcontr::where('id', '=', $id)->get();

		return View::make('users.accounting.changephilhealth')->withPhcontr($phealth);
	}

	public function update($id)
	{
		$phealth = Phcontr::find($id);
		$phealth->salbracket = Input::get('salbracket');
		$phealth->salrange= Input::get('salrange');
		$phealth->salbase = Input::get('salbase');
		$phealth->tmp= Input::get('tmp');
		$phealth->empershare= Input::get('empershare');
		$phealth->empeeshare= Input::get('empeeshare');

		$saved = $phealth->save();

		if ($saved)
		{
			return Redirect::to('rates2');
		}
		else
		{
			return 'not saved';
		}
	}
		public function destroy($id)
	{
		
		$phealth = Phcontr::find($id);

		$phealth->delete();


		return Redirect::back();
	}
}