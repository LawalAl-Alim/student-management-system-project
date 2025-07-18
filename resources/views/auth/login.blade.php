<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>

    <p style="margin-top: 20px;">
        Don't have an account? <a href="{{ route('register') }}">Register here</a>.
    </p>
</div>
</body>
</html>