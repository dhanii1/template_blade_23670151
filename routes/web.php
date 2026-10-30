<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing
Route::controller(LandingController::class)->name('landing.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/feature', 'feature')->name('feature');
    Route::get('/project', 'project')->name('project');
    Route::get('/contact', 'contact')->name('contact');
});

// Admin
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/calendar', 'calendar')->name('calendar');
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/forms', 'forms')->name('forms');
    Route::get('/sweetalert', 'sweetalert')->name('sweetalert');
    Route::get('/datatables', 'datatables')->name('datatables');
});