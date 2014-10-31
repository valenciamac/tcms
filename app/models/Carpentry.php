<?php

class Carpentry extends \Eloquent {
	protected $table='carpentry';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}