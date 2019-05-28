<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\ { Photo, User };
use App\Policies\ { PhotoPolicy, UserPolicy };

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        Photo::class => PhotoPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
