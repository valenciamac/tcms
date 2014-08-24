<?php

class IncomeSummary extends \Eloquent {
	protected $table = 'repincomefromcontracts';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
    	//
    ];

    public function FinanceYear()
	{
		return $this->hasMany('FinanceYear');
	}

    public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('created_at', 'LIKE', "%$search%")
					  ->orWhere('updated_at', 'LIKE', "%$search%")
					  ->orWhere('contractTitle', 'LIKE', "%$search%");
			});
	}
}