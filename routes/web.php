<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserIsAdmin;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/universities', function () {
    return view('pages.universities');
})->name('universities');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/application', function () {
    return view('pages.application');
})->name('application');

Route::get('/application/{details}', function () {
    return view('pages.application-details');
})->name('application.details');

Route::get('/document', function () {
    return view('pages.document');
})->name('document');

