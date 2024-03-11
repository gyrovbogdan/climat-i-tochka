<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Conditioner;

class UnguardConditionerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Conditioner::unguard();
    }
}
