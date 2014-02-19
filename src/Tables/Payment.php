<?php namespace Sairiz\Larafuse\Tables;

class Payment extends BaseTable {

	protected $table = 'Payment';

	public static $relationsData = [
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'], 
	    'invoice'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'InvoiceId'],
	    'user'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'UserId'],	     	
	    'cCharges'  => ['hasMany', 'Sairiz\Larafuse\Tables\CCharge', 'foreignKey' => 'PaymentId'],	
	    'invoicePayments'  => ['hasMany', 'Sairiz\Larafuse\Tables\InvoicePayment', 'foreignKey' => 'PaymentId'],		    		    	            	    
	];		

}
