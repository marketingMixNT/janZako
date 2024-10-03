<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Apartment;
use App\Models\LocalAttraction;
use App\Models\Room;
use App\Models\Slide;
use App\Observers\ApartmentObserver;
use App\Observers\GalleryObserver;
use App\Observers\LocalAttractionObserver;
use App\Observers\RoomObserver;
use App\Observers\SlideObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Apartment::observe(ApartmentObserver::class);
        Gallery::observe(GalleryObserver::class);
        LocalAttraction::observe(LocalAttractionObserver::class);
        Room::observe(RoomObserver::class);
    }
}
