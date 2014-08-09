<?php

class Rfp extends \Eloquent {
	protected $table="rfp";
	public $timestamps = false;
	protected $fillable = [];
		public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('controlNo', 'LIKE', "%$search%")
					  ->orWhere('payee', 'LIKE', "%$search%")
					  ->orWhere('requestedDate', 'LIKE', "%$search%")
					  ->orWhere('reason', 'LIKE', "%$search%");
					  
			});
	}
}