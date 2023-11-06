<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Daisy Components' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative flex min-h-screen flex-col">
    <x-drawer id="sidebar">
        <div class="container mx-auto" x-data="{ headerStuck: false }">
            <x-app.header />

            <main class="prose max-w-[initial] px-4 pb-12">
                {{ $slot }}
            </main>
        </div>

        <x-slot:toggle
            x-data
            x-on:keyup.enter="$el.click()"
            x-model="$store.navOpen"
            aria-controls="sidebar-drawer"
            x-bind:aria-expanded="$store.navOpen">
        </x-slot:toggle>

        <x-slot:drawer
            id="sidebar-drawer"
            class="h-full"
            aria-label="Navigation Menu">
            <div
                class="h-full w-64 max-w-[90vw] overflow-auto bg-base-100 text-base-content"
                x-data
                x-trap.noscroll.inert="$store.navOpen"
                @keyup.escape.window="$store.navOpen = false">
                <div x-show="$store.navOpen" x-transition.opacity.duration.300ms>
                    <x-app.nav />
                </div>
            </div>
        </x-slot:drawer>
    </x-drawer>

    <x-app.footer />
</body>

</html>
