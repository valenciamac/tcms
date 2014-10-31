<?php

class Dr extends \Eloquent {
	protected $table = 'dr';

	public function Po()
	{
		return $this->belongsTO('po');
	}
	public function Drinv()
	{
		return $this->hasMany('drinv', 'invnum','num');
	}
	
	protected $fillable = [
		'po_po',
		'qty',
		'iname',
		'desc',
		'price'
	];
}