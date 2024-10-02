<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class SafetyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($apartmentSlug)
    {
        $apartment = Apartment::select('id', 'title','slug','logo')->where('slug->pl', $apartmentSlug)->firstOrFail();

        return view('pages.safety.index', compact("apartment"));
    }
}
