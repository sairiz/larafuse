<?php namespace Saiffil\Larafuse\Tables;

use Carbon\Carbon;

class LeadSourceRecurringExpense extends BaseTable {

	protected $table = 'LeadSourceRecurringExpense';
	public static $rules = array(
		'Id' => 'required',
		'LeadSourceId' => 'required',
		'Title' => 'required',
		'Notes' => 'required',
		'Amount' => 'required',
		'StartDate' => 'required',
		'EndDate' => 'required',
		'NextExpenseDate' => 'required'
	);

	public function setStartDateAttribute($value)
	{
	        $this->attributes['EndDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function getEndDateAttribute($value)
	{
	        return $value->toDateTimeString();
	}
}
