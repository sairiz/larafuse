<?php namespace Sairiz\Larafuse\Tables;

class Lead extends BaseTable {

	protected $table = 'Lead';

	public static $relationsData = [
	    'stage'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Stage', 'foreignKey' => 'StageID'], 
	    'status'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Status', 'foreignKey' => 'StatusID'],  
	    'affiliate'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Status', 'foreignKey' => 'AffiliateId'], 	
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'], 		        
	    'stageMove'  => ['hasMany', 'Sairiz\Larafuse\Tables\StageMove', 'foreignKey' => 'OpportunityId'],   
	    'productInterest'  => ['hasMany', 'Sairiz\Larafuse\Tables\ProductInterest', 'foreignKey' => 'ObjectId'],   		    	     	       		    		    	    	    	    	    
	];
}
