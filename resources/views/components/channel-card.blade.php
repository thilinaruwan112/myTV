<a data-name="{{ $defaultName }}" href="/{{ $channelKey }}/{{ $defaultName }}/"
    class="group relative  from-black via-gray-900 to-black flex justify-center items-center hover:bg-white  transition-all border rounded-3xl shadow-lg border-1">
    <img alt="" src={{ $posterImg }} style="width:80%"
        class="absolute object-cover opacity-75 transition-opacity group-hover:opacity-100" />

    <div class="relative p-4 sm:p-6 lg:p-8">
        <div class="mt-32 sm:mt-48 lg:mt-40">
            <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-xl font-bold text-white sm:text-2xl group-hover:text-black">{{ $defaultName }}
                </p>
            </div>
        </div>
    </div>
</a>
