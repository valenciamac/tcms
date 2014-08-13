<?php

class Project extends Eloquent 
{

	protected $table = 'projects';
	protected $guarded = [];

	public function InvItem()
	{
		return $this->hasMany('InvItem');
	}

	public function Mrs()
	{
		return $this->hasMany('Mrs');
	}
}