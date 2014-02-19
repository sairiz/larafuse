<?php namespace Sairiz\Larafuse\Tables;

class Product extends BaseTable {

	protected $table = 'Product';

	public static $relationsData = [
	    'orderItems'  => ['hasMany', 'Sairiz\Larafuse\Tables\OrderItem', 'foreignKey' => 'ProductId'],
	    'categoryAssigns'  => ['hasMany', 'Sairiz\Larafuse\Tables\ProductCategoryAssign', 'foreignKey' => 'ProductId'],
	    'recurringOrderWithContacts'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrderWithContact', 'foreignKey' => 'ProductId'],
	    'options'  => ['hasMany', 'Sairiz\Larafuse\Tables\ProductOption', 'foreignKey' => 'ProductId'], 
	    'subscriptionPlans'  => ['hasMany', 'Sairiz\Larafuse\Tables\SubscriptionPlan', 'foreignKey' => 'ProductId'], 	
	    'recurringOrders'  => ['hasMany', 'Sairiz\Larafuse\Tables\RecurringOrder', 'foreignKey' => 'ProductId'], 	
	    'cProgram'  => ['hasMany', 'Sairiz\Larafuse\Tables\CProgram', 'foreignKey' => 'ProductId'], 
	    'interests'  => ['hasMany', 'Sairiz\Larafuse\Tables\ProductInterest', 'foreignKey' => 'ProductId'],	    		    		    	    	    	    	    
	];	
}
