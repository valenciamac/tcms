<?php

class Cashitem3 extends Eloquent {

	protected $table = 'cashitem3';
	protected $guarded = [];	
    
    public function cashvouchers()
{
	return $this->belongsTo('Cashvouchers');
}
public function po()
{
	return $this->belongsTo('Po');
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



