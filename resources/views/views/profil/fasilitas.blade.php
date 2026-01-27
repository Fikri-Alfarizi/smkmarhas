@extends('layouts.frontend')

@section('title', 'Detail Fasilitas - SMK MARHAS Margahayu')

@section('content')

    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Profil', 'url' => null],
            ['label' => 'Fasilitas Detail', 'url' => null],
        ],
        'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Fasilitas Detail'
    ])

    <section class="fasilitas-detail-section">
        <div class="feature-item fade-in">
            <div class="feature-image">
                <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                    1280x1280px
                </div>
            </div>
            <div class="feature-content">
                <span class="text-primary" style="font-weight: 700; font-size: 14px; letter-spacing: 0.5px;">PUSAT TEKNOLOGI</span>
                <h2>Laboratorium Komputer Modern</h2>
                <p>SMK MARHAS menyediakan lebih dari 5 laboratorium komputer dengan spesifikasi tinggi untuk menunjang kebutuhan kurikulum berbasis industri 4.0.</p>
                <ul class="spec-list">
                    <li><i class="fas fa-check-circle"></i> PC High-End (i7/Ryzen 7, RAM 16GB, SSD)</li>
                    <li><i class="fas fa-check-circle"></i> Koneksi Dedicated Internet 100 Mbps</li>
                    <li><i class="fas fa-check-circle"></i> Full AC & Ergonimic Chair</li>
                    <li><i class="fas fa-check-circle"></i> Software Lisensi Original (Adobe, AutoCAD, JetBrains)</li>
                </ul>    
            </div>
        </div>

        <div class="feature-item fade-in">
            <div class="feature-image">
                <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                    1280x1280px
                </div>
            </div>
            <div class="feature-content">
                <span class="text-primary" style="font-weight: 700; font-size: 14px; letter-spacing: 0.5px;">TEACHING FACTORY</span>
                <h2>Bengkel Standar Industri (TEFA)</h2>
                <p>Bengkel mesin dan workshop kami telah mengadopsi standar industri manufaktur untuk memberikan pengalaman kerja nyata kepada siswa.</p>
                <ul class="spec-list">
                    <li><i class="fas fa-check-circle"></i> Mesin Bubut & Frais Presisi</li>
                    <li><i class="fas fa-check-circle"></i> CNC Milling & Lathe Simulation</li>
                    <li><i class="fas fa-check-circle"></i> Alat Ukur Digital (Micrometer, Vernier Caliper)</li>
                    <li><i class="fas fa-check-circle"></i> Area Kerja Standar K3 (Keselamatan Kerja)</li>
                </ul>
            </div>
        </div>

        <div class="feature-item fade-in">
            <div class="feature-image">
                <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                    1280x1280px
                </div>
            </div>
            <div class="feature-content">
                <span class="text-primary" style="font-weight: 700; font-size: 14px; letter-spacing: 0.5px;">COMFORT LEARNING</span>
                <h2>Ruang Kelas Multimedia</h2>
                <p>Ruang kelas yang nyaman didesain untuk memfasilitasi metode pembelajaran aktif (active learning) menggunakan perangkat teknologi terbaru.</p>
                <ul class="spec-list">
                    <li><i class="fas fa-check-circle"></i> Smart Projector & Audio System</li>
                    <li><i class="fas fa-check-circle"></i> Pencahayaan & Sirkulasi Udara Optimal</li>
                    <li><i class="fas fa-check-circle"></i> CCTV Monitoring Keamanan</li>
                    <li><i class="fas fa-check-circle"></i> Akses Wi-Fi Area Sekolah</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="fasilitas-detail-section" style="background: #fbfbfb; padding-top: 20px;">
        <div class="fade-in" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 28px; color: #1f2937;">Fasilitas <span class="text-primary">Pendukung Lainnya</span></h2>
            <div style="width: 50px; height: 4px; background: var(--primary-color); margin: 15px auto; border-radius: 2px;"></div>
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