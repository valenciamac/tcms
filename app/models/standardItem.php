<?php

class StandardItem extends Eloquent {

	protected $table = 'standarditem';
	protected $guarded = [
	];

	public function StandardDesc()
	{
		return $this->hasMany('StandardDesc');
	}


}