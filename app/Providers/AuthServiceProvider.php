<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('manage-sectors', function ($user) {
        //     return $user->roles()->where('title', 'Admin')->exists();

        $this->registerPolicies();

        Gate::define('isUser', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'User');
        });

        Gate::define('isUserWithoutProfile', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'User') && Auth::user()->description == null;
        });

        Gate::define('isUserWithProfile', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'User') && Auth::user()->description;
        });

        Gate::define('isRepresentative', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'Representative') && Auth::user()->company_id;
        });

        Gate::define('isRepresentativeWithoutCompany', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'Representative') && Auth::user()->company_id == null;
        });

        Gate::define('isRepresentativeWithCompany', function (): bool {
            $roles = Auth::user()->roles;
            return $roles->contains('title', 'Representative') && Auth::user()->company_id !== null;
        });
    }
}
