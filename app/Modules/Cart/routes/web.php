<?php

use Illuminate\Support\Facades\Route;

Route::get('/cart', 'CartController@cart');
Route::get('/remove-cart', 'CartController@removecart');
Route::post('/qty-update', 'CartController@updateqty');
Route::delete('/remove-cart-session', 'CartController@rscart');
