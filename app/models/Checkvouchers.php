<?php

class Checkvouchers extends Eloquent {

	protected $table = 'checkvouchers';
	public $timestamps = true;
	protected $guarded = [];
    
    public function po()
{
	return $this->hasMany('Po');
}
	public function project()
{
	return $this->belongsTo('Project');
}
	public function checkitem()
{
	return $this->hasMany('Checkitem','checkvouchers_checkno','checkno');
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

