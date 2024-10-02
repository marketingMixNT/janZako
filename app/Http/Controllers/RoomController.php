<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Room;

class RoomController extends Controller
{

    public function index($apartmentSlug)
    {
        // Pobierz ID apartamentu na podstawie slugu
        $apartment = Apartment::select('id', 'title', 'slug', 'logo')->where('slug->pl', $apartmentSlug)->firstOrFail();

        // Pobierz wszystkie pokoje powiązane z apartamentem
        $rooms = Room::where('apartment_id', $apartment->id)->get();

        return view('pages.room.index', compact('apartment', 'rooms'));
    }

    public function show($apartmentSlug, $roomSlug)
    {
        // Pobierz ID i tytuł apartamentu na podstawie slugu
        $apartment = Apartment::select('id', 'title', 'slug', 'logo')->where('slug->pl', $apartmentSlug)->firstOrFail();

        // Pobierz pokój na podstawie slugu i ID apartamentu
        $room = Room::where('apartment_id', $apartment->id)->where('slug->pl', $roomSlug)->firstOrFail();

        dd($room);

        return view('pages.room.show', compact('apartment', 'room'));
    }

    
}
