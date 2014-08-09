<?php

class Hoursrate extends Eloquent {

	protected $table = 'hoursrate';
	public $timestamps = false;
	protected $fillable = [];	

	// public function scopeSearch($query, $search)
	// {
	// 	return $query->where(function($query) use ($search)
	// 		{
	// 			$query->where('department', 'LIKE', "%$search%")
	// 				  ->orWhere('position', 'LIKE', "%$search%")
	// 				  ->orWhere('fname', 'LIKE', "%$search%")
	// 				  ->orWhere('mname', 'LIKE', "%$search%")
	// 				  ->orWhere('lname', 'LIKE', "%$search%")
	// 				  ->orWhere('status', 'LIKE', "%$search%")
	// 				  ->orWhere('id', 'LIKE', "%$search%");
	// 		});
	// }
}
