<?php

class Cashitem extends Eloquent {

	protected $table = 'cashitem';
	public $timestamps = true;
	protected $guarded = [];	
    
    public function Cashvouchers()
{
	return $this->belongsTo('Cashvouchers');
}
    public function employee()
{
	return $this->belongsTo('Employee');
}
	public function labor()
{
	return $this->hasMany('Labor');
}
	public function laborDescr()
{
	return $this->hasMany('laborDescr');
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

