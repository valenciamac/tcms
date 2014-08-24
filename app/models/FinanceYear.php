<?php

class FinanceYear extends \Eloquent {

	protected $table = 'financeYear';

	public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
    	//
    ];

    public function IncomeSummary()
	{
		return $this->belongsTo('IncomeSummary');
	}
}