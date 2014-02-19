<?php namespace Sairiz\Larafuse\Tables;

class ProductInterest extends BaseTable {

	protected $table = 'ProductInterest';

	public static $relationsData = [
	    'product'  => ['belongsTo', 'Sairiz\Larafuse\Tables\ProductCategory', 'foreignKey' => 'ProductId'],   
	    'lead'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'ObjectId'],   	     		    		    	    	    	    	    
	];
}
