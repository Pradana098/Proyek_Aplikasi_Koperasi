<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengawas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
        }

        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login Pengawas</h2>
        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif
        <form method="POST" action="{{ route('pengawas.login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
