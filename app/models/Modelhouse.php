<?php

class Modelhouse extends \Eloquent {
	protected $table = 'modelhouse';
	protected $fillable = [];

	public function project()
	{
		return $this->belongsTo('Project');
	}
	public function prs()
	{
		return $this->hasMany('prs','model_id');
	}
	public function masonry()
	{
		return $this->hasMany('Masonry');
	}
	public function formworks()
	{
		return $this->hasMany('Formworks');
	}
	public function steel()
	{
		return $this->hasMany('Steel');
	}
	public function carpentry()
	{
		return $this->hasMany('Carpentry');
	}
	public function thinmistry()
	{
		return $this->hasMany('Thinmistry');
	}
	public function truss()
	{
		return $this->hasMany('Truss');
	}
	public function hardware()
	{
		return $this->hasMany('Hardware');
	}
	public function tile()
	{
		return $this->hasMany('Tile');
	}
	public function door()
	{
		return $this->hasMany('Door');
	}
	public function electrical()
	{
		return $this->hasMany('Electrical');
	}
	public function plumbing()
	{
		return $this->hasMany('Plumbing');
	}
	public function paint()
	{
		return $this->hasMany('Paint');
	}

}