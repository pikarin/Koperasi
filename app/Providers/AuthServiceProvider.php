<?php

namespace app\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->before(function ($user, $ability) {
            if ($user->role_id === 1) {
                return true;
            }
        });

        $gate->define('lihat', function($user){
          return $user->role_id === 1;
        });

        $gate->define('show_anggotas', function($user, $anggotas) {
          return $user->id === $anggotas->user_id;
        });
    }
}
