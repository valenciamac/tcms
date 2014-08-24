<?php

class Template extends Eloquent {

	protected $table = 'templates';
	protected $fillable = [
			'tempname'
	];

	public function StandardItem()
	{
		return $this->hasMany('StandardItem');
	}


}