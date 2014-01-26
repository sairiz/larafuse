<?php namespace Saiffil\Larafuse\Tables;

class ActionSequence extends BaseTable {

	protected $table = 'ActionSequence';
	public static $rules = array(
		'Id' => 'required',
		'TemplateName' => 'required',
		'VisibleToTheseUsers' => 'required'
	);
}
