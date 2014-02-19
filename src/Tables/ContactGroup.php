<?php namespace Sairiz\Larafuse\Tables;

class ContactGroup extends BaseTable {

	protected $table = 'ContactGroup';

	public static $relationsData = [
	    'assigns'  => ['hasMany', 'Sairiz\Larafuse\Tables\ContactGroupAssign', 'foreignKey' => 'GroupId'],
	    'category'  => ['belongsTo', 'Sairiz\Larafuse\Tables\ContactGroupCategory', 'foreignKey' => 'GroupCategoryId'],	    		    		    	    	    	    	    
	];
}
