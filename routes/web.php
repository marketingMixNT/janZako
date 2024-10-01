<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApartmentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    
    Route::get('/', HomeController::class)->name('home');
    Route::get('/apartamenty', [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get('/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');
});
