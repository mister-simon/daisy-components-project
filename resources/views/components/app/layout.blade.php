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
        <div class="container mx-auto" x-data="{ stuck: false }">
            <span
                class="absolute left-0 right-0 top-0 h-10 w-full max-w-[100vw]"
                x-intersect:enter="stuck = false"
                x-intersect:leave.full="stuck = true">
            </span>
            <div
                class="navbar sticky inset-x-0 top-0 z-50 mb-4 max-w-[100vw] rounded-b-lg bg-base-100/80 shadow backdrop-blur transition-[shadow,transform]"
                :class="{
                    'min-h-0 p-0 origin-top': stuck,
                    'shadow-none': !stuck
                }">
                <div class="flex-none">
                    <label
                        for="sidebar"
                        class="btn btn-square btn-ghost drawer-button">
                        <x-app.icon-menu />
                    </label>
                </div>
                @isset($subtitle)
                    <h1 class="ml-4 flex-1 md:text-xl">{{ $subtitle }}</h1>
                @endisset
                <div>
                    <a
                        class="btn btn-ghost normal-case md:text-xl"
                        href="{{ url('/') }}">
                        daisyUI components
                    </a>
                </div>
            </div>
            <div class="prose max-w-[initial] px-4 pb-12">
                {{ $slot }}
            </div>
        </div>

        <x-slot:toggle
            x-data
            x-on:keyup.enter="$store.navOpen = !$store.navOpen"
            x-model="$store.navOpen">
        </x-slot:toggle>

        <x-slot:drawer>
            <div
                class="min-h-full w-64 max-w-[90vw] overflow-auto bg-base-100 text-base-content"
                x-data
                x-trap.noscroll="$store.navOpen"
                @keyup.escape.window="$store.navOpen = false">
                <x-app.nav />
            </div>
        </x-slot:drawer>
    </x-drawer>
</body>

</html>
