<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->namespace('admin')->name('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

});
