<sidebar>
        <div class="w-1/5 bg-white min-h-screen shadow-md fixed right-0 pt-[100px]">
            <div style="margin-top:-70px; margin-left: 70px;" class="h-40 w-40 rounded-full bg-blue-900 ml-12 flex items-center justify-center text-white font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-black-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex items-center mt-5 ml-10 p-1">
            <h1 class="font-bold text-xl">Selamat Pagi Dimas</h1>
            <svg class="ml-2 mt-1" transform="translate(0, -2)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                <defs>
                    <linearGradient id="fireGradient" x1="0%" y1="100%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#FF4500"/>
                        <stop offset="100%" style="stop-color:#FFD700"/>
                    </linearGradient>
                </defs>
                <path d="M12 2.5c-0.5 4-4 6.5-4 9.5 0 2.5 2 4.5 4 4.5s4-2 4-4.5c0-3-3.5-5.5-4-9.5zm0 12.5c-1.1 0-2-1.1-2-2.5 0-1.8 1.6-3.3 2-5.5 0.4 2.2 2 3.7 2 5.5 0 1.4-0.9 2.5-2 2.5z" 
                    fill="url(#fireGradient)"/>
            </svg>
        </div>
        
        <div class="items-center text-xs text-white-100 ml-7 mb-13">
            <p>Lanjutkan Pembelajaranmu Untuk Mencapai Target</p>
        </div>

        <!-- resources/views/dashboard/module-status.blade.php -->
<div class="max-w-lg mx-auto p-6">
    {{-- Stats Section --}}
    <div class="flex justify-center items-center">
    <div class="text-center px-8">
        <div class="text-gray-500 text-sm">
            <h1 class="text-4xl text-gray-900">14</h1>
            <br>Modul yang<br>telah diselesaikan
        </div>
    </div>
    
    <div class="h-36 border-l-4 border-gray-900"></div>
    
    <div class="text-center px-8">
        <div class="text-gray-500 text-sm">
            <h1 class="text-4xl text-gray-900">08</h1>
            <p class="p-5">Modul yang<br>sedang dipelajari</p>
        </div>
    </div>
</div>
         
    
    {{-- Reminder Section --}}
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4">Pengingat</h2>
        
       
        <div class="flex items-start space-x-4 mb-4 p-4 bg-white rounded-lg">
            <div class="bg-blue-900 p-3 rounded-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
            </div>
            <div class="flex-1">
                <p class="text-black-900 font-bold mb-1">
                    Kamu belum menyelesaikan modul Nmap. Lanjutkan sekarang!
                </p>
                <p class="text-gray-500 text-sm"></p>
            </div>
        </div>
      
    </div>
</div>
</sidebar>
