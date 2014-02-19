<?php namespace Sairiz\Larafuse\Tables;

class Referral extends BaseTable {

	protected $table = 'Referral';

	public static $relationsData = [
	    'affiliate'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Affiliate', 'foreignKey' => 'AffiliateId'],
	    'contact'  => ['belongsTo', 'Sairiz\Larafuse\Tables\Contact', 'foreignKey' => 'ContactId'],		    		    		    	    	    	    	    
	];
}
