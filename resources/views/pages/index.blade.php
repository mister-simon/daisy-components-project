<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testing</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
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

    <hr>

    <x-footer />
</body>

</html>
