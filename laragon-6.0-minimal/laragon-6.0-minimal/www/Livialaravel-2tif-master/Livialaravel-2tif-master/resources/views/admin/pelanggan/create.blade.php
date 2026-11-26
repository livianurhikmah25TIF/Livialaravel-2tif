@extends('layouts.admin.app')

@section('content')

    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Tambah Pelanggan
                    </li>
                </ol>
            </nav>

            <h2 class="h4">Tambah Pelanggan</h2>
            <p class="mb-0">Form untuk menambahkan data pelanggan baru.</p>
        </div>

        <div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-sm btn-dark">
                Kembali
            </a>
        </div>
    </div>

    {{-- Form Tambah Pelanggan --}}
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">

                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf

                        <div class="row">

                            {{-- First Name --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Masukkan nama depan"
                                    value="{{ old('first_name') }}">

                                @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Last Name --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control"
                                    placeholder="Masukkan nama belakang" value="{{ old('last_name') }}">

                                @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Birthday --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}">

                                @error('birthday')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Gender --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">-- Pilih Gender --</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                        Male
                                    </option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                        Female
                                    </option>
                                </select>

                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Masukkan nomor telepon"
                                    value="{{ old('phone') }}">

                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-warning">
                                Batal
                            </a>

                            <button type="submit" class="btn"
                                style="background-color: #1f2937; color: white; border: 1px solid #1f2937;">
                                Simpan
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection