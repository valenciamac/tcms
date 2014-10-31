<?php

class IncomeSummaryAdd extends \Eloquent {
	protected $table = 'repincomefromcontracts';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [];

    public function Project()
	{
		return $this->belongsTo('project', 'project_id');
	}
}