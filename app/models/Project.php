<?php

class Project extends Eloquent 
{

	protected $table = 'projects';
	protected $fillable = [];

	public function InvItem()
	{
		return $this->hasMany('invitem', 'project_id');
	}

	public function Pos()
	{
		return $this->hasMany('po', 'proj_id');
	}

	public function IncomeSummaryViewDetails()
	{
		return $this->hasMany('IncomeSummaryViewDetails', 'project_id');
	}
	public function budget()
	{
		return $this->hasMany('Budget');
	}
	public function modelhouse()
	{
		return $this->hasMany('Modelhouse');
	}
	public function Mrs()
	{
		return $this->hasMany('mrs');
	}
	public function Rfp()
	{
		return $this->hasMany('rfp');
	}
	public function Prs()
	{
		return $this->hasMany('prs', 'proj_id');
	}
}