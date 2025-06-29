<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ISMC - Innovations Solution and Marketing Corporation')</title>
</head>
<body>
    <!-- Navigation (same on every page) -->
    @include('partials.navigation')

    {{-- This is where every content will go --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer (same on every page) -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>