<?php

class Activity extends Eloquent {

	protected $table = 'activities';
	protected $fillable = [
			'user_id',
			'action'
	];


}