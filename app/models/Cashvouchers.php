<?php

class Cashvouchers extends Eloquent {

	protected $table = 'cashvouchers';
	protected $guarded = [];	
    
    public function cashitems()
{
	return $this->hasMany('Cashitem');
}
 public function labor()
{
	return $this->hasMany('Labor');
}
	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('payee', 'LIKE', "%$search%")
					  ->orWhere('checkno', 'LIKE', "%$search%")
					  ->orWhere('rfrom', 'LIKE', "%$search%")
					  ->orWhere('rpb', 'LIKE', "%$search%")
					  ->orWhere('id', 'LIKE', "%$search%");
		});
	}
}

