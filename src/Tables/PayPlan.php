<?php namespace Sairiz\Larafuse\Tables;

class PayPlan extends BaseTable {

	protected $table = 'PayPlan';

	public static $relationsData = [
	    'items'  => ['hasMany', 'Sairiz\Larafuse\Tables\PayPlanItems', 'foreignKey' => 'PayPlanId'], 
	    'job'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Job', 'foreignKey' => 'OrderId'], 	
	    'invoice'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'InvoiceId'], 		        	    
	];			
}
