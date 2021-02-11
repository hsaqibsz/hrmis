<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Category;
use App\Position;
use App\Currency;
use App\Donor;
use App\Department;
use App\Region;
use App\Province;
use View;


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
        Schema::defaultStringLength(191);
        View::share('Shared_users', User::all());
        View::share('Shared_categories', Category::all());
        View::share('Shared_position', Position::all());
        View::share('Shared_currencies', Currency::all());
        View::share('Shared_departments', Department::all());
        View::share('Shared_donors', Donor::all());

    }
}
