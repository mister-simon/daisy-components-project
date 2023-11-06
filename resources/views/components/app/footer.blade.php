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
