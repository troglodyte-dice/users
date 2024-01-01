<?php

namespace TroglodyteDice\Users;


use Illuminate\Support\ServiceProvider;

class TroglodyteUsersServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes.php');
		$this->loadViewsFrom(__DIR__.'/views', 'troglodyte-users');
		if ($this->app->runningInConsole()) {
			$this->publishes([
				__DIR__.'/views' => resource_path('views/vendor/troglodyte-users'),
			], 'troglodyte-users-views');
		}
	}
}