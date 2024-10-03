<?php

namespace App\Observers;

use App\Models\HomeApartmentsPage;
use Illuminate\Support\Facades\Storage;

class HomeApartmentsPageObserver
{
    /**
     * Handle the HomeApartmentsPage "created" event.
     */
    public function created(HomeApartmentsPage $homeApartmentsPage): void
    {
        //
    }

    /**
     * Handle the HomeApartmentsPage "updated" event.
     */
    public function updated(HomeApartmentsPage $homeApartmentsPage): void
    {
         // SINGLE
        // banner
        if ($homeApartmentsPage->isDirty('banner')) {
            Storage::disk('public')->delete($homeApartmentsPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeApartmentsPage "deleted" event.
     */
    public function deleted(HomeApartmentsPage $homeApartmentsPage): void
    {
        //banner
        if (!is_null($homeApartmentsPage->banner)) {
            Storage::disk('public')->delete($homeApartmentsPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeApartmentsPage "restored" event.
     */
    public function restored(HomeApartmentsPage $homeApartmentsPage): void
    {
        //
    }

    /**
     * Handle the HomeApartmentsPage "force deleted" event.
     */
    public function forceDeleted(HomeApartmentsPage $homeApartmentsPage): void
    {
        //
    }
}
