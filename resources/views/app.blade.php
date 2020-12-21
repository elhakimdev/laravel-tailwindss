<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel tailwind</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased font-sans">

    {{-- Start section --}}
    <nav>
        {{-- mobile --}}
        <div class="flex flex-wrap items-center bg-gray-100 py-2 px-10 shadow-md">
            <a href="" class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                <span class="text-xl text-gray-700 font-bold uppercase tracking-wide">
                    Laravel-<strong>Tail</strong>
                </span>
            </a>
            <button class="inline-flex hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-target="#navigation">
                <span>
                <svg  class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 24 24" stroke="gray">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                </span>
            </button>
            <div class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto " id="navigation">
                <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
                    <a href="" class="lg:inline-flex lg:w-auto px-2 py-2 rounded text-gray-700">
                        <span>Documentation</span>
                    </a>
                    <a href="" class="lg:inline-flex lg:w-auto px-2 py-2 rounded text-gray-700">
                        <span>Support</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- End Section --}}


    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</html>
