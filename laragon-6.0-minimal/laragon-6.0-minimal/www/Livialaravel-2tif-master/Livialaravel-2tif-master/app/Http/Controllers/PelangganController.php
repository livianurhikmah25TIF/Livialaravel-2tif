<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Menampilkan daftar seluruh pelanggan.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();

        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    /**
     * Menampilkan form untuk membuat pelanggan baru.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Menyimpan pelanggan baru ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:pelanggan,email',
            'phone' => 'required|string|max:20',
        ], [
            'email.unique' => 'Email ini sudah terdaftar, gunakan email lain.'
        ]);

        Pelanggan::create($validatedData);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit data pelanggan.
     */
    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::where('pelanggan_id', $id)->firstOrFail();

        return view('admin.pelanggan.edit', compact('dataPelanggan'));
    }

    /**
     * Memperbarui data pelanggan di database.
     */

    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::where('pelanggan_id', $id)->firstOrFail();

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'phone' => 'required|string|max:20',
        ]);

        $pelanggan->update($validatedData);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Perubahan Data Berhasil!');
    }


    /**
     * Menghapus pelanggan dari database.
     */

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus');
    }

}