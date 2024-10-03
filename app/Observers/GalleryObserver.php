<?php

namespace App\Observers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryObserver
{
    /**
     * Handle the Gallery "created" event.
     */
    public function created(Gallery $gallery): void
    {
        //
    }

    /**
     * Handle the Gallery "updated" event.
     */
    public function updated(Gallery $gallery): void
    {
         // ARRAY
        // images
        if ($gallery->isDirty('images')) {

            $original = $gallery->getOriginal('images');


            $current = $gallery->images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Gallery "deleted" event.
     */
    public function deleted(Gallery $gallery): void
    {
          //images
          if (!is_null($gallery->images)) {
            Storage::disk('public')->delete($gallery->getOriginal('images'));
        }
    }

    /**
     * Handle the Gallery "restored" event.
     */
    public function restored(Gallery $gallery): void
    {
        //
    }

    /**
     * Handle the Gallery "force deleted" event.
     */
    public function forceDeleted(Gallery $gallery): void
    {
        //
    }
}
