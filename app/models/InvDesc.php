<?php

class InvDesc extends Eloquent 
{

	protected $table = 'inventorydesc';
	protected $guarded = [];

	public function InvItem()
	{
		return $this->belongsTo('InvItem');
	}
}