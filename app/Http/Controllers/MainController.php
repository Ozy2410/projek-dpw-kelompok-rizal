<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function tiket()
    {
        $bookings = Booking::where('id_user', Auth::id())->with('kereta')->get();
        return view('tiket', compact('bookings'));
    }
}
