<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <main class="relative">
        <img 
            class="absolute left-0 bottom-7" 
            src="/storage/Images/Login/matahari.png" 
            alt=""
        />
        <div class="flex">
            <div class="w-2/3 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div class="text-center">
                    <h1 class="font-sans text-blue-900 text-8xl font-extrabold">
                        Masuk
                    </h1>
                    <p>Selamat datang kembali di ADCyber</p>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input 
                                id="email" 
                                type="email" 
                                name="email" 
                                class="mt-1 block w-full border h-9 px-4 border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                required 
                                autofocus 
                                autocomplete="username"
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                            <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            class="mt-1 block w-full border h-9 px-4 border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            required 
                            autocomplete="current-password"
                        >
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4 flex">
                            <label class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    name="remember" 
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                >
                                <span class="ms-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            <a 
                                
                                class="underline ml-auto text-sm text-gray-600 hover:text-gray-900"
                            >
                                Lupa password?
                            </a>
                        </div>

                        <div class="text-center text-gray-600 mt-4">
                            <p>
                                Belum memiliki akun? 
                                <a href="{{ route('register') }}" class="font-extrabold hover:text-gray-900">
                                    Buat akun
                                </a>
                            </p>
                        </div>

                        <div class="mt-4">
                            <button 
                                type="submit" 
                                class="w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-900"
                            >
                                Masuk
                            </button>
                        </div>

                        <div class="flex items-center mt-4">
                            <hr class="border-gray-300 flex-grow">
                            <h4 class="mx-4 text-gray-400">Log in with other</h4>
                            <hr class="border-gray-300 flex-grow">
                        </div>

                        <div class="text-center flex flex-col mt-4 gap-2">
                            <a 
                               
                                class="p-3 border rounded-lg flex items-center justify-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                    <!-- Google SVG Path -->
                                    <path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917"/>
                                    <path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/>
                                    <path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.32-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/>
                                    <path fill="#FBBC05" d="M11.68 28.18c-1.1-3.27-1.1-6.8 0-10.07V12.4H4.34A20.04 20.04 0 0 0 2.1 24c0 3.24.78 6.3 2.24 9.06l7.34-5.88z"/>
                                    <path fill="#EA4335" d="M24 9.83c3.23 0 6.13 1.14 8.41 3.38l6.31-6.3C34.91 3.18 29.43 1 24 1 15.4 1 7.96 5.93 4.34 14.93l7.34 5.88C13.42 13.7 18.27 9.83 24 9.83z"/>
                                </svg>
                                Login with Google
                            </a>
                            <a 
                            
                                class="p-3 border rounded-lg flex items-center justify-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                    <!-- Facebook SVG Path -->
                                    <path fill="#1877f2" d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"/>
                                </svg>
                                Login with Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <section class="w-1/2 bg-gray-100 h-screen p-6">
                <img 
                    src="/storage/Images/Login/adcyber.png" 
                    alt="bg-Login" 
                    class="w-full h-full object-cover"
                />
            </section>
        </div>
    </main>
</body>
</html>