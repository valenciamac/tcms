<?php

class Thinmistry extends \Eloquent {
	protected $table='thinmistry';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}