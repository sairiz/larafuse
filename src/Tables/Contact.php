<?php namespace Sairiz\Larafuse\Tables;

class Contact extends BaseTable {

	protected $table = 'Contact';

	public static $relationsData = [
	    'jobs'  => ['hasMany', 'Sairiz\Larafuse\Tables\Job', 'foreignKey' => 'ContactId'],   
	    'invoices'  => ['hasMany', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'ContactId'], 
	    'payments'  => ['hasMany', 'Sairiz\Larafuse\Tables\Payment', 'foreignKey' => 'ContactId'], 
	    'recurringOrders'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'ContactId'], 
	    'recurringOrderWithContacts'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrderWithContact', 'foreignKey' => 'ContactId'],  	     	     
	    'expenses'  => ['hasMany', 'Sairiz\Larafuse\Tables\Expense', 'foreignKey' => 'ContactId'],   
	    'fileBoxes'  => ['hasMany', 'Sairiz\Larafuse\Tables\FileBox', 'foreignKey' => 'ContactId'], 
	    'actions'  => ['hasMany', 'Sairiz\Larafuse\Tables\ContactAction', 'foreignKey' => 'ContactId'],   
	    'groupAssigns'  => ['hasMany', 'Sairiz\Larafuse\Tables\ContactGroupAssign', 'foreignKey' => 'ContactId'],
	    'leadSource'  => ['belongsTo', 'Sairiz\Larafuse\Tables\LeadSource', 'foreignKey' => 'LeadSourceId'], 
	    'leads'  => ['hasMany', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'ContactId'], 
	    'creator'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'CreatedBy'], 	
	    'owner'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'OwnerID'], 
	    'affiliates'  => ['hasMany', 'Sairiz\Larafuse\Tables\Affiliate', 'foreignKey' => 'ContactId'], 	
	    'referrals'  => ['hasMany', 'Sairiz\Larafuse\Tables\Referral', 'foreignKey' => 'ContactId'], 
	    'campaignees'  => ['hasMany', 'Sairiz\Larafuse\Tables\Campaignee', 'foreignKey' => 'ContactId'], 
	    'company'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Company', 'foreignKey' => 'CompanyID'],
	    'creditCards'  => ['hasMany', 'Sairiz\Larafuse\Tables\CreditCard', 'foreignKey' => 'ContactId'], 	
	    'tickets'  => ['hasMany', 'Sairiz\Larafuse\Tables\Ticket', 'foreignKey' => 'ContactId'], 		        	    	 	    	 	        	        	      		     		    	    
	];

}
