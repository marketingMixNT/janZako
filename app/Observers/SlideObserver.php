<?php

namespace App\Observers;

use App\Models\Slide;
use Illuminate\Support\Facades\Storage;

class SlideObserver
{
    /**
     * Handle the Slide "created" event.
     */
    public function created(Slide $slide): void
    {
        //
    }

    /**
     * Handle the Slide "updated" event.
     */
    public function updated(Slide $slide): void
    {
         // about_images
         if ($slide->isDirty('images')) {

            $original = $slide->getOriginal('images');


            $current = $slide->images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Slide "deleted" event.
     */
    public function deleted(Slide $slide): void
    {
         //images
         if (!is_null($slide->images)) {
            Storage::disk('public')->delete($slide->getOriginal('images'));
        }
    }

    /**
     * Handle the Slide "restored" event.
     */
    public function restored(Slide $slide): void
    {
        //
    }

    /**
     * Handle the Slide "force deleted" event.
     */
    public function forceDeleted(Slide $slide): void
    {
        //
    }
}
