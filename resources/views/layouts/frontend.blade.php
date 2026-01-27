<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'SMK MARHAS Margahayu - Pusat Keunggulan SMK di Bandung')</title>
  <meta name="description"
    content="@yield('meta_description', 'SMK MARHAS Margahayu adalah Pusat Keunggulan SMK Swasta terbaik di Kabupaten Bandung. Program keahlian: PPLG, TJKT, AKL, MPLB. Pendaftaran siswa baru dibuka!')">
  <meta name="keywords"
    content="@yield('meta_keywords', 'SMK Marhas, SMK Margahayu, SMK Swasta Bandung, PPLG, TJKT, AKL, MPLB, Sekolah Kejuruan Bandung, PPDB SMK Bandung')">
  <meta name="author" content="SMK MARHAS Margahayu">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'SMK MARHAS Margahayu - Pusat Keunggulan SMK di Bandung')">
  <meta property="og:description"
    content="@yield('meta_description', 'SMK MARHAS Margahayu adalah Pusat Keunggulan SMK Swasta terbaik di Kabupaten Bandung.')">
  <meta property="og:image" content="@yield('og_image', asset('image/og-smk-marhas.jpg'))">
  <meta property="og:site_name" content="SMK MARHAS Margahayu">
  <meta property="og:locale" content="id_ID">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title', 'SMK MARHAS Margahayu - Pusat Keunggulan SMK di Bandung')">
  <meta name="twitter:description"
    content="@yield('meta_description', 'SMK MARHAS Margahayu adalah Pusat Keunggulan SMK Swasta terbaik di Kabupaten Bandung.')">
  <meta name="twitter:image" content="@yield('og_image', asset('image/og-smk-marhas.jpg'))">

  @include('partials.seo-schema')

  <link rel="icon" href="{{ asset('image/favicon.svg') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="{{ asset('js/security.js') }}" defer></script>
  <script src="{{ asset('js/console-banner.js') }}" defer></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/visimisi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
  <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
  <link rel="stylesheet" href="{{ asset('css/infolowongan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/kalender.css') }}">
  <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
  <link rel="stylesheet" href="{{ asset('css/kurikulum.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pplg.css') }}">
  <link rel="stylesheet" href="{{ asset('css/prestasi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profilsekolah.css') }}">
  <link rel="stylesheet" href="{{ asset('css/registrasialumni.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sambutan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sarana.css') }}">
  <link rel="stylesheet" href="{{ asset('css/struktur.css') }}">
  <link rel="stylesheet" href="{{ asset('css/teknikpemesinan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hero-section.css') }}">
  <link rel="stylesheet" href="{{ asset('css/news.css') }}">
  <link rel="stylesheet" href="{{ asset('css/large-desktop.css') }}">
  <link rel="stylesheet" href="{{ asset('css/desktop-xl.css') }}">
  <link rel="stylesheet" href="{{ asset('css/images.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive-xl.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fullwidth.css') }}">
  <link rel="stylesheet" href="{{ asset('css/welcome-modal.css') }}">
</head>

<body>
  <div id="preloader">
    <div class="preloader-content">
      <img src="{{ asset('image/favicon.svg') }}" alt="Loading..." class="preloader-logo">
      <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
  </div>

  <div class="container">
    @include('partials.header')

    <div class="nav-line"></div>

    @yield('content')

    @include('partials.news-ticker')
    @include('partials.footer')
  </div>

  <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
  <button id="backToTop" title="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
  </button>

  @include('partials.welcome-modal')

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/ekstrakurikuler.js') }}" defer></script>
  <script src="{{ asset('js/fasilitas.js') }}" defer></script>
  <script src="{{ asset('js/galeri.js') }}" defer></script>
  <script src="{{ asset('js/infolowongan.js') }}" defer></script>
  <script src="{{ asset('js/pplg.js') }}" defer></script>
  <script src="{{ asset('js/profilsekolah.js') }}" defer></script>
  <script src="{{ asset('js/sambutan.js') }}" defer></script>
  <script src="{{ asset('js/sarana.js') }}" defer></script>
  <script src="{{ asset('js/teknikpemesinan.js') }}" defer></script>
  <script src="{{ asset('js/visimisi.js') }}" defer></script>
  <script src="{{ asset('js/news.js') }}" defer></script>
  <script src="{{ asset('js/hero-section.js') }}" defer></script>
  <script src="{{ asset('js/welcome-modal.js') }}" defer></script>
  @stack('scripts')
</body>

</html>