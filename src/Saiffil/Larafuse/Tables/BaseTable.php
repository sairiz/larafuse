<?php namespace Saiffil\Larafuse\Tables;

use Eloquent;
use Carbon\Carbon;
use Larafuse;

abstract class BaseTable extends Eloquent {

	protected static $unguarded = true;

	protected $primaryKey = 'Id';

	public $timestamps = false;

	public static $rules = array();

	public function getDates()
	{
		//$table = join('', array_slice(explode('\\', get_class($this)), -1));

		return Larafuse::where('Type','LIKE','Date%')->rememberForever()->lists('Field');
	}

	public function getDateField()
	{
		//$table = join('', array_slice(explode('\\', get_class($this)), -1));

		return Larafuse::whereType('Date')->rememberForever('DateField')->lists('Field');
	}

	public function getDateTimeField()
	{
		//$table = join('', array_slice(explode('\\', get_class($this)), -1));
		
		return Larafuse::whereType('DateTime')->rememberForever('DateTimeField')->lists('Field');
	}	

	/**
	 * Set a given attribute on the model.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 * @return void
	 */
	public function setAttribute($key, $value)
	{
		// First we will check for the presence of a mutator for the set operation
		// which simply lets the developers tweak the attribute as it is set on
		// the model, such as "json_encoding" an listing of data for storage.
		if ($this->hasSetMutator($key))
		{
			$method = 'set'.studly_case($key).'Attribute';

			return $this->{$method}($value);
		}

		// If an attribute is listed as a "date", we'll convert it from a DateTime
		// instance into a form proper for storage on the database tables using
		// the connection grammar's date format. We will auto set the values.
		//elseif (in_array($key, $this->getDates()))
		//{
			//if ($value)
			//{
				elseif(in_array($key, $this->getDateField()))
				{
					$value = (new Carbon($value))->toDateString();
				}
				elseif(in_array($key, $this->getDateTimeField()))
				{
					$value = (new Carbon($value))->toDateTimeString();
				}
			//}
		//}

		$this->attributes[$key] = $value;
	}

/*
	public function setDateCreatedAttribute($value)
	{ 
	        $this->attributes['DateCreated'] = (new Carbon($value))->toDateTimeString();
	}

	public function setLastUpdatedAttribute($value)
	{ 
	        $this->attributes['LastUpdated'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateAppraisalOrderedAttribute($value)
	{ 
	        $this->attributes['DateAppraisalOrdered'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateAppraisalDoneAttribute($value)
	{ 
	        $this->attributes['DateAppraisalDone'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateAppraisalReceivedAttribute($value)
	{ 
	        $this->attributes['DateAppraisalReceived'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateTitleOrderedAttribute($value)
	{ 
	        $this->attributes['DateTitleOrdered'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateTitleReceivedAttribute($value)
	{ 
	        $this->attributes['DateTitleReceived'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateRateLockedAttribute($value)
	{ 
	        $this->attributes['DateRateLocked'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateRateLockExpiresAttribute($value)
	{ 
	        $this->attributes['DateRateLockExpires'] = (new Carbon($value))->toDateTimeString();
	}

	public function setCreditReportDateAttribute($value)
	{ 
	        $this->attributes['CreditReportDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setApplicationDateAttribute($value)
	{ 
	        $this->attributes['ApplicationDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setActualCloseDateAttribute($value)
	{ 
	        $this->attributes['ActualCloseDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setFundingDateAttribute($value)
	{ 
	        $this->attributes['FundingDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setEstimatedCloseDateAttribute($value)
	{ 
	        $this->attributes['EstimatedCloseDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setNextActionDateAttribute($value)
	{ 
	        $this->attributes['NextActionDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setMoveDateAttribute($value)
	{ 
	        $this->attributes['MoveDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setPrevStageMoveDateAttribute($value)
	{ 
	        $this->attributes['PrevStageMoveDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactCustomDate1Attribute($value)
	{ 
	        $this->attributes['Contact.CustomDate1'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactCustomDate2Attribute($value)
	{ 
	        $this->attributes['Contact.CustomDate2'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactCustomDate3Attribute($value)
	{ 
	        $this->attributes['Contact.CustomDate3'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactCustomDate4Attribute($value)
	{ 
	        $this->attributes['Contact.CustomDate4'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactCustomDate5Attribute($value)
	{ 
	        $this->attributes['Contact.CustomDate5'] = (new Carbon($value))->toDateTimeString();
	}

	public function setContactDateCreatedAttribute($value)
	{ 
	        $this->attributes['Contact.DateCreated'] = (new Carbon($value))->toDateTimeString();
	}

	public function setCreationDateAttribute($value)
	{ 
	        $this->attributes['CreationDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setCompletionDateAttribute($value)
	{ 
	        $this->attributes['CompletionDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setActionDateAttribute($value)
	{ 
	        $this->attributes['ActionDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setEndDateAttribute($value)
	{ 
	        $this->attributes['EndDate'] = (new Carbon($value))->toDateString();
	}

	public function setPopupDateAttribute($value)
	{ 
	        $this->attributes['PopupDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setDateIncurredAttribute($value)
	{ 
	        $this->attributes['DateIncurred'] = (new Carbon($value))->toDateTimeString();
	}

	public function setStartDateAttribute($value)
	{ 
	        $this->attributes['StartDate'] = (new Carbon($value))->toDateString();
	}

	public function setNextExpenseDateAttribute($value)
	{ 
	        $this->attributes['NextExpenseDate'] = (new Carbon($value))->toDateTimeString();
	}

	public function setAnniversaryAttribute($value)
	{ 
	        $this->attributes['Anniversary'] = (new Carbon($value))->toDateString();
	}

	public function setBirthdayAttribute($value)
	{ 
	        $this->attributes['Birthday'] = (new Carbon($value))->toDateString();
	}

	public function setLastBillDateAttribute($value)
	{ 
	        $this->attributes['LastBillDate'] = (new Carbon($value))->toDateString();
	}

	public function setNextBillDateAttribute($value)
	{ 
	        $this->attributes['NextBillDate'] = (new Carbon($value))->toDateString();
	}

	public function setPaidThruDateAttribute($value)
	{ 
	        $this->attributes['PaidThruDate'] = (new Carbon($value))->toDateString();
	}

	public function setContactAnniversaryAttribute($value)
	{ 
	        $this->attributes['Contact.Anniversary'] = (new Carbon($value))->toDateString();
	}

	public function setDateSetAttribute($value)
	{ 
	        $this->attributes['DateSet'] = (new Carbon($value))->toDateString();
	}

	public function setDateExpiresAttribute($value)
	{ 
	        $this->attributes['DateExpires'] = (new Carbon($value))->toDateString();
	}

	public function setPayDateAttribute($value)
	{ 
	        $this->attributes['PayDate'] = (new Carbon($value))->toDateString();
	}

	public function setDateDueAttribute($value)
	{ 
	        $this->attributes['DateDue'] = (new Carbon($value))->toDateString();
	}

	public function setInitDateAttribute($value)
	{ 
	        $this->attributes['InitDate'] = (new Carbon($value))->toDateString();
	}

	public function setDueDateAttribute($value)
	{ 
	        $this->attributes['DueDate'] = (new Carbon($value))->toDateString();
	}

	public function setCloseDateAttribute($value)
	{ 
	        $this->attributes['CloseDate'] = (new Carbon($value))->toDateString();
	}

	public function setFolowUpDateAttribute($value)
	{ 
	        $this->attributes['FolowUpDate'] = (new Carbon($value))->toDateString();
	}

	public function setTargetCompletionDateAttribute($value)
	{ 
	        $this->attributes['TargetCompletionDate'] = (new Carbon($value))->toDateString();
	}

	public function setDateInStageAttribute($value)
	{ 
	        $this->attributes['DateInStage'] = (new Carbon($value))->toDateString();
	} */
}

/*
	public function __construct($attributes = array())
	{
		parent::__construct($attributes);

		$datas = Larafuse::whereFusetable(get_class($this))->get();

		foreach ($datas as $data) {
			if($data->Access == 'Read')
				$this->guarded[] = $data->Field;
		}

	}
*/

	// Table withoud Id are Campaignee, RecurringOrderWithContact, ContactGroupAssign
