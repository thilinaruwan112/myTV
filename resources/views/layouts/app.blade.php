<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <link rel="manifest" href="./manifest.json">

</head>

<body class="bg-gradient-to-t from-black via-gray-900 to-black font-sans leading-normal tracking-normal">
    {{-- <div class="flex flex-no-wrap">
        <div class="w-16 bg-gray-900 h-screen fixed"><x-Sidebar /></div>
    </div> --}}
    <div class="">
        @yield('content')
    </div>

    {{-- <x-Footer /> --}}
    @vite('resources/js/app.js')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
