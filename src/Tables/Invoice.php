<?php namespace Sairiz\Larafuse\Tables;

class Invoice extends BaseTable {

	protected $table = 'Invoice';

	public static $relationsData = [
	    'invoicePayments'  => ['hasMany', 'Sairiz\Larafuse\Tables\InvoicePayment', 'foreignKey' => 'InvoiceId'],
	    'items'  => ['hasMany', 'Sairiz\Larafuse\Tables\InvoiceItem', 'foreignKey' => 'InvoiceId'],
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'], 
	    'job'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Job', 'foreignKey' => 'JobId'], 	
	    'payments'  => ['hasMany', 'Sairiz\Larafuse\Tables\Payment', 'foreignKey' => 'InvoiceId'],	
	    'affiliate'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Affiliate', 'foreignKey' => 'AffiliateId'], 
		'leadAffiliate'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Affiliate', 'foreignKey' => 'LeadAffiliateId'], 		    	            	    
	];	
}
