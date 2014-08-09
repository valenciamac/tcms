<?php

class Po extends \Eloquent {

	protected $table = 'pos';
	protected $fillable = [];

	public function Item()
	{
		return $this->hasMany('item');
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