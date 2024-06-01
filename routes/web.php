<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserIsAdmin;
use App\Http\Controllers\UniversityController;
// Users
Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');


// universities
Route::get('/{country}/universities', [UniversityController::class, 'index'])->name('universities');

Route::get('/university/{slug}',[UniversityController::class, "showUniversity"])->name('universities.details');

Route::get('/country', [App\Http\Controllers\CountryController::class, "index"])->name('country');

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








