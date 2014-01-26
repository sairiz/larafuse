<?php namespace Saiffil\Larafuse\Tables;

class FileBox extends BaseTable {

	protected $table = 'FileBox';
	public static $rules = array(
		'Id' => 'required',
		'FileName' => 'required',
		'Extension' => 'required',
		'FileSize' => 'required',
		'ContactId' => 'required',
		'Public' => 'required'
	);
}
