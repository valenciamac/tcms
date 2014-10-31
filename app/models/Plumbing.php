<?php

class Plumbing extends \Eloquent {
	protected $table='plumbing';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}