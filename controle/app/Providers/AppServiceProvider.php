<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //setLocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        //setlocale(LC_ALL, \Config::get('app.lc_all'));
        //Carbon::setLocale(\Config::get('app.locale'));
        Carbon::setLocale('pt_BR');
        //Carbon::setLocale($this->app->getLocale());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
