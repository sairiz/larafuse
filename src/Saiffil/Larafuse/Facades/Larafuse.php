<?php namespace Saiffil\Larafuse\Facades;

use Illuminate\Support\Facades\Facade;

class Larafuse extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return  string
	 */
	protected static function getFacadeAccessor() { return 'larafuse'; }
}