<?php

class Ciitem extends \Eloquent {
	protected $table = 'ciitem';
	protected $fillable = [];

	public function Ci()
	{
		return $this->belongsTo('ci', 'num');
	}
}