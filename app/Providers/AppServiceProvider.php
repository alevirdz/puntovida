<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::share([
            'auth' => function () {
                return [
                    'user' => Auth::user(),
                ];
            },
            'roles' => function () {
                $user = Auth::user();
                return $user ? $user->getRoleNames() : [];
            },
            'permissions' => function () {
                $user = Auth::user();
                return $user ? $user->getPermissionNames() : [];
            },
        ]);
    }
}
