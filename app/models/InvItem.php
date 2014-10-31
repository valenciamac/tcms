<?php

class InvItem extends Eloquent 
{

	protected $table = 'inventoryitems';
	protected $guarded = [];

	public function InvDesc()
	{
		return $this->hasMany('InvDesc');
	}

	public function Project()
	{
		return $this->belongsTo('project', 'project_id');
	}
}