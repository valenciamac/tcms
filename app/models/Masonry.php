<?php

class Masonry extends \Eloquent {
	protected $table = 'masonry';
	protected $fillable = [];


	public function modelhouse()
	{
		return $this->belongsTo('Modelhouse');
	}

	public function formworks()
	{
		return $this->belongsTo('Formworks', 'model_id');
	}
}