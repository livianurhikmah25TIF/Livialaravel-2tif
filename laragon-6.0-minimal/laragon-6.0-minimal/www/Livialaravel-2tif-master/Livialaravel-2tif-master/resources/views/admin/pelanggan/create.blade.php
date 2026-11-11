
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Pelanggan - Volt Dashboard</title>

    <link rel="icon" type="image/png"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">

    <link type="text/css"
        href="{{ asset('assets-admin/css/volt.css') }}"
        rel="stylesheet">
</head>

<body>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
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
                    <a href="{{ route('dashboard') }}"
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
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Pelanggan -->
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.create') }}" class="nav-link">
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                <li role="separator"
                    class="dropdown-divider mt-4 mb-3 border-gray-700">
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
                    <a href="{{ route('dashboard') }}"
                        class="btn btn-primary">
                        Kembali
                    </a>
                </div>

            </div>
        </div>

        <!-- Pesan Berhasil -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Pelanggan -->
        <div class="row">

            <div class="col-12 mb-4">

                <div class="card border-0 shadow components-section">

                    <div class="card-body">

                        <form action="{{ route('pelanggan.store') }}"
                            method="POST">

                            @csrf

                            <div class="row mb-4">

                                <!-- First Name -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="first_name"
                                            class="form-label">
                                            First Name
                                        </label>

                                        <input type="text"
                                            id="first_name"
                                            name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            value="{{ old('first_name') }}"
                                            placeholder="Masukkan nama depan"
                                            required>

                                        @error('first_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="last_name"
                                            class="form-label">
                                            Last Name
                                        </label>

                                        <input type="text"
                                            id="last_name"
                                            name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            value="{{ old('last_name') }}"
                                            placeholder="Masukkan nama belakang"
                                            required>

                                        @error('last_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Birthday -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="birthday"
                                            class="form-label">
                                            Birthday
                                        </label>

                                        <input type="date"
                                            id="birthday"
                                            name="birthday"
                                            class="form-control @error('birthday') is-invalid @enderror"
                                            value="{{ old('birthday') }}">

                                        @error('birthday')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="gender"
                                            class="form-label">
                                            Gender
                                        </label>

                                        <select id="gender"
                                            name="gender"
                                            class="form-select @error('gender') is-invalid @enderror">

                                            <option value="">
                                                -- Pilih Gender --
                                            </option>

                                            <option value="Male"
                                                {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>

                                            <option value="Female"
                                                {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>

                                            <option value="Other"
                                                {{ old('gender') == 'Other' ? 'selected' : '' }}>
                                                Other
                                            </option>

                                        </select>

                                        @error('gender')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="email"
                                            class="form-label">
                                            Email
                                        </label>

                                        <input type="email"
                                            id="email"
                                            name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"
                                            placeholder="Masukkan email"
                                            required>

                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="phone"
                                            class="form-label">
                                            Phone
                                        </label>

                                        <input type="text"
                                            id="phone"
                                            name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}"
                                            placeholder="Masukkan nomor telepon">

                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-end">

                                <a href="{{ route('dashboard') }}"
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
                        © 2026 Themesberg - Volt Dashboard
                    </p>
                </div>
            </div>

        </footer>

    </main>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>

</body>
</html>
