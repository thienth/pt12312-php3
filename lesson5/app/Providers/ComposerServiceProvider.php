<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $name = 'Cadic';
        // View::share('sieuxayda', $name);
        View::composer(['product.list', 'auth.login'], 'App\Http\ViewComposers\HomepageComposer@compose');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
