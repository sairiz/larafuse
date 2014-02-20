<?php namespace Sairiz\Larafuse\Tables;

class Job extends BaseTable {

	protected $table = 'Job';

	public static $relationsData = [
	    'items'  => ['hasMany', 'Sairiz\Larafuse\Tables\OrderItem', 'foreignKey' => 'OrderId'],
	    'invoices'  => ['hasMany', 'Sairiz\Larafuse\Tables\Invoice', 'foreignKey' => 'JobId'],
	    'recurringOrders'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'OriginatingOrderId'],
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'], 
	    'products'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Product', 'foreignKey' => 'ProductId'], 	    	    	    
	];	

	public function payPlans()
    {
        return $this->hasManyThrough('Sairiz\Larafuse\Tables\PayPlan', 'Sairiz\Larafuse\Tables\Invoice','JobId','InvoiceId');
    }
}
