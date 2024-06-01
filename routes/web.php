<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserIsAdmin;

// Users
Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');


// universities
Route::get('/universities', function () {
    return view('pages.universities');
})->name('universities');

Route::get('/universities/{details}', function () {
    return view('pages.universities-details');
})->name('universities.details');

Route::get('/country', function () {
    return view('pages.country');
})->name('country');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// application
Route::get('/application', function () {
    return view('pages.application');
})->name('application');

Route::get('/application/{details}', function () {
    return view('pages.application-details');
})->name('application.details');

Route::get('/application-form' , function () {
    return view('pages.applicant-form');
})->name('application.form');


Route::get('/document', function () {
    return view('pages.document');
})->name('document');




// admin
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');


// universities
Route::get('/admin/universities', function () {
    return view('admin.universities');
})->name('admin.universities');




Route::get('/admin/blog', function () {
    return view('admin.blog');
})->name('admin.blog');

// application
Route::get('/admin/applicants', function () {
    return view('admin.applicant');
})->name('admin.applicant');

// user
Route::get('/admin/users', function () {
    return view('admin.user');
})->name('admin.user');








