<?php namespace Saiffil\Larafuse\Tables;

class MtgLead extends BaseTable {

	protected $table = 'MtgLead';
	public static $rules = array(
		'Id' => 'required',
		'DateAppraisalOrdered' => 'required',
		'DateAppraisalDone' => 'required',
		'DateAppraisalReceived' => 'required',
		'DateTitleOrdered' => 'required',
		'DateTitleReceived' => 'required',
		'DateRateLocked' => 'required',
		'DateRateLockExpires' => 'required',
		'CreditReportDate' => 'required',
		'ApplicationDate' => 'required',
		'ActualCloseDate' => 'required',
		'FundingDate' => 'required'
	);
}
