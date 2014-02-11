<?php namespace Saiffil\Larafuse\Tables;

use Zizaco\Confide\ConfideUser;
use Larafuse;

class Contact extends ConfideUser {

	protected $table = 'Contact';

	protected static $unguarded = true;

	protected $primaryKey = 'Id';

	public $timestamps = false;

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
		elseif (in_array($key, $this->getDates()))
		{
			if ($value) return $this->asDateTime($value);
		}

		return $value;
	}	

	/**
	 * Return a timestamp as DateTime object.
	 *
	 * @param  mixed  $value
	 * @return \Carbon\Carbon
	 */
	protected function asDateTime($value)
	{
		// If this value is an integer, we will assume it is a UNIX timestamp's value
		// and format a Carbon object from this timestamp. This allows flexibility
		// when defining your date fields as they might be UNIX timestamps here.
		if (is_numeric($value))
		{
			return Carbon::createFromTimestamp($value);
		}

		// If the value is in simply year, month, day format, we will instantiate the
		// Carbon instances from that format. Again, this provides for simple date
		// fields on the database, while still supporting Carbonized conversion.
		elseif (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $value))
		{
			return Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
		}

		// Finally, we will just assume this date is in the format used by default on
		// the database connection and use that format to create the Carbon object
		// that is returned back out to the developers after we convert it here.
		elseif ( ! $value instanceof DateTime)
		{
			$format = $this->getDateFormat();

			return Carbon::createFromFormat($format, $value);
		}

		return Carbon::instance($value);
	}	
}
