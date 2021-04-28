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

Route::name('pages.')->group(function () {

    Route::view('/', 'pages.welcome')->name('welcome');
    Route::view('/about', 'pages.about')->name('about');
    Route::view('/apidocs', 'pages.apidocs')->name('apidocs');
    Route::view('/contact', 'pages.contact')->name('contact');
    Route::view('/home', 'pages.home')->name('home');
    Route::view('/documentation', 'pages.documentation')->name('documentation');
    Route::view('/privacy', 'pages.privacy')->name('privacy');
    Route::view('/security', 'pages.security')->name('security');
    Route::view('/services', 'pages.services')->name('services');
});

Route::middleware(['auth:sanctum', 'verified'])->name('data.')->group(function () {
    Route::view('/data/overview', 'data.overview')->name('overview');
    Route::view('/data/locations', 'data.locations')->name('locations');
    Route::view('/data/sources', 'data.sources')->name('sources');
    Route::view('/data/favorites', 'data.favorites')->name('favorites');
    Route::view('/data/visits', 'data.visits')->name('visits');
    Route::view('/data/images', 'data.images')->name('images');
    Route::view('/data/map', 'data.map')->name('map');
});
