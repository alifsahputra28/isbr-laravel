<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.event-profile')
    ->name('home');

Route::view('/about', 'pages.about')
    ->name('about');

Route::view('/race-info', 'pages.race-info')
    ->name('race-info');

Route::view('/race-pack', 'pages.race-pack')
    ->name('race-pack');

Route::view('/route', 'pages.route')
    ->name('route');

Route::view('/prices', 'pages.prices')
    ->name('prices');

Route::view('/podium-prize', 'pages.podium-prize')
    ->name('podium-prize');

Route::view('/faq', 'pages.faq')
    ->name('faq');

Route::view('/terms', 'pages.terms')
    ->name('terms');

Route::view('/contact', 'pages.contact')
    ->name('contact');
