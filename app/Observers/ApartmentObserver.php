<?php

namespace App\Observers;

use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentObserver
{
    /**
     * Handle the Apartment "created" event.
     */
    public function created(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "updated" event.
     */
    public function updated(Apartment $apartment): void
    {

        // SINGLE
        // logo
        if ($apartment->isDirty('logo')) {
            Storage::disk('public')->delete($apartment->getOriginal('logo'));
        }
        // thumbnail
        if ($apartment->isDirty('thumbnail')) {
            Storage::disk('public')->delete($apartment->getOriginal('thumbnail'));
        }
        // banner_rooms
        if ($apartment->isDirty(attributes: 'banner_rooms')) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_rooms'));
        }
        // banner_gallery
        if ($apartment->isDirty(attributes: 'banner_gallery')) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_gallery'));
        }
        // banner_contact
        if ($apartment->isDirty(attributes: 'banner_contact')) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_contact'));
        }
        // banner_location
        if ($apartment->isDirty(attributes: 'banner_location')) {
            $originalBannerLocation = $apartment->getOriginal('banner_location');
            if ($originalBannerLocation) {  // Sprawdź, czy nie jest null
                Storage::disk('public')->delete($originalBannerLocation);
            }
        }
        // ARRAY
        // about_images
        if ($apartment->isDirty('about_images')) {

            $original = $apartment->getOriginal('about_images');


            $current = $apartment->about_images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        // slider_images
        if ($apartment->isDirty('slider_images')) {

            $original = $apartment->getOriginal('slider_images');


            $current = $apartment->slider_images;


            $deletedImages = array_diff($original, $current);


            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Apartment "deleted" event.
     */
    public function deleted(Apartment $apartment): void
    {
        //logo
        if (!is_null($apartment->logo)) {
            Storage::disk('public')->delete($apartment->getOriginal('logo'));
        }

        //thumbnail
        if (!is_null($apartment->thumbnail)) {
            Storage::disk('public')->delete($apartment->getOriginal('thumbnail'));
        }

        //about_images
        if (!is_null($apartment->about_images)) {
            Storage::disk('public')->delete($apartment->getOriginal('about_images'));
        }

        //banner_rooms
        if (!is_null($apartment->banner_rooms)) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_rooms'));
        }

        //banner_gallery
        if (!is_null($apartment->banner_gallery)) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_gallery'));
        }

        //banner_contact
        if (!is_null($apartment->banner_contact)) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_contact'));
        }
        //banner_location
        if (!is_null($apartment->banner_location)) {
            Storage::disk('public')->delete($apartment->getOriginal('banner_location'));
        }

        //slider_images
        if (!is_null($apartment->slider_images)) {
            Storage::disk('public')->delete($apartment->getOriginal('slider_images'));
        }
    }

    /**
     * Handle the Apartment "restored" event.
     */
    public function restored(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "force deleted" event.
     */
    public function forceDeleted(Apartment $apartment): void
    {
        //
    }
}
