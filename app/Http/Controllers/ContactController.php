<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($apartmentSlug)
    {
        $apartment = Apartment::with('socials')->select('id', 'title', 'slug', 'logo','address','phone','mail')->where('slug->pl', $apartmentSlug)->firstOrFail();



        return view('pages.contact.index', compact('apartment'));
    }
}
