<?php

class Rfp extends \Eloquent {
	protected $fillable = [];

	protected $table = 'rfp';


	public function Project()
	{
		return $this->belongsTo('project','project_id','id');
	}
}