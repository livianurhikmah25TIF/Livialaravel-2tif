@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h5 class="mb-0">Tambah User</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name"
                            class="form-control"
                            placeholder="Masukkan nama user"
                            value="{{ old('name') }}">

                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control"
                            placeholder="Masukkan email"
                            value="{{ old('email') }}">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control"
                            placeholder="Masukkan password">

                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">
                        Simpan
                    </button>

                    <a href="{{ route('user.index') }}" class="btn btn-warning">
                        Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection