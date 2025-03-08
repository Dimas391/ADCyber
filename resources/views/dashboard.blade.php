<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <style>
        #nprogress .bar {
            background: #3b82f6 !important; 
            height: 3px !important;
        }
    </style>
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
    {{-- Welcome Section for New User --}}
    <div class="mb-8">
        <div class="border border-blue-900 rounded-xl p-6 bg-white shadow">
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
                {{-- Welcome Icon --}}
                <div class="w-24 h-24 bg-blue-900 rounded-lg flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                {{-- Welcome Message --}}
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-2xl font-bold mb-2">Selamat Datang di Platform Kami!</h2>
                    <p class="text-gray-600 mb-3">Anda belum memulai kursus apapun. Mulai perjalanan belajar Anda dengan memilih kursus di bawah ini.</p>
                    
                    {{-- Get Started Button --}}
                    <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm">Mulai Belajar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Recommended Courses Section --}}
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Kursus yang Direkomendasikan</h2>
            <a href="#" class="text-gray-600 hover:text-blue-900">Lihat Semua</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach(['Footprinting and Reconnaissance', 'Social Engineering', 'Cloud Computing', 'Hacking Web Application', 'Scanning Networks'] as $course)
            <div class="border border-blue-900 rounded-xl p-4 bg-white shadow hover:shadow-lg transition-shadow duration-200">
                <div class="w-full h-32 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <g id="icon" transform="scale(0.046875)">
                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                        </g>
                    </svg>
                </div>

                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h3 class="font-bold">{{ $course }}</h3>
                        <p class="text-sm text-gray-600">Dimas Kurniawan</p>
                    </div>
                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                </div>

                {{-- Description snippet --}}
                <p class="text-sm text-gray-600 mb-4">
                    @if($course == 'Footprinting and Reconnaissance')
                        Belajar bagaimana mengumpulkan data target untuk merancang serangan yang terarah
                    @elseif($course == 'Social Engineering')
                        Memahami teknik manipulasi psikologis dalam keamanan informasi
                    @elseif($course == 'Cloud Computing')
                        Pengenalan teknologi cloud dan implementasinya dalam bisnis
                    @elseif($course == 'Hacking Web Application')
                        Mempelajari kerentanan dan teknik pengujian aplikasi web
                    @else
                        Teknik dan metode untuk scanning jaringan dan deteksi sistem
                    @endif
                </p>

                {{-- Start Course Button --}}
                <button class="w-full bg-blue-900 text-white py-2 rounded-full text-sm">Mulai Kursus</button>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Popular Categories Section --}}
    <div class="mb-8">
        <h2 class="text-xl font-bold mb-4">Kategori Populer</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach(['Cybersecurity', 'Programming', 'Data Science', 'Networking'] as $category)
            <div class="border border-blue-900 rounded-xl p-4 bg-white shadow text-center hover:bg-blue-50 transition-colors duration-200">
                <div class="w-12 h-12 bg-blue-900 rounded-full mx-auto mb-2 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="font-bold">{{ $category }}</h3>
                <p class="text-xs text-gray-600 mt-1">20+ kursus</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

        <x-sidebar></x-sidebar>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            NProgress.start();
            setTimeout(() => NProgress.done(), 1000);
        });

        document.addEventListener("turbolinks:click", () => NProgress.start());
        document.addEventListener("turbolinks:load", () => NProgress.done());
</script>
</body>
</html>
