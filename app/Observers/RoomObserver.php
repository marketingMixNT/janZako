<?php

namespace App\Observers;

use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomObserver
{
    /**
     * Handle the Room "created" event.
     */
    public function created(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "updated" event.
     */
    public function updated(Room $room): void
    {
          // thumbnail
          if ($room->isDirty('thumbnail')) {
            Storage::disk('public')->delete($room->getOriginal('thumbnail'));
        }

         // gallery
         if ($room->isDirty('gallery')) {

            $original = $room->getOriginal('gallery');


            $current = $room->gallery;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Room "deleted" event.
     */
    public function deleted(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "restored" event.
     */
    public function restored(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "force deleted" event.
     */
    public function forceDeleted(Room $room): void
    {
        //
    }
}
