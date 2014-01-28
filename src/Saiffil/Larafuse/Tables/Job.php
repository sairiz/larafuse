<?php namespace Saiffil\Larafuse\Tables;

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

	public static $rules = array(
		/*
		'Id' => 'required',
		'JobTitle' => 'required',
		'ContactId' => 'required',
		'StartDate' => 'required',
		'DueDate' => 'required',
		'JobNotes' => 'required',
		'ProductId' => 'required',
		'JobStatus' => 'required',
		'DateCreated' => 'required',
		'JobRecurringId' => 'required',
		'OrderType' => 'required',
		'OrderStatus' => 'required',
		'ShipFirstName' => 'required',
		'ShipMiddleName' => 'required',
		'ShipLastName' => 'required',
		'ShipCompany' => 'required',
		'ShipPhone' => 'required',
		'ShipStreet1' => 'required',
		'ShipStreet2' => 'required',
		'ShipCity' => 'required',
		'ShipState' => 'required',
		'ShipZip' => 'required',
		'ShipCountry' => 'required',
		'LastUpdated' => 'required',
		'_Amount0' => 'required',
		'_Location' => 'required',
		'_Bank' => 'required',
		'_ReturnBank' => 'required',
		'_AccountHolder' => 'required',
		'_OrderAmount' => 'required',
		'_Balance' => 'required',
		'_PaymentMethod0' => 'required',
		'_FromBank' => 'required',
		'_Courier' => 'required',
		'_TrackingNo' => 'required',
		'_Date0' => 'required',
		'_OfficeLocation' => 'required',
		'_Receiver' => 'required',
		'_OfficeLocation0' => 'required',
		'_ReferenceNo2' => 'required',
		'_ReferenceNo3' => 'required',
		'_AccountNumber0' => 'required',
		'_Date1' => 'required',
		'_Date2' => 'required',
		'_Time1' => 'required',
		'_Time2' => 'required',
		'_Date3' => 'required',
		'_Time3' => 'required',
		'_Revenue' => 'required',
		'_TotalCost' => 'required',
		'_TotalCommission' => 'required',
		'_Profit' => 'required',
		'_Delivered' => 'required',
		'_ProductCost' => 'required',
		'_PostageCost' => 'required',
		'_CreditCardCharge' => 'required',
		'_OrderId0' => 'required',
		'_RunningCommission' => 'required',
		'_PromoCode0' => 'required',
		'_PromoDescription' => 'required' */
	);
}
