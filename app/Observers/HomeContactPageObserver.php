<?php

namespace App\Observers;

use App\Models\HomeContactPage;
use Illuminate\Support\Facades\Storage;

class HomeContactPageObserver
{
    /**
     * Handle the HomeContactPage "created" event.
     */
    public function created(HomeContactPage $homeContactPage): void
    {
        //
    }

    /**
     * Handle the HomeContactPage "updated" event.
     */
    public function updated(HomeContactPage $homeContactPage): void
    {
         // SINGLE
        // banner
        if ($homeContactPage->isDirty('banner')) {
            Storage::disk('public')->delete($homeContactPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeContactPage "deleted" event.
     */
    public function deleted(HomeContactPage $homeContactPage): void
    {
        //banner
        if (!is_null($homeContactPage->banner)) {
            Storage::disk('public')->delete($homeContactPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the HomeContactPage "restored" event.
     */
    public function restored(HomeContactPage $homeContactPage): void
    {
        //
    }

    /**
     * Handle the HomeContactPage "force deleted" event.
     */
    public function forceDeleted(HomeContactPage $homeContactPage): void
    {
        //
    }
}
