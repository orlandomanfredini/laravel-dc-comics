<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DC comics')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main class="">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>