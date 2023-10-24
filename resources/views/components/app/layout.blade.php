<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Daisy Components' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col">
    <x-drawer id="sidebar">
        <div class="container mx-auto">
            <div class="navbar rounded-b-box sticky top-0 z-50 mb-4 bg-base-100 shadow">
                <div class="flex-none">
                    <label
                        for="sidebar"
                        class="btn btn-square btn-ghost drawer-button">
                        <x-app.icon-menu />
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl normal-case" href="{{ url('/') }}">daisyUI components</a>
                </div>
            </div>
            <div class="prose max-w-none px-4 pb-12">
                {{ $slot }}
            </div>
        </div>

        <x-slot:toggle
            x-data
            x-effect="document
                .querySelector('body')
                .classList
                .toggle('overflow-hidden', $store.navOpen)"
            x-model="$store.navOpen">
        </x-slot:toggle>

        <x-slot:drawer>
            <div
                class="flex h-full max-w-sm flex-col justify-center overflow-auto bg-base-100 text-base-content">
                <x-app.nav />
            </div>
        </x-slot:drawer>
    </x-drawer>
</body>

</html>
