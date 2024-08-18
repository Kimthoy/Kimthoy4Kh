<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
// use Illuminate\Support\ServiceProvider;
use App\Models\Wishlist;

class ViewServiceProvider extends ServiceProvider
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
        // Use view composer to share the wishlist count with all views
        View::composer('*', function ($view) {
            if (auth()->check()) {
                // Count the number of wishlist items for the logged-in user
                $wishlistCount = Wishlist::where('user_id', auth()->id())->count();
            } else {
                $wishlistCount = 0;
            }

            // Share the count with all views
            $view->with('wishlistCount', $wishlistCount);
        });
    }

}
