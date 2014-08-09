<?php

class InvItem extends Eloquent 
{

	protected $table = 'inventoryItems';
	protected $guarded = [];

	public function InvItem()
	{
		return $this->hasMany('InvItems');
	}
}