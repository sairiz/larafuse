<?php namespace Saiffil\Larafuse\Tables;

class TicketType extends BaseTable {

	protected $table = 'TicketType';
	public static $rules = array(
		'Id' => 'required',
		'CategoryId' => 'required',
		'Label' => 'required'
	);
}
