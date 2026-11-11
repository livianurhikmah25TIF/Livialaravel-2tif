<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Pelanggan - Volt Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="30" alt="Volt Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>

        <div class="sidebar-inner px-4 pt-3">

            <ul class="nav flex-column pt-3 pt-md-0">

                <!-- Logo -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">

                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="20" width="20"
                                alt="Volt Logo">
                        </span>

                        <span class="mt-1 ms-1 sidebar-text">
                            Volt Overview
                        </span>
                    </a>
                </li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Pelanggan -->
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link">
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700">
                </li>

                <!-- Documentation -->
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank" class="nav-link">
                        <span class="sidebar-text">Documentation</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">

        <!-- Navbar Atas -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">

                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">

                    <h5 class="mb-0 text-gray-800">
                        Admin Panel
                    </h5>

                    <span class="nav-link text-dark">
                        Admin
                    </span>

                </div>
            </div>
        </nav>

        <!-- Judul Halaman -->
        <div class="py-4">

            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">

                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">

                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Data Pelanggan
                    </li>

                </ol>
            </nav>

            <div class="d-flex justify-content-between w-100 flex-wrap">

                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Data Pelanggan</h1>
                    <p class="mb-0">
                        List data seluruh pelanggan.
                    </p>
                </div>

                <div>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">
                        + Tambah Pelanggan
                    </a>
                </div>

            </div>
        </div>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        <!-- Pesan Error -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Tabel Pelanggan -->
        <div class="row">

            <div class="col-12 mb-4">

                <div class="card border-0 shadow mb-4">

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-centered table-nowrap mb-0 rounded">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">No</th>
                                        <th class="border-0">First Name</th>
                                        <th class="border-0">Last Name</th>
                                        <th class="border-0">Birthday</th>
                                        <th class="border-0">Gender</th>
                                        <th class="border-0">Email</th>
                                        <th class="border-0">Phone</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse($pelanggan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->first_name }}</td>
                                            <td>{{ $item->last_name }}</td>
                                            <td>{{ $item->birthday ?? '-' }}</td>
                                            <td>{{ $item->gender ?? '-' }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone ?? '-' }}</td>

                                            <!-- Tombol Edit dan Hapus -->
                                            <td>
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('pelanggan.edit', ['pelanggan' => $item->pelanggan_id]) }}"
                                                    class="btn btn-info btn-sm">
                                                    Edit
                                                </a>

                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('pelanggan.destroy', $item->pelanggan_id) }}"
                                                    method="POST" class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah kamu yakin ingin menghapus data pelanggan ini?')">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">
                                                Belum ada data pelanggan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>


                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">

            <div class="row">

                <div class="col-12 text-center">
                    <p class="mb-0">
                        © 2026 Themesberg - Volt Dashboard
                    </p>
                </div>

            </div>
        </footer>

    </main>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}">
    </script>

    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>

    <!-- Volt JS -->
    <script src="{{ asset('assets-admin/js/volt.js') }}">
    </script>

</body>

</html>