<?php

class AccountsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accounts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$emp = Employee::where('department','=','office')->orderby('id', 'asc')->get();
		$emp1 = Employee::orderby('id', 'asc')->get();
		return View::make('users.sysAdmin.employee')->withEmployee($emp)->withEmp($emp1);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$users = User::all();
		return View::make('users.sysAdmin.accounts')->withUser($users);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accounts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::where('id', '=', $id)->get();

		return View::make('users.sysAdmin.profile')->withUsers($user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);

		$user->fname = Input::get('fname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');
		$user->role = Input::get('role');

		$saved = $user->save();

		if ($saved)
		{
			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'edited an employee';
			$activity->identifier = Input::get('fname');
			$activity->save();

			return Redirect::to('accounts');
		}
		else
		{
			return 'not saved';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);

		$user->delete();

		return Redirect::back();
	}

}