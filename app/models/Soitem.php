<?php

class Soitem extends \Eloquent {
	protected $table = 'soitem';
	protected $fillable = [];

	public function So()
	{
		return $this->belongsTo('so', 'num');
	}
}