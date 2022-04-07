<?php

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth','isAdmin'])->get('admin/dashboard/', function () {
    return view('layouts.admin.dashboard');
})->name('dashboard');

// Route::get('/', function () {
//     return view('layouts.user.home');
// })->name('user.home');
Route::get('/', 'App\Http\Controllers\HomeController@index');

