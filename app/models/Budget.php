<?php

class Budget extends \Eloquent {
	protected $table = 'budget';
	protected $fillable = [];
	public function project()
	{
		return $this->belongsTo('Project');
	}
}