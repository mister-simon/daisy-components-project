@php
    $sections = collect(File::allFiles(resource_path('views/sections')))
        ->map(fn($file) => $file->getFilename())
        ->transform(fn($filename) => Str::beforeLast($filename, '.blade.php'));
@endphp

<x-app.layout
    title="Daisy Components - Home"
    subtitle="Home">
    <ul class="not-prose menu rounded-box menu-lg">
        @foreach ($sections as $section)
            <li><a href="{{ url($section) }}">{{ ucwords($section) }}</a></li>
        @endforeach
    </ul>
</x-app.layout>
