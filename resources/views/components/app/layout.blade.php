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
            <header
                class="navbar sticky inset-x-0 top-0 z-50 mb-4 max-w-[100vw] rounded-b-lg bg-base-100/80 shadow backdrop-blur transition-[shadow,transform]"
                :class="{
                    'min-h-0 p-0 origin-top': stuck,
                    'shadow-none': !stuck
                }">
                <div class="flex-none">
                    <label
                        for="sidebar"
                        class="btn btn-square btn-ghost drawer-button"
                        role="button">
                        <x-app.icon-menu />
                        <div class="sr-only">Open Navigation</div>
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
            </header>
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

    <x-footer class="container rounded-t-box mx-auto mt-auto items-center border border-b-0 p-4 shadow">
        <aside class="grid-flow-col items-center">
            <p>© {{ date('Y') }} - All rights reserved</p>
        </aside>
        <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
            <x-a
                outline
                href="https://github.com/mister-simon/daisy-components-project"
                target="_blank"
                rel="noopener noreferrer">
                View this project on Github
                <img
                    src="{{ asset('img/github-icon.png') }}"
                    alt=""
                    width="35"
                    class="overflow-hidden rounded-full">
            </x-a>
        </nav>
    </x-footer>
</body>

</html>
