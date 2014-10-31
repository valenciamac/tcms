<?php

class Hardware extends \Eloquent {
	protected $table='hardware';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}