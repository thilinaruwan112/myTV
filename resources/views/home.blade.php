@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
        <div class="rounded-lg bg-black max-h-screen overflow-auto p-4">
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

        <div class="rounded-lg lg:col-span-2">
            {{-- <x-JwPlayer /> --}}
        </div>
    </div>
@endsection
