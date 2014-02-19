<?php namespace Sairiz\Larafuse\Tables;

class ContactGroupAssign extends BaseTable {

	protected $table = 'ContactGroupAssign';

	public static $relationsData = [
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'],
	    'contactGroups'  => ['belongsTo', 'Sairiz\Larafuse\Tables\ContactGroup', 'foreignKey' => 'GroupId'],	
	    'creator'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'CreatedBy'], 	
	    'owner'  => ['belongsTo', 'Sairiz\Larafuse\Tables\User', 'foreignKey' => 'OwnerID'], 	    		    		    	    	    	    	    
	];	
}
