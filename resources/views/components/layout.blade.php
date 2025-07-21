<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="bg-neutral-100 min-h-[2000px] font-montserrat">
    
    <x-nav></x-nav>
    <x-header>{{ $title }}</x-header>
    {{ $slot }}
    
</body>
</html>