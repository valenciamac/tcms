<?php

class Electrical extends \Eloquent {
	protected $table='electrical';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}