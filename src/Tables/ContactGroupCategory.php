<?php namespace Sairiz\Larafuse\Tables;

class ContactGroupCategory extends BaseTable {

	protected $table = 'ContactGroupCategory';

	public static $relationsData = [
	    'contactGroup'  => ['hasMany', 'Sairiz\Larafuse\Tables\ContactGroup', 'foreignKey' => 'GroupCategoryId'],    		    		    	    	    	    	    
	];
}
