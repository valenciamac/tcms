<?php

class Tile extends \Eloquent {

	protected $table='tile';
	protected $fillable = [];
	
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}