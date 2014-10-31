<?php

class Separation extends \Eloquent {
	protected $table = 'separation';
	protected $fillable = [];

	public function employ()
	{
		return $this->hasOne('employ');
	}
}