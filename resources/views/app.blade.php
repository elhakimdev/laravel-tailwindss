<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <style>
        body {
         font-family: 'IBM Plex Sans', sans-serif;   
        }
    </style>
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="antialiased bg-gray-100">

    <section class="shadow bg-white md:fixed md:top-0 w-full">
        <nav class="md:flex items-center mx-5 p-2">
            <div class="md:flex-1">
                <div class="flex flex-row items-center justify-between md:justify-start">

                    <a href="#" class="">
                        <i class="fab fa-angular fa-3x text-blue-700 hover:text-blue-900"></i> 
                    </a>

                    <a href="#" class="hidden md:block ml-6 text-3xl subpixel-antialiased font-regular text-blue-700 hover:text-blue-900 hover:text-bold">IBM<span><strong class="text-3xl font-light">Plex</strong></span></a>

                    <div class="md:hidden">
                        <button 
                        onclick="toggleNav()"
                        type="button"
                            class="p-3 text-blue-600"
                            aria-label="toggle menu">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:flex-grow md:relative">
                <input type="text" name="search" id="search" class="w-full py-1 my-3 pl-10 bg-gray-100 rounded border border-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 focus:border-transparent" placeholder="Search anything here ....">

                <svg class="w-4 h-4 md:absolute inset-3 mt-2 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <div id="menu" class="hidden transition-all md:block mt-3 md:flex-1 py-2">
                <div class="flex flex-col md:flex md:flex-row md:items-center md:justify-end">
                    <a href="#" class="p-3 md:p-0 hover:bg-gray-200 md:hover:bg-transparent">

                        <i class="fas fa-bell text-gray-400 hover:text-blue-700 text-xl ml--3 md:ml-3"></i>
                        
                        <span class="ml-3 font-semibold text-gray-400 hover:text-blue-700 md:hidden">Notifications</span>
                    </a>

                    <a href="#" class="p-3 md:p-0 hover:bg-gray-200 md:hover:bg-transparent">

                        <i class="fas fa-cog text-gray-400 hover:text-blue-700 text-xl ml--3 md:ml-3"></i>
                        
                        <span class="ml-3 font-semibold text-gray-400 hover:text-blue-700 md:hidden">Settings</span>
                    </a>
                    
                    <a href="#" class="p-3 md:p-0 hover:bg-gray-200 md:hover:bg-transparent">
                        
                        <i class="fas fa-user text-gray-400 hover:text-blue-700 text-xl ml--3 md:ml-3"></i>
                        
                        <span class="ml-3 font-semibold text-gray-400 hover:text-blue-700 md:hidden">Accounts</span>
                    </a> 
                </div>               
            </div>
        </nav>
    </section>


    {{-- main section --}}
    <sectiont id="content">

        {{-- body grid 12 colom --}}
        <div class="body md:grid md:grid-cols-12 md:mt-16 md:py-2">

            {{-- toggler menu --}}
            <div class="md:hidden flex flex-row mt-3 py-3 items center justify-between ml-5">
                <button class="p-3">
                    <i class="fas fa-align-justify"></i>
                    <span class="ml-5">Menu</span>
                </button>
            </div>

            {{-- sidebar 2 kolom hidden on mobile--}}
            <div class="hidden md:block sidebar flex flex-col md:col-span-2 md:py-1 md:min-h-screen">
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

            {{-- main container  10 kolom--}}
            <div class="layout md:col-span-10 md:min-h-screen md:shadow">
                <div class="mb-2 text-gray-500">
                    {{-- breadcrumb --}}

                    {{-- top card --}}
                    <div class="grid gap-y-3 mx-5 md:grid-cols-12 md:gap-x-3 md:mx-6 md:my-6">
                        {{-- <div class="grid grid-cols-12 gap-x-4"> --}}
                            <div class="col-span-3 shadow bg-white">    
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                            Valeur de la transaction
                                        </dt>
                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-blue-900">
                                            $ 5,749,480
                                        </dd>
                                        <dd class="text-gray-500 font-semibold">
                                            <span>
                                                500
                                                <span class="text-xs">
                                                    .000
                                                </span>
                                            </span>
                                            BTC
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-span-3 shadow bg-white">    
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                            Valeur de la transaction
                                        </dt>
                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-blue-900">
                                            $ 5,749,480
                                        </dd>
                                        <dd class="text-gray-500 font-semibold">
                                            <span>
                                                500
                                                <span class="text-xs">
                                                    .000
                                                </span>
                                            </span>
                                            BTC
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-span-3 shadow bg-white">    
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                            Valeur de la transaction
                                        </dt>
                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-blue-900">
                                            $ 5,749,480
                                        </dd>
                                        <dd class="text-gray-500 font-semibold">
                                            <span>
                                                500
                                                <span class="text-xs">
                                                    .000
                                                </span>
                                            </span>
                                            BTC
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-span-3 shadow bg-white">    
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                            Valeur de la transaction
                                        </dt>
                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-blue-900">
                                            $ 5,749,480
                                        </dd>
                                        <dd class="text-gray-500 font-semibold">
                                            <span>
                                                500
                                                <span class="text-xs">
                                                    .000
                                                </span>
                                            </span>
                                            BTC
                                        </dd>
                                    </dl>
                                </div>
                            </div>  
                        {{-- </div> --}}
                    </div>
                    {{-- end top card --}}
            </div>
            {{-- end --}}

        </div>

    </section>
    {{-- end main --}}

    <script>
        function toggleNav() {
            if (document.getElementById("menu").classList.contains("hidden")) {
                document.getElementById("menu").classList.remove("hidden");
                document.getElementById("menu"),classList.add("show");
            } else {
                if (document.getElementById("menu").classList.contains("show")) {
                    document.getElementById("menu").classList.remove("show");
                    document.getElementById("menu"),classList.add("hidden");
                }
            }
        }
    </script>
</body>
</html>