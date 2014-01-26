<?php namespace Saiffil\Larafuse\Tables;

class LeadSourceExpense extends BaseTable {

	protected $table = 'LeadSourceExpense';
	public static $rules = array(
		'Id' => 'required',
		'LeadSourceRecurringExpenseId' => 'required',
		'LeadSourceId' => 'required',
		'Title' => 'required',
		'Notes' => 'required',
		'Amount' => 'required',
		'DateIncurred' => 'required'
	);
}
