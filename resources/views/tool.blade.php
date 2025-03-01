<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-gray-100">
    
    <x-aside></x-aside>

    {{-- Main content area with proper margin --}}
    <div class="ml-64">
        <x-navbar></x-navbar>
        
        <main class="w-full pt-24">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-9">
                {{-- Course section --}}
                <div class="w-full mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">Tool Hacking</h2>
                    </div>

                    <div class="grid grid-cols-4 md:grid-cols-4 xl:grid-cols-3 gap-4">
                        @foreach(['Nmap', 'Wireshak', 'Meztaploit', 'Nessus', 'Sqlmap'] as $course)
                        <div class="border border-blue-900 rounded-xl p-4 bg-white shadow hover:shadow-lg transition-shadow">
                            <div class="w-full h-32 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                                    <g id="icon" transform="scale(0.046875)">
                                        <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <h3 class="font-bold">{{ $course }}</h3>
                                    <p class="text-sm text-gray-600">Dimas Kurniawan</p>
                                </div>
                                <div class="h-8 w-8 rounded-full bg-blue-900 flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>

                            {{-- Progress Bar --}}
                            <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                                <div class="bg-blue-900 h-2 rounded-full" style="width: 35%"></div>
                            </div>

                            {{-- Continue Button --}}
                            <button class="w-full bg-blue-900 text-white py-2 rounded-full text-sm hover:bg-blue-800 transition-colors">
                                Lanjutkan
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Sidebar --}}
                <div class="w-full lg:w-1/3">
                    <x-sidebar></x-sidebar>
                </div>
            </div>
        </main>
    </div>
</body>
</html>