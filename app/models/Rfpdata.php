<?php

class Rfpdata extends \Eloquent {
	protected $table = 'rfpdata';
	protected $fillable = [
		'rfpno',
		'si',
		'dr',
		'so',
		'ci',
		'others',
		'ms',
		'amount'
	];

}