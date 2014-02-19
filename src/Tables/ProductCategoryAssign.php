<?php namespace Sairiz\Larafuse\Tables;

class ProductCategoryAssign extends BaseTable {

	protected $table = 'ProductCategoryAssign';

	public static $relationsData = [
	    'productCategory'  => ['belongsTo', 'Sairiz\Larafuse\Tables\ProductCategory', 'foreignKey' => 'ParentId'],   
	    'product'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Product', 'foreignKey' => 'ProductId'],   	     		    		    	    	    	    	    
	];
}
