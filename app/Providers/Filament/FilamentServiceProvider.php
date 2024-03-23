<?php

namespace App\Providers\Filament;

use Illuminate\Support\ServiceProvider;
use Filament\Navigation\UserMenuItem;
use Filament\Facades\Filament;

class FilamentServiceProvider extends ServiceProvider
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
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                'main_page' => UserMenuItem::make()
                    ->label('Главная страница')
                    ->url(route('index'))
                    ->icon('heroicon-o-home'),
            ]);
        });
    }
}
