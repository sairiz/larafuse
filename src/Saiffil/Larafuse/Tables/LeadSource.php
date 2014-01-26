<?php namespace Saiffil\Larafuse\Tables;

class LeadSource extends BaseTable {

	protected $table = 'LeadSource';
	public static $rules = array(
		'Id' => 'required',
		'Name' => 'required',
		'Description' => 'required',
		'StartDate' => 'required',
		'EndDate' => 'required',
		'CostPerLead' => 'required',
		'Vendor' => 'required',
		'Medium' => 'required',
		'Message' => 'required',
		'LeadSourceCategoryId' => 'required',
		'Status' => 'required'
	);
}
