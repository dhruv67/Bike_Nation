<?php

use Illuminate\Support\Facades\Route;

// Route::get('front', 'FrontController@welcome');

Route::get('products', 'FrontController@fetchproducts');
Route::get('/products/{url}', 'FrontController@productsdetails');
Route::get('product-filter', 'FrontController@filter');
Route::get('/no-product', 'FrontController@filter');
Route::post('/qty', 'FrontController@qty');
Route::post('/add-to-cart', 'FrontController@addToCart');
