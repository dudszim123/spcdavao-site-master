<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
// passport
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function($user){
            return $user->type === 'Admin';
        });
        Gate::define('isStudent',function($user){
            return $user->type === 'Student';
        });
        Gate::define('isRegistrar',function($user){
            return $user->type === 'Registrar';
        });
        Gate::define('isAdmission',function($user){
            return $user->type === 'Admission';
        });
        Gate::define('isHumanResource',function($user){
            return $user->type === 'Human Resource';
        });
        Gate::define('isGuidance',function($user){
            return $user->type === 'Guidance';
        });
        // passport
        Passport::routes();
        //
    }
}
