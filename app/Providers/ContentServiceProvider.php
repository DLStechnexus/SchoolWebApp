<?php

namespace App\Providers;

use App\Models\LogoSetting;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // view()->composer('frontend.layouts.inner-header', function ($view) {
        //     $users = User::where('id', auth()->user()->id)->first();

        //     $view->with(compact('users',));
        // });
    }
}
