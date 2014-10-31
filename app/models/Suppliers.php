<?php

class Suppliers extends \Eloquent {
	protected $table= "suppliers";
	protected $fillable = [];

	public function Po()
	{
		return $this->belongsTo('po');
	}
}