<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->get('/payment', 'PaymentController@welcomeuser');

