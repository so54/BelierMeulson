<?php

namespace App\Providers;

use App\Repositories\EvenementRepository;
use App\Repositories\LienRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Carbon::setLocale(config('app.locale', 'fr'));

        Blade::if('admin', function () {
        return auth()->check() && auth()->user()->admin;
    });

        if (request ()->server ("SCRIPT_NAME") !== 'artisan') {
            view ()->share ('evenements', resolve(EvenementRepository::class)->getAll());
        }

        if (request ()->server ("SCRIPT_NAME") !== 'artisan') {
            view ()->share ('liens', resolve(LienRepository::class)->getAll());
        }

        if (request ()->server ("SCRIPT_NAME") !== 'artisan') {
            view ()->share ('users', resolve(UserRepository::class)->getAll());
        }

        Blade::if ('maintenance', function () {
            return auth ()->check () && auth ()->user ()->admin && app()->isDownForMaintenance();
        });



    }
}
