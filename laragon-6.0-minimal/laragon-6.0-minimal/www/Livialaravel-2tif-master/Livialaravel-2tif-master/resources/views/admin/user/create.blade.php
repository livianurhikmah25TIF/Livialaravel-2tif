
@extends('layouts.admin.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <h2 class="h4">Tambah User</h2>
        <p class="mb-0">Tambahkan data user baru</p>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Periksa kembali data yang kamu masukkan.</strong>
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow mb-4">

            <div class="card-header">
                <h5 class="mb-0">Form Tambah User</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <!-- Nama -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text"
                                name="name"
                                class="form-control"
                                placeholder="Masukkan nama user"
                                value="{{ old('name') }}">

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                value="{{ old('email') }}">

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password">

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password">

                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <hr>

                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>

                    <a href="{{ route('user.index') }}" class="btn btn-warning">
                        Batal
                    </a>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
