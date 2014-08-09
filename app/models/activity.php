<?php

class Activity extends Eloquent {

	protected $table = 'activities';
	protected $fillable = [
			'user_id',
			'action'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}


}