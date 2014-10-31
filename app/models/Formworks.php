<?php

class Formworks extends \Eloquent {
	protected $table = 'formworks';
	protected $fillable = [];
	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}
}