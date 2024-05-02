<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('regular-users', function () {
    return view('regular-users');
});

Route::get('admin-users', function () {
    return view('admin-users');
});

Route::get('feature-flags', \App\Http\Controllers\FeatureFlagsController::class);
