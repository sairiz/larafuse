<?php namespace Saiffil\Larafuse\Tables;

class OrderItem extends BaseTable {

	protected $table = 'OrderItem';
	public static $rules = array(
		'Id' => 'required',
		'OrderId' => 'required',
		'ProductId' => 'required',
		'SubscriptionPlanId' => 'required',
		'ItemName' => 'required',
		'Qty' => 'required',
		'CPU' => 'required',
		'PPU' => 'required',
		'ItemDescription' => 'required',
		'ItemType' => 'required',
		'Notes' => 'required',
		'LastUpdated' => 'required'
	);
}
