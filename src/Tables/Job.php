<?php namespace Sairiz\Larafuse\Tables;

class Job extends BaseTable {

	protected $table = 'Job';

	public function Contact()
    {
        return $this->belongsTo('Contact', 'ContactId', 'Id');
    }


	public function Product()
    {
        return $this->belongsTo('Product', 'ProductId', 'Id');
    }
}
