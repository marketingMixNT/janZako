<?php

namespace App\Observers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class HomeObserver
{
    /**
     * Handle the Home "created" event.
     */
    public function created(Home $home): void
    {

        // SINGLE
        // logo
        if ($home->isDirty('logo')) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }
        // ARRAY
        // slider_images
        if ($home->isDirty('slider_images')) {

            $original = $home->getOriginal('slider_images');


            $current = $home->slider_images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
            // about_images
            if ($home->isDirty('about_images')) {

                $original = $home->getOriginal('about_images');


                $current = $home->about_images;


                $deletedImages = array_diff($original, $current);


                foreach ($deletedImages as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        }
    }

    /**
     * Handle the Home "updated" event.
     */
    public function updated(Home $home): void
    {
         //logo
         if (!is_null($home->logo)) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }

         // slider_images
         if (!is_null($home->slider_images)) {
            Storage::disk('public')->delete($home->getOriginal('slider_images'));
        }

         // about_images
         if (!is_null($home->about_images)) {
            Storage::disk('public')->delete($home->getOriginal('about_images'));
        }
    }

    /**
     * Handle the Home "deleted" event.
     */
    public function deleted(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "restored" event.
     */
    public function restored(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "force deleted" event.
     */
    public function forceDeleted(Home $home): void
    {
        //
    }
}
