@extends('layouts.admin.app')

@section('content')

    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="/dashboard">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Pelanggan
                    </li>
                </ol>
            </nav>

            <h2 class="h4">Data Pelanggan</h2>
            <p class="mb-0">List data seluruh pelanggan.</p>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('pelanggan.create') }}"
                class="btn btn-sm btn-primary">
                + Tambah Pelanggan
            </a>
        </div>
    </div>

    {{-- Pesan Berhasil --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Tabel Data Pelanggan --}}
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-centered table-nowrap mb-0 rounded">

                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">NO</th>
                            <th class="border-0">FIRST NAME</th>
                            <th class="border-0">LAST NAME</th>
                            <th class="border-0">BIRTHDAY</th>
                            <th class="border-0">GENDER</th>
                            <th class="border-0">EMAIL</th>
                            <th class="border-0">PHONE</th>
                            <th class="border-0">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pelanggan as $dataPelanggan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $dataPelanggan->first_name }}</td>

                                <td>{{ $dataPelanggan->last_name }}</td>

                                <td>{{ $dataPelanggan->birthday }}</td>

                                <td>{{ $dataPelanggan->gender }}</td>

                                <td>{{ $dataPelanggan->email }}</td>

                                <td>{{ $dataPelanggan->phone }}</td>

                                <td>
                                    <a href="{{ route('pelanggan.edit', $dataPelanggan->pelanggan_id) }}"
                                        class="btn btn-sm btn-primary">
                                        Edit
                                    </a>

                                    <form action="{{ route('pelanggan.destroy', $dataPelanggan->pelanggan_id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data pelanggan ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    Belum ada data pelanggan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>

@endsection