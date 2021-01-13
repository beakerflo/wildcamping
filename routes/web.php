<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('pages.welcome')->with('title', 'Welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('pages.welcome');
})->name('home');

Route::name('pages.')->group(function () {
    Route::get('/pages/welcome', function () {
        return view('pages.welcome');
    })->name('welcome');
    Route::get('/', function () {
        return view('pages.welcome');
    })->name('home');
    Route::get('/documentation', function () {
        return view('pages.documentation');
    })->name('documentation');
    Route::get('/apidocs', function () {
        return view('pages.api');
    })->name('apidocs');
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');
    Route::get('/security', function () {
        return view('pages.security');
    })->name('security');
    Route::get('/privacy', function () {
        return view('pages.privacy');
    })->name('privacy');
});

Route::middleware(['auth:sanctum', 'verified'])->name('data.')->group(function () {
    Route::get('/data/overview', function () {
        return view('data.overview');
    })->name('overview');
    Route::get('/data/locations', function () {
        return view('data.locations');
    })->name('locations');
    Route::get('/data/sources', function () {
        return view('data.sources');
    })->name('sources');
    Route::get('/data/favorites', function () {
        return view('data.favorites');
    })->name('favorites');
    Route::get('/data/visits', function () {
        return view('data.visits');
    })->name('visits');
    Route::get('/data/images', function () {
        return view('data.images');
    })->name('images');
});
