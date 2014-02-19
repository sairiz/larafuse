<?php namespace Sairiz\Larafuse\Tables;

class JobRecurringInstance extends BaseTable {

	protected $table = 'JobRecurringInstance';

	public static $relationsData = [
	    'order'  => ['belongsTo', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'RecurringId'], 
	    'invoiceItem'  => ['belongsTo', 'Sairiz\Larafuse\Tables\InvoiceItem', 'foreignKey' => 'InvoiceItemId'], 	    	    
	];		

}
