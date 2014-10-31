<?php

class Labor extends \Eloquent {
	protected $table= "labor";
	protected $fillable = [];

public function cashvouchers()
{
	return $this->belongsTo('Cashvouchers');
}
    public function employee()
{
	return $this->belongsTo('Employee');
}
	public function laborDescr()
{
	return $this->hasMany('laborDescr');
}
}
