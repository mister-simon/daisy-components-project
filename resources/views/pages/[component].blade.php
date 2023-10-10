<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testing</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex min-h-screen flex-col">
    <nav>
        <x-app.nav />
    </nav>

    <div class="container mx-auto">
        <div class="prose max-w-none">
            @includeFirst(["sections.{$component}", 'partials.component-not-found'])
        </div>
    </div>

    <footer class="mt-auto">
        <x-app.nav />
    </footer>
</body>

</html>
