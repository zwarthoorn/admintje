<?php namespace Wiesnekker\SimpleAdmin;;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/views', 'simpleAdmin');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		include __DIR__.'/routes.php';
		$this->app->make('Wiesnekker\SimpleAdmin\SimpleAdminController');
	}

}
