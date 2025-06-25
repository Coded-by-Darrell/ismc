<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <!-- Navigation (same on every page) -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer (same on every page) -->
    <footer>
        <p>&copy; 2024 ISMC</p>
    </footer>
</body>
</html>