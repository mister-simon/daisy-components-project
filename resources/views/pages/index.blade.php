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
        <x-nav />
    </nav>

    <div class="container mx-auto">
        <div class="prose max-w-none">
            <h1>Kitchen Sink</h1>

            {{-- Actions --}}
            @include('sections.buttons')
            @include('sections.dropdowns')
            @include('sections.modals')

            {{-- Data display --}}
            @include('sections.accordions')
            @include('sections.alerts')
        </div>
    </div>

    <footer class="mt-auto">
        <x-nav />
    </footer>
</body>

</html>
