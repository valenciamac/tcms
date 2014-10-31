<?php

class Receipts extends \Eloquent {
	protected $table = 'receipts';
	protected $primaryKey = 'num';
	
	public function Si()
	{
		return $this->hasMany('si');
	}

	
	protected $fillable = [];
}