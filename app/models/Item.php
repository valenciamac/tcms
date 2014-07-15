<?php

class Item extends \Eloquent {

	protected $table = 'item';
	public $timestamps = false;
	protected $fillable = [];


	public function Po()
	{
		return $this->belongsTo('po');
	}
	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('qty', 'LIKE', "%$search%")
					  ->orWhere('name', 'LIKE', "%$search%")
					  ->orWhere('desc', 'LIKE', "%$search%")
					  ->orWhere('price', 'LIKE', "%$search%")
					  ->orWhere('amount', 'LIKE', "%$search%")
					  ->orWhere('po', 'LIKE', "%$search%");
					  
			});
	}
}