<?php

class Prsitem extends \Eloquent {

	protected $table = 'prsitem';

	protected $fillable = [];

	public function prs()
	{
		return $this->belongsTo('Prs');
	}

}