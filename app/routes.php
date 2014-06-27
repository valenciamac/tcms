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

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');

