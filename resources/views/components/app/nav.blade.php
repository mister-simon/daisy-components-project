@php
    $sections = collect(File::allFiles(resource_path('views/sections')))
        ->map(fn($file) => $file->getFilename())
        ->transform(fn($filename) => Str::beforeLast($filename, '.blade.php'));
@endphp
<ul {{ $attributes->class('menu') }}>
    <li @class(['active' => request()->is('/')])>
        <a
            href="{{ url('/') }}"
            @class(['active' => request()->is('/')])>
            Home
        </a>
    </li>
    <x-app.nav-divider />
    @foreach ($sections as $section)
        <li>
            <a
                href="{{ url($section) }}"
                @class(['active' => request()->is($section)])>
                {{ $section }}
            </a>
        </li>
    @endforeach
</ul>
