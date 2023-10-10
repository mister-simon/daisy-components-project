@php
    use Illuminate\Support\Facades\File;
    $sections = collect(File::allFiles(resource_path('views/sections')))
        ->map(fn($file) => $file->getFilename())
        ->transform(fn($filename) => Str::beforeLast($filename, '.blade.php'));
@endphp
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
            <h1>Everything So Far</h1>

            <ul class="not-prose menu rounded-box menu-lg bg-base-200">
                @foreach ($sections as $section)
                    <li><a href="/{{ $section }}">{{ ucwords($section) }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <footer class="mt-auto">
        <x-app.nav />
    </footer>
</body>

</html>
