<?php

class Paint extends \Eloquent {
	protected $table='paint';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}