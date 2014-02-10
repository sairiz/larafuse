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
}
