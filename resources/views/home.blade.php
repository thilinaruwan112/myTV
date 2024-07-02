@extends('layouts.app')

@section('title', 'My TV | Sri Lankan Premire Internet TV Experience')

@section('content')
    <div class="grid grid-cols-1 gap-0 lg:grid-cols-3">


        <div class="rounded-lg lg:col-span-2">
            {{-- <x-JwPlayer /> --}}

            <x-MainBanner />
        </div>


        <div class="bg-black">
            <div class="p-5">
                <h1 class="text-white text-4xl font-bold">Channel List</h1>
                <x-ChannelSearch />
            </div>
            <div class="rounded-lg bg-black max-h-screen h-screen-minus-10 overflow-auto px-4 pb-4">
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($cards as $card)
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
                            <x-channel-card :channelId="$channelId" :defaultName="$defaultName" :link="$link" :key="$key"
                                :kid="$kid" :posterImg="$posterUrl" :channelKey="$channelKey" />
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('default-search').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const channels = document.querySelectorAll('[data-name]');

            channels.forEach(channel => {
                const name = channel.getAttribute('data-name').toLowerCase();
                if (name.includes(searchTerm)) {
                    channel.style.display = '';
                } else {
                    channel.style.display = 'none';
                }
            });
        });
    </script>
    {{--
    <x-ChannelSlider :channels="$cards" /> --}}

@endsection
