<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'FireFly')</title>
    @vite('resources/css/app.css')
    @if ($styles ?? null)
            {{ $styles }}
    @endif
    
</head>
<body>
    <main class="relative min-h-screen ">
            {{ $slot }}
    </main>
</body>
</html>