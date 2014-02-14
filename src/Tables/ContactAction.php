<?php namespace Sairiz\Larafuse\Tables;

use Carbon\Carbon;

class ContactAction extends BaseTable {

	protected $table = 'ContactAction';

	public function setEndDateAttribute($value)
	{
	    $this->attributes['EndDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function getEndDateAttribute($value)
	{
		Carbon::setToStringFormat('Y-m-d H:i:s');
		return (new Carbon($value,'US/Eastern'));
	}
	
}
