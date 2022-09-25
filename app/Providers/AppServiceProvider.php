<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Role;
use DB;
use Illuminate\Support\Facades\View;


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
        //
        $roles = DB::table('roles')->get();
        $users = DB::table('users')->get();
        $dists = DB::table('distributors')->get();
        $dealers = DB::table('dealers')->get();



        View::share('roles', $roles);
        View::share('users', $users);
        View::share('dists', $dists);

        View::share('dealers', $dealers);



    }
}
