<?php namespace Saiffil\Larafuse\Tables;

use Carbon\Carbon;

class LeadSourceRecurringExpense extends BaseTable {

	protected $table = 'LeadSourceRecurringExpense';

	public function setStartDateAttribute($value)
	{
	    $this->attributes['EndDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function getEndDateAttribute($value)
	{
		Carbon::setToStringFormat('Y-m-d H:i:s');
		return (new Carbon($value,'US/Eastern'));
	}
}
