<?php

class Mrsinv extends \Eloquent {

	protected $table = 'mrsinv';
	protected $fillable = [
		'invName',
		'idesc',
		'qty',
		'mrsnum'
	];

	public function Mrs()
	{
		return $this->belongsTo('mrs');
	}
}