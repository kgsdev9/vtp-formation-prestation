<?php

namespace App\Providers;


use App\Models\User;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrap();


        Gate::define('is_entreprise', function(User $user) {

            return $user->role->name == "entreprise";
         });

         Gate::define('is_user', function(User $user) {
             return $user->role->name == "utilisateur";
          });


         Gate::define('is_prestataire', function(User $user) {
            return $user->role->name == "prestataire";
         });

    }
}
