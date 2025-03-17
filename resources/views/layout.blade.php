<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #c82333;
            color: white;
            position: fixed;
            padding: 15px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background: #a71d2a;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>KOPERASI</h4>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/pegawai') }}">Pegawai</a>
        <a href="{{ url('/anggota') }}">Anggota</a>
        <a href="{{ url('/simpanan') }}">Simpanan</a>
        <a href="{{ url('/angsuran') }}">Angsuran</a>
        <a href="{{ url('/laporan') }}">Laporan</a>
        <a href="{{ url('/setting') }}">Setting</a>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
