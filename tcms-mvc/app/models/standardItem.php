<?php

class StandardItem extends Eloquent {

	protected $table = 'standarditems';
	protected $guarded = [
	];

	public function StandardDesc()
	{
		return $this->hasMany('StandardDesc');
	}


}