<?php

namespace App\Observers;

use App\Models\Cta;
use Illuminate\Support\Facades\Storage;

class CtaObserver
{
    /**
     * Handle the Cta "created" event.
     */
    public function created(Cta $cta): void
    {
        //
    }

    /**
     * Handle the Cta "updated" event.
     */
    public function updated(Cta $cta): void
    {
          // SINGLE
        // image
        if ($cta->isDirty('image')) {
            Storage::disk('public')->delete($cta->getOriginal('image'));
        }
    }

    /**
     * Handle the Cta "deleted" event.
     */
    public function deleted(Cta $cta): void
    {
         //banner
        if (!is_null($cta->image)) {
            Storage::disk('public')->delete($cta->getOriginal('image'));
        }
    }

    /**
     * Handle the Cta "restored" event.
     */
    public function restored(Cta $cta): void
    {
        //
    }

    /**
     * Handle the Cta "force deleted" event.
     */
    public function forceDeleted(Cta $cta): void
    {
        //
    }
}
