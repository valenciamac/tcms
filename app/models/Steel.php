<?php

class Steel extends \Eloquent {
	protected $table='steel';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}