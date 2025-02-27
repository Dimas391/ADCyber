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

    {{-- Navbar/Header --}}
    <div class="ml-64">
    <x-navbar></x-navbar>
    
<main class="w-full" style="margin-top: 100px">
    <div class="container mx-auto px-4 flex gap-6">
        <!-- Main Content Area -->
        <div class="w-3/4">
    {{-- Ongoing Course Card: Footprinting and Reconnaissance --}}
    <div class="mb-8">
        <div class="border border-blue-900 rounded-xl p-4 bg-white shadow">
            <div class="flex items-start space-x-4">
                {{-- Course Icon --}}
                <div class="w-24 h-24 bg-blue-900 rounded-lg flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                        <g id="icon" transform="scale(0.046875)">
                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                        </g>
                    </svg>
                </div>
                
                {{-- Course Info --}}
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-1">Footprinting and Reconnaissance</h2>
                    <p class="text-gray-600 text-sm mb-2">Belajar bagaimana mengumpulkan data target untuk merancang serangan yang terarah</p>
                    <p class="text-black-500 text-sm font-bold">Dibuat Oleh : Dimas Kurniawan</p>
                    
                    {{-- Progress Bar --}}
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-900 h-2 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>

                {{-- Menu Button --}}
                <button class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            </div>
            
            {{-- Continue Button --}}
            <div class="flex justify-end mt-4">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm">Lanjutkan</button>
            </div>
        </div>
    </div>

    {{-- Ongoing Course Card: Scanning Networks --}}
    <div class="mb-8">
        <div class="border border-blue-900 rounded-xl p-4 bg-white shadow">
            <div class="flex items-start space-x-4">
                {{-- Course Icon --}}
                <div class="w-24 h-24 bg-blue-900 rounded-lg flex items-center justify-center">
                <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                        <g id="icon" transform="scale(0.046875)">
                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                        </g>
                </svg>
                </div>
                
                {{-- Course Info --}}
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-1">Scanning Networks</h2>
                    <p class="text-gray-600 text-sm mb-2">Pelajari teknik scanning untuk menemukan host dan service yang berjalan pada jaringan target</p>
                    <p class="text-black-500 text-sm font-bold">Dibuat Oleh : Dimas Kurniawan</p>
                    
                    {{-- Progress Bar --}}
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-900 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                {{-- Menu Button --}}
                <button class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            </div>
            
            {{-- Continue Button --}}
            <div class="flex justify-end mt-4">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm">Lanjutkan</button>
            </div>
        </div>
    </div>

    {{-- Ongoing Course Card: Vulnerability Assessment --}}
    <div class="mb-8">
        <div class="border border-blue-900 rounded-xl p-4 bg-white shadow">
            <div class="flex items-start space-x-4">
                {{-- Course Icon --}}
                <div class="w-24 h-24 bg-blue-900 rounded-lg flex items-center justify-center">
                <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                        <g id="icon" transform="scale(0.046875)">
                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                        </g>
                </svg>
                </div>
                
                {{-- Course Info --}}
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-1">Vulnerability Assessment</h2>
                    <p class="text-gray-600 text-sm mb-2">Pelajari cara mengidentifikasi dan menganalisis kerentanan pada sistem target</p>
                    <p class="text-black-500 text-sm font-bold">Dibuat Oleh : Dimas Kurniawan</p>
                    
                    {{-- Progress Bar --}}
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-900 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>

                {{-- Menu Button --}}
                <button class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            </div>
            
            {{-- Continue Button --}}
            <div class="flex justify-end mt-4">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm">Lanjutkan</button>
            </div>
        </div>
    </div>

    {{-- Ongoing Course Card: Exploitation Techniques --}}
    <div class="mb-8">
        <div class="border border-blue-900 rounded-xl p-4 bg-white shadow">
            <div class="flex items-start space-x-4">
                {{-- Course Icon --}}
                <div class="w-24 h-24 bg-blue-900 rounded-lg flex items-center justify-center">
                <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                        <g id="icon" transform="scale(0.046875)">
                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                        </g>
                </svg>
                </div>
                
                {{-- Course Info --}}
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-1">Exploitation Techniques</h2>
                    <p class="text-gray-600 text-sm mb-2">Pelajari metode dan teknik eksploitasi untuk menguji keamanan sistem secara etis</p>
                    <p class="text-black-500 text-sm font-bold">Dibuat Oleh : Dimas Kurniawan</p>
                    
                    {{-- Progress Bar --}}
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-900 h-2 rounded-full" style="width: 50%"></div>
                        </div>
                    </div>
                </div>

                {{-- Menu Button --}}
                <button class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            </div>
            
            {{-- Continue Button --}}
            <div class="flex justify-end mt-4">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm">Lanjutkan</button>
            </div>
        </div>
    </div>
    <div class="mb-8">
    </div>
    </div>
    <!-- Sidebar -->
        <x-sidebar></x-sidebar>
</main>
</body>
</html>
