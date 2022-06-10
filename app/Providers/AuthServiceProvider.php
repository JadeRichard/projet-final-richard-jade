<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function ($user) {

            return $user->roles->first()->name == 'admin';
        
        });

        Gate::define('is-teacher', function ($user) {

            return $user->roles->first()->name == 'teacher' || $user->roles->first()->name == 'admin';
        
        });

        Gate::define('is-redactor', function (User $user) {
            
            return $user->roles->first()->name == 'redactor' || $user->roles->first()->name == 'admin';
        
        });

        Gate::define('create-redactor', function ($user) {

            return $user->roles->first()->name == 'redactor' || $user->roles->first()->name == 'admin';
        
        });
        
    }
}
