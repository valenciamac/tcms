<?php

class IncomeSummaryAdd extends \Eloquent {
	protected $table = 'repincomefromcontracts';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
        'contractTitle',
		'incomeJanuary',
		'incomeFebruary',
		'incomeMarch',
		'incomeApril',
		'incomeMay',
		'incomeJune',
		'incomeJuly',
		'incomeAugust',
		'incomeSeptember',
		'incomeOctober',
		'incomeNovember',
		'incomeDecember',
		'updated_at',
		'created_at'
	];
}