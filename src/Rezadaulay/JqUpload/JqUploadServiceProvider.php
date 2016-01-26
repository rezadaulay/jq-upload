<?php 

namespace Rezadaulay\JqUpload;

use Illuminate\Support\ServiceProvider;

class JqUploadServiceProvider extends ServiceProvider {

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
		$this->package('masbro-web/jq-upload');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['JqUpload'] = $this->app->share(function($app)
		{
			return new JqUpload;
		});
		/* $this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('JqUpload', 'MasbroWeb\JqUpload\Facades\JqUpload');
		}); */
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('jq-upload');
	}

}
