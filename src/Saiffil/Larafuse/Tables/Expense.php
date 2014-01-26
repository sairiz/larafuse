<?php namespace Saiffil\Larafuse\Tables;

class Expense extends BaseTable {

	protected $table = 'Expense';
	public static $rules = array(
		'Id' => 'required',
		'ContactId' => 'required',
		'ExpenseType' => 'required',
		'TypeId' => 'required',
		'ExpenseAmt' => 'required',
		'DateIncurred' => 'required'
	);
}
