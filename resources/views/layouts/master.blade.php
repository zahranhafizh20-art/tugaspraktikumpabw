<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') - LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">
</head>
<body>

<header class="header">
    <div class="container header-isi">
        <div class="brand">
            <div>
                <h1>LaporBanjir</h1>
                <small>BPBD Kabupaten Bandung</small>
            </div>
        </div>

        <nav class="menu">
            <a href="{{ route('banjir.form') }}"
               class="{{ request()->routeIs('banjir.form') ? 'aktif' : '' }}">Form Lapor</a>
            <a href="{{ route('banjir.daftar') }}"
               class="{{ request()->routeIs('banjir.daftar') ? 'aktif' : '' }}">Daftar Laporan</a>
        </nav>
    </div>
</header>

<main class="container konten">
    @yield('konten')
</main>

<footer class="footer">
    <div class="container">
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung &mdash; Sistem Pelaporan Banjir (Prototipe)
    </div>
</footer>

</body>
</html>
