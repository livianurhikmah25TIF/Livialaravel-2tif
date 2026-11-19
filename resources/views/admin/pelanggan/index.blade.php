@extends('layouts.admin.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Data Pelanggan</h2>

    <a href="{{ route('pelanggan.create') }}"
        class="btn btn-primary">
        Tambah Pelanggan
    </a>
</div>

<div class="card">
    <div class="card-header">
        Tabel Data Pelanggan
    </div>

    <div class="card-body">


        <!-- FILTER GENDER DAN SEARCH -->
        <form method="GET"
            action="{{ route('pelanggan.index') }}"
            class="mb-3">

            <div class="row">

                <!-- FILTER GENDER -->
                <div class="col-md-2">
                    <select name="gender"
                        class="form-select"
                        onchange="this.form.submit()">

                        <option value=""
                            {{ request('gender') == '' ? 'selected' : '' }}>
                            All
                        </option>

                        <option value="Male"
                            {{ request('gender') == 'Male' ? 'selected' : '' }}>
                            Male
                        </option>

                        <option value="Female"
                            {{ request('gender') == 'Female' ? 'selected' : '' }}>
                            Female
                        </option>

                    </select>
                </div>

                <!-- FORM SEARCH -->
                <div class="col-md-3">
                    <div class="input-group">
                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Search..."
                            value="{{ request('search') }}">

                        <button type="submit" class="input-group-text">
                            Cari
                        </button>
                    </div>
                </div>

            </div>
        </form>


        <!-- TABEL PELANGGAN -->
        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($dataPelanggan as $key => $pelanggan)
                    <tr>
                        <td>{{ $dataPelanggan->firstItem() + $key }}</td>
                        <td>{{ $pelanggan->first_name }}</td>
                        <td>{{ $pelanggan->last_name }}</td>
                        <td>{{ $pelanggan->birthday }}</td>
                        <td>{{ $pelanggan->gender }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        <td>{{ $pelanggan->phone }}</td>

                        <td>
                            <a href="{{ route('pelanggan.edit', $pelanggan->pelanggan_id) }}"
                                class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('pelanggan.destroy', $pelanggan->pelanggan_id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                    Hapus
                                </button>

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Data pelanggan tidak ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

        <!-- PAGINATION -->
        <div class="mt-3">
            {{ $dataPelanggan->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>

@endsection