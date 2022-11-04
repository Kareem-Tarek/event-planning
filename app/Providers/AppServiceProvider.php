<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('setting',Setting::first());
        view()->share('categories',Category::status(1)->limit(5)->get());
        view()->composer('layouts.admin.master', function ($view) {
            $theme = Cookie::get('theme');
         //   dd($theme);
            $view->with('theme', $theme);
        });

    }
}
