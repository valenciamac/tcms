<?php
class ProjectsController extends \BaseController {

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
		return View::make('users.sysAdmin.projects');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function store()
	{
		$project = new Project;
		$project->project_name = Input::get('projectName');
		$project->location = Input::get('projectLocation');
		$project->save();
		return Redirect::back();
		
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$addproject = Project::where('id', '=', $id)->get();
		$item = Template::all();
		$gitem = StandardDesc::all();
		$sitem = StandardItem::all();
		return View::make('users.sysAdmin.projectDesc')->withProject($addproject)
		->withStandardDesc($gitem)
		->withStandardItem($sitem)
		->withTemplate($item);
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
		return 'fdas';
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($pid,$prs,$po)
	{
		$additem = Po::with('Project')->where('po', '=', $po)->get();
		$items = Item::where('po_po', '=', $po)->get();
		$pitem = Prsitem::where('prs','=',$prs)->get();
		return View::make('users.purchasing.additem')->withPo($additem)->withItem($items)->withPrsitem($pitem);
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
		$project = Project::find($id);

		$project->delete();


		return Redirect::back();
	}
	public function showed()
	{
		
		$cool = Project::all();
		return View::make('users.financing.index')->withProject($cool);
	}
		public function showed2()
	{
		
		$cooler = Project::all();
		return View::make('users.financing.budgetpermonth')->withProject($cooler);
	}
	public function showbudget($id)
	{
		
		$cool = Project::where('id', '=', $id)->get();
		$buwan = Month::all();
		return View::make('users.financing.viewbudget')->withProject($cool)->withMonth($buwan);
	}
	public function showbudget2($id)
	{
		
		$cooler = Project::where('id', '=', $id)->get();
		$month = Budget::where('project_id', '=', $id)->get();
		return View::make('users.financing.budgetpermonth')->withProject($cooler)->with('rmonth', $month->lists('addmonth'))
			->with('rincome', $month->lists('addincome'));
	}
	public function showTotalUnpaid()
	{
		$unrel = Checkvouchers::where('released','=','1')->get();
		$pay = Po::with('item')->where('paid','=','0')->get();
		$unpaid = Po::with('item')->where('paid','=','0')->get();
		$paid = Po::with('item')->where('paid','=','1')->get();
		return View::make('users.accounting.unpaid')->withCheckvouchers($unrel)->withPo($pay)->withUnpaid($unpaid)->withPaid($paid);
	}
	public function showTotalPurchases()
	{
		$unrel = Checkvouchers::where('released','=','1')->get();
		$pay = Po::with('item')->where('paid','=','0')->get();
		$unpaid = Po::with('item','project')->where('paid','=','0')->get();
		$paid = Po::with('item')->where('paid','=','1')->get();
		$unpaid = Po::where('paid','=', 0)->get();
	    $projpo = Project::with(array('pos' => function($query)
		{
			$query->with('item');
		}))->get();
		$paid = Po::where('paid','!=', 0)->get();
		$po = Po::where('created_at','>=', Carbon::now()->subweek())->get();
		$due = Po::where('due_date','>=', Carbon::now()->subweek())->where('paid','=', 0)->get();
	
	return View::make('users.accounting.purchases')->withCheckvouchers($unrel)->withPo($pay)->withPaid($paid)
	->withUnpaid($unpaid)	
	->withPo($po)
	->withDue($due)
	->withProjpo($projpo);
	}
}