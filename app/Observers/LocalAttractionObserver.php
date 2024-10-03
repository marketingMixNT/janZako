<?php

namespace App\Observers;

use App\Models\LocalAttraction;
use Illuminate\Support\Facades\Storage;

class LocalAttractionObserver
{
    /**
     * Handle the LocalAttraction "created" event.
     */
    public function created(LocalAttraction $localAttraction): void
    {
        //
    }

    /**
     * Handle the LocalAttraction "updated" event.
     */
    public function updated(LocalAttraction $localAttraction): void
    {
        // images
        if ($localAttraction->isDirty('images')) {

            $original = $localAttraction->getOriginal('images');


            $current = $localAttraction->images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the LocalAttraction "deleted" event.
     */
    public function deleted(LocalAttraction $localAttraction): void
    {
        //images
        if (!is_null($localAttraction->images)) {
            Storage::disk('public')->delete($localAttraction->getOriginal('images'));
        }
    }

    /**
     * Handle the LocalAttraction "restored" event.
     */
    public function restored(LocalAttraction $localAttraction): void
    {
        //
    }

    /**
     * Handle the LocalAttraction "force deleted" event.
     */
    public function forceDeleted(LocalAttraction $localAttraction): void
    {
        //
    }
}
