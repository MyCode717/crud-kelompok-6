<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggan::paginate(10);

        return view('pelanggan.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create($request->validate([
            'kode_pelanggan' => 'required|string|unique:pelanggans,kode_pelanggan',
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'email' => 'required|email',
            'tanggal_daftar' => 'required|date',
            'alamat' => 'required|string',
            'keterangan' => 'nullable|string',
        ]));

        return redirect()->route('pelanggans.index')->with('success', 'Pelanggan baru, berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {

    $data = $request->validate([
        'kode_pelanggan' => 'required|string|unique:pelanggans,kode_pelanggan,' . $pelanggan->id,
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string',
        'email' => 'required|email',
        'tanggal_daftar' => 'required|date',
        'alamat' => 'required|string',
        'keterangan' => 'nullable|string',
    ]);

    $pelanggan->update($data);

    return redirect()
        ->route('pelanggans.index')
        ->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return redirect()->route('pelanggans.index')->with('success', 'Data pelanggan berhasil dihapus');
    }
}
