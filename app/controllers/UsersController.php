<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$bahay = Modelhouse::all();
		$mason = Masonry::all();
		$form = Formworks::all();
		$bakal = Steel::all();
		$carp = Carpentry::all();
		$tin = Thinmistry::all();
		$rus = Truss::all();
		$hard = Hardware::all();
		$elit = Tile::all();
		$pinto = Door::all();
		$elect = Electrical::all();
		$plum = Plumbing::all();
		$pintura = Paint::all();
		$in = Comein::find(1);
		$po = Po::where('created_at','>=', Carbon::now()->subweek())->where('created_at','<=', Carbon::now())->get();
		$item = Item::all();
		$bud = Budget::all();
		$emp = Employee::orderby('created_at','desc')->get();
		$users = User::all();
		$proj = Project::with('pos')->orderby('created_at', 'desc')->get();
		
		return View::make('users.sysAdmin.index')
					->withUser($users)
					->withProject($proj)
					->withEmp($emp)
					->withIn($in)
					->withBud($bud)
					->withItem($item)
					->withPo($po)
					->withModelhouse($bahay)
					->withMasonry($mason)
					->withFormworks($form)
					->withSteel($bakal)
					->withCarpentry($carp)
					->withThinmistry($tin)
					->withTruss($rus)
					->withHardware($hard)
					->withTile($elit)
					->withDoor($pinto)
					->withElectrical($elect)
					->withPlumbing($plum)
					->withPaint($pintura);


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->fname = Input::get('fname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');
		$password = Input::get('password');
		$user->password = Hash::make($password);
		$user->role = Input::get('role');
		$success = $user->save();

		return Redirect::to('login');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Auth::logout();

		return Redirect::home();
	}

}