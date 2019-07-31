<?php

namespace App\Providers;

use App\User;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Dusterio\LumenPassport\LumenPassport;

class AuthServiceProvider extends ServiceProvider
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
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        Passport::tokensCan([
            'scope-1' => 'Scope 1',
            'scope-2' => 'Scope 2',
        ]);
        LumenPassport::routes($this->app);
    }
}
