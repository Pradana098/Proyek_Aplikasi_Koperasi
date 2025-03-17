<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang di Dashboard Pengawas</h1>
    <form method="POST" action="{{ route('pengawas.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
