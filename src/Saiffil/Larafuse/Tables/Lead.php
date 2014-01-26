<?php namespace Saiffil\Larafuse\Tables;

class Lead extends BaseTable {

	protected $table = 'Lead';
	public static $rules = array(
		'Id' => 'required',
		'OpportunityTitle' => 'required',
		'ContactID' => 'required',
		'AffiliateId' => 'required',
		'UserID' => 'required',
		'StageID' => 'required',
		'StatusID' => 'required',
		'Leadsource' => 'required',
		'Objection' => 'required',
		'ProjectedRevenueLow' => 'required',
		'ProjectedRevenueHigh' => 'required',
		'OpportunityNotes' => 'required',
		'DateCreated' => 'required',
		'LastUpdated' => 'required',
		'LastUpdatedBy' => 'required',
		'CreatedBy' => 'required',
		'EstimatedCloseDate' => 'required',
		'NextActionDate' => 'required',
		'NextActionNotes' => 'required'
	);
}
