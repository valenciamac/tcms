<?php

class Project extends Eloquent 
{

	protected $table = 'projects';
	protected $guarded = [];

	public function InvItem()
	{
		return $this->hasMany('InvItem');
	}
}