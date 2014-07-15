<?php

class Item extends \Eloquent {

	protected $table = 'item';
	public $timestamps = false;
	protected $fillable = [];


	public function Po()
	{
		return $this->belongsTo('po');
	}
}