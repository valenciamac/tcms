<?php

class Invoice extends \Eloquent {
	protected $fillable = [];
	protected $table = 'invoice';

	public function Item()
	{
		return $this->belongsTo('item');
	}
}