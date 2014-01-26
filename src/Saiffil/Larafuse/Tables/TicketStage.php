<?php namespace Saiffil\Larafuse\Tables;

class TicketStage extends BaseTable {

	protected $table = 'TicketStage';
	public static $rules = array(
		'Id' => 'required',
		'StageName' => 'required'
	);
}
