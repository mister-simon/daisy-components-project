<span
    class="absolute left-0 right-0 top-0 h-10 w-full max-w-[100vw]"
    x-intersect:enter="headerStuck = false"
    x-intersect:leave.full="headerStuck = true">
</span>
<header
    class="navbar sticky inset-x-0 top-0 z-50 mb-4 max-w-[100vw] rounded-b-lg bg-base-100/80 shadow backdrop-blur transition-[shadow,transform]"
    :class="{
        'min-h-0 p-0 origin-top': headerStuck,
        'shadow-none': !headerStuck
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
