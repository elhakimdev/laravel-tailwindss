<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <style>
        body {
         font-family: 'IBM Plex Sans', sans-serif;   
        }
    </style>
</head>
<body class="antialiased bg-gray-100">
    {{-- top nav --}}
    <section id="top-nav">
        <nav class="top-nav bg-white shadow py-2">
            <div class="mx-5 grid gap-x-5 grid-cols-12">
                <div class="col-span-2">
                    <div class="flex flex-row items-center justify-start">
                        <a href="#" class="">
                            <i class="fab fa-angular fa-3x text-blue-700 hover:text-blue-900"></i> 
                        </a>
                        <a href="#" class="ml-6 text-3xl subpixel-antialiased font-regular text-blue-700 hover:text-blue-900 hover:text-bold">IBM<span><strong class="text-3xl font-light">Plex</strong></span></a>
                    </div>
                </div>
                <div class="col-span-10">
                    <div class="flex flex-row items-center justify-center">
                        <div class="w-2/3 relative flex flex-row">

                            <input type="text" name="search" id="search" class="w-full py-1 my-3 pl-10 bg-gray-100 rounded border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Search anything here ....">

                            <svg class="w-4 h-4 absolute inset-3 mt-2 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <div class="w-1/3 flex flex-row justify-end items-center">
                            <a href="#" class="ml-3">
                                <i class="fas fa-bell text-gray-400 hover:text-blue-700 text-xl ml-3"></i>
                            </a>

                            <a href="#" class="ml-3">
                                <i class="fas fa-cog text-gray-400 hover:text-blue-700 text-xl ml-3"></i>
                            </a>
                            
                            <a href="#" class="ml-3">
                                <i class="fas fa-user text-gray-400 hover:text-blue-700 text-xl ml-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    {{-- main section --}}
    <section>
        {{-- body --}}
        <div class="body grid grid-cols-12">
            {{-- sidebar --}}
            <div class="sidebar col-span-2 py-1 min-h-screen">
                {{-- group menu 1 --}}
                <div class="mb-2">
                        <a href="#" class="flex items-center py-3 px-6 bg-white border-l-4 border-blue-600 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-home fa-lg fa-fw text-blue-600 mr-4 -ml-1"></i>
                            <div class="text-sm font-bold text-gray-600">Home</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-phone fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Support</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-database fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Development</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-question fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Help</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-home fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">FAQ</div>
                        </a>
                        <hr class="mb-2 border">  
                </div>
                
                {{-- group menu 2 --}}
                <div class="mb-2">
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-phone fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Support</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-database fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Development</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-question fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Help</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-home fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">FAQ</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-question fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Help</div>
                        </a>
                        <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-home fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">FAQ</div>
                        </a>
                        <hr class="mb-2 border">  
                </div>

                {{-- group menu 3 --}}
                <div class="mb-2">
                    <a href="#" class="flex items-center py-3 px-6 bg-gray-100 hover:bg-gray-300 transition duration-500 ease-in-out">
                            <i class="fas fa-cog fa-lg fa-fw text-gray-600 mr-4"></i>
                            <div class="text-sm font-bold text-gray-600">Setting</div>
                        </a>
                </div>
            </div>
            {{-- end sidebar --}}

            {{-- main container --}}
            <div class="layout col-span-10 min-h-screen shadow">
                <div class="mb-2 text-gray-500">
                    <div class="border-b-2 py-3 flex flex-row items-center justify-between">
                        <div class="ml-4">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="breadcrumb mr-4">

                        </div>
                    </div>
                </div>
            </div>
            {{-- end --}}
        </div>

    </section>
</body>
</html>