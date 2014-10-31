<?php

class Item extends \Eloquent {

	protected $table = 'item';
	protected $guarded = [];


	public function Po()
	{
		return $this->belongsTo('po');
	}

	public function Invoice()
	{
		return $this->hasMany('invoice');
	}
	public function prsitem()
	{
		return $this->belongsTo('Prsitem');
	}
}