<?php

namespace App\Providers;


use App\Models\User;
use App\Models\Formateur;
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
        Gate::define('is_formateur', function(User $user) {

            return $user->role->name == "formateur";
         });

         Gate::define('is_user', function(User $user) {
             return $user->role->name == "utilisateur";
          });


         Gate::define('is_prestataire', function(User $user) {
            return $user->role->name == "prestataire";
         });

    }
}
