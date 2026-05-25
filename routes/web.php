<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\WebsiteControllers@home');
Route::get('/explore', 'App\Http\Controllers\WebsiteControllers@explore');
Route::get('/', 'App\Http\Controllers\WebsiteControllers@login');
Route::get('/messages', 'App\Http\Controllers\WebsiteControllers@messages');
Route::get('/notification', 'App\Http\Controllers\WebsiteControllers@notification');
Route::get('/profile', 'App\Http\Controllers\WebsiteControllers@profile');
Route::get('/reels', 'App\Http\Controllers\WebsiteControllers@reels');
Route::get('/sign_up', 'App\Http\Controllers\WebsiteControllers@sign_up');
Route::get('/login', 'App\Http\Controllers\WebsiteControllers@login');
