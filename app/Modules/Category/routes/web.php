<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isAdmin'])->get('admin/category','CategoryController@categorypage', function () {});
Route::post('admin/add-category', 'CategoryController@store');
Route::get('admin/fetch-category', 'CategoryController@fetchcategory');
Route::post('admin/edit-category', 'CategoryController@edit');
Route::post('admin/update-category', 'CategoryController@update');
Route::get('admin/changeStatus-category', 'CategoryController@changeStatus');
Route::get('admin/trash-category', 'CategoryController@destroy');
Route::middleware(['auth','isAdmin'])->get('admin/category/trashcategory','CategoryController@trashcategorypage', function () {});
Route::get('admin/trashfetch-category', 'CategoryController@trashfetchcategory');
Route::get('admin/restorecategory', 'CategoryController@restorecategory');
