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
    <nav class="bg-gray-100 shadow">
        <div
        x-data="{ isOpen: false }" 
        class="container mx-auto px-6 py-3">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="#" class="text-gray-800 text-xl font-bold hover:text-gray-500 md:text-2xl">Laravel</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button 
                        type="button" 
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" 
                        aria-label="toggle menu"
                        @click="isOpen = !isOpen">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div
                    :class="isOpen ? 'block' : 'hidden' "
                    class="block md:flex md:items-center md:justify-between flex-1"
                    >
                    <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                        <a href="#" class="mx-2 mt-2 md:mt-0 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:bg-gray-300">Join Development</a>
                        <a href="#" class="mx-2 mt-2 md:mt-0 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:bg-gray-300">Browse</a>
                        <a href="#" class="mx-2 mt-2 md:mt-0 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:bg-gray-300">Setting</a>
                        <a href="#" class="mx-2 mt-2 md:mt-0 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:bg-gray-300">Experts</a>
                    </div>

                    <div class="flex items-center mt-4 md:mt-0">
                        <div
                        x-data="{ isOpenNotification: false }"                        
                        class="relative">
                            <button 
                            class="mx-4 hidden md:block text-gray-600 hover:text-gray-700 focus:text-gray-700 focus:outline-none" 
                            aria-label="show notifications"
                            @click="isOpenNotification = !isOpenNotification"
                            >                            
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div
                            x-show="isOpenNotification"
                            @click.away="isOpenNotification = false"  

                            class="hidden md:block mt-4 py-3 w-64 md:absolute md:right-0 md:mt-6 md:py-3 md:w-80 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
                                <div class="py-2">
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-blue-500" href="#">Test with TDD</span> artical . 1h
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                        </p>
                                    </a>
                                </div>
                                <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>
                            </div>

                        </div>


                        <div 
                        x-data="{ isOpenButton: false }"
                        class="relative">
                            <button type="button" 
                            class="flex items-center focus:outline-none" 
                            aria-label="toggle profile dropdown"
                            @click="isOpenButton = !isOpenButton">                   
                                <div class="h-8 w-8 overflow-hidden rounded-full border-2  border-gray-400">
                                    <img src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" class="h-full w-full object-cover" alt="avatar">
                                </div>
                            </button>

                            <!-- Dropdown menu -->
                            <div 
                            x-show="isOpenButton"
                            @click.away="isOpenButton = false"

                            class="mt-4 py-3 w-64 md:absolute md:right-0 md:mt-4 md:py-3 md:w-60 bg-white rounded-md shadow-xl z-20">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    your name
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Your projects
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Help
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Settings
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- End Section --}}

    {{-- content --}}

    <script src="{{ asset('js/app.js')}}"></script>

    </body>
</html>
