<?php

class Detail extends \Eloquent {
	protected $table= "detail";
	public $timestamps=false;
	protected $fillable = [];
		public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('po_number', 'LIKE', "%$search%")
					  ->orWhere('dr_number', 'LIKE', "%$search%")
					   ->orWhere('si_number', 'LIKE', "%$search%")
					    ->orWhere('ci_number', 'LIKE', "%$search%")
					     ->orWhere('so_number', 'LIKE', "%$search%")
					      ->orWhere('others', 'LIKE', "%$search%")
					       ->orWhere('description', 'LIKE', "%$search%")
					        ->orWhere('amount', 'LIKE', "%$search%");
					  
					  
			});
	}

}