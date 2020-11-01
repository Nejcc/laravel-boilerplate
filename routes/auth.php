<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify as Auth;


Auth::loginView(function () {
    return view('auth.login');
});

Auth::registerView(function () {
    return view('auth.register');
});

Auth::requestPasswordResetLinkView(function () {
    return view('auth.forgot-password');
});

Auth::verifyEmailView(function () {
    return view('auth.verify-email');
});
