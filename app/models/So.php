<?php

class So extends \Eloquent {
	protected $table = 'so';

	public function Po()
	{
		return $this->belongsTO('po');
	}
	public function Soitem()
	{
		return $this->hasMany('soitem', 'invnum','num');
	}
	
	protected $fillable = [
		'po_po',
		'qty',
		'iname',
		'desc',
		'price'
	];
}