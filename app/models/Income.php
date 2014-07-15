<?php

class Income extends Eloquent {
	protected $table = 'finance';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
        //
    ];

    public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('clientName', 'LIKE', "%$search%")
					  ->orWhere('projectTitle', 'LIKE', "%$search%")
					  ->orWhere('projectBudget', 'LIKE', "%$search%")
					  ->orWhere('siteSalaryTotal', 'LIKE', "%$search%")
					  ->orWhere('officeSalaryTotal', 'LIKE', "%$search%")
					  ->orWhere('priceOfMaterialsTotal', 'LIKE', "%$search%")
					  ->orWhere('misc', 'LIKE', "%$search%")
					  ->orWhere('expensesTotal', 'LIKE', "%$search%")
					  ->orWhere('incomeTotal', 'LIKE', "%$search%");
			});
	}

}