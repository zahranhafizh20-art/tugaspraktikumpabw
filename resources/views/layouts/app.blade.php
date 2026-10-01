<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">
</head>
<body>
    <header class="header">
        <h1>LaporBanjir</h1>
        <small>BPBD Kabupaten Bandung</small>
        <nav class="nav">
            <a href="{{ route('laporan.create') }}">Lapor Banjir</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main class="konten">
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; 2025 LaporBanjir - BPBD Kabupaten Bandung</p>
    </footer>
</body>
</html>