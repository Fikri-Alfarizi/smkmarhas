@extends('layouts.frontend')

@section('title', 'Sarana & Prasarana - SMK MARHAS Margahayu')

@section('content')

    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Profil', 'url' => null],
            ['label' => 'Sarana & Prasarana', 'url' => null],
        ],
        'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Sarana & Prasarana'
    ])

    <section class="sarana-section">
        <div class="fade-in" style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
            <span class="section-badge">FASILITAS SEKOLAH</span>
            <h2 style="font-size: 32px; color: #1f2937; margin-top: 10px;">Fasilitas Sarana & Prasarana</h2>
            <p style="color: #666; margin-top: 15px;">SMK MARHAS menyediakan berbagai fasilitas lengkap untuk menunjang kegiatan belajar mengajar dan pengembangan diri siswa.</p>
        </div>

        <div class="facilities-grid-4">
            <a href="{{ route('views.sarana.detail', 'lab-bahasa') }}" class="facility-box fade-in">
                <i class="fas fa-language"></i>
                <h4>Lab. Bahasa</h4>
                <p>Ruang kedap suara dengan sistem audio modern untuk praktik bahasa asing.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'lab-komputer') }}" class="facility-box fade-in fade-in-delay-1">
                <i class="fas fa-laptop-code"></i>
                <h4>5 Unit Lab. Komputer</h4>
                <p>Laboratorium khusus dengan spesifikasi tinggi untuk tiap kompetensi keahlian.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'gor') }}" class="facility-box fade-in fade-in-delay-2">
                <i class="fas fa-running"></i>
                <h4>GOR Olah Raga</h4>
                <p>Gedung olahraga indoor yang luas untuk berbagai kegiatan siswa.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'kampus') }}" class="facility-box fade-in fade-in-delay-3">
                <i class="fas fa-map-marked-alt"></i>
                <h4>Kampus I - II</h4>
                <p>Area sekolah yang luas terbagi dalam dua lokasi strategis yang terintegrasi.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'perpustakaan') }}" class="facility-box fade-in">
                <i class="fas fa-book"></i>
                <h4>Perpustakaan</h4>
                <p>Pusat literasi dengan koleksi buku fisik dan akses e-book yang lengkap.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'wifi') }}" class="facility-box fade-in fade-in-delay-1">
                <i class="fas fa-wifi"></i>
                <h4>WiFi Area</h4>
                <p>Akses internet nirkabel berkecepatan tinggi di seluruh area lingkungan sekolah.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'cctv') }}" class="facility-box fade-in fade-in-delay-2">
                <i class="fas fa-video"></i>
                <h4>CCTV 24 Jam</h4>
                <p>Sistem keamanan kamera pengawas di setiap sudut untuk menjamin keamanan.</p>
            </a>

            <a href="{{ route('views.sarana.detail', 'absensi') }}" class="facility-box fade-in fade-in-delay-3">
                <i class="fas fa-fingerprint"></i>
                <h4>Absensi Digital</h4>
                <p>Sistem kehadiran otomatis untuk guru dan siswa yang terintegrasi database.</p>
            </a>
        </div>
    </section>
@endsection