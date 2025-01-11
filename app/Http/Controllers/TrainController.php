<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('dashboard.kereta', compact('trains'));
    }

    public function create()
    {
        return view('dashboard.kereta'); // Adjust to a specific create view if needed
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kereta' => 'required|string|max:255',
            'asal_kota' => 'required|string|max:255',
            'kota_tujuan' => 'required|string|max:255',
            'waktu_keberangkatan' => 'required|date',
            'waktu_tiba' => 'required|date',
        ]);

        Train::create($request->all());

        return redirect()->route('trains.index')->with('success', 'Kereta berhasil ditambahkan.');
    }

    public function edit(Train $train)
    {
        return view('dashboard.kereta', compact('train')); // Adjust to a specific edit view if needed
    }

    public function update(Request $request, Train $train)
    {
        $request->validate([
            'nama_kereta' => 'required|string|max:255',
            'asal_kota' => 'required|string|max:255',
            'kota_tujuan' => 'required|string|max:255',
            'waktu_keberangkatan' => 'required|date',
            'waktu_tiba' => 'required|date',
        ]);

        $train->update($request->all());

        return redirect()->route('trains.index')->with('success', 'Kereta berhasil diperbarui.');
    }

    public function destroy(Train $train)
    {
        $train->delete();
        return redirect()->route('trains.index')->with('success', 'Kereta berhasil dihapus.');
    }
}