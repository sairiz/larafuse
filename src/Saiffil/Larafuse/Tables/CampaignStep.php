<?php namespace Saiffil\Larafuse\Tables;

class CampaignStep extends BaseTable {

	protected $table = 'CampaignStep';
	public static $rules = array(
		'Id' => 'required',
		'CampaignId' => 'required',
		'TemplateId' => 'required',
		'StepStatus' => 'required',
		'StepTitle' => 'required'
	);
}
