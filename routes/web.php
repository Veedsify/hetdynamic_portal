<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserIsAdmin;

Route::get('/', function () {
    return view('pages.index-1');
})->middleware(['admin']);
