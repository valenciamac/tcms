
<?php
use Carbon\Carbon;
Route::get('/', ['as' => 'home', function()
{
	return Redirect::to(Auth::user()->role);

}])->before('auth');
Route::get('login', 'SessionsController@create');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);

// for system Admins
Route::group(array('before' => 'auth|sysAdmin'), function()
{
    Route::get('create', ['as' => 'create', function()
	{
		return View::make('users.sysAdmin.createUser');
	}]);

	Route::get('project/{id}/delete', ['uses' => 'ProjectsController@destroy']);
	Route::get('projectpo/{id}', ['uses' => 'ProjectsController@edit']);

	Route::get('inventory/{id}', ['uses' => 'InventoryController@show']);

	Route::get('project/{id}/addtemplate', ['uses' => 'addtemplateController@create']);

	Route::get('accounts', ['as' => 'accounts', 'uses' => 'AccountsController@show' ]);

	Route::get('sysAdmin', ['as' => 'sysAdmin' , 'uses' => 'UsersController@create']);

	Route::get('accounts/{id}', ['uses' => 'AccountsController@edit' ]);
	Route::get('accounts/{id}/update', ['uses' => 'AccountsController@update' ]);
	Route::get('accounts/{id}/delete', ['uses' => 'AccountsController@destroy' ]);
	Route::get('addproject', function()
	{
		return Project::all();
	});
	Route::get('pageweeklypo', function()
	{

		$po = Po::where('created_at','>=', Carbon::now()->subweek())->orderby('created_at', 'desc')->get();
		return View::make('users.sysAdmin.adminLayouts.weeklypo')->withPo($po);
	});
	Route::get('pageprojects', function()
	{
		$proj = Project::with('pos')->orderby('created_at', 'desc')->get();
		return View::make('users.sysAdmin.adminLayouts.project3')->withProject($proj);
	});
	Route::get('pageemployee', function()
	{
		$emp = Employee::orderby('created_at','desc')->get();
		return View::make('users.sysAdmin.adminLayouts.emp')->withEmp($emp);
	});
	Route::get('pageincome', function()
	{
		return View::make('users.sysAdmin.adminLayouts.project3');
	});

	Route::get('employees',[ 'as' => 'employee' , 'uses' => 'AccountsController@create']);
	Route::resource('inventory', 'InventoryController');
	Route::get('inventory', ['uses' => 'InventoryController@create']);
	Route::get('public/accts', function()
	{
		return User::orderBy('id', 'DESC')->get();
	});

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

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'created new user';
		$activity->identifier = Input::get('fname');
		$activity->save();

		});
		Route::resource('project', 'ProjectsController');
		Route::get('project', ['uses' => 'ProjectsController@create']);

		Route::get('activities', function()
		{
			return View::make('users.sysAdmin.activities');

		});

		Route::get('save', function()
		{
			$activity = Activity::with('user')->orderBy('id', 'DESC')->get();

			return $activity;
		});

		Route::post('sals', function()
		{
				$employee = new Employee;
				$employee->fname = Input::get('fname');
				$employee->lname = Input::get('lname');
				$employee->mname = Input::get('mname');
				$employee->department = Input::get('department');
				$employee->position = Input::get('position');
				$employee->address = Input::get('address');
				$employee->rate = Input::get('rate');
				$employee->basic = Input::get('basic');
				$employee->days = Input::get('days');
				$success = $employee->save();

				$payroll = new Payroll;
				$payroll->employee_id = Auth::employee()->id;
				$payroll->paydate = Input::get('paydate');
				$payroll->gross = Input::get('gross');
				$payroll->phcont= Input::get('phcont');
				$payroll->phcont= Input::get('ssscont');
				$payroll->phcont= Input::get('pgibigcont');
				$payroll->income = Input::get('income');
				$payroll->save();

		});
});//end of route group sysAdmin

// end of system admin
// for administrator
Route::group(array('before' => 'auth|admin'), function()
{
	Route::resource('invoice', 'InvoiceController');
    Route::get('admin', ['as' => 'admin', function()
	{
		
		$mrs = Mrs::has('mrsinv')->where('created_at','>=', Carbon::now()->subweek())->get();

		$po = Po::where('created_at','>=', Carbon::now()->subweek())->get();
		$proj = Project::with(array('modelhouse','pos','mrs' => function($q)
			{
				$q->has('mrsinv');
			},'invitem'))->get();

		return View::make('users.admin.index')
				->withProj($proj)	
				->withPo($po)	
				->withMrs($mrs);	

	}]);

    Route::get('adminPO', ['as' => 'adminPO', function()
	{
		return View::make('users.admin.purchases');	
	}]);
	Route::resource('mrs', 'mrsController');
	Route::get('mrs', ['uses' => 'mrsController@index']);
	Route::get('mrs/{pid}/{mid}', ['as' => 'mrsshows', 'uses' => 'mrsController@edit']);
	Route::get('view/{pid}/{mid}', ['as' => 'mrsview', 'uses' => 'mrsController@view']);
	Route::get('reject/{id}', ['uses' => 'RejectController@kill']);
	Route::get('reject/{id}/{mid}', ['uses' => 'RejectController@update']);
	Route::get('mrs/{pid}/{mid}/{id}', ['as' => 'mrsupdate', 'uses' => 'mrsController@update']);
	
Route::get('reject', ['as' => 'reject' , function()
{
	
	return View::make('users.admin.reject');	

}])->before('auth|admin');
	Route::get('getmrs', function()
	{

	$mrs = Mrs::with('project')->get();

	return $mrs;
	});
	Route::get('public/mrs/getproj', function()
	{

	$invitem = InvItem::with('project')->get();

	return $invitem;
	});

	Route::get('pur', function()
	{
		return Po::orderBy('id', 'DESC')->get();
	});
    
	Route::get('mrs', ['uses' => 'mrsController@index']);
	Route::get('invoice/{po}/{num}/{id}', ['uses' => 'InvoiceController@edit']);
	Route::get('invoice/{po}/{num}', ['as' => 'siinv', 'uses' => 'SiController@show']);

	Route::get('dr/{po}/{num}/{id}', ['uses' => 'DrController@edit']);
	Route::get('dr/{po}/{num}', ['as' => 'drinv', 'uses' => 'DrController@show']);

	Route::get('so/{po}/{num}/{id}', ['uses' => 'SoController@edit']);
	Route::get('so/{po}/{num}', ['as' => 'soitem', 'uses' => 'SoController@show']);

	Route::get('ci/{po}/{num}/{id}', ['uses' => 'CiController@edit']);
	Route::get('ci/{po}/{num}', ['as' => 'ciitem', 'uses' => 'CiController@show']);
	
	Route::resource('additem', 'additemController');
	Route::resource('adddesc', 'adddescController');
	Route::resource('si', 'SiController');
	Route::resource('dr', 'DrController');
	Route::resource('so', 'SoController');
	Route::resource('ci', 'CiController');
	Route::get('invoice/{po}', ['uses' => 'InvoiceController@show']);

	Route::resource('addtemplate', 'addtemplateController');
});//end of route group admin

// end of administrator





Route::get('accounting', ['as' => 'accounting' , function()
{
	
	return View::make('users.accounting.index');	

}])->before('auth|accounting');

Route::get('engineer', ['as' => 'engineer' , function()
{
	
	return View::make('users.engineer.index');	

}])->before('auth|engineer');

//uly
Route::get('prs', ['as' => 'prs' , function()
{
	
	return View::make('users.engineer.prs');	

}])->before('auth|engineer');




Route::get('projprs/{id}', ['uses' => 'ProjectPrsController@showmodel' ])->before('auth|engineer');
Route::get('projectprs/{id}', ['uses' => 'ProjectPrsController@show' ])->before('auth|engineer');
Route::get('projectprs/{mid}/{id}' , ['as' => 'prsitem1' , 'uses' => 'ProjectPrsController@show']);
Route::get('mason/{mid}/{id}' , [ 'uses' => 'MasonryController@updatemas']);
Route::get('formworks/{mid}/{id}' , [ 'uses' => 'FormworksController@update']);
Route::get('steel/{mid}/{id}' , [ 'uses' => 'SteelController@update']);
Route::get('carpentry/{mid}/{id}' , [ 'uses' => 'CarpentryController@update']);
Route::get('thinmistry/{mid}/{id}' , [ 'uses' => 'ThinmistryController@update']);
Route::get('truss/{mid}/{id}' , [ 'uses' => 'TrussController@update']);
Route::get('hardware/{mid}/{id}' , [ 'uses' => 'HardwareController@update']);
Route::get('tile/{mid}/{id}' , [ 'uses' => 'TileController@update']);
Route::get('door/{mid}/{id}' , [ 'uses' => 'DoorController@update']);
Route::get('electrical/{mid}/{id}' , [ 'uses' => 'ElectricalController@update']);
Route::get('plumbing/{mid}/{id}' , [ 'uses' => 'PlumbingController@update']);
Route::get('paint/{mid}/{id}' , [ 'uses' => 'PaintController@update']);
Route::resource('prs', 'PrsController');
Route::resource('prsitem', 'PrsitemController');
Route::resource('prsitem1', 'Prsitem1Controller');
Route::resource('prsitem2', 'Prsitem2Controller');
Route::resource('prsitem3', 'Prsitem3Controller');
Route::resource('prsitem4', 'Prsitem4Controller');
Route::resource('prsitem5', 'Prsitem5Controller');
Route::resource('prsitem6', 'Prsitem6Controller');
Route::resource('prsitem7', 'Prsitem7Controller');
Route::resource('prsitem8', 'Prsitem8Controller');
Route::resource('prsitem9', 'Prsitem9Controller');
Route::resource('prsitem10', 'Prsitem10Controller');
Route::resource('prsitem11', 'Prsitem11Controller');
Route::resource('prsitem12', 'Prsitem12Controller');
Route::resource('masonryitem', 'MasonryitemController');
Route::resource('projectprs', 'ProjectPrsController');
Route::resource('formworksitem', 'FormworksitemController');

// Route::get('prsitem/{id}', 'PrsitemController@masonrystore')->before('auth|engineer'); 
// uly

// ama
Route::get('viewbahay', ['as' => 'viewbahay' , function()
{
	
	return View::make('users.engineer.viewbahay');	

}])->before('auth|engineer');

Route::get('public/bom', function()
	{
		return Bomitem::orderBy('id', 'DESC')->get();
	});

Route::post('bom', function()
{
	$bomitem = new Bomitem;
	$bomitem->itemdesc = Input::get('itemdesc');
	$bomitem->unitmeasure = Input::get('unitmeasure');
	$bomitem->unitprice = Input::get('unitprice');
	$bomitem->save();

	});




Route::get('bom/{id}', ['uses' => 'BomitemController@editbom' ])->before('auth|engineer');
Route::resource('bomitem', 'BomitemController');
Route::get('viewbahay',['as' => 'viewbahay' , 'uses' => 'BomitemController@showmoddd'])->before('auth|engineer');
Route::get('ject/{id}', ['uses' => 'BomitemController@showmod' ])->before('auth|engineer');
Route::get('bahay/{id}/view', ['uses' => 'BomitemController@editbahay' ])->before('auth|engineer');
Route::get('bahay/{id}', ['uses' => 'BomitemController@show' ])->before('auth|engineer');
Route::get('bom/{id}/update', ['uses' => 'BomitemController@update' ])->before('auth|engineer');
Route::resource('masonry' , 'MasonryController');
Route::get('bom/{id}/delete', ['uses' => 'BomitemController@destroy' ])->before('auth|engineer');
Route::resource('modelhouse', 'ModelHouseController');
Route::resource('formworks', 'FormworksController');
Route::resource('steel', 'SteelController');
Route::resource('carpentry', 'CarpentryController');
Route::resource('thinmistry', 'ThinmistryController');
Route::resource('truss', 'TrussController');
Route::resource('hardware', 'HardwareController');
Route::resource('tile', 'TileController');
Route::resource('electrical', 'ElectricalController');
Route::resource('door', 'DoorController');
Route::resource('plumbing', 'PlumbingController');
Route::resource('paint', 'PaintController');

Route::get('engineer', ['as' => 'engineer', 'uses' => 'BomitemController@showproj' ])->before('auth|engineer');
// ama

Route::get('purchasing', ['as' => 'purchasing' , function()
{
	$allpo = Po::all();
	$unpaid = Po::where('paid','=', 0)->get();
	$projpo = Project::with(array('pos' => function($query)
		{
			$query->with('item');
		}))->get();
	$paid = Po::where('paid','!=', 0)->get();
	$po = Po::where('created_at','>=', Carbon::now()->subweek())->get();
	$due = Po::where('due_date','>=', Carbon::now()->subweek())->where('due_date','<=', Carbon::now())->where('complete','=', 1)->where('paid','=', 0)->get();
	return View::make('users.purchasing.index')->withPaids($paid)
	->withUnpaid($unpaid)	
	->withPo($po)
	->withDue($due)
	->withAllpo($allpo)
	->withProjpo($projpo);

}])->before('auth|purchasing');
Route::get('prspo/{prs}',['uses' => 'PrsitemController@update']);
Route::get('prspo/{po}/{prs}',['as' => 'prspongie', 'uses' => 'ItemController@show']);
Route::get('prsposave',['as' => 'prsposave', 'uses' => 'ItemController@create']);
Route::get('purpageunpaid', ['as' => 'purpageunpaid' , function()
{
	$projpo = Project::with(array('pos' => function($query)
		{
			$query->with('item')->where('paid','=',0);
		}))->get();
	return View::make('users.purchasing.layouts.unpaidbody')
	->withProjpo($projpo);

}])->before('auth|purchasing');

Route::get('purpagepaid', ['as' => 'purpagepaid' , function()
{
	$projpo = Project::with(array('pos' => function($query)
		{
			$query->with('item')->where('paid','=',1);
		}))->get();
	return View::make('users.purchasing.layouts.paidbody')
	->withProjpo($projpo);

}])->before('auth|purchasing');
Route::get('purpageduedate', ['as' => 'purpageduedate' , function()
{
	$due = Po::where('due_date','>=', Carbon::now()->subweek())->where('due_date','<=', Carbon::now())->where('complete','=', 1)->where('paid','=', 0)->get();

	return View::make('users.purchasing.layouts.duedates')
	->withDue($due);

}])->before('auth|purchasing');
Route::get('purpage', ['as' => 'purpage' , function()
{
	$projpo = Project::with(array('pos' => function($query)
		{
			$query->with('item');
		}))->get();
	return View::make('users.purchasing.layouts.body')
	->withProjpo($projpo);

}])->before('auth|purchasing');


// Financing Routes..
Route::get('financing/try', ['as' => 'financing','uses' => 'ProjectsController@showed'])->before('auth|financing');
Route::get('financing', ['as' => 'financing','uses' => 'CompanyIncomeController@create'])->before('auth|financing');

Route::get('cool/{id}', ['uses' => 'ProjectsController@showbudget' ])->before('auth|financing');
// Route::get('index', ['as'=> 'index','uses' => 'ViewMonthlyController@display'])->before('auth|financing');
Route::resource('budget', 'BudgetController');
Route::resource('month', 'MonthController');
Route::resource('company', 'CompanyIncomeController');

Route::get('purchaseOrder', ['as' => 'purchaseOrder' , 'uses' => 'purchasesController@create'])->before('auth|purchasing');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('supplier', 'SuppliersController');
Route::resource('item', 'ItemController');
Route::get('view', ['as' => 'view' , function()
{

	return View::make('users.purchasing.view');	

}])->before('auth|purchasing'); 
Route::get('view',['as' => 'view', 'uses' => 'PoController@show'])->before('auth|purchasing');
Route::get('rfp/{supp}/{project}',['as' => 'rfpshow', 'uses' => 'RfpController@show'])->before('auth|purchasing');
Route::get('rfp/{id}/{supp}/{project}/view',['as' => 'showrfp', 'uses' => 'RfpController@create'])->before('auth|purchasing');
Route::get('rfp/{id}',['as' => 'viewrfp', 'uses' => 'RfpController@edit'])->before('auth|purchasing');
Route::resource('po', 'PoController');
Route::get('view2', ['as' => 'view2' , function()
{

	return View::make('users.purchasing.view2');	

}])->before('auth|purchasing');
Route::get('projectpo/{pid}/{prs}/{id}', function($pid,$prs, $po) 
{
	$additem = Po::with('Project')->where('id', '=', $po)->get();

	$items = Item::where('po_po', '=', $po)->get();
	$pitem = Prsitem::where('prs','=',$prs)->get();

	return View::make('users.purchasing.additem')->withPo($additem)->withItem($items)->withPrsitem($pitem);
});

Route::get('prspo', ['as' => 'prspo' , function()
{
	
	return View::make('users.purchasing.prspo');	

}])->before('auth|purchasing');


Route::get('prspo', ['as' => 'prspo', 'uses' => 'PrsPoController@index' ])->before('auth|purchasing');

Route::post('projectpo/{pid}/{prs}/{po}', function()
{
	$pitem = Prsitem::find(Input::get('id'));
	$pitem->edit_this = Input::get('edit_this');
	$saved = $pitem->save();

	$item = new Item;
	$item->iname = Input::get('iname');
	$item->po_po = Input::get('po_po');
	$item->desc = Input::get('iunit');
	$item->price = Input::get('iprice');
	$item->qty = Input::get('qty');
	$item->edit_this = Input::get('edit_this');
	$success = $item->save();

	$pit = Input::get('prs'); 
	

	$prs = $pitem->id;
	$po = $item->po_po;


	$pitem = Prsitem::where('prs','=',$prs)->get();
	$items = Item::where('po_po', '=' , $po)->get();

	$query = array($po,$pit);
	return Redirect::route('prspongie', $query);
	

})->before('auth|purchasing');
Route::get('projectpo/{id}', ['uses' => 'ProjectpoController@index']);
Route::resource('rfp', 'RfpController');
Route::resource('rfpdata', 'RfpdataController');
Route::get('purchase/{id}', ['uses' => 'PoController@edit' ])->before('auth|purchasing');
Route::get('purchase/{id}/update', ['uses' => 'PoController@update' ])->before('auth|purchasing');
Route::get('purchase/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('view2', ['as' => 'view2', 'uses' => 'ItemController@store' ])->before('auth|purchasing');
Route::get('purchaseOrder/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('projectpo/{pid}/{prs}/{po}', ['uses' => 'ProjectsController@update'])->before('auth|purchasing');
Route::get('product/{id}', ['uses' => 'ItemController@edit' ])->before('auth|purchasing');
Route::get('product/{id}/update', ['uses' => 'ItemController@update' ])->before('auth|purchasing');
Route::get('product/{id}/delete', ['uses' => 'ItemController@destroy' ])->before('auth|purchasing');

Route::get('salary', function()
{
	return View::make('users.accounting.salary');


})->before('auth|accounting');
Route::get('payrollsave', function()
{
	$payroll = Payroll::with('employee')->orderBy('paydate', 'ASC')->get();

	return $payroll;
})->before('auth|accounting');
Route::get('monthly', function()
{
	return View::make('users.accounting.monthly');


})->before('auth|accounting');
Route::get('{paydate}/this', function($paydate)
{
	$payroll = Payroll::with('employee')->where('paydate', '=', $paydate )->get();
	return $payroll;

	//$payroll = DB::select('select payroll.paydate, payroll.paydateend, payroll.phcont, payroll.ssscont, payroll.pgibigcont, payroll.gross, payroll.income  from payroll group by Month (paydate)');
	
	return $payroll;
})->before('auth|accounting');

Route::get('po', function()
{
	return Po::orderBy('po', 'DESC')->get();
})->before('auth|purchasing');

Route::resource('cashvouchers', 'CashVouchersController');
Route::resource('checkvouchers', 'CheckVouchersController');
Route::resource('checkdetails', 'CheckDetailsController');
Route::get('ratesave', function()
{
	$rate = Rate::orderBy('id', 'DESC')->get();

	return $rate;
})->before('auth|accounting');

Route::get('ph', function()
{
	$phcontr = Phcontr::orderBy('id', 'ASC')->get();

	return $phcontr;
})->before('auth|accounting');

Route::get('pg', function()
{
	$pagibig = Pagibig::orderBy('id', 'ASC')->get();

	return $pagibig;
})->before('auth|accounting');

Route::get('sss', function()
{
	$ssscontr = Ssscontr::orderBy('id', 'ASC')->get();

	return $ssscontr;
})->before('auth|accounting');

Route::get('rates', ['as' => 'rates' , function()
{

	return View::make('users.accounting.rates');	

}])->before('auth|accounting');

Route::get('ratesb', ['as' => 'ratesb' , function()
{

	return View::make('users.accounting.ratesb');	

}])->before('auth|accounting');

Route::get('ratesc', ['as' => 'ratesc' , function()
{

	return View::make('users.accounting.ratesc');	

}])->before('auth|accounting');

Route::get('ratesd', ['as' => 'ratesd' , function()
{

	return View::make('users.accounting.ratesd');	

}])->before('auth|accounting');

Route::get('ratese', ['as' => 'ratese' , function()
{

	return View::make('users.accounting.ratese');	

}])->before('auth|accounting');

Route::get('ratesf', ['as' => 'ratesf' , function()
{

	return View::make('users.accounting.ratesf');	

}])->before('auth|accounting');

Route::get('ratesg', ['as' => 'ratesg' , function()
{

	return View::make('users.accounting.ratesg');	

}])->before('auth|accounting');

Route::get('rates2', ['as' => 'rates2' , function()
{

	return View::make('users.accounting.rates2');	

}])->before('auth|accounting');

Route::get('rates3', ['as' => 'rates3' , function()
{

	return View::make('users.accounting.rates3');	

}])->before('auth|accounting');

Route::get('purchases', ['as' => 'purchases' , function()
{

	return View::make('users.accounting.purchases');	

}])->before('auth|accounting');

Route::get('cashvouchers', ['as' => 'cashvouchers' , function()
{

	return View::make('users.accounting.cashvouchers');	

}])->before('auth|accounting');

Route::get('payable', ['as' => 'payable' , function()
{

	return View::make('users.accounting.payable');	

}])->before('auth|accounting');

Route::get('checkvouchers', ['as' => 'checkvouchers' , function()
{

	return View::make('users.accounting.checkvouchers');	

}])->before('auth|accounting');

Route::get('unpaid', ['as' => 'unpaid' , function()
{

	return View::make('users.accounting.unpaid');	

}])->before('auth|accounting');

Route::get('cashvouchersdetails', ['as' => 'cashvouchersdetails' , function()
{

	return View::make('users.accounting.cashvouchersdetails');	

}])->before('auth|accounting');

Route::get('unrel', ['as' => 'unrel' , function()
{

	return View::make('users.accounting.unrel');	

}])->before('auth|accounting');

Route::get('checkvouchersdetails', ['as' => 'checkvouchersdetails' , function()
{

	return View::make('users.accounting.checkvouchersdetails');	

}])->before('auth|accounting');

Route::get('addcashvouchersitems3', ['as' => 'addcashvouchersitems3' , function()
{

	return View::make('users.accounting.addcashvouchersitems3');

}])->before('auth|accounting');


Route::resource('cashdetails', 'CashDetailsController');

Route::resource('checkdetails', 'CheckDetailsController');

Route::resource('bank', 'BankController');

Route::resource('accounttitle', 'AccountTitleController');

Route::resource('labor', 'LaborController');

Route::get('cash', function()
{
	return Cashvouchers::get();
})->before('auth|accounting');

Route::get('check', function()
{
	return Checkvouchers::get();
})->before('auth|accounting');

Route::get('checkitem', function()
{
	return Checkitem::get();
})->before('auth|accounting');


Route::get('astig', function()
		{
			$activity = Activity::with('user')->orderBy('id', 'DESC')->get();

			return $activity;
		});
Route::post('addcashitems', function()
{
	$vitem = new Checkitem;
	$vitem->checkvouchers_checkno = 'checkvouchers_checkno';
	$vitem->descr = Input::get('descr');
	$vitem->amount = Input::get('amount');
	$vitem->acctitle = Input::get('acctitle');
	$vitem->debit = Input::get('debit');
	$vitem->credit = Input::get('credit');
	$success = $vitem->save();


})->before('auth|accounting');


Route::get('cash/{id}', ['uses' => 'EditCashVouchersController@editcash' ])->before('auth|accounting');

Route::get('cashvouchers/{id}/delete', ['uses' => 'CashVouchersController@destroy' ])->before('auth|accounting');

Route::get('cItem/{id}/update', ['uses' => 'EditCashVouchersController@updateCI' ])->before('auth|accounting');

Route::get('cItem/{id}', ['uses' => 'EditCashVouchersController@editCI' ])->before('auth|accounting');

Route::get('cItem3/{id}/update', ['uses' => 'EditCashVouchersController@updateCI3' ])->before('auth|accounting');

Route::get('cItem3/{id}', ['uses' => 'EditCashVouchersController@editCI3' ])->before('auth|accounting');

Route::get('check/{id}/update', ['uses' => 'EditCashVouchersController@update' ])->before('auth|accounting');

Route::get('check/{id}', ['uses' => 'EditCheckVouchersController@editcheck' ])->before('auth|accounting');

Route::get('chItem/{id}/update', ['uses' => 'EditCashVouchersController@updateCI' ])->before('auth|accounting');

Route::get('chItem/{id}', ['uses' => 'EditCheckVouchersController@editCI' ])->before('auth|accounting');


Route::get('checkvouchers/{id}/delete', ['uses' => 'CheckVouchersController@destroy' ])->before('auth|accounting');

Route::get('cash/{id}/update', ['uses' => 'EditCashVouchersController@update' ])->before('auth|accounting');


Route::get('cash/{id}/delete', ['uses' => 'CashItemController@destroy' ])->before('auth|accounting');

Route::get('cash3/{id}/delete', ['uses' => 'CashItem3Controller@destroy' ])->before('auth|accounting');



Route::get('check/{id}/delete', ['uses' => 'CheckItemController@destroy' ])->before('auth|accounting');

Route::resource('cashitems', 'CashItemController');

Route::resource('checkitem', 'CheckItemController');

Route::get('cashdetails/{checkno}', ['uses' => 'CashDetailsController@show' ])->before('auth|accounting');

Route::get('checkitems/{checkno}', ['uses' => 'CheckItemController@show' ])->before('auth|accounting');

Route::get('checkdetails/{checkno}', ['uses' => 'CheckDetailsController@show' ])->before('auth|accounting');
Route::get('checkdetails/{checkno}', ['uses' => 'CheckDetailsController@showitem' ])->before('auth|accounting');

Route::resource('cashitems', 'CashItemController');

Route::resource('cashitems2', 'CashItem2Controller');

Route::resource('cashitems3', 'CashItem3Controller');

Route::resource('checkitem', 'CheckItemController');

Route::get('cashitems/{checkno}', ['uses' => 'CashItemController@show' ])->before('auth|accounting');

Route::get('cashitems2/{checkno}', ['uses' => 'CashItem2Controller@show' ])->before('auth|accounting');

Route::get('cashitems3/{checkno}', ['uses' => 'CashItem3Controller@show' ])->before('auth|accounting');

Route::get('cashdetails/{checkno}', ['uses' => 'CashDetailsController@show' ])->before('auth|accounting');

Route::get('cashdetails2/{checkno}', ['uses' => 'CashDetails2Controller@show' ])->before('auth|accounting');

Route::get('cashdetails3/{checkno}', ['uses' => 'CashDetails3Controller@show' ])->before('auth|accounting');

Route::get('checkitems/{checkno}', ['uses' => 'CheckItemController@show' ])->before('auth|accounting');

Route::get('checkdetails/{checkno}', ['uses' => 'CheckDetailsController@show' ])->before('auth|accounting');

Route::get('checkdetails/{checkno}', ['uses' => 'CheckDetailsController@showitem' ])->before('auth|accounting');



Route::get('cashvouchers/{id}/delete', ['uses' => 'CashVouchersController@destroy' ])->before('auth|accounting');

Route::get('rates', ['as' => 'rates', 'uses' => 'RateController@show' ])->before('auth|accounting');

Route::get('ratesd', ['as' => 'ratesd', 'uses' => 'HoursController@show' ])->before('auth|accounting');

Route::get('rates2', ['as' => 'rates2', 'uses' => 'PhcontrController@show' ])->before('auth|accounting');

Route::get('rates3', ['as' => 'rates3', 'uses' => 'SsscontrController@show' ])->before('auth|accounting');

Route::get('ratesf', ['as' => 'ratesf', 'uses' => 'PagibigController@show' ])->before('auth|accounting');

Route::get('rates/{id}', ['uses' => 'RateController@editrate' ])->before('auth|accounting');

Route::get('ssscontr/{id}', ['uses' => 'SsscontrController@editrate' ])->before('auth|accounting');
Route::get('ssscontr/{id}/update', ['uses' => 'SsscontrController@update' ])->before('auth|accounting');
Route::get('ssscontr/{id}/delete', ['uses' => 'SsscontrController@destroy' ])->before('auth|accounting');

Route::get('pagibig/{id}', ['uses' => 'SsscontrController@edit' ])->before('auth|accounting');
Route::get('pagibig/{id}/update', ['uses' => 'SsscontrController@update' ])->before('auth|accounting');
Route::get('pagibig/{id}/delete', ['uses' => 'SsscontrController@destroy' ])->before('auth|accounting');

Route::get('phcontr/{id}', ['uses' => 'PhcontrController@editrate' ])->before('auth|accounting');

Route::get('phcontr/{id}/update', ['uses' => 'PhcontrController@update' ])->before('auth|accounting');

Route::get('phcontr/{id}/delete', ['uses' => 'PhcontrController@destroy' ])->before('auth|accounting');

Route::get('rates/{id}/update', ['uses' => 'RateController@updaterate' ])->before('auth|accounting');

Route::get('rates/{id}/delete', ['uses' => 'RateController@destroy' ])->before('auth|accounting');

Route::get('accounting', ['as' => 'accounting' , 'uses' => 'EmployeeController@create']);

Route::get('viewpay',[ 'as' => 'viewpay' , 'uses' => 'EmployeeController@create'])->before('auth|accounting');

Route::get('cashvouchers',[ 'as' => 'cashvouchers' , 'uses' => 'CashVouchersController@create'])->before('auth|accounting');

Route::get('checkvouchers',[ 'as' => 'checkvouchers' , 'uses' => 'CheckVouchersController@create'])->before('auth|accounting');

Route::get('unrel',[ 'as' => 'unrel' , 'uses' => 'CheckItemController@create'])->before('auth|accounting');

Route::get('payable',[ 'as' => 'payable' , 'uses' => 'PoController@create'])->before('auth|accounting');

Route::get('unpaid',[ 'as' => 'unpaid' , 'uses' => 'ProjectsController@showTotalUnpaid'])->before('auth|accounting');

Route::get('purchases',[ 'as' => 'purchases' , 'uses' => 'ProjectsController@showTotalPurchases'])->before('auth|accounting');



Route::get('employ', ['as' => 'employ' , function()
{

	return View::make('users.accounting.employ');	

}])->before('auth|accounting');

Route::get('renew', ['as' => 'renew' , function()
{

	return View::make('users.accounting.renew');	

}])->before('auth|accounting');

Route::get('employ2', ['as' => 'employ2' , function()
{

	return View::make('users.accounting.employ2');	

}])->before('auth|accounting');

Route::resource('employee', 'EmployeeController');

Route::resource('rate', 'RateController');

Route::resource('phcontr', 'PhcontrController');

Route::resource('ssscontr', 'SsscontrController');
Route::resource('pagibig', 'PagibigController');
Route::resource('payroll', 'PayrollController');
Route::resource('hoursrate', 'HoursController');
Route::resource('separation','SeparationController');



Route::get('employ2', ['as' => 'employ2', 'uses' => 'EmployeeController@show' ])->before('auth|accounting');
Route::get('salary', ['as' => 'salary', 'uses' => 'EmployeeController@showdate' ])->before('auth|accounting');
Route::get('renew', ['as' => 'renew', 'uses' => 'EmployeeController@showsep' ])->before('auth|accounting');
Route::get('payroll', ['as' => 'payroll', 'uses' => 'EmployeeController@shows' ])->before('auth|accounting');

Route::get('viewpay', ['as' => 'viewpay', 'uses' => 'EmployeeController@showpayoffice' ])->before('auth|accounting');

Route::get('viewpay2', ['as' => 'viewpay2', 'uses' => 'EmployeeController@showpayworksite' ])->before('auth|accounting');
Route::get('pay/{id}', ['uses' => 'EmployeeController@editpayroll' ])->before('auth|accounting');
Route::get('sep/{id}', ['uses' => 'EmployeeController@separation' ])->before('auth|accounting');
Route::get('bet/{id}', ['uses' => 'EmployeeController@empoy' ])->before('auth|accounting');
Route::get('{paydate}', ['uses' => 'EmployeeController@editpaydate' ])->before('auth|accounting');
Route::get('emp/{id}', ['uses' => 'EmployeeController@editemploy' ])->before('auth|accounting');
Route::get('emp/{id}/update', ['uses' => 'EmployeeController@update' ])->before('auth|accounting');

Route::get('emp/{id}/delete', ['uses' => 'EmployeeController@destroy' ])->before('auth|accounting');
Route::get('cashvouchers/{{cashvouchers.id}}/update', ['uses' => 'CashVouchersController@update' ])->before('auth|accounting');






// // administrator routes
// Route::resource('purchases', 'PurchaseController');

Route::get('prspo/{po}/{summary}/reports', function($po, $summary)
{
	$lname = explode(" ", Auth::user()->fname.' '.Auth::user()->lname);
	$last = implode("_", $lname);
    	JasperPHP::process(
        storage_path() . '/purchase_order.jasper', //Input file 
        storage_path() . '/purchase_order', //Output file without extension
        array("pdf"), //Output format
        array(
        	'po' => $po,
        	'summary' => $summary,
        	'preparedby' => $last
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = $po.'_'.date("Y-m-d");
	    rename(storage_path() . '/purchase_order.pdf', storage_path() . '/purchaseOrder_'.$name.'.pdf');
	    File::move(storage_path() . '/purchaseOrder_'.$name.'.pdf', storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'purchaseOrder_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'purchaseOrder_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|purchasing');


Route::get('projectpo/{pid}/{po}/{summary}/reports', function($pid, $po, $summary)
{
	$lname = explode(" ", Auth::user()->fname.' '.Auth::user()->lname);
	$last = implode("_", $lname);
    	JasperPHP::process(
        storage_path() . '/purchase_order.jasper', //Input file 
        storage_path() . '/purchase_order', //Output file without extension
        array("pdf"), //Output format
        array(
        	'po' => $po,
        	'summary' => $summary,
        	'preparedby' => $last
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = $po.'_'.date("Y-m-d");
	    rename(storage_path() . '/purchase_order.pdf', storage_path() . '/purchaseOrder_'.$name.'.pdf');
	    File::move(storage_path() . '/purchaseOrder_'.$name.'.pdf', storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'purchaseOrder_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'purchaseOrder_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|purchasing');

Route::get('{paydate}/defencereport', function($paydate)
{
    	JasperPHP::process(
        storage_path() . '/defence.jasper', //Input file 
        storage_path() . '/defence', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'paydate' => $paydate
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/defence.pdf', storage_path() . '/defence_'.$name.'.pdf');
	    File::move(storage_path() . '/defence_'.$name.'.pdf', storage_path() . '/../../public/reports/defence_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/defence_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'defence_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'defence_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{summary3}/{summary2}/{summary}/accpurchasesreport', function($summary3, $summary2, $summary)
{
    	JasperPHP::process(
        storage_path() . '/accpurchases.jasper', //Input file 
        storage_path() . '/accpurchases', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'summary3' => $summary3,
        	'summary2' => $summary2,
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/accpurchases.pdf', storage_path() . '/accpurchases_'.$name.'.pdf');
	    File::move(storage_path() . '/accpurchases_'.$name.'.pdf', storage_path() . '/../../public/reports/accpurchases_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/accpurchases_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'purchases_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'accpurchases_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{summary}/accunpaidreport', function($summary)
{
    	JasperPHP::process(
        storage_path() . '/accunpaid.jasper', //Input file 
        storage_path() . '/accunpaid', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/accunpaid.pdf', storage_path() . '/accunpaid_'.$name.'.pdf');
	    File::move(storage_path() . '/accunpaid_'.$name.'.pdf', storage_path() . '/../../public/reports/accunpaid_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/accunpaid_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'unpaid_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'accunpaid_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{summary}/payablesAccreport', function($summary)
{
    	JasperPHP::process(
        storage_path() . '/payablesAcc.jasper', //Input file 
        storage_path() . '/payablesAcc', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/payablesAcc.pdf', storage_path() . '/payablesAcc_'.$name.'.pdf');
	    File::move(storage_path() . '/payablesAcc_'.$name.'.pdf', storage_path() . '/../../public/reports/payablesAcc_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/payablesAcc_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'payables_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'payablesAcc_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{summary}/accunreleasedreport', function($summary)
{
    	JasperPHP::process(
        storage_path() . '/accunreleased.jasper', //Input file 
        storage_path() . '/accunreleased', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/accunreleased.pdf', storage_path() . '/accunreleased_'.$name.'.pdf');
	    File::move(storage_path() . '/accunreleased_'.$name.'.pdf', storage_path() . '/../../public/reports/accunreleased_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/accunreleased_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'unreleased_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'accunreleased_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{cashvouchers_checkno}/{summary}/{sumless}/{sumamt}/cashvouchersreport', function($cashvouchers_checkno, $summary, $sumless, $sumamt)
{
    	JasperPHP::process(
        storage_path() . '/cashvouchers.jasper', //Input file 
        storage_path() . '/cashvouchers', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'checkno' => $cashvouchers_checkno,
        	'summary' => $summary,
        	'sumless' => $sumless,
        	'sumamt' => $sumamt
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/cashvouchers.pdf', storage_path() . '/cashvouchers_'.$name.'.pdf');
	    File::move(storage_path() . '/cashvouchers_'.$name.'.pdf', storage_path() . '/../../public/reports/cashvouchers_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/cashvouchers_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'cashvouchers_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'cashvouchers_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{cashvouchers_checkno}/{summary}/cashvouchers2report', function($cashvouchers_checkno, $summary)
{
    	JasperPHP::process(
        storage_path() . '/cashvouchers2.jasper', //Input file 
        storage_path() . '/cashvouchers2', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'checkno' => $cashvouchers_checkno,
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/cashvouchers2.pdf', storage_path() . '/cashvouchers2_'.$name.'.pdf');
	    File::move(storage_path() . '/cashvouchers2_'.$name.'.pdf', storage_path() . '/../../public/reports/cashvouchers2_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/cashvouchers2_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'cashvouchers_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'cashvouchers2_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{checkvouchers_checkno}/{summary}/checkvouchers1report', function($checkvouchers_checkno, $summary)
{
    	JasperPHP::process(
        storage_path() . '/checkvouchers1.jasper', //Input file 
        storage_path() . '/checkvouchers1', //Output file without extension
        array("pdf"), //Output format
        array(
        	'checkno' => $checkvouchers_checkno,
        	'summary' => $summary
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/checkvouchers1.pdf', storage_path() . '/checkvouchers1_'.$name.'.pdf');
	    File::move(storage_path() . '/checkvouchers1_'.$name.'.pdf', storage_path() . '/../../public/reports/checkvouchers1_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/checkvouchers1_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'checkvouchers_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'checkvouchers1_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');

Route::get('{id}/bomreport', function($id)
{
    	JasperPHP::process(
        storage_path() . '/bom.jasper', //Input file 
        storage_path() . '/bom', //Output file without extension
        array("pdf"), //Output format
        array(
       		'id' => $id
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/bom.pdf', storage_path() . '/bom_'.$name.'.pdf');
	    File::move(storage_path() . '/bom_'.$name.'.pdf', storage_path() . '/../../public/reports/bom_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/bom_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'BOM_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'bom_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|engineer');
