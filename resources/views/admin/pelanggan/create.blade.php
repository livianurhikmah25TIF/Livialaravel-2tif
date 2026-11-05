
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Pelanggan - Volt Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">

    <!-- Volt CSS -->
    <link type="text/css"
        href="{{ asset('assets-admin/css/volt.css') }}"
        rel="stylesheet">
</head>

<body>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand" href="{{ route('pelanggan.index') }}">
            <img src="{{ asset('assets-admin/img/brand/light.svg') }}"
                height="30" alt="Volt Logo">
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu"
        class="sidebar d-lg-block bg-gray-800 text-white collapse"
        data-simplebar>

        <div class="sidebar-inner px-4 pt-3">

            <ul class="nav flex-column pt-3 pt-md-0">

                <!-- Logo -->
                <li class="nav-item">
                    <a href="{{ route('pelanggan.index') }}"
                        class="nav-link d-flex align-items-center">

                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg') }}"
                                height="20" width="20" alt="Volt Logo">
                        </span>

                        <span class="mt-1 ms-1 sidebar-text">
                            Volt Overview
                        </span>
                    </a>
                </li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">

                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">

                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>

                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Pelanggan -->
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.index') }}"
                        class="nav-link">

                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="none"
                                stroke-width="1.5"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                                </path>
                            </svg>
                        </span>

                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                <li role="separator"
                    class="dropdown-divider mt-4 mb-3 border-gray-700">
                </li>

                <!-- Dokumentasi -->
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank" class="nav-link">

                        <span class="sidebar-text">
                            Documentation
                        </span>
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

                <div class="d-flex justify-content-between w-100"
                    id="navbarSupportedContent">

                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-gray-800">
                            Admin Panel
                        </h5>
                    </div>

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <span class="nav-link text-dark">
                                Admin
                            </span>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Judul Halaman -->
        <div class="py-4">

            <nav aria-label="breadcrumb"
                class="d-none d-md-inline-block">

                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">

                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('pelanggan.index') }}">
                            Pelanggan
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Tambah Pelanggan
                    </li>

                </ol>
            </nav>

            <div class="d-flex justify-content-between w-100 flex-wrap">

                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tambah Pelanggan</h1>

                    <p class="mb-0">
                        Form untuk menambahkan data pelanggan baru.
                    </p>
                </div>

                <div>
                    <a href="{{ route('pelanggan.index') }}"
                        class="btn btn-primary">
                        Kembali
                    </a>
                </div>

            </div>
        </div>

        <!-- Form Pelanggan -->
        <div class="row">

            <div class="col-12 mb-4">

                <div class="card border-0 shadow components-section">

                    <div class="card-body">

                        <form action="{{ route('pelanggan.store') }}"
                            method="POST">

                            @csrf

                            <div class="row mb-4">

                                <!-- Nama Pelanggan -->
                                <div class="col-lg-6 col-sm-12">

                                    <div class="mb-3">
                                        <label for="nama"
                                            class="form-label">
                                            Nama Pelanggan
                                        </label>

                                        <input type="text"
                                            id="nama"
                                            name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}"
                                            placeholder="Masukkan nama pelanggan"
                                            required>

                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <!-- Nomor Telepon -->
                                <div class="col-lg-6 col-sm-12">

                                    <div class="mb-3">
                                        <label for="telepon"
                                            class="form-label">
                                            Nomor Telepon
                                        </label>

                                        <input type="text"
                                            id="telepon"
                                            name="telepon"
                                            class="form-control @error('telepon') is-invalid @enderror"
                                            value="{{ old('telepon') }}"
                                            placeholder="Masukkan nomor telepon">

                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <!-- Alamat -->
                                <div class="col-12">

                                    <div class="mb-3">
                                        <label for="alamat"
                                            class="form-label">
                                            Alamat Pelanggan
                                        </label>

                                        <textarea id="alamat"
                                            name="alamat"
                                            rows="4"
                                            class="form-control @error('alamat') is-invalid @enderror"
                                            placeholder="Masukkan alamat pelanggan">{{ old('alamat') }}</textarea>

                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-end">

                                <a href="{{ route('pelanggan.index') }}"
                                    class="btn btn-outline-secondary me-2">
                                    Batal
                                </a>

                                <button type="submit"
                                    class="btn btn-primary">
                                    Simpan
                                </button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">

            <div class="row">

                <div class="col-12 text-center">
                    <p class="mb-0">
                        © 2026
                        <a href="https://themesberg.com"
                            class="text-primary">
                            Themesberg
                        </a>
                        - Volt Dashboard
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
