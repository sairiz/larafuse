<?php namespace Sairiz\Larafuse\Tables;

class Status extends BaseTable {

	protected $table = 'Status';

	public static $relationsData = [
	    'leads'  => ['hasMany', 'Sairiz\Larafuse\Tables\Lead', 'foreignKey' => 'StatusID'],  		    	     	       		    		    	    	    	    	    
	];
}
