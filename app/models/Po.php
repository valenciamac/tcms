<?php

class Po extends \Eloquent {

	protected $table = 'pos';
	protected $fillable = [];


	public function Item()
	{
		return $this->hasMany('item', 'po_po','id');
	}
	public function Si()
	{
		return $this->hasMany('si', 'po_po','id');
	}
	public function Dr()
	{
		
		return $this->hasMany('dr', 'po_po','id');
	}
	public function Ci()
	{
		
		return $this->hasMany('ci', 'po_po','id');
	}
	public function So()
	{
		
		return $this->hasMany('so', 'po_po','id');
	}
	
	public function Project()
	{
		return $this->belongsTo('project', 'proj_id');
	}
	public function Suppliers()
	{
		return $this->hasMany('suppliers');
	}
	public function checkItem()
	{
		return $this->hasMany('Checkitem','po_po','id');
	}
	public function checkvouchers()
{
	return $this->belongsTo('Checkvouchers');
}

	public function cashItem3()
	{
		return $this->hasMany('Cashitem3');
	}
	public function prsitem()
	{
		return $this->belongsTo('Prsitem');
	}
	public function prs()
	{
		return $this->belongsTo('Prs');
	}

	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('suppler_name', 'LIKE', "%$search%")
					  ->orWhere('prs', 'LIKE', "%$search%")
					  ->orWhere('po', 'LIKE', "%$search%")
					  ->orWhere('po_date', 'LIKE', "%$search%")
					  ->orWhere('address', 'LIKE', "%$search%")
					  ->orWhere('terms', 'LIKE', "%$search%")
					  ->orWhere('supplier_code', 'LIKE', "%$search%")
					  ->orWhere('deliverTo', 'LIKE', "%$search%");
			});
	}
	public function getDates()
	{
	    return array('created_at', 'updated_at', 'due_date');
	}

}