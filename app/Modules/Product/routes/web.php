<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isAdmin'])->get('admin/product','ProductController@product', function () {});
Route::post('admin/add-product', 'ProductController@store');
Route::get('admin/fetch-product', 'ProductController@fetchproduct');
Route::get('admin/changeStatus-product', 'ProductController@changeStatus');
Route::post('admin/edit-product', 'ProductController@edit');
Route::post('admin/edit-image', 'ProductController@editimage');
Route::post('admin/update-product', 'ProductController@update');
Route::get('admin/trash-product', 'ProductController@destroy');
Route::post('admin/remove-image', 'ProductController@deleteimage');
Route::middleware(['auth','isAdmin'])->get('admin/product/trashproduct','ProductController@trashproductpage', function () {});
Route::get('admin/trashfetch-product', 'ProductController@trashfetchproduct');
Route::get('admin/restoreproduct', 'ProductController@restoreproduct');
