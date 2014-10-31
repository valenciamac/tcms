<?php

class Ci extends \Eloquent {
	protected $table = 'ci';
	public function Po()
	{
		return $this->belongsTo('po');
	}
	public function Ciitem()
	{
		return $this->hasMany('ciitem', 'invnum','num');
	}

	protected $fillable = [
		'po_po',
		'qty',
		'iname',
		'desc',
		'price'
	];
}