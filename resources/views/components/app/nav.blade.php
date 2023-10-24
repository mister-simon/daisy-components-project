@php
    $sections = collect(File::allFiles(resource_path('views/sections')))
        ->map(fn($file) => $file->getFilename())
        ->transform(fn($filename) => Str::beforeLast($filename, '.blade.php'));
@endphp
<ul {{ $attributes->class('flex flex-wrap items-center justify-center gap-4 p-8') }}>
    <li @class(['scale-125' => request()->is('/')])>
        <x-a
            href="/"
            :active="request()->is('/')">
            Home
        </x-a>
    </li>
    <x-app.nav-divider />
    @foreach ($sections as $section)
        <li @class(['scale-125' => request()->is($section)])>
            <x-a
                :href="'/' . $section"
                :active="request()->is($section)">
                {{ $section }}
            </x-a>
        </li>
    @endforeach
</ul>
