<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;

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
        // View::composer('components.navigation', function ($view) {
        //     $cart = session()->get('cart', []);
        //     $totalItems = 0;

        //     foreach ($cart as $item) {
        //         $totalItems += $item['quantity'];
        //     }

        //     $view->with('totalItems', $totalItems);
        // });
    }
}
