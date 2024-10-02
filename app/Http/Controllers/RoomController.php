<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Room;

class RoomController extends Controller
{

    public function index($apartmentSlug)
    {
       
        $apartment = Apartment::where('slug->pl', $apartmentSlug)->firstOrFail();

      
        $rooms = Room::where('apartment_id', $apartment->id)->get();

        return view('pages.room.index', compact('apartment', 'rooms'));
    }

    public function show($apartmentSlug, $roomSlug)
    {
       
        $apartment = Apartment::where('slug->pl', $apartmentSlug)->firstOrFail();

        $room = Room::where('apartment_id', $apartment->id)->where('slug->pl', $roomSlug)->firstOrFail();

        dd($room);

        return view('pages.room.show', compact('apartment', 'room'));
    }

    
}
