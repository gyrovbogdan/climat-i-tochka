<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;

class ViewComposerServiceProvider extends ServiceProvider
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
        view()->composer(['web.layout.master', 'ventilation.index'], function ($view) {
            $view->with('contacts', array_flip(Contact::pluck('name', 'data')->toArray()));
        });
    }
}
