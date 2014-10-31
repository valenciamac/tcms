<?php

class Truss extends \Eloquent {

	protected $table='truss';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}