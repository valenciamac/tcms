<?php

class Invoiceitem extends \Eloquent {
	protected $table = 'invoiceitem';

	protected $fillable = [];

	public function Si()
	{
		return $this->belongsTo('si','num');
	}
}