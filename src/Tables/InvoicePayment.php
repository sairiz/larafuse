<?php namespace Sairiz\Larafuse\Tables;

class InvoicePayment extends BaseTable {

	protected $table = 'InvoicePayment';

	public static $relationsData = [
	    'invoice'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'InvoiceId'], 
	    'payment'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Payment', 'foreignKey' => 'PaymentId'], 		    	            	    
	];		

}
