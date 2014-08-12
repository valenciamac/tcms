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
				$query->where('rNo', 'LIKE', "%$search%")
					  ->orWhere('contractTitle', 'LIKE', "%$search%");
			});
	}

}