<?php

use Sairiz\Larafuse\Helpers\Generate;

Route::resource('contacts', 'Sairiz\Larafuse\Controllers\ContactsController');

Route::get('/cronJobs', function () {
    Cron::add('Sync', Config::get('larafuse::syncTime'), function()
    {
         Sync::sync();
         return null;
    });

    Cron::add('Sync Main', Config::get('larafuse::syncMainTime'), function()
    {
        Sync::syncMain(Config::get('larafuse::syncMainLimit'));
        return null;
    });

    Cron::add('Sync Contact', Config::get('larafuse::syncContactTime'), function()
    {
         Sync::sync('Contact',Config::get('larafuse::syncContactLimit'));
         Sync::sync('ContactAction',Config::get('larafuse::syncContactLimit'));
         return null;
    });

    Cron::add('Sync Stage', Config::get('larafuse::syncStageTime'), function()
    {
        Sync::sync('StageMove',Config::get('larafuse::syncStageLimit'));
        Sync::sync('JobRecurringInstance',Config::get('larafuse::syncStageLimit'));
        return null;
    });

    Cron::add('Sync Order Group', Config::get('larafuse::syncOrderGroupTime'), function()
    {
        Sync::syncOrderGroup(Config::get('larafuse::syncOrderLimit'));
        return null;
    });

    Cron::add('Sync One', Config::get('larafuse::syncOneTime'), function()
    {
        Sync::sync('Referral',Config::get('larafuse::syncOneLimit'));
        Sync::sync('Campaignee',Config::get('larafuse::syncOneLimit'));
        Sync::sync('FileBox',Config::get('larafuse::syncOneLimit'));
        return null;
    });

    Cron::add('Sync Missing', Config::get('larafuse::syncMissingTime'), function()
    {
        Sync::syncMissing();
        return null;
    });

    $report = Cron::run();
    print_r ($report);
});

Route::group(array('prefix' => 'larafuse'), function()
{
    Route::get('/test', function()
    {
        return Fuse::dsQuery('Product',1,0,['Id' => '%'],['Id','ProductName']);
    });

	Route::get('fetch/rowcount', function()
	{
		return Fetch::getRowCount();
	});

	Route::get('fetch/{table?}', 'Sairiz\Larafuse\Controllers\LarafuseController@fetch');

	Route::get('fetchid/{table}/{Id}', 'Sairiz\Larafuse\Controllers\LarafuseController@fetchId');

	Route::get('fetchtable/{table}/{page?}/{continue?}', 'Sairiz\Larafuse\Controllers\LarafuseController@fetchTable');

	Route::get('syncmissing/{table?}', 'Sairiz\Larafuse\Controllers\LarafuseController@syncMissing');

	Route::get('syncfield/{table?}', function($table = null)
	{
		return Sync::syncField($table);
	});

	Route::get('syncordergroup', 'Sairiz\Larafuse\Controllers\LarafuseController@syncOrderGroup');

    Route::get('syncmain', 'Sairiz\Larafuse\Controllers\LarafuseController@syncMain');

    Route::get('sync/{table?}/{limit?}', 'Sairiz\Larafuse\Controllers\LarafuseController@sync');

	Route::get('syncid/{table}/{Id}', 'Sairiz\Larafuse\Controllers\LarafuseController@syncId');

	Route::get('path', function()
	{
		echo 'app_path() : ' . app_path() . '<br />';
		echo 'public_path() : ' . public_path() . '<br />';
		echo 'base_path() : ' . base_path() . '<br />';
		echo 'storage_path() : ' . storage_path() . '<br />';
	});

	Route::get('{table}', 'Sairiz\Larafuse\Controllers\TablesController@index');

	Route::get('{table}/create', 'Sairiz\Larafuse\Controllers\TablesController@create');

	Route::post('{table}', 'Sairiz\Larafuse\Controllers\TablesController@store');

	Route::get('{table}/{Id}', 'Sairiz\Larafuse\Controllers\TablesController@show');

	Route::get('{table}/{Id}/edit', 'Sairiz\Larafuse\Controllers\TablesController@edit');

	Route::put('{table}/{Id}', 'Sairiz\Larafuse\Controllers\TablesController@update');

	Route::patch('{table}/{Id}', 'Sairiz\Larafuse\Controllers\TablesController@update');

	Route::delete('{table}/{Id}', 'Sairiz\Larafuse\Controllers\TablesController@destroy');
});

Route::group(array('prefix' => 'generate'), function()
{

	Route::get('scaffold/{table?}', function($table = null)
	{
		if(isset($table))
			Generate::genScaffComm(ucfirst($table));
		else {
			$tables = Fetch::getTables();

			foreach ($tables as $table) {
				Generate::genScaffComm($table);
				echo '<br /><br />';
			}
		}
	});

	Route::get('customschema', function()
	{
		return Generate::genSchemaCustomColumns();
	});

	Route::get('getdatefunction', function()
	{
		return Generate::genGetDateFunction();
	});

	Route::get('setdatefunction', function()
	{
		return Generate::genSetDateFunction();
	});

	Route::get('fillarray', function()
	{
		return Generate::genFillArray();
	});

	Route::get('getdates', function()
	{
		return Generate::genGetDates();
	});
});