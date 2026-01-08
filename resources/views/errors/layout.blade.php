<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SMK Marhas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans text-gray-700">
    <div class="max-w-xl w-full px-6 py-12 text-center mx-4">
        <div class="mb-8 flex justify-center">
            <img src="{{ asset('image/logo.png') }}" alt="Logo SMK Marhas" class="h-24 w-auto drop-shadow-sm hover:scale-105 transition-transform duration-300">
        </div>
        
        <h1 class="text-7xl font-extrabold text-green-900 mb-2 tracking-tight">@yield('code')</h1>
        
        <div class="w-16 h-1 bg-green-500 mx-auto mb-6 rounded-full"></div>

        <h2 class="text-2xl font-bold text-gray-800 mb-4">@yield('message')</h2>
        
        <p class="text-gray-500 mb-8 leading-relaxed max-w-md mx-auto">
            @yield('description', 'Maaf, halaman yang Anda cari tidak dapat ditemukan atau sedang tidak tersedia saat ini.')
        </p>

        <a href="{{ url('/') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-full shadow-sm hover:bg-green-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-300 transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
