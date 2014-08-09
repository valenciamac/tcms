<?php

class InvDesc extends Eloquent 
{

	protected $table = 'inventoryDesc';
	protected $guarded = [];

	public function InvItem()
	{
		return $this->hasMany('InvDesc');
	}
}