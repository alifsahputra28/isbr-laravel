<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.event-profile')->name('home');
Route::view('/register', 'pages.register')->name('register');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/registration/success', 'pages.registration-success')->name('registration.success');
Route::view('/login', 'auth.login')->name('login');
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/participants', 'admin.participants')->name('admin.participants');
Route::view('/admin/registrations', 'admin.registrations')->name('admin.registrations');
Route::view('/admin/payments', 'admin.payments')->name('admin.payments');
Route::view('/admin/race-pack', 'admin.race-pack')->name('admin.race-pack');
Route::view('/admin/reports', 'admin.reports')->name('admin.reports');
Route::view('/admin/settings', 'admin.settings')->name('admin.settings');

Route::view('/about', 'pages.about')->name('about');
Route::view('/race-info', 'pages.race-info')->name('race-info');
Route::view('/race-pack', 'pages.race-pack')->name('race-pack');
Route::view('/prices', 'pages.prices')->name('prices');
Route::view('/podium-prize', 'pages.podium-prize')->name('podium-prize');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/contact', 'pages.contact')->name('contact');
