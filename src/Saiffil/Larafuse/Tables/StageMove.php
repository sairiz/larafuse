<?php namespace Saiffil\Larafuse\Tables;

class StageMove extends BaseTable {

	protected $table = 'StageMove';
	public static $rules = array(
		'Id' => 'required',
		'OpportunityId' => 'required',
		'MoveDate' => 'required',
		'MoveToStage' => 'required',
		'MoveFromStage' => 'required',
		'PrevStageMoveDate' => 'required',
		'CreatedBy' => 'required',
		'DateCreated' => 'required',
		'UserId' => 'required'
	);
}
