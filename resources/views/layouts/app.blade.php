<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blank School Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @auth
        <nav class="navbar">
            <div class="navbar-left">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('students.create') }}">Add Student</a>
                <a href="{{ route('courses') }}">View Courses</a>
            </div>
            <div class="navbar-right">
                <span>{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </nav>
    @endauth

    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>