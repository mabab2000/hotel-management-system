<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $today = Carbon::today();

        // 1️⃣ Réservations récentes (les 5 dernières)
        $recentBookings = Book::orderBy('created_at', 'desc')->take(5)->get();

        // 2️⃣ Clients actuellement check-in
        $currentGuests = Book::whereDate('checkin','<=',$today)
                             ->whereDate('checkout','>=',$today)
                             ->count();

        // 3️⃣ Taux d’occupation aujourd’hui
        $totalRooms = 50; // change selon ton hôtel
        $occupiedRooms = Book::whereDate('checkin','<=',$today)
                             ->whereDate('checkout','>=',$today)
                             ->count();
        $todaysOccupancy = ($occupiedRooms / $totalRooms) * 100;

        return view('register.admin', compact(
            'recentBookings',
            'currentGuests',
            'todaysOccupancy'
        ));
    }
}
