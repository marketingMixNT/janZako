<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Slide;
use App\Models\Gallery;
use App\Models\Apartment;
use App\Observers\CtaObserver;
use App\Models\HomeContactPage;
use App\Models\LocalAttraction;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Models\HomeLocationPage;
use App\Observers\SlideObserver;
use App\Models\HomeApartmentsPage;
use App\Observers\GalleryObserver;
use App\Observers\ApartmentObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\HomeContactPageObserver;
use App\Observers\LocalAttractionObserver;
use App\Observers\HomeLocationPageObserver;
use App\Observers\HomeApartmentsPageObserver;

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
        Cta::observe(CtaObserver::class);
        Gallery::observe(GalleryObserver::class);
        LocalAttraction::observe(LocalAttractionObserver::class);
        Room::observe(RoomObserver::class);
        Home::observe(HomeObserver::class);
        HomeContactPage::observe(HomeContactPageObserver::class);
        HomeApartmentsPage::observe(HomeApartmentsPageObserver::class);
        HomeLocationPage::observe(HomeLocationPageObserver::class);
    }
}
