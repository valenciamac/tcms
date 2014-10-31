<?php

class Employee extends Eloquent {

	protected $table = 'employee';
	public $timestamps = false;
	protected $fillable = [];	
    
    public function payroll()
{
	return $this->hasMany('Payroll');
}
	public function labor()
{
	return $this->hasMany('Labor');
}
	public function laborDescr()
{
	return $this->hasMany('laborDescr');
}
	public function cashitem()
{
	return $this->hasMany('Cashitem');
}
	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('department', 'LIKE', "%$search%")
					  ->orWhere('position', 'LIKE', "%$search%")
					  ->orWhere('fname', 'LIKE', "%$search%")
					  ->orWhere('mname', 'LIKE', "%$search%")
					  ->orWhere('lname', 'LIKE', "%$search%")
					  ->orWhere('rate', 'LIKE', "%$search%")
					  ->orWhere('id', 'LIKE', "%$search%");
			});
	}
}
