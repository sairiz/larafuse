<?php namespace Sairiz\Larafuse\Tables;

class ProductCategory extends BaseTable {

	protected $table = 'ProductCategory';

	public static $relationsData = [
	    'assigns'  => ['hasMany', 'Sairiz\Larafuse\Tables\ProductCategoryAssign', 'foreignKey' => 'ProductCategoryId'],    		    		    	    	    	    	    
	];
}
