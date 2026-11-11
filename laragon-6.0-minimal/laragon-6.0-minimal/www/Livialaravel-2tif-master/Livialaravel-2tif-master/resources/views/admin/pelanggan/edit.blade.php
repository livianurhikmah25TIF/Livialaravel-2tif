
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pelanggan - Volt Dashboard</title>

    <link rel="icon" type="image/png" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <main class="content">

        <div class="py-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('pelanggan.index') }}">Data Pelanggan</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Pelanggan</li>
                </ol>
            </nav>

            <h1 class="h4">Edit Pelanggan</h1>
            <p>Silakan ubah data pelanggan di bawah ini.</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card border-0 shadow">
            <div class="card-body">

                <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control"
                            value="{{ old('first_name', $dataPelanggan->first_name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control"
                            value="{{ old('last_name', $dataPelanggan->last_name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Birthday</label>
                        <input type="date" name="birthday" class="form-control"
                            value="{{ old('birthday', $dataPelanggan->birthday) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="">Pilih Gender</option>
                            <option value="Male"
                                {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>
                            <option value="Female"
                                {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                            value="{{ old('email', $dataPelanggan->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control"
                            value="{{ old('phone', $dataPelanggan->phone) }}" required>
                    </div>

                    <button type="submit" class="btn btn-info">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </main>

    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>

</body>
</html>
