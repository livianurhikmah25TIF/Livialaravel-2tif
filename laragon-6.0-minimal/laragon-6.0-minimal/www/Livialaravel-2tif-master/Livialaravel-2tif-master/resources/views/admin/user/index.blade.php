
@extends('layouts.admin.app')

@section('content')

<div class="card border-0 shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data User</h5>

        <a href="{{ route('user.create') }}" class="btn btn-dark btn-sm">
            Tambah User
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('user.destroy', $item->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus user ini?')">
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
