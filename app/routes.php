<?php

Route::get('/', ['as' => 'home', function()
{
	return Redirect::to(Auth::user()->role);

}])->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('create', ['as' => 'create', function()
{
	return View::make('users.sysAdmin.createUser');

}])->before('auth|sysAdmin');

Route::get('admin', ['as' => 'admin', function()
{

	return View::make('users.admin.index');	

}])->before('auth|admin');


Route::get('accounts', ['as' => 'accounts', 'uses' => 'AccountsController@show' ])->before('auth|sysAdmin');

Route::get('sysAdmin', ['as' => 'sysAdmin' , function()
{

	return View::make('users.sysAdmin.index');	

}])->before('auth|sysAdmin');

Route::get('accounting', ['as' => 'accounting' , function()
{

	return View::make('users.accounting.index');	

}])->before('auth|accounting');

Route::get('purchasing', ['as' => 'purchasing' , function()
{

	return View::make('users.purchasing.index');	

}])->before('auth|purchasing');

Route::get('financing', ['as' => 'financing' , function()
{

	return View::make('users.financing.index');	

}])->before('auth|financing');

Route::get('purchaseOrder', ['as' => 'purchaseOrder' , function()
{

	return View::make('users.purchasing.purchaseOrder');	

}])->before('auth|purchasing');

Route::get('accounts/{id}', ['uses' => 'AccountsController@edit' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/update', ['uses' => 'AccountsController@update' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/delete', ['uses' => 'AccountsController@destroy' ])->before('auth|sysAdmin');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('profiles', 'ProfilesController');
Route::get('view', ['as' => 'view' , function()
{

	return View::make('users.purchasing.view');	

}])->before('auth|purchasing'); 
Route::get('view',['as' => 'view', 'uses' => 'PoController@show'])->before('auth|purchasing');
Route::resource('po', 'PoController');
Route::get('public/accts', function()
{
	return User::all();
})->before('auth|sysAdmin');

Route::post('accts', function()
{
		$user = new User;
		$user->fname = Input::get('fname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');
		$password = Input::get('password');
		$user->password = Hash::make($password);
		$user->role = Input::get('role');
		$user->save();

})->before('auth|sysAdmin');