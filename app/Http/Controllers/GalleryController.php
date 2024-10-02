<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($apartmentSlug)
    {

        $apartment = Apartment::with('galleries')->select('id', 'title', 'slug', 'logo')->where('slug->pl', $apartmentSlug)->firstOrFail();



        return view('pages.gallery.index', compact('apartment'));
    }
}
