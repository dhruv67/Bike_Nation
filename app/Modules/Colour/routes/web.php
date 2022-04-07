<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Colour\Http\Controllers\ColourController;

Route::middleware(['auth','isAdmin'])->get('admin/color','ColourController@colour', function () {});
Route::post('admin/add-colour', 'ColourController@store');
Route::get('admin/fetch-color', 'ColourController@fetchcolor');
Route::get('admin/trashfetch-color', 'ColourController@trashfetchcolor');
Route::post('admin/edit-color', 'ColourController@edit');
Route::post('admin/update-color', 'ColourController@update');
Route::get('admin/trash-color', 'ColourController@destroy');
Route::get('admin/changeStatus-color', 'ColourController@changeStatus');
Route::middleware(['auth','isAdmin'])->get('admin/color/trashcolor','ColourController@trashcolorpage', function () {});
Route::get('admin/restorecolor', 'ColourController@restorecolor');

