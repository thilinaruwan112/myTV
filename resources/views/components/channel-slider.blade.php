<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

<script type="module">
    import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

    const keenSlider = new KeenSlider(
        '#keen-slider', {
            loop: true,
            slides: {
                origin: 'center',
                perView: 1.25,
                spacing: 16,
            },
            breakpoints: {
                '(min-width: 1024px)': {
                    slides: {
                        origin: 'auto',
                        perView: 1.5,
                        spacing: 32,
                    },
                },
            },
        },
        []
    )

    const keenSliderPrevious = document.getElementById('keen-slider-previous')
    const keenSliderNext = document.getElementById('keen-slider-next')

    const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
    const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

    keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
    keenSliderNext.addEventListener('click', () => keenSlider.next())

    keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
    keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
</script>

<section class="bg-black p-10">
    <div class="mx-auto px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
            <div class="max-w-xl text-left sm:text-left ">
                <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">
                    Don't just take our word for it...
                </h2>

                <p class="mt-4 text-gray-200">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas veritatis illo placeat
                    harum porro optio fugit a culpa sunt id!
                </p>

                <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                    <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                        class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <button aria-label="Next slide" id="keen-slider-next-desktop"
                        class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                        <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="-mx-6 lg:col-span-2 lg:mx-0">
                <div id="keen-slider" class="keen-slider">

                    @foreach ($channels as $card)
                        @foreach ($card as $mainkey => $channel)
                            @php
                                $channelKey = "$mainkey";
                                $channelId = $channel->ch_no;
                                $defaultName = $channel->name;
                                $link = $channel->link;
                                $key = $channel->key;
                                $kid = $channel->kid;
                                $posterUrl = $channel->posterUrl;
                            @endphp
                            <div class="keen-slider__slide">
                                <x-channel-card :channelId="$channelId" :defaultName="$defaultName" :link="$link" :key="$key"
                                    :kid="$kid" :posterImg="$posterUrl" :channelKey="$channelKey" />
                            </div>
                        @endforeach
                    @endforeach


                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center gap-4 lg:hidden">
            <button aria-label="Previous slide" id="keen-slider-previous"
                class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>

            <button aria-label="Next slide" id="keen-slider-next"
                class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>
        </div>
    </div>
</section>
