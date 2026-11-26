
@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="/dashboard"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>

            <h2 class="h4">Data User</h2>
            <p class="mb-0">List data seluruh user</p>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-success">
                Tambah User
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">NAME</th>
                            <th class="border-0">EMAIL</th>
                            <th class="border-0">PASSWORD</th>
                            <th class="border-0">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>********</td>

                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-sm btn-primary">
                                        Edit
                                    </a>

                                    <form action="{{ route('user.destroy', $user->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin hapus user ini?')">

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
                                <td colspan="4" class="text-center">
                                    Belum ada data User.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
