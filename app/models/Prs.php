<?php

class Prs extends \Eloquent {
	protected $table='prs';
	protected $fillable = [];

    public function modelhouse()
{
	return $this->belongsTo('modelhouse');
}
public function prsitem()
{
	return $this->hasMany('prsitem');
}
}