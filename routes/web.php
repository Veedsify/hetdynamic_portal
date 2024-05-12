<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserIsAdmin;

Route::get('/', function () {
    return view('pages.profile');
});

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
