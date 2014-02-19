<?php namespace Sairiz\Larafuse\Tables;

class Affiliate extends BaseTable {

	protected $table = 'Affiliate';

	public static $relationsData = [ 
	    'invoices'  => ['hasMany', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'AffiliateId'],
	    'invoices2'  => ['hasMany', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'LeadAffiliateId'],  
	    'recurringOrders'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'AffiliateId'], 
	    'recurringOrders2'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'LeadAffiliateId'], 
		'recurringOrderWithContacts'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrderWithContact', 'foreignKey' => 'AffiliateId'], 
	    'recurringOrderWithContacts2'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrderWithContact', 'foreignKey' => 'LeadAffiliateId'],      	     	     
	    'parent'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Affiliate', 'foreignKey' => 'ParentId'], 
	    'leads'  => ['hasMany', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'AffiliateId'], 
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'], 	
	    'referrals'  => ['hasMany', 'Sairiz\Larafuse\Tables\Referral', 'foreignKey' => 'AffiliateId'],     	    	 	    	 	        	        	      		     		    	    
	];
}
