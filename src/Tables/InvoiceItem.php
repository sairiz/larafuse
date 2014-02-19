<?php namespace Sairiz\Larafuse\Tables;

class InvoiceItem extends BaseTable {

	protected $table = 'InvoiceItem';

	public static $relationsData = [
	    'orderItem'  => ['belongsTo', 'Sairiz\Larafuse\Tables\OrderItem', 'foreignKey' => 'OrderItemId'], 
	    'invoice'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'InvoiceId'], 	
	    'jobRecurringInstances'  => ['hasMany', 'Sairiz\Larafuse\Tables\JobRecurringInstance', 'foreignKey' => 'InvoiceItemId'],			    	            	    
	];		

}
