<?php namespace Saiffil\Larafuse\Tables;

class Template extends BaseTable {

	protected $table = 'Template';
	public static $rules = array(
		'Id' => 'required',
		'PieceType' => 'required',
		'PieceTitle' => 'required',
		'Categories' => 'required'
	);
}
