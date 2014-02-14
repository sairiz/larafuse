<?php namespace Sairiz\Larafuse\Tables;

use LaravelBook\Ardent\Ardent;
use Carbon\Carbon;
use Larafuse;

abstract class BaseTable extends Ardent {

	protected static $unguarded = true;

	protected $primaryKey = 'Id';

	public $timestamps = false;

	public static $rules = array();

	public function getDates()
	{
		return Larafuse::where('Type','LIKE','Date%')->rememberForever()->lists('Field');
	}

	public function getDateField()
	{
		return Larafuse::whereType('Date')->rememberForever('DateField')->lists('Field');
	}

	public function getDateTimeField()
	{
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
		elseif(in_array($key, $this->getDateField()))
		{
			$value = (new Carbon($value))->toDateString();
		}
		elseif(in_array($key, $this->getDateTimeField()))
		{
			$value = (new Carbon($value))->toDateTimeString();
		}

		$this->attributes[$key] = $value;
	}

	/**
	 * Get a plain attribute (not a relationship).
	 *
	 * @param  string  $key
	 * @return mixed
	 */
	protected function getAttributeValue($key)
	{
		$value = $this->getAttributeFromArray($key);

		// If the attribute has a get mutator, we will call that then return what
		// it returns as the value, which is useful for transforming values on
		// retrieval from the model to a form that is more useful for usage.
		if ($this->hasGetMutator($key))
		{
			return $this->mutateAttribute($key, $value);
		}

		// If the attribute is listed as a date, we will convert it to a DateTime
		// instance on retrieval, which makes it quite convenient to work with
		// date fields without having to create a mutator for each property.
		elseif(in_array($key, $this->getDateField()))
		{
			if ($value)
			{
				Carbon::setToStringFormat('Y-m-d');
				return (new Carbon($value,'US/Eastern'));
			}
		}
		elseif(in_array($key, $this->getDateTimeField()))
		{
			if ($value)
			{
				Carbon::setToStringFormat('Y-m-d H:i:s');
				return (new Carbon($value,'US/Eastern'));
			}
		}		

		return $value;
	}
}