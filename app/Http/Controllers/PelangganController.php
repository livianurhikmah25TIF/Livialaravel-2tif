<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        // Daftar kolom yang bisa difilter
        $filterableColumns = ['gender'];

        // Gunakan scope filter untuk memproses query
        $pageData['dataPelanggan'] = Pelanggan::filter(
            $request,
            $filterableColumns
        )
            ->paginate(10)
            ->withQueryString();

        return view('admin.pelanggan.index', $pageData);
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
