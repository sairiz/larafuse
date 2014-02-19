<?php namespace Sairiz\Larafuse\Tables;

class OrderItem extends BaseTable {

	protected $table = 'OrderItem';

	public static $relationsData = [
	    'invoiceItems'  => ['hasMany', 'Sairiz\Larafuse\Tables\InvoiceItem', 'foreignKey' => 'OrderItemId'], 
	    'job'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Job', 'foreignKey' => 'OrderId'], 	
	    'product'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Product', 'foreignKey' => 'ProductId'], 		        	    
	];			

}
