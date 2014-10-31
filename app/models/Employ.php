<?php

class Employ extends \Eloquent {
	protected $table = 'employ';

	protected $fillable = [];

	public function Separation()
	{
		return $this->hasOne('separation');
	}
}