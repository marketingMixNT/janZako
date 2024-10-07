<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ApartmentController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get(LaravelLocalization::transRoute('routes.home-local-attractions'), [HomeController::class, 'attractions'])->name('home.attractions');
    Route::get(LaravelLocalization::transRoute('routes.home-localization'), [HomeController::class, 'location'])->name('home.location');
    Route::get(LaravelLocalization::transRoute('routes.home-contact'), [HomeController::class, 'contact'])->name('home.contact');
    Route::get(LaravelLocalization::transRoute('routes.home-privacy-policy'), [HomeController::class, 'privacyPolicy'])->name('home.privacy-policy');
    // Route::get(LaravelLocalization::transRoute('routes.home-regulations'), [HomeController::class, 'regulations'])->name('home.privacy-policy');

    Route::get(LaravelLocalization::transRoute('routes.local-attractions'), [ApartmentController::class, 'attractions'])->name('attractions');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [ApartmentController::class, 'contact'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.gallery'), [ApartmentController::class, 'gallery'])->name('gallery');
    Route::get(LaravelLocalization::transRoute('routes.safety'), [ApartmentController::class, 'safety'])->name('safety');

    Route::get(LaravelLocalization::transRoute('routes.apartments'), [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get('/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');

    Route::get(LaravelLocalization::transRoute('routes.rooms'), [RoomController::class, 'index'])->name('room.index');
    Route::get(LaravelLocalization::transRoute('routes.room'), [RoomController::class, 'show'])->name('room.show');


    // Route::get('/', [HomeController::class, 'index'])->name('home.index');
    // Route::get('/lokalne-atrakcje', [HomeController::class, 'attractions'])->name('home.attractions');
    // Route::get('/lokalizacja', [HomeController::class, 'location'])->name('home.location');
    // Route::get('/kontakt', [HomeController::class, 'contact'])->name('home.contact');
    // Route::get('/polityka-prywatnosci', [HomeController::class, 'privacyPolicy'])->name('home.privacy-policy');

    // Route::get('/{apartmentSlug}/lokalne-atrakcje', [ApartmentController::class, 'attractions'])->name('attractions');
    // Route::get('/{apartmentSlug}/kontakt', [ApartmentController::class, 'contact'])->name('contact');
    // Route::get('/{apartmentSlug}/galeria', [ApartmentController::class, 'gallery'])->name('gallery');
    // Route::get('/{apartmentSlug}/bezpieczenstwo', [ApartmentController::class, 'safety'])->name('safety');




    // Route::get('/apartamenty', [ApartmentController::class, 'index'])->name('apartment.index');
    // Route::get('/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');


    // Route::get('/{apartmentSlug}/pokoje/', [RoomController::class, 'index'])->name('room.index');
    // Route::get('/{apartmentSlug}/pokoje/{roomSlug}', [RoomController::class, 'show'])->name('room.show');
});
