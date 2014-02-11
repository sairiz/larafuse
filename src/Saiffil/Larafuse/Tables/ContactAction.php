<?php namespace Saiffil\Larafuse\Tables;

use Carbon\Carbon;

class ContactAction extends BaseTable {

	protected $table = 'ContactAction';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'OpportunityId' => 'required',
		'ActionType' => 'required',
		'ActionDescription' => 'required',
		'CreationDate' => 'required',
		'CreationNotes' => 'required',
		'CompletionDate' => 'required',
		'ActionDate' => 'required',
		'EndDate' => 'required',
		'PopupDate' => 'required',
		'UserID' => 'required',
		'Accepted' => 'required',
		'CreatedBy' => 'required',
		'LastUpdated' => 'required',
		'LastUpdatedBy' => 'required',
		'Priority' => 'required',
		'IsAppointment' => 'required'
	);

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
