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
                            
                            <div class="prose max-w-none mb-6">
                                {!! nl2br(e($currentLesson->content)) !!}
                            </div>

                            {{-- Mark as Complete Button --}}
                            @if(!($currentLesson->is_completed ?? false))
                            <form action="{{ route('lesson.complete', $currentLesson->id) }}" method="POST" class="mb-4">
                                @csrf
                                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Tandai Selesai
                                </button>
                            </form>
                            @else
                            <div class="mb-4 flex items-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium">Materi telah selesai</span>
                            </div>
                            @endif
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
                            
                            <div class="prose max-w-none mb-6">
                                <p class="mb-4">{{ $currentModule->description }}</p>
                                {!! nl2br(e($currentModule->content)) !!}
                            </div>

                            {{-- Mark Module as Complete Button --}}
                            @if(!($currentModule->is_completed ?? false))
                            <form action="{{ route('module.complete', $currentModule->id) }}" method="POST" class="mb-4">
                                @csrf
                                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Tandai Modul Selesai
                                </button>
                            </form>
                            @else
                            <div class="mb-4 flex items-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium">Modul telah selesai</span>
                            </div>
                            @endif
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
                        
                        {{-- Quiz Section - Only show if lesson/module is completed --}}
                        @if(($currentLesson && ($currentLesson->is_completed ?? false)) || (!$currentLesson && ($currentModule->is_completed ?? false)))
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6" id="quiz-section">
                            <div class="flex items-center mb-4">
                                <div class="h-10 w-10 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold">Kuis Pemahaman</h2>
                            </div>
                            <p class="mb-6 text-gray-600">Selamat! Anda telah menyelesaikan materi. Uji pemahaman Anda dengan kuis di bawah ini:</p>
                            
                            <form id="quiz-form" action="{{ route('quiz.submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="lesson_id" value="{{ $currentLesson->id ?? '' }}">
                                <input type="hidden" name="module_id" value="{{ $currentModule->id }}">
                                
                                <div class="space-y-6">
                                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                                        <p class="font-medium mb-4">1. Apa yang dimaksud dengan Ethical Hacking?</p>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <input type="radio" name="q1" value="a" id="q1a" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q1a" class="ml-3 text-sm cursor-pointer">Hacking untuk tujuan jahat dan merusak sistem</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q1" value="b" id="q1b" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q1b" class="ml-3 text-sm cursor-pointer">Hacking yang dilakukan dengan izin untuk meningkatkan keamanan sistem</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q1" value="c" id="q1c" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q1c" class="ml-3 text-sm cursor-pointer">Hacking tanpa izin untuk mencuri data</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                                        <p class="font-medium mb-4">2. Manakah yang termasuk tahap dalam penetration testing?</p>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <input type="radio" name="q2" value="a" id="q2a" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q2a" class="ml-3 text-sm cursor-pointer">Reconnaissance, Scanning, Exploitation</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q2" value="b" id="q2b" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q2b" class="ml-3 text-sm cursor-pointer">Hanya scanning saja</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q2" value="c" id="q2c" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q2c" class="ml-3 text-sm cursor-pointer">Langsung melakukan attack</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                                        <p class="font-medium mb-4">3. Apa tujuan utama dari kegiatan ethical hacking?</p>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <input type="radio" name="q3" value="a" id="q3a" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q3a" class="ml-3 text-sm cursor-pointer">Mencuri informasi rahasia</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q3" value="b" id="q3b" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q3b" class="ml-3 text-sm cursor-pointer">Mengidentifikasi dan memperbaiki kerentanan keamanan</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" name="q3" value="c" id="q3c" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                                <label for="q3c" class="ml-3 text-sm cursor-pointer">Merusak sistem komputer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-6 flex space-x-4">
                                    <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Periksa Jawaban
                                    </button>
                                    <button type="button" id="reset-quiz" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition">
                                        Reset Jawaban
                                    </button>
                                </div>
                            </form>

                            {{-- Quiz Results (Hidden initially) --}}
                            <div id="quiz-results" class="mt-6 hidden">
                                <div class="border-t pt-6">
                                    <h3 class="text-lg font-bold mb-4">Hasil Kuis</h3>
                                    <div id="quiz-score" class="mb-4"></div>
                                    <div id="quiz-feedback" class="space-y-2"></div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    {{-- Sidebar with Course Modules --}}
                    <div class="w-full lg:w-4/12">
                        <div style="margin-top:50px; width:484px" class="w-full lg:w-3/12 h-screen bg-gray-50 rounded-xl shadow-sm border border-gray-200 p-6 fixed top-14 bottom-5 right-0">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-bold">Modul Kursus</h2>
                                <span class="text-sm text-gray-500">{{ $completedModules }}/{{ $totalModules }} selesai</span>
                            </div>
                            
                            <div class="space-y-3 overflow-y-auto max-h-96">
                                @foreach($course->modules as $module)
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    {{-- Module Header - Clickable --}}
                                    <div class="bg-blue-50 px-4 py-3 cursor-pointer hover:bg-blue-100 transition" 
                                         onclick="toggleModule({{ $module->id }})">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-sm">{{ $module->title }}</h3>
                                            <div class="flex items-center space-x-2">
                                                @if($module->id == $currentModule->id)
                                                    <span class="text-xs bg-blue-500 text-white py-1 px-2 rounded-full">Aktif</span>
                                                @elseif($module->is_completed ?? false)
                                                    <span class="text-xs bg-green-500 text-white py-1 px-2 rounded-full">Selesai</span>
                                                @else
                                                    <span class="text-xs bg-gray-400 text-white py-1 px-2 rounded-full">Belum</span>
                                                @endif
                                                <svg class="w-4 h-4 transition-transform" id="arrow-{{ $module->id }}" 
                                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Module Lessons - Collapsible --}}
                                    <div class="module-content" id="module-{{ $module->id }}" 
                                         style="display: {{ $module->id == $currentModule->id ? 'block' : 'none' }}">
                                        @if($module->lessons && $module->lessons->count() > 0)
                                        <div class="px-4 py-2 bg-white">
                                            <ul class="divide-y divide-gray-100">
                                                @foreach($module->lessons as $lesson)
                                                <li class="py-2">
                                                  <a href="{{ route('materi.show', ['course' => $course, 'module' => $module, 'lesson' => $lesson]) }}"
                                                    class="flex items-center hover:bg-gray-50 p-2 rounded transition group">
                                                   
                                                        @if($lesson->is_completed ?? false)
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                            </svg>
                                                        @elseif($currentLesson && $lesson->id == $currentLesson->id)
                                                            <div class="h-5 w-5 rounded-full bg-blue-500 mr-3 flex-shrink-0 flex items-center justify-center">
                                                                <div class="h-2 w-2 bg-white rounded-full"></div>
                                                            </div>
                                                        @else
                                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full mr-3 flex-shrink-0 group-hover:border-blue-400"></div>
                                                        @endif
                                                        
                                                        <span class="text-sm {{ ($currentLesson && $lesson->id == $currentLesson->id) ? 'font-medium text-blue-900' : (($lesson->is_completed ?? false) ? 'text-gray-700' : 'text-gray-500 group-hover:text-gray-700') }}">
                                                            {{ $lesson->title }}
                                                        </span>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @else
                                        {{-- If no lessons, show module link --}}
                                        <div class="px-4 py-2 bg-white">
                                           <a href="{{ route('materi.show.module', ['course' => $course->id, 'module' => $module->id]) }}"

                                               class="flex items-center text-sm text-gray-600 hover:text-blue-900 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                Lihat Materi Modul
                                            </a>
                                        </div>
                                        @endif
                                    </div>
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

    {{-- JavaScript for Interactive Features --}}
    <script>
        // Toggle Module Visibility
        function toggleModule(moduleId) {
            const content = document.getElementById('module-' + moduleId);
            const arrow = document.getElementById('arrow-' + moduleId);
            
            if (content.style.display === 'none') {
                content.style.display = 'block';
                arrow.style.transform = 'rotate(180deg)';
            } else {
                content.style.display = 'none';
                arrow.style.transform = 'rotate(0deg)';
            }
        }

        // Quiz Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const quizForm = document.getElementById('quiz-form');
            const resetButton = document.getElementById('reset-quiz');
            const resultsDiv = document.getElementById('quiz-results');
            const scoreDiv = document.getElementById('quiz-score');
            const feedbackDiv = document.getElementById('quiz-feedback');

            // Correct answers
            const correctAnswers = {
                q1: 'b', // Hacking yang dilakukan dengan izin untuk meningkatkan keamanan sistem
                q2: 'a', // Reconnaissance, Scanning, Exploitation
                q3: 'b'  // Mengidentifikasi dan memperbaiki kerentanan keamanan
            };

            // Answer explanations
            const explanations = {
                q1: {
                    correct: 'Benar! Ethical hacking adalah praktik hacking yang dilakukan dengan izin dan bertujuan untuk meningkatkan keamanan sistem.',
                    wrong: 'Salah. Ethical hacking adalah hacking yang dilakukan dengan izin untuk tujuan keamanan, bukan untuk merusak atau mencuri.'
                },
                q2: {
                    correct: 'Benar! Tahap-tahap utama penetration testing meliputi Reconnaissance (pengumpulan informasi), Scanning (pemindaian), dan Exploitation (eksploitasi).',
                    wrong: 'Salah. Penetration testing memiliki beberapa tahap sistematis: Reconnaissance, Scanning, Exploitation, dan lain-lain.'
                },
                q3: {
                    correct: 'Benar! Tujuan utama ethical hacking adalah mengidentifikasi kerentanan keamanan untuk kemudian diperbaiki.',
                    wrong: 'Salah. Ethical hacking bertujuan untuk mengidentifikasi dan memperbaiki kerentanan, bukan untuk aktivitas jahat.'
                }
            };

            if (quizForm) {
                quizForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(quizForm);
                    let score = 0;
                    let totalQuestions = 3;
                    let feedback = [];

                    // Check answers
                    for (let i = 1; i <= totalQuestions; i++) {
                        const questionKey = 'q' + i;
                        const userAnswer = formData.get(questionKey);
                        const isCorrect = userAnswer === correctAnswers[questionKey];
                        
                        if (isCorrect) {
                            score++;
                            feedback.push({
                                question: i,
                                correct: true,
                                explanation: explanations[questionKey].correct
                            });
                        } else {
                            feedback.push({
                                question: i,
                                correct: false,
                                explanation: explanations[questionKey].wrong,
                                correctAnswer: correctAnswers[questionKey]
                            });
                        }
                    }

                    // Display results
                    const percentage = Math.round((score / totalQuestions) * 100);
                    let scoreClass = 'text-red-600';
                    let scoreMessage = 'Perlu belajar lebih lanjut';
                    
                    if (percentage >= 80) {
                        scoreClass = 'text-green-600';
                        scoreMessage = 'Excellent! Pemahaman Anda sangat baik';
                    } else if (percentage >= 60) {
                        scoreClass = 'text-yellow-600';
                        scoreMessage = 'Good! Pemahaman Anda cukup baik';
                    }

                    scoreDiv.innerHTML = `
                        <div class="flex items-center ${scoreClass}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-lg font-bold">Skor: ${score}/${totalQuestions} (${percentage}%)</span>
                        </div>
                        <p class="text-sm mt-1 ${scoreClass}">${scoreMessage}</p>
                    `;

                    // Display feedback
                    feedbackDiv.innerHTML = feedback.map(item => `
                        <div class="p-3 rounded-lg ${item.correct ? 'bg-green-50 border border-green-200' : 'bg-red-50 border border-red-200'}">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    ${item.correct ? 
                                        '<svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>' :
                                        '<svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>'
                                    }
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Soal ${item.question}</p>
                                    <p class="text-sm mt-1">${item.explanation}</p>
                                </div>
                            </div>
                        </div>
                    `).join('');

                    resultsDiv.classList.remove('hidden');
                    resultsDiv.scrollIntoView({ behavior: 'smooth' });
                });
            }

            if (resetButton) {
                resetButton.addEventListener('click', function() {
                    quizForm.reset();
                    resultsDiv.classList.add('hidden');
                });
            }
        });

        // Mark lesson/module as completed with AJAX
        document.addEventListener('DOMContentLoaded', function() {
            const completionForms = document.querySelectorAll('form[action*="complete"]');
            
            completionForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const button = form.querySelector('button[type="submit"]');
                    const originalText = button.innerHTML;
                    
                    // Show loading state
                    button.innerHTML = `
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Memproses...
                    `;
                    button.disabled = true;
                    
                    // Simulate API call (replace with actual AJAX)
                    setTimeout(() => {
                        // Show success state
                        form.innerHTML = `
                            <div class="mb-4 flex items-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium">Materi telah selesai</span>
                            </div>
                        `;
                        
                        // Show quiz if it exists
                        const quizSection = document.getElementById('quiz-section');
                        if (quizSection) {
                            quizSection.style.display = 'block';
                            quizSection.scrollIntoView({ behavior: 'smooth' });
                        }
                    }, 1500);
                });
            });
        });
    </script>
</body>
</html>