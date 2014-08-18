<?php

class StandardDesc extends Eloquent {

	protected $table = 'standarddesc';
	protected $guarded = [
	];

	public function StandardItem()
	{
		return $this->belongsTo('StandardItem');
	}


}