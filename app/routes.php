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
Route::get('view2', ['as' => 'view2' , function()
{

	return View::make('users.purchasing.view2');	

}])->before('auth|purchasing'); 
Route::get('purchase/{id}', ['uses' => 'PoController@edit' ])->before('auth|purchasing');
Route::get('purchase/{id}/update', ['uses' => 'PoController@update' ])->before('auth|purchasing');
Route::get('purchase/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('view2', ['as' => 'view2', 'uses' => 'ItemController@show' ])->before('auth|purchasing');
Route::get('payment', ['as' => 'payment' , function()
{

	return View::make('users.purchasing.payment');	

}])->before('auth|purchasing'); 
Route::resource('request', 'RequestController');
Route::get('product/{id}', ['uses' => 'ItemController@edit' ])->before('auth|purchasing');
Route::get('product/{id}/update', ['uses' => 'ItemController@update' ])->before('auth|purchasing');
Route::get('product/{id}/delete', ['uses' => 'ItemController@destroy' ])->before('auth|purchasing');
Route::get('public/accts', function()
{
	return User::orderBy('id', 'DESC')->get();
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
		$success = $user->save();	

})->before('auth|sysAdmin');

Route::post('save', function()
{
	$activity = new Activity;
	$activity->user_id = 4;
	$activity->action = 'may bagong gawa';
	$activity->save();

})->before('auth|sysAdmin');

Route::get('activities', function()
{
	return View::make('users.sysAdmin.activities');

})->before('auth|sysAdmin');

Route::get('save', function()
{
	return Activity::orderBy('id', 'DESC')->get();
})->before('auth|sysAdmin');

Route::get('employ', ['as' => 'employ' , function()
{

	return View::make('users.accounting.employ');	

}])->before('auth|accounting');

Route::get('employ2', ['as' => 'employ2' , function()
{

	return View::make('users.accounting.employ2');	

}])->before('auth|accounting');

Route::resource('employee', 'EmployeeController');

Route::get('employ2', ['as' => 'employ2', 'uses' => 'EmployeeController@show' ])->before('auth|accounting');

Route::get('payroll', ['as' => 'payroll', 'uses' => 'EmployeeController@shows' ])->before('auth|accounting');

Route::get('{id}', ['uses' => 'EmployeeController@edit' ])->before('auth|accounting');

Route::get('{id}/update', ['uses' => 'EmployeeController@update' ])->before('auth|accounting');

Route::get('{id}/delete', ['uses' => 'EmployeeController@destroy' ])->before('auth|accounting');

Route::get('vouchers', ['as' => 'vouchers' , function()
{

	return View::make('users.accounting.vouchers');	

}])->before('auth|accounting');