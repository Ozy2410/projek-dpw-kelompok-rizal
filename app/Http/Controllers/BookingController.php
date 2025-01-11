<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Train;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'kereta'])->get();
        $users = User::all();
        $trains = Train::all();
        return view('dashboard.booking', compact('bookings', 'users', 'trains'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'id_kereta' => 'required|exists:kereta,id_kereta',
            'nomor_kursi' => 'required|string|max:255|regex:/^[A-Z]+[0-9]+$/', // Validasi format kursi
            'gerbong' => 'required|string|max:255',
        ]);

        // Ekstrak gerbong dari nomor kursi
        $gerbong = preg_replace('/[0-9]+$/', '', $request->nomor_kursi);

        if ($gerbong !== $request->gerbong) {
            return redirect()->route('bookings.index')->with('error', 'Gerbong tidak sesuai dengan nomor kursi.');
        }

        // Cek apakah kursi sudah dipesan
        $existingBooking = Booking::where('id_kereta', $request->id_kereta)
            ->where('nomor_kursi', $request->nomor_kursi)
            ->first();

        if ($existingBooking) {
            return redirect()->route('bookings.index')->with('error', 'Kursi sudah dipesan.');
        }

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'id_kereta' => 'required|exists:kereta,id_kereta',
            'nomor_kursi' => 'required|string|max:255|regex:/^[A-Z]+[0-9]+$/', // Validasi format kursi
            'gerbong' => 'required|string|max:255',
        ]);

        // Ekstrak gerbong dari nomor kursi
        $gerbong = preg_replace('/[0-9]+$/', '', $request->nomor_kursi);

        if ($gerbong !== $request->gerbong) {
            return redirect()->route('bookings.index')->with('error', 'Gerbong tidak sesuai dengan nomor kursi.');
        }

        // Cek apakah kursi sudah dipesan oleh pengguna lain
        $existingBooking = Booking::where('id_kereta', $request->id_kereta)
            ->where('nomor_kursi', $request->nomor_kursi)
            ->where('id_booking', '!=', $booking->id_booking)
            ->first();

        if ($existingBooking) {
            return redirect()->route('bookings.index')->with('error', 'Kursi sudah dipesan.');
        }

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
