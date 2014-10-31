<?php

class Drinv extends \Eloquent {
	protected $table = 'dritem';
	protected $fillable = [];

	public function Dr()
	{
		return $this->belongsTo('dr', 'num');
	}
}