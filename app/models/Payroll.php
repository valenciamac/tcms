<?php

class Payroll extends \Eloquent {
	protected $table = 'payroll';
	public $timestamps = false;
	protected $fillable = [];



	public function employee()
	{
		return $this->belongsTo('Employee');
	}
}