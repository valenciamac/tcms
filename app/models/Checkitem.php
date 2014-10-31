<?php

class Checkitem extends Eloquent {

	protected $table = 'checkitem';
	protected $guarded = [];	
    
    public function checkvouchers()
{
	return $this->belongsTo('Checkvouchers','checkvouchers_checkno','checkno');
}
public function po()
{
	return $this->belongsTo('Po','po','po_po');
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

