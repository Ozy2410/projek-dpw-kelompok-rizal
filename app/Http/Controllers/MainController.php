<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function tiket()
    {
        $bookings = Booking::where('id_user', Auth::id())
            ->with('kereta')
            ->orderBy('id_booking', 'desc')
            ->get();

        return view('tiket', compact('bookings'));
    }

    public function searchTrains(Request $request)
    {
        $request->validate([
            'asal_kota' => 'string',
            'kota_tujuan' => 'string',
            'tanggal_berangkat' => 'date',
        ]);

        // Cari kereta yang sesuai dengan data pencarian
        $trains = Train::where('asal_kota', $request->asal_kota)
            ->where('kota_tujuan', $request->kota_tujuan)
            ->where('waktu_keberangkatan', '>', $request->tanggal_berangkat . ' 00:00:00')
            ->get();

        return view('home', compact('trains'));
    }

    public function pilihKursi(Request $request, $id)
    {
        $train = Train::findOrFail($id);
        $jumlahPenumpang = $request->jumlah_penumpang;

        return view('pilih-kursi', compact('train', 'jumlahPenumpang'));
    }

    public function storePilihKursi(Request $request, $id)
    {
        $request->validate([
            'id_kereta' => 'required|exists:kereta,id_kereta',
            'id_user' => 'required|exists:users,id_user',
            'penumpang' => 'required|array',
            'penumpang.*.nomor_kursi' => 'required|string',
        ]);

        foreach ($request->penumpang as $penumpang) {
            // Pisahkan huruf dan angka dari nomor kursi
            preg_match('/^([A-Z]+)(\d+)$/', $penumpang['nomor_kursi'], $matches);
            $gerbong = $matches[1];
            $nomor_kursi = $penumpang['nomor_kursi'];

            // Cek apakah kursi sudah dipesan
            $existingBooking = Booking::where('id_kereta', $request->id_kereta)
                ->where('nomor_kursi', $nomor_kursi)
                ->where('gerbong', $gerbong)
                ->first();

            if ($existingBooking) {
                return redirect()->back()->with('error', 'Kursi ' . $penumpang['nomor_kursi'] . ' sudah dipesan.');
            }

            Booking::create([
                'id_kereta' => $request->id_kereta,
                'id_user' => $request->id_user,
                'nomor_kursi' => $nomor_kursi,
                'gerbong' => $gerbong,
            ]);
        }

        return redirect()->route('tiket')->with('success', 'Tiket berhasil dipesan.');
    }
}
