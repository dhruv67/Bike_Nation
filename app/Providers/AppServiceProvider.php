<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Paginator::useBootstrap();
        $this->loadViewsFrom('Modules/Front/resources/views', 'Front');
        $this->loadViewsFrom('Modules/Cart/resources/views', 'Cart');

        view()->composer('*', function ($view) 
        {  
            $cart = session('cart');
            $view->with('cart', $cart);  
        });

        view()->composer('*', function ($view2) 
        {  
            $cartt = Cart::where('cart.users_id', Auth::id())->get();
            $view2->with('cartt', $cartt );  
        });

    }
    
}
