<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel 11')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @stack('css')
    @vite('resources/css/app.css')
</head>
<body>
    <header></header>

    @yield('content')

    <footer></footer>
</body>
</html>