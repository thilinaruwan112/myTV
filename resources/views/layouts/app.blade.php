<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <style>
        /* Scroll Bar */

        ::-webkit-scrollbar {
            width: 8px;
            height: 0px;
        }


        /* Track */

        ::-webkit-scrollbar-track {
            background: #0e0606;
        }


        /* Handle */

        ::-webkit-scrollbar-thumb {
            background: #17171a;
            border-radius: 10px;
        }


        /* Handle on hover */

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-gradient-to-t from-black via-gray-900 to-black font-sans leading-normal tracking-normal">
    {{-- <div class="flex flex-no-wrap">
        <div class="w-16 bg-gray-900 h-screen fixed"><x-Sidebar /></div>
    </div> --}}
    <div class="">
        <div class="px-4 pt-4">
            @yield('content')
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
