<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
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
        //
        \Illuminate\Support\Facades\View::composer('backpack::layout', function ($view) {
            $view->with('sidebar', collect($view->getData()['sidebar'])->filter(function ($item) {
                // Exclude 'User' from the sidebar by checking its route or URL
                return !str_contains($item['url'] ?? '', 'user');
            }));
        });
    }
}
