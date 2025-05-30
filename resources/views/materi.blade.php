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
        <div class="bg-gray-50 min-h-screen">
            <div class="bg-white border-b border-gray-200 shadow-sm">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('courses.index') }}" class="flex items-center text-blue-900 hover:text-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            <span>Kembali ke Beranda</span>
                        </a>
                        
                        <div class="flex items-center">
                            <div class="mr-4 text-right hidden md:block">
                                <p class="text-sm font-medium">Selamat Belajar</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->name ?? 'User_123' }}</p>
                            </div>
                            <div class="h-10 w-10 rounded-full bg-blue-900 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container mx-auto px-4 py-8">
                <div class="flex flex-col lg:flex-row gap-6">
                    <div class="w-full lg:w-8/12">
                        {{-- Course Header --}}
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                                        <g id="icon" transform="scale(0.046875)">
                                            <path d="M175.702784,0 L213.333333,18.7946667 L250.963883,0 L426.666667,0 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L0,320 L0,0 L175.702784,0 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z"/>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <h1 class="text-2xl font-bold">{{ $course->title }}</h1>
                                    <p class="text-gray-600">Dibuat oleh: {{ $course->instructor ?? 'Instructor' }}</p>
                                </div>
                            </div>
                            
                            <div class="mb-2">
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="font-medium">Progress Kursus</span>
                                    <span>{{ $progress }}% selesai</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-900 h-2.5 rounded-full" style="width: {{ $progress }}%"></div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Current Lesson Content --}}
                        @if($currentLesson)
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-xl font-bold">{{ $currentLesson->title }}</h2>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                        </svg>
                                    </button>
                                    <button class="text-gray-500 hover:text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="prose max-w-none">
                                {!! nl2br(e($currentLesson->content)) !!}
                            </div>
                        </div>
                        @else
                        {{-- Default Module Content when no specific lesson is selected --}}
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-xl font-bold">{{ $currentModule->title }}</h2>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                        </svg>
                                    </button>
                                    <button class="text-gray-500 hover:text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="prose max-w-none">
                                <p class="mb-4">{{ $currentModule->description }}</p>
                                {!! nl2br(e($currentModule->content)) !!}
                            </div>
                        </div>
                        @endif
                        
                        {{-- Tools Section (if current module has tools) --}}
                        @if($currentModule->tools && $currentModule->tools->count() > 0)
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <h2 class="text-xl font-bold mb-4">Alat-alat yang Digunakan</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($currentModule->tools as $tool)
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <div class="flex items-center mb-2">
                                        <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                            </svg>
                                        </div>
                                        <h4 class="font-bold">{{ $tool->name }}</h4>
                                    </div>
                                    <p class="text-sm">{{ $tool->description }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        {{-- Quiz Section (Optional - can be added later) --}}
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                            <h2 class="text-xl font-bold mb-4">Kuis Cepat</h2>
                            <p class="mb-4">Uji pemahaman Anda tentang materi ini:</p>
                            
                            <div class="space-y-4">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <p class="font-medium mb-2">1. Apa yang dimaksud dengan Ethical Hacking?</p>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="q1" id="q1a" class="h-4 w-4 text-blue-900">
                                            <label for="q1a" class="ml-2 text-sm">Hacking untuk tujuan jahat</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="radio" name="q1" id="q1b" class="h-4 w-4 text-blue-900">
                                            <label for="q1b" class="ml-2 text-sm">Hacking untuk meningkatkan keamanan sistem</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="radio" name="q1" id="q1c" class="h-4 w-4 text-blue-900">
                                            <label for="q1c" class="ml-2 text-sm">Hacking tanpa izin</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="mt-6 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">Periksa Jawaban</button>
                        </div>
                    </div>
                    
                    {{-- Sidebar with Course Modules --}}
                    <div class="w-full lg:w-4/12">
                        <div style="margin-top:50px; width:484px" class="w-full lg:w-3/12 h-screen bg-gray-50 rounded-xl shadow-sm border border-gray-200 p-6 fixed top-14 bottom-5 right-0">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-bold">Modul Kursus</h2>
                                <span class="text-sm text-gray-500">{{ $completedModules }}/{{ $totalModules }} selesai</span>
                            </div>
                            
                            <div class="space-y-3">
                                @foreach($course->modules as $module)
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <div class="bg-blue-50 px-4 py-3 flex justify-between items-center">
                                        <h3 class="font-medium">{{ $module->title }}</h3>
                                        @if($module->id == $currentModule->id)
                                            <span class="text-xs bg-blue-100 text-blue-800 py-1 px-2 rounded-full">Sedang Dipelajari</span>
                                        @elseif($module->is_completed ?? false)
                                            <span class="text-xs bg-green-100 text-green-800 py-1 px-2 rounded-full">Selesai</span>
                                        @else
                                            <span class="text-xs bg-gray-200 text-gray-600 py-1 px-2 rounded-full">Terkunci</span>
                                        @endif
                                    </div>
                                    
                                    @if($module->lessons && $module->lessons->count() > 0)
                                    <div class="px-4 py-2">
                                        <ul class="divide-y divide-gray-100">
                                            @foreach($module->lessons as $lesson)
                                            <li class="py-2 flex items-center">
                                                @if($lesson->is_completed ?? false)
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                @elseif($currentLesson && $lesson->id == $currentLesson->id)
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-9a1 1 0 011 1v4a1 1 0 11-2 0v-4a1 1 0 011-1z" clip-rule="evenodd" />
                                                        <path fill-rule="evenodd" d="M10 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <div class="h-5 w-5 border-2 border-gray-300 rounded-full mr-2"></div>
                                                @endif
                                                
                                                <a href="{{ route('materi.show', ['course' => $course->id, 'module' => $module->id, 'lesson' => $lesson->id]) }}" 
                                                   class="text-sm {{ ($currentLesson && $lesson->id == $currentLesson->id) ? 'font-medium text-blue-900' : (($lesson->is_completed ?? false) ? 'text-gray-700' : 'text-gray-500') }}">
                                                    {{ $lesson->title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                            
                            {{-- Navigation Buttons --}}
                            <div class="mt-6 flex space-x-3">
                                @if($previousLesson)
                                <a href="{{ route('materi.show', ['course' => $course->id, 'module' => $previousLesson->module_id, 'lesson' => $previousLesson->id]) }}" 
                                   class="w-1/2 flex items-center justify-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Sebelumnya
                                </a>
                                @endif
                                
                                @if($nextLesson)
                                <a href="{{ route('materi.show', ['course' => $course->id, 'module' => $nextLesson->module_id, 'lesson' => $nextLesson->id]) }}" 
                                   class="w-1/2 flex items-center justify-center bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition text-sm">
                                    Selanjutnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                @endif
                            </div>
                            
                            {{-- Discussion Section --}}
                            <div class="mt-6 bg-blue-50 p-4 rounded-lg border border-blue-100">
                                <h3 class="font-medium text-blue-900 mb-2">Diskusi Kelas</h3>
                                <p class="text-sm mb-3">Punya pertanyaan tentang materi ini? Diskusikan dengan instruktur dan peserta lain.</p>
                                <a href="#" class="text-blue-900 text-sm font-medium flex items-center hover:text-blue-700">
                                    Lihat Diskusi
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>