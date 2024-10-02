<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\LocalAttraction;

class AttractionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($apartmentSlug)
    {

        $apartment = Apartment::select('id', 'title', 'slug','logo')->where('slug->pl', $apartmentSlug)->firstOrFail();

        $attractions = LocalAttraction::orderBy('sort')->get();



        return view('pages.local-attractions.index', compact('attractions', 'apartment'));
    }
}
