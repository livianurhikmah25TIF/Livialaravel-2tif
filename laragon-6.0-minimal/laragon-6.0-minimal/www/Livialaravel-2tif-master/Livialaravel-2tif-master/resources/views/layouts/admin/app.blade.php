
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard - Volt Dashboard</title>

    <link rel="icon" type="image/png"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">

    @include('layouts.admin.css')
</head>

<body>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets-admin/img/brand/light.svg') }}"
                height="30" alt="Volt Logo">
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu"
        class="sidebar d-lg-block bg-gray-800 text-white collapse"
        data-simplebar>

        <div class="sidebar-inner px-4 pt-3">

            <ul class="nav flex-column pt-3 pt-md-0">

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
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Pelanggan -->
                <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link">
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                <!-- User -->
                <li class="nav-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <span class="sidebar-text">User</span>
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

                    <h5 class="mb-0 text-gray-800">Admin Panel</h5>

                    <span class="nav-link text-dark">Admin</span>

                </div>
            </div>
        </nav>

        <!-- Isi Halaman -->
        @yield('content')

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
