<h2>Basic horizontal carousel - snap to slide's start</h2>

<div class="not-prose">
    <x-carousel class="w-96 max-w-[90vw]">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Basic horizontal carousel - snap to slide's center</h2>

<div class="not-prose">
    <x-carousel center class="w-96 max-w-[90vw]">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Basic horizontal carousel - snap to slide's end</h2>

<div class="not-prose">
    <x-carousel end class="w-96 max-w-[90vw]">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Full width slides</h2>

<div class="not-prose">
    <x-carousel end class="w-48 max-w-[90vw]">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-full">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Half width slides</h2>

<div class="not-prose">
    <x-carousel end class="w-96 max-w-[90vw]">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-1/2">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Full-bleed carousel</h2>

<div class="not-prose">
    <x-carousel end center class="rounded-box w-96 max-w-[90vw] space-x-4 bg-neutral p-4">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-2/3">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="rounded-box w-full">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Vertical carousel</h2>

<div class="not-prose">
    <x-carousel vertical class="h-96">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Carousel with indicator buttons</h2>

{{-- This works without any of the alpine stuff --}}
{{-- However, since it uses anchor tags the page will jump around vertically. --}}
<div class="not-prose">
    @php($items = range(1, 5))

    <div x-data="{
        scrollTo(id) {
            const carousel = this.$refs.carousel;
            carousel.scrollTo({
                left: document.getElementById(id).offsetLeft - carousel.offsetLeft
            });
        }
    }">
        <x-carousel
            class="w-96 max-w-[90vw]"
            x-ref="carousel">
            @foreach ($items as $i)
                @php($itemId = "{$component->id}item{$i}")
                <x-carousel-item :id="$itemId">
                    <img
                        src="https://placehold.co/200?text=Slide+{{ $i }}"
                        alt="Placeholder image {{ $i }}"
                        class="w-full border border-neutral">
                </x-carousel-item>
            @endforeach

            <x-slot:outer-controls>
                <div class="flex w-96 max-w-[90vw] justify-center gap-2 py-2">
                    @foreach ($items as $i)
                        @php($itemId = "{$component->id}item{$i}")
                        <a
                            href="#{{ $itemId }}"
                            class="btn btn-xs"
                            @click.prevent="scrollTo('{{ $itemId }}')">
                            {{ $i }}
                        </a>
                    @endforeach
                </div>
            </x-slot:outer-controls>
        </x-carousel>
    </div>
</div>

<h2>Carousel with next/prev buttons</h2>

{{-- This works without any of the alpine stuff --}}
{{-- However, since it uses anchor tags the page will jump around vertically. --}}
<div class="not-prose">
    @php($items = range(1, 5))

    <div x-data="{
        scrollTo(id) {
            const carousel = this.$refs.carousel;
            carousel.scrollTo({
                left: document.getElementById(id).offsetLeft - carousel.offsetLeft
            });
        }
    }">
        <x-carousel class="w-full" x-ref="carousel">
            @foreach ($items as $i)
                @php($itemId = "{$component->id}item{$i}")
                @php($prevItemId = $loop->first ? null : "{$component->id}item" . $i - 1)
                @php($nextItemId = $loop->last ? null : "{$component->id}item" . $i + 1)
                <x-carousel-item :id="$itemId" class="relative h-80 w-full">
                    <img
                        src="https://placehold.co/200?text=Slide+{{ $i }}"
                        alt="Placeholder image {{ $i }}"
                        class="h-full w-full border border-neutral object-cover">

                    <div class="absolute inset-0 flex items-center p-2">
                        @if ($prevItemId)
                            <x-a
                                circle
                                ghost
                                sm
                                href="#{{ $prevItemId }}"
                                class="mr-auto"
                                x-on:click.prevent="scrollTo('{{ $prevItemId }}')">
                                ❮
                            </x-a>
                        @endif
                        @if ($nextItemId)
                            <x-a
                                circle
                                ghost
                                sm
                                href="#{{ $nextItemId }}"
                                class="ml-auto"
                                x-on:click.prevent="scrollTo('{{ $nextItemId }}')">
                                ❯
                            </x-a>
                        @endif
                    </div>
                </x-carousel-item>
            @endforeach
        </x-carousel>
    </div>
</div>

<h2>Alpine powered autoplay</h2>

<div class="not-prose">
    @php($items = range(1, 5))

    {{-- This example shows how you can make a fully functional autoplaying carousel  --}}
    {{-- which loops, stops on interation, has fixed arrows for navigation, and       --}}
    {{-- additional methods for handling state. Be sure you allow your users to opt   --}}
    {{-- out of anything autoplay / motion. It's for your own good.                   --}}
    <div
        class="relative"
        x-data="{
            // Initial states
            playing: true,
        
            // Length of timeout
            autoplay: 3000,
        
            // Internal vars
            _timeout: null,
            _currentSlide: null,
        
            // Methods
            get carousel() {
                return this.$refs.carousel;
            },
            get slides() {
                return this.carousel.querySelectorAll('[data-slide]');
            },
            get length() {
                return this.slides.length;
            },
            get prevIndex() {
                return (this.currentIndex - 1 + this.length) % this.length;
            },
            get currentIndex() {
                if (!this._currentSlide) return;
                return Number(this._currentSlide.dataset.slide);
            },
            get nextIndex() {
                return (this.currentIndex + 1) % this.length;
            },
            get prevSlide() {
                return this.findSlide(this.prevIndex);
            },
            get nextSlide() {
                return this.findSlide(this.nextIndex);
            },
            findSlide(i) {
                return this.carousel.querySelector(`[data-slide='${i}']`);
            },
            scrollToCurrent() {
                const carousel = this.$refs.carousel;
                carousel.scrollTo({ left: this._currentSlide.offsetLeft - carousel.offsetLeft });
            },
            next() {
                if (!this.nextSlide) return;
        
                this._currentSlide = this.nextSlide;
                this.scrollToCurrent();
        
                if (!this.playing) return;
        
                clearTimeout(this._timeout);
                this.play();
            },
            prev() {
                if (!this.prevSlide) return;
        
                this._currentSlide = this.prevSlide;
                this.scrollToCurrent();
        
                if (!this.playing) return;
        
                clearTimeout(this._timeout);
                this.play();
            },
            play() {
                this.playing = true;
                this._timeout = setTimeout(() => this.next(), this.autoplay);
            },
            stop() {
                this.playing = false;
                clearTimeout(this._timeout);
            },
            toggle() {
                if (this.playing) {
                    return this.stop();
                }
                this.play();
            },
            init() {
                this._currentSlide = this.slides[0] ?? null;
        
                // Decide whether to allow autoplay or not via motion reduce.
                // Also, respect any changes to reduce motion setting.
                let wantsReduced = true;
        
                const motionReduceQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
        
                if (motionReduceQuery) {
                    wantsReduced = motionReduceQuery.matches;
                    motionReduceQuery.addEventListener('change', () => motionReduceQuery.matches ? this.stop() : null);
                }
        
                wantsReduced ? this.stop() : this.play();
            }
        }">
        <x-carousel
            class="relative w-full"
            x-ref="carousel"
            @click="stop()">
            <x-button
                circle
                ghost
                sm
                class="sticky left-2 top-1/2 z-10 -translate-y-1/2"
                @click="prev()">
                ❮
            </x-button>

            @foreach ($items as $i)
                @php($itemId = "{$component->id}item{$i}")
                @php($prevItemId = $loop->first ? null : "{$component->id}item" . $i - 1)
                @php($nextItemId = $loop->last ? null : "{$component->id}item" . $i + 1)
                <x-carousel-item :id="$itemId" class="relative h-80 w-full" data-slide="{{ $loop->index }}">
                    <img
                        src="https://placehold.co/200?text=Slide+{{ $i }}"
                        alt="Placeholder image {{ $i }}"
                        class="h-full w-full border border-neutral object-cover">
                </x-carousel-item>
            @endforeach

            <x-button
                circle
                ghost
                sm
                class="sticky right-2 top-1/2 z-10 -translate-y-1/2"
                @click="next()">
                ❯
            </x-button>
        </x-carousel>

        <div class="absolute left-2 top-2" x-cloak>
            <x-badge x-show="playing === true" success>Playing</x-badge>
            <x-badge x-show="playing === false" error>Stopped</x-badge>
            <x-badge x-show="playing === null" warning>Paused</x-badge>
        </div>

        <div class="mt-2 flex items-center gap-2">
            <x-button
                error
                sm
                @click="stop">
                Stop
            </x-button>
            <x-toggle
                x-model="playing"
                @click="toggle" />
            <x-button
                success
                sm
                @click="play">
                Play
            </x-button>
        </div>
    </div>
</div>
