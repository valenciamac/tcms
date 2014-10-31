<?php

class Mrs extends Eloquent {

	protected $table = 'mrs';
	protected $guarded = [];

	public function Project()
	{
		return $this->belongsTo('Project');
	}
	public function Mrsinv()
	{
		return $this->hasMany('mrsinv','mrsnum','id');
	}


}