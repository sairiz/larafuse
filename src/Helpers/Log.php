<?php namespace Sairiz\Larafuse\Helpers;

class Log {
	
	public static function fetchException($table, $data, $exception)
	{
		$file = storage_path().'/logs/'.$table.'fetchexception.log';

		$input = 'Table : '.$table.PHP_EOL;
		$input .= json_encode($data).PHP_EOL;
		$input .= 'Exception : '.$exception.PHP_EOL.PHP_EOL.PHP_EOL;

		file_put_contents($file,$input,FILE_APPEND);
	}

	public static function syncException($table, $data, $exception)
	{
		$file = storage_path().'/logs/'.$table.'syncexception.log';

		$input = 'Table : '.$table.PHP_EOL;
		$input .= json_encode($data).PHP_EOL;
		$input .= 'Exception : '.$exception.PHP_EOL.PHP_EOL.PHP_EOL;

		file_put_contents($file,$input,FILE_APPEND);
	}	
}