<?php

namespace App\Observers;

use App\Models\HomeLocationPage;
use Illuminate\Support\Facades\Storage;

class HomeLocationPageObserver
{
    /**
     * Handle the HomeLocationPage "created" event.
     */
    public function created(HomeLocationPage $homeLocationPage): void
    {
        //
    }

    /**
     * Handle the HomeLocationPage "updated" event.
     */
    public function updated(HomeLocationPage $homeLocationPage): void
    {
        // SINGLE
        // banner
        if ($homeLocationPage->isDirty('banner')) {
            Storage::disk('public')->delete($homeLocationPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeLocationPage "deleted" event.
     */
    public function deleted(HomeLocationPage $homeLocationPage): void
    {
         //banner
        if (!is_null($homeLocationPage->banner)) {
            Storage::disk('public')->delete($homeLocationPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeLocationPage "restored" event.
     */
    public function restored(HomeLocationPage $homeLocationPage): void
    {
        //
    }

    /**
     * Handle the HomeLocationPage "force deleted" event.
     */
    public function forceDeleted(HomeLocationPage $homeLocationPage): void
    {
        //
    }
}
