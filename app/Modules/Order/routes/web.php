<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->get('/order', 'OrderController@welcomeuser');
Route::middleware(['auth'])->post('/getorder', 'OrderController@getorder');
Route::middleware(['auth'])->get('/order-status','OrderController@orderstatus');
Route::middleware(['auth','isAdmin'])->get('/admin/order','OrderController@welcomeadmin');
Route::middleware(['auth','isAdmin'])->post('/admin/update-order-status', 'OrderController@updateorderstatus');
Route::middleware(['auth','isAdmin'])->post('/admin/edit-order-status', 'OrderController@editorder');
Route::middleware(['auth','isAdmin'])->get('/admin/invoice/{id}', 'OrderController@invoicepage');
Route::middleware(['auth'])->get('/order-details/{id}', 'OrderController@orderdetail');
Route::middleware(['auth','isAdmin'])->get('admin/product','ProductController@product');



