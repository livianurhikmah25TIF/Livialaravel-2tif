
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
            <a href="{{ route('pelanggan.create') }}" class="btn btn-sm btn-primary">
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

            {{-- Form Filter Gender dan Search --}}
            <form action="{{ route('pelanggan.index') }}" method="GET" class="mb-4">
                <div class="row align-items-end">

                    {{-- Filter Gender --}}
                    <div class="col-md-4">
                        <label class="form-label">Filter Gender</label>
                        <select name="gender" class="form-select">
                            <option value="">Semua Gender</option>
                            <option value="Male" {{ request('gender') == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>
                            <option value="Female" {{ request('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>
                        </select>
                    </div>

                    {{-- Search dan Clear Search --}}
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text"
                                name="search"
                                class="form-control"
                                id="exampleInputIconRight"
                                value="{{ request('search') }}"
                                placeholder="Search"
                                aria-label="Search">

                            <button type="submit" class="input-group-text" id="basic-addon2">
                                <svg class="icon icon-xxs"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>

                            @if(request('search'))
                                <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}"
                                    class="btn btn-outline-secondary ms-2"
                                    id="clear-search">
                                    Clear
                                </a>
                            @endif
                        </div>
                    </div>

                    {{-- Tombol Filter dan Reset --}}
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">
                            Filter
                        </button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                            Reset
                        </a>
                    </div>

                </div>
            </form>

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
                        @forelse ($dataPelanggan as $pelanggan)
                            <tr>
                                <td>{{ $dataPelanggan->firstItem() + $loop->index }}</td>
                                <td>{{ $pelanggan->first_name }}</td>
                                <td>{{ $pelanggan->last_name }}</td>
                                <td>{{ $pelanggan->birthday }}</td>
                                <td>{{ $pelanggan->gender }}</td>
                                <td>{{ $pelanggan->email }}</td>
                                <td>{{ $pelanggan->phone }}</td>
                                <td>
                                    {{-- Tombol Edit dan Hapus tetap di sini --}}
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

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $dataPelanggan->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>

@endsection
