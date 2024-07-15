<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.navigation', function ($view) {
            $cart = session()->get('cart', []);
            $totalItems = 0;

            foreach ($cart as $item) {
                $totalItems += $item['quantity'];
            }

            $view->with('totalItems', $totalItems);
        });
    }
}
