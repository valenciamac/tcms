<?php

class Item extends \Eloquent {

	protected $table = 'item';
	protected $guarded = [];


	public function Po()
	{
		return $this->belongsTo('po');
	}
}