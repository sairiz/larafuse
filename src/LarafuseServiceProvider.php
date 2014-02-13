<?php namespace Saiffil\Larafuse;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Saiffil\Larafuse\Data\Fetch;
use Saiffil\Larafuse\Data\Sync;
use Saiffil\Larafuse\Larafuse;

class LarafuseServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('saiffil/larafuse');

		include __DIR__.'/routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['fetch'] = $this->app->share(function()
		{
			return new Fetch;
		});

		$this->app['sync'] = $this->app->share(function()
		{
			return new Sync(new Fetch);
		});

		$this->app['larafuse'] = $this->app->share(function()
		{
			return new Larafuse;
		});

		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Fetch','Saiffil\Larafuse\Facades\Fetch');
			$loader->alias('Sync','Saiffil\Larafuse\Facades\Sync');
			$loader->alias('Larafuse','Saiffil\Larafuse\Facades\Larafuse');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['fetch','sync','larafuse'];
	}

}