<?php namespace Sairiz\Larafuse\Tables;

class Stage extends BaseTable {

	protected $table = 'Stage';

	public static $relationsData = [
	    'leads'  => ['hasMany', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'StageID'],  		    	     	       		    		    	    	    	    	    
	];
}
