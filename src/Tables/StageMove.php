<?php namespace Sairiz\Larafuse\Tables;

class StageMove extends BaseTable {

	protected $table = 'StageMove';

	public static $relationsData = [
	    'lead'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'OpportunityId'], 
	    'user'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'UserId'],  		     		    	     	       		    		    	    	    	    	    
	];
}
