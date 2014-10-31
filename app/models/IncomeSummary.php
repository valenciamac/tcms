<?php

class IncomeSummary extends \Eloquent {
	protected $table = 'projects';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
    	//
    ];

 //    public function Project()
	// {
	// 	return $this->belongsTo('projects');
	// }

 //    public function FinanceYear()
	// {
	// 	return $this->hasMany('FinanceYear');
	// }

    public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('created_at', 'LIKE', "%$search%")
					  ->orWhere('updated_at', 'LIKE', "%$search%")
					  ->orWhere('project_name', 'LIKE', "%$search%");
			});
	}
}