<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SafetyController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/lokalne-atrakcje', [HomeController::class, 'attractions'])->name('home.attractions');
    Route::get('/lokalizacja', [HomeController::class, 'location'])->name('home.location');
    Route::get('/kontakt', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/polityka-prywatnosci', [HomeController::class, 'privacy-policy'])->name('home.privacy-policy');

    Route::get('/apartamenty', [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get('/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');

    Route::get('/{apartmentSlug}/bezpieczenstwo', SafetyController::class)->name('safety');
    Route::get('/{apartmentSlug}/lokalne-atrakcje', AttractionController::class)->name('attractions');
    Route::get('/{apartmentSlug}/galeria', GalleryController::class)->name('gallery');
    Route::get('/{apartmentSlug}/kontakt', ContactController::class)->name('contact');
    Route::get('/{apartmentSlug}/pokoje/', [RoomController::class, 'index'])->name('room.index');
    Route::get('/{apartmentSlug}/pokoje/{roomSlug}', [RoomController::class, 'show'])->name('room.show');
});
