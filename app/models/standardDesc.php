<?php

class StandardDesc extends Eloquent {

	protected $table = 'standarddescs';
	protected $guarded = [
	];

	public function StandardItem()
	{
		return $this->belongsTo('StandardItem');
	}


}