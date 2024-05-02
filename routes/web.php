<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', function () {
    if (\Laravel\Pennant\Feature::active('testing-feature')){
        return 'Testing feature is active';
    }

    return 'Testing feature is not active';
});

Route::get('regular-users', function () {
    return view('regular-users');
});

Route::get('admin-users', function () {
    return view('admin-users');
});

Route::get('feature-flags', \App\Http\Controllers\FeatureFlagsController::class);
