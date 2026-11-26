<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan daftar pelanggan.
     */
    public function index(Request $request)
    {
        // Daftar kolom yang bisa difilter
        $filterableColumns = ['gender'];

        // Memproses filter dan pagination
        $pageData['dataPelanggan'] = Pelanggan::filter(
            $request,
            $filterableColumns
        )
            ->paginate(10)
            ->withQueryString();

        return view('admin.pelanggan.index', $pageData);
    }

    /**
     * Menampilkan form tambah pelanggan.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Menyimpan data pelanggan.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Menampilkan detail pelanggan.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Menampilkan form edit pelanggan.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Memperbarui data pelanggan.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Menghapus data pelanggan.
     */
    public function destroy(string $id)
    {
        //
    }
}
