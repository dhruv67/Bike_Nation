<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->get('/billing', 'BillingShippingController@billing');
Route::middleware(['auth'])->post('/addbilling', 'BillingShippingController@store_bill_address');
Route::middleware(['auth'])->get('/shipping', 'BillingShippingController@shipping');
Route::middleware(['auth'])->post('/addshipping', 'BillingShippingController@store_ship_address');

