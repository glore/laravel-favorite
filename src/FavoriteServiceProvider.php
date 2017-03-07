<?php

namespace Ufutx\LaravelFavorite;

use Illuminate\Support\ServiceProvider;

/**
 * This file is part of Laravel Favorite,
 *
 * @license MIT
 * @package ChristianKuri/laravel-favorite
 *
 * Copyright (c) 2016 Christian Kuri
 */
class FavoriteServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
            __DIR__.'/../migrations/' => database_path('migrations')
        ], 'migrations');
	}

	/**
	 * Register the application services.
	 * 
	 * @return void
	 */
	public function register()
	{
		# code...
	}
}
