<?php namespace Saiffil\Larafuse\Tables;

class AffResource extends BaseTable {

	protected $table = 'AffResource';
	public static $rules = array(
		'Id' => 'required',
		'Title' => 'required',
		'ResourceType' => 'required',
		'ResourceOrder' => 'required',
		'ResourceHTML' => 'required',
		'ResourceHREF' => 'required',
		'Notes' => 'required',
		'ProgramIds' => 'required'
	);
}
