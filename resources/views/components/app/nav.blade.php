@php
    use Illuminate\Support\Facades\File;
    $sections = collect(File::allFiles(resource_path('views/sections')))
        ->map(fn($file) => $file->getFilename())
        ->transform(fn($filename) => Str::beforeLast($filename, '.blade.php'));
@endphp

<ul class="mt-auto flex flex-wrap items-center justify-center gap-4 p-8">
    <li>
        <x-a
            tag="a"
            href="/">
            Home
        </x-a>
    </li>
    <x-app.nav-divider />
    @foreach ($sections as $section)
        <li>
            <x-a
                :href="'/' . $section"
                :active="request()->is($section)">
                {{ $section }}
            </x-a>
        </li>
    @endforeach
</ul>
