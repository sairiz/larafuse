<?php namespace Saiffil\Larafuse\Tables;

class Campaignee extends BaseTable {

	protected $table = 'Campaignee';
	public static $rules = array(
		'CampaignId' => 'required',
		'Status' => 'required',
		'Campaign' => 'required',
		'ContactId' => 'required'
	);
}
