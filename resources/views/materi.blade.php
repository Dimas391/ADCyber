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
                <a href="#" class="flex items-center text-blue-900 hover:text-blue-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span>Kembali ke Beranda</span>
                </a>
                
                <div class="flex items-center">
                    <div class="mr-4 text-right hidden md:block">
                        <p class="text-sm font-medium">Selamat Belajar</p>
                        <p class="text-xs text-gray-500">User_123</p>
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
                            <h1 class="text-2xl font-bold">Footprinting and Reconnaissance</h1>
                            <p class="text-gray-600">Dibuat oleh: Dimas Kurniawan</p>
                        </div>
                    </div>
                    
                    <div class="mb-2">
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-medium">Progress Kursus</span>
                            <span>25% selesai</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-900 h-2.5 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">2.2 Teknik Pengumpulan Informasi</h2>
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
                        <p>Pengumpulan informasi (reconnaissance) adalah tahap penting dalam proses penetration testing. Pada tahap ini, kita berusaha mengumpulkan sebanyak mungkin informasi tentang target untuk mengidentifikasi potensi kerentanan.</p>
                        
                        <h3 class="font-bold text-lg mt-6 mb-3">Jenis-jenis Reconnaissance</h3>
                        
                        <div class="flex flex-col md:flex-row md:space-x-6 mb-6">
                            <div class="md:w-1/2 mb-4 md:mb-0">
                                <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 h-full">
                                    <h4 class="font-bold mb-2">Passive Reconnaissance</h4>
                                    <p class="text-sm">Teknik pengumpulan informasi tanpa berinteraksi langsung dengan target, sehingga tidak meninggalkan jejak. Biasanya menggunakan informasi publik.</p>
                                    <ul class="list-disc pl-5 mt-2 text-sm">
                                        <li>WHOIS Lookup</li>
                                        <li>DNS Queries</li>
                                        <li>Search Engine Intelligence</li>
                                        <li>Social Media Research</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <div class="bg-red-50 p-4 rounded-lg border border-red-100 h-full">
                                    <h4 class="font-bold mb-2">Active Reconnaissance</h4>
                                    <p class="text-sm">Teknik yang melibatkan interaksi langsung dengan target, dapat terdeteksi oleh sistem keamanan target.</p>
                                    <ul class="list-disc pl-5 mt-2 text-sm">
                                        <li>Port Scanning</li>
                                        <li>Network Mapping</li>
                                        <li>Vulnerability Scanning</li>
                                        <li>Banner Grabbing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="font-bold text-lg mt-6 mb-3">Open Source Intelligence (OSINT)</h3>
                        <p>OSINT adalah metode pengumpulan informasi dari sumber-sumber terbuka yang tersedia untuk umum.</p>
                        
                        <div class="my-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <h4 class="text-center font-bold mb-4">Framework OSINT</h4>
                            <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                <!-- Placeholder for OSINT framework diagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full p-4" viewBox="0 0 500 300">
                                    <!-- Center circle -->
                                    <circle cx="250" cy="150" r="50" fill="#1e3a8a" />
                                    <text x="250" y="155" text-anchor="middle" fill="white" font-weight="bold">TARGET</text>
                                    
                                    <!-- Outer circles -->
                                    <circle cx="130" cy="90" r="40" fill="#3b82f6" />
                                    <text x="130" y="95" text-anchor="middle" fill="white" font-weight="bold">Social</text>
                                    <line x1="174" y1="108" x2="210" y2="128" stroke="#3b82f6" stroke-width="2" />
                                    
                                    <circle cx="130" cy="210" r="40" fill="#3b82f6" />
                                    <text x="130" y="215" text-anchor="middle" fill="white" font-weight="bold">Domain</text>
                                    <line x1="174" y1="192" x2="210" y2="172" stroke="#3b82f6" stroke-width="2" />
                                    
                                    <circle cx="370" cy="90" r="40" fill="#3b82f6" />
                                    <text x="370" y="95" text-anchor="middle" fill="white" font-weight="bold">Network</text>
                                    <line x1="326" y1="108" x2="290" y2="128" stroke="#3b82f6" stroke-width="2" />
                                    
                                    <circle cx="370" cy="210" r="40" fill="#3b82f6" />
                                    <text x="370" y="215" text-anchor="middle" fill="white" font-weight="bold">Public</text>
                                    <line x1="326" y1="192" x2="290" y2="172" stroke="#3b82f6" stroke-width="2" />
                                </svg>
                            </div>
                            <p class="text-center text-sm text-gray-600 mt-2">Gambar 1: Framework pengumpulan informasi OSINT</p>
                        </div>
                        
                        <h3 class="font-bold text-lg mt-6 mb-3">Alat-alat untuk Reconnaissance</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-2">
                                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold">Shodan</h4>
                                </div>
                                <p class="text-sm">Search engine untuk perangkat dan sistem yang terhubung ke internet. Membantu menemukan device, server, dan sistem yang memiliki kerentanan.</p>
                            </div>
                            
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-2">
                                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold">theHarvester</h4>
                                </div>
                                <p class="text-sm">Tool untuk mengumpulkan email, subdomain, host, nama karyawan, port terbuka dan banner dari berbagai sumber publik.</p>
                            </div>
                            
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-2">
                                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold">Maltego</h4>
                                </div>
                                <p class="text-sm">Platform untuk forensik dan intelligence yang menyediakan link analysis untuk menemukan hubungan antara informasi dari berbagai sumber.</p>
                            </div>
                            
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-2">
                                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold">Nmap</h4>
                                </div>
                                <p class="text-sm">Network Mapper, tool untuk discovery jaringan dan security auditing. Dapat digunakan untuk scanning port dan host discovery.</p>
                            </div>
                        </div>
                        
                        <h3 class="font-bold text-lg mt-6 mb-3">Contoh Hasil Reconnaissance</h3>
                        
                        <div class="bg-gray-800 text-white p-4 rounded-lg font-mono text-sm overflow-x-auto mb-6">
                            <p># Contoh output dari Nmap scanning</p>
                            <p class="text-gray-400">$ nmap -sV -p 1-1000 targetdomain.com</p>
                            <p class="mt-2">Starting Nmap 7.91 ( https://nmap.org ) at 2023-06-15 10:30 WIB</p>
                            <p>Nmap scan report for targetdomain.com (192.168.1.1)</p>
                            <p>Host is up (0.0054s latency).</p>
                            <p class="mt-2">PORT    STATE  SERVICE     VERSION</p>
                            <p>22/tcp  open   ssh         OpenSSH 8.2p1 Ubuntu 4ubuntu0.5</p>
                            <p>80/tcp  open   http        Apache httpd 2.4.41</p>
                            <p>443/tcp open   https       Apache httpd 2.4.41</p>
                            <p>...</p>
                        </div>
                        
                        <div class="bg-blue-50 p-4 border-l-4 border-blue-900 rounded mb-6">
                            <p class="text-sm"><strong>Catatan Penting:</strong> Selalu ingat bahwa aktivitas reconnaissance harus dilakukan dengan izin yang jelas. Melakukan scanning tanpa izin dapat melanggar hukum dan etika profesional.</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4">Kuis Cepat</h2>
                    <p class="mb-4">Uji pemahaman Anda tentang materi ini:</p>
                    
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <p class="font-medium mb-2">1. Manakah yang termasuk metode passive reconnaissance?</p>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" name="q1" id="q1a" class="h-4 w-4 text-blue-900">
                                    <label for="q1a" class="ml-2 text-sm">Port scanning</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="q1" id="q1b" class="h-4 w-4 text-blue-900">
                                    <label for="q1b" class="ml-2 text-sm">WHOIS lookup</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="q1" id="q1c" class="h-4 w-4 text-blue-900">
                                    <label for="q1c" class="ml-2 text-sm">Banner grabbing</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4">
                            <p class="font-medium mb-2">2. Tool apa yang dapat digunakan untuk melihat perangkat yang terhubung internet?</p>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" name="q2" id="q2a" class="h-4 w-4 text-blue-900">
                                    <label for="q2a" class="ml-2 text-sm">Shodan</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="q2" id="q2b" class="h-4 w-4 text-blue-900">
                                    <label for="q2b" class="ml-2 text-sm">Wireshark</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="q2" id="q2c" class="h-4 w-4 text-blue-900">
                                    <label for="q2c" class="ml-2 text-sm">Metasploit</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="mt-6 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">Periksa Jawaban</button>
                </div>
                
                <!-- Attachments -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4">Materi Pendukung</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4 flex items-center">
                            <div class="h-10 w-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium">Teknik OSINT dan Penerapannya.pdf</h3>
                                <p class="text-sm text-gray-500">PDF, 1.8 MB</p>
                            </div>
                            <button class="text-blue-900 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4 flex items-center">
                            <div class="h-10 w-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-900 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium">Infografis Alat Reconnaissance.png</h3>
                                <p class="text-sm text-gray-500">PNG, 450 KB</p>
                            </div>
                            <button class="text-blue-900 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full lg:w-4/12">
            <div style="margin-top:50px; width:484px" class="w-full lg:w-3/12 h-screen bg-gray-50 rounded-xl shadow-sm border border-gray-200 p-6 fixed top-14 bottom-5 right-0">

                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Modul Kursus</h2>
                        <span class="text-sm text-gray-500">3/12 selesai</span>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-blue-50 px-4 py-3 flex justify-between items-center">
                                <h3 class="font-medium">Modul 1: Pengenalan Footprinting</h3>
                                <span class="text-xs bg-green-100 text-green-800 py-1 px-2 rounded-full">Selesai</span>
                            </div>
                            <div class="px-4 py-2">
                                <ul class="divide-y divide-gray-100">
                                    <li class="py-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">1.1 Pengenalan dan Tujuan</span>
                                    </li>
                                    <li class="py-2 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">1.2 Definisi dan Konsep Dasar</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-blue-50 px-4 py-3 flex justify-between items-center">
                                <h3 class="font-medium">Modul 2: Teknik Footprinting</h3>
                                <span class="text-xs bg-blue-100 text-blue-800 py-1 px-2 rounded-full">Sedang Dipelajari</span>
                            </div>
                            <div class="px-4 py-2">
                                <ul class="divide-y divide-gray-100">
                                    <li class="py-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">2.1 Metode Pengumpulan Informasi</span>
                                    </li>
                                    <li class="py-2 flex items-center font-medium text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-9a1 1 0 011 1v4a1 1 0 11-2 0v-4a1 1 0 011-1z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M10 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">2.2 Teknik Pengumpulan Informasi</span>
                                    </li>
                                    <li class="py-2 flex items-center text-gray-500">
                                        <div class="h-5 w-5 border-2 border-gray-300 rounded-full mr-2"></div>
                                        <span class="text-sm">2.3 Analisis Hasil Reconnaissance</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-50 px-4 py-3 flex justify-between items-center">
                                <h3 class="font-medium text-gray-500">Modul 3: Alat Footprinting</h3>
                                <span class="text-xs bg-gray-200 text-gray-600 py-1 px-2 rounded-full">Terkunci</span>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-50 px-4 py-3 flex justify-between items-center">
                                <h3 class="font-medium text-gray-500">Modul 4: Praktik Lapangan</h3>
                                <span class="text-xs bg-gray-200 text-gray-600 py-1 px-2 rounded-full">Terkunci</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex space-x-3">
                        <a href="#" class="w-1/2 flex items-center justify-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Sebelumnya
                        </a>
                        <a href="#" class="w-1/2 flex items-center justify-center bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition text-sm">
                            Selanjutnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    
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