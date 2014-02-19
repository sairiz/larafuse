<?php namespace Sairiz\Larafuse\Tables;

class PayPlanItem extends BaseTable {

	protected $table = 'PayPlanItem';

	public static $relationsData = [
	    'payPlan'  => ['belongsTo', 'Sairiz\Larafuse\Tables\PayPlan', 'foreignKey' => 'PayPlanId'], 		        	    
	];
}
