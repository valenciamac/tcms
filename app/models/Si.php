<?php

class Si extends \Eloquent {
	protected $table = 'si';
	protected $fillable = [
		'po_po',
		'qty',
		'iname',
		'desc',
		'price'
	];

	public function Po()
	{
		return $this->belongsTo('po');
	}

	public function Invoiceitem()
	{
		return $this->hasMany('invoiceitem', 'invnum','num');
	}


}