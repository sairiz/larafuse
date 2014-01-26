<?php namespace Saiffil\Larafuse\Tables;

class Ticket extends BaseTable {

	protected $table = 'Ticket';
	public static $rules = array(
		'Id' => 'required',
		'IssueId' => 'required',
		'ContactId' => 'required',
		'UserId' => 'required',
		'DevId' => 'required',
		'TicketTitle' => 'required',
		'TicketApplication' => 'required',
		'TicketCategory' => 'required',
		'TicketTypeId' => 'required',
		'Summary' => 'required',
		'Stage' => 'required',
		'Priority' => 'required',
		'Ordering' => 'required',
		'DateCreated' => 'required',
		'CreatedBy' => 'required',
		'LastUpdated' => 'required',
		'LastUpdatedBy' => 'required',
		'CloseDate' => 'required',
		'FolowUpDate' => 'required',
		'TargetCompletionDate' => 'required',
		'DateInStage' => 'required',
		'TimeSpent' => 'required',
		'HasCustomerCalled' => 'required'
	);
}
