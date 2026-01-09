@extends('layouts.frontend')

@section('title', 'Detail Fasilitas - SMK MARHAS Margahayu')

@section('content')
<style>


    .fasilitas-detail-section {
        padding: 60px 64px;
        background: #fff;
    }

    .feature-item {
        display: flex;
        gap: 50px;
        margin-bottom: 80px;
        align-items: center;
    }

    .feature-item:nth-child(even) {
        flex-direction: row-reverse;
    }

    .feature-image {
        /* flex: 1; Too big (50% width) */
        width: 380px; /* Fixed width to match typical text height */
        flex-shrink: 0;
        aspect-ratio: 1 / 1; /* Make it square */
        background: #f4f4f4;
        border-radius: 35px; /* iPhone-like squircle radius */
        overflow: hidden;
        /* box-shadow: 0 20px 40px rgba(0,0,0,0.1); */
        position: relative; /* For carousel positioning */
    }

    /* Mini Carousel Styles */
    .mini-carousel-container {
        width: 100%;
        height: 100%;
        position: relative;
    }
    
    .mini-carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
    }
    
    .mini-carousel-slide.active {
        opacity: 1;
        z-index: 1;
    }

    .mini-carousel-slide i {
        font-size: 80px;
        color: var(--primary-color);
        opacity: 0.3;
    }

    .mini-indicators {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        z-index: 2;
    }

    .mini-indicator {
        width: 8px;
        height: 8px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s;
    }

    .mini-indicator.active {
        background: var(--primary-color);
        width: 24px;
        border-radius: 12px;
    }

    .feature-content {
        flex: 1;
    }

    .feature-content h2 {
        font-size: 28px;
        color: #1f2937;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .feature-content h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: var(--primary-color);
    }

    .feature-item:nth-child(even) .feature-content h2::after {
        left: auto;
        right: 0;
    }

    .feature-item:nth-child(even) .feature-content {
        text-align: right;
    }

    .spec-list {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .spec-list li {
        padding: 10px 0;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #555;
    }

    .feature-item:nth-child(even) .spec-list li {
        flex-direction: row-reverse;
    }

    .spec-list i {
        color: var(--primary-color);
    }

    /* Mobile Responsive - Stacked Layout */
    @media (max-width: 900px) {
        .fasilitas-detail-section { padding: 40px 20px; }
        
        /* Reset all layouts to column (Image Top, Text Bottom) */
        .feature-item, 
        .feature-item:nth-child(even),
        .feature-item:nth-child(1),
        .feature-item:nth-child(2),
        .feature-item:nth-child(3) {
            flex-direction: column !important;
            gap: 25px;
            margin-bottom: 60px;
        }

        /* Image full width */
        .feature-image,
        .feature-item:nth-child(1) .feature-image,
        .feature-item:nth-child(2) .feature-image,
        .feature-item:nth-child(3) .feature-image {
            width: 100%;
            height: 250px;
        }

        /* Content full width and aligned left */
        .feature-content,
        .feature-item:nth-child(1) .feature-content,
        .feature-item:nth-child(2) .feature-content,
        .feature-item:nth-child(3) .feature-content,
        .feature-item:nth-child(even) .feature-content {
            width: 100%;
            text-align: left !important;
        }

        /* Underline always on left */
        .feature-content h2::after,
        .feature-item:nth-child(even) .feature-content h2::after {
            left: 0 !important;
            right: auto !important;
        }

        /* List items always row regular */
        .spec-list li,
        .feature-item:nth-child(even) .spec-list li {
            flex-direction: row !important;
        }
    }

    .facilities-grid-4 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 40px;
    }

    .facility-box {
        background: #ffffff;
        border: 1px solid #eef2f3;
        padding: 30px 20px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        /* box-shadow: 0 4px 6px rgba(0,0,0,0.02); */
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    /* Hover Overlay */
    /* Hover Overlay - Slide up from bottom */
    .facility-box::before {
        content: 'Lihat Detail';
        position: absolute;
        bottom: -50px; /* Hidden below */
        left: 0;
        right: 0;
        height: 50px; /* Fixed height for the bar */
        background: rgba(21, 128, 61, 0.95);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 700;
        transition: bottom 0.3s ease;
        z-index: 1;
    }

    .facility-box:hover::before {
        bottom: 0; /* Slide up */
    }

    .facility-box:hover {
        transform: translateY(-10px);
        /* box-shadow: 0 10px 20px rgba(21, 128, 61, 0.3); */
    }

    .facility-box i {
        font-size: 35px;
        color: var(--primary-color);
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .facility-box h4 {
        font-size: 16px;
        color: #333;
        font-weight: 700;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }

    .facility-box p {
        font-size: 13px;
        color: #777;
        line-height: 1.5;
        transition: all 0.3s ease;
    }

    /* Modal Styles */
    .facility-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .facility-modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        border-radius: 20px;
        max-width: 1200px;
        width: 100%;
        max-height: 90vh;
        overflow: hidden;
        display: flex;
        position: relative;
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        z-index: 10;
        /* box-shadow: 0 2px 10px rgba(0,0,0,0.2); */
        transition: all 0.3s ease;
    }

    .modal-close:hover {
        background: var(--primary-color);
        color: white;
        transform: rotate(90deg);
    }

    .modal-left {
        flex: 1;
        padding: 50px;
        overflow-y: auto;
    }

    .modal-left h3 {
        font-size: 32px;
        color: #1f2937;
        margin-bottom: 10px;
    }

    .modal-left .category {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 20px;
        display: block;
    }

    .modal-left .description {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 30px;
    }

    .modal-left .spec-list {
        margin-top: 20px;
    }

    .modal-right {
        flex: 1;
        background: #f8f8f8;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 50px;
        position: relative;
    }

    .carousel-container {
        width: 100%;
        height: 400px;
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        /* box-shadow: 0 10px 30px rgba(0,0,0,0.2); */
    }

    .carousel-slide {
        display: none;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        background: #e0e0e0;
    }

    .carousel-slide.active {
        display: flex;
    }

    .carousel-slide i {
        font-size: 80px;
        color: var(--primary-color);
        opacity: 0.3;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        transition: all 0.3s ease;
        z-index: 2;
    }

    .carousel-nav:hover {
        background: var(--primary-color);
        color: white;
    }

    .carousel-prev {
        left: 10px;
    }

    .carousel-next {
        right: 10px;
    }

    .carousel-indicators {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ccc;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: var(--primary-color);
        width: 30px;
        border-radius: 6px;
    }

    /* Responsive Modal */
    @media (max-width: 900px) {
        .modal-content {
            flex-direction: column;
            max-height: 95vh;
        }
        
        .modal-left, .modal-right {
            padding: 30px;
        }
        
        .carousel-container {
            height: 250px;
        }
    }

    /* Responsive Grid - 2 Columns on Mobile */
    @media (max-width: 900px) {
        .facilities-grid-4 { 
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .facility-box {
            padding: 25px 15px;
        }
        .facility-box i {
            font-size: 32px;
        }
        .facility-box h4 {
            font-size: 14px;
            margin-bottom: 0;
        }
        .facility-box p {
            display: none;
        }
    }
</style>

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
            <div class="mini-carousel-container" id="carousel-lab">
                 <div class="mini-carousel-slide active" style="background: #f0fdf4;"><i class="fas fa-microchip"></i></div>
                 <div class="mini-carousel-slide" style="background: #dcfce7;"><i class="fas fa-laptop-code"></i></div>
                 <div class="mini-carousel-slide" style="background: #bbf7d0;"><i class="fas fa-server"></i></div>
                 <div class="mini-indicators">
                     <div class="mini-indicator active" onclick="setMiniSlide('carousel-lab', 0)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-lab', 1)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-lab', 2)"></div>
                 </div>
            </div>
        </div>
        <div class="feature-content">
            <span class="text-primary" style="font-weight: 700; font-size: 14px;">PUSAT TEKNOLOGI</span>
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
            <div class="mini-carousel-container" id="carousel-bengkel">
                 <div class="mini-carousel-slide active" style="background: #fff7ed;"><i class="fas fa-industry"></i></div>
                 <div class="mini-carousel-slide" style="background: #ffedd5;"><i class="fas fa-cogs"></i></div>
                 <div class="mini-carousel-slide" style="background: #fed7aa;"><i class="fas fa-tools"></i></div>
                 <div class="mini-indicators">
                     <div class="mini-indicator active" onclick="setMiniSlide('carousel-bengkel', 0)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-bengkel', 1)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-bengkel', 2)"></div>
                 </div>
            </div>
        </div>
        <div class="feature-content">
            <span class="text-primary" style="font-weight: 700; font-size: 14px;">TEACHING FACTORY</span>
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
            <div class="mini-carousel-container" id="carousel-kelas">
                 <div class="mini-carousel-slide active" style="background: #eff6ff;"><i class="fas fa-chalkboard-teacher"></i></div>
                 <div class="mini-carousel-slide" style="background: #dbeafe;"><i class="fas fa-project-diagram"></i></div>
                 <div class="mini-carousel-slide" style="background: #bfdbfe;"><i class="fas fa-users"></i></div>
                 <div class="mini-indicators">
                     <div class="mini-indicator active" onclick="setMiniSlide('carousel-kelas', 0)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-kelas', 1)"></div>
                     <div class="mini-indicator" onclick="setMiniSlide('carousel-kelas', 2)"></div>
                 </div>
            </div>
        </div>
        <div class="feature-content">
            <span class="text-primary" style="font-weight: 700; font-size: 14px;">COMFORT LEARNING</span>
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

<section class="fasilitas-detail-section" style="background: #fcfcfc; padding-top: 0;">
    <div class="fade-in" style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 28px; color: #1f2937;">Fasilitas <span class="text-primary">Pendukung Lainnya</span></h2>
        <div style="width: 50px; height: 3px; background: var(--primary-color); margin: 15px auto;"></div>
    </div>

    <div class="facilities-grid-4">
        <div class="facility-box fade-in" data-facility="lab-bahasa">
            <i class="fas fa-language"></i>
            <h4>Lab. Bahasa</h4>
            <p>Ruang kedap suara dengan sistem audio modern untuk praktik bahasa asing.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-1" data-facility="lab-komputer">
            <i class="fas fa-laptop-code"></i>
            <h4>5 Unit Lab. Komputer</h4>
            <p>Laboratorium khusus dengan spesifikasi tinggi untuk tiap kompetensi keahlian.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-2" data-facility="gor">
            <i class="fas fa-running"></i>
            <h4>GOR Olah Raga</h4>
            <p>Gedung olahraga indoor yang luas untuk berbagai kegiatan siswa.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-3" data-facility="kampus">
            <i class="fas fa-map-marked-alt"></i>
            <h4>Kampus I - II</h4>
            <p>Area sekolah yang luas terbagi dalam dua lokasi strategis yang terintegrasi.</p>
        </div>

        <div class="facility-box fade-in" data-facility="perpustakaan">
            <i class="fas fa-book"></i>
            <h4>Perpustakaan</h4>
            <p>Pusat literasi dengan koleksi buku fisik dan akses e-book yang lengkap.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-1" data-facility="wifi">
            <i class="fas fa-wifi"></i>
            <h4>WiFi Area</h4>
            <p>Akses internet nirkabel berkecepatan tinggi di seluruh area lingkungan sekolah.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-2" data-facility="cctv">
            <i class="fas fa-video"></i>
            <h4>CCTV 24 Jam</h4>
            <p>Sistem keamanan kamera pengawas di setiap sudut untuk menjamin keamanan.</p>
        </div>

        <div class="facility-box fade-in fade-in-delay-3" data-facility="absensi">
            <i class="fas fa-fingerprint"></i>
            <h4>Absensi Digital</h4>
            <p>Sistem kehadiran otomatis untuk guru dan siswa yang terintegrasi database.</p>
        </div>
    </div>
</section>

<!-- Modal for Facility Details -->
<div class="facility-modal" id="facilityModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">&times;</button>
        
        <div class="modal-left">
            <span class="category" id="modalCategory">KATEGORI</span>
            <h3 id="modalTitle">Judul Fasilitas</h3>
            <div class="description" id="modalDescription">
                Deskripsi lengkap fasilitas akan muncul di sini.
            </div>
            <ul class="spec-list" id="modalSpecs">
                <!-- Specs will be populated by JavaScript -->
            </ul>
        </div>
        
        <div class="modal-right">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <i class="fas fa-image"></i>
                </div>
                <div class="carousel-slide">
                    <i class="fas fa-image"></i>
                </div>
                <div class="carousel-slide">
                    <i class="fas fa-image"></i>
                </div>
                <button class="carousel-nav carousel-prev" onclick="changeSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-nav carousel-next" onclick="changeSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div class="carousel-indicators">
                <div class="indicator active" onclick="goToSlide(0)"></div>
                <div class="indicator" onclick="goToSlide(1)"></div>
                <div class="indicator" onclick="goToSlide(2)"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Intersection Observer for fade-in animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });

    // Facility Data
    const facilityData = {
        'lab-bahasa': {
            category: 'PEMBELAJARAN BAHASA',
            title: 'Laboratorium Bahasa',
            description: 'Laboratorium bahasa SMK MARHAS dilengkapi dengan teknologi audio terkini yang memungkinkan siswa untuk belajar bahasa asing dengan metode yang interaktif dan efektif. Ruangan kedap suara memastikan konsentrasi maksimal dalam pembelajaran. Sistem audio digital memungkinkan guru untuk berkomunikasi langsung dengan setiap siswa secara individual atau berkelompok. Fasilitas ini mendukung pembelajaran bahasa Inggris, Jepang, dan bahasa asing lainnya sesuai kebutuhan kurikulum.',
            specs: [
                'Headset Audio Premium untuk setiap siswa',
                'Sistem Kontrol Guru Digital',
                'Ruang Kedap Suara Akustik',
                'Software Pembelajaran Bahasa Interaktif',
                'Kapasitas 40 Siswa per Sesi'
            ]
        },
        'lab-komputer': {
            category: 'TEKNOLOGI INFORMASI',
            title: '5 Unit Laboratorium Komputer',
            description: 'SMK MARHAS memiliki 5 laboratorium komputer yang masing-masing dirancang khusus untuk mendukung kompetensi keahlian yang berbeda. Setiap lab dilengkapi dengan komputer spesifikasi tinggi yang mampu menjalankan software profesional seperti Adobe Creative Suite, AutoCAD, dan berbagai IDE untuk programming. Koneksi internet dedicated 100 Mbps memastikan akses cepat ke sumber belajar online. Ruangan ber-AC dengan kursi ergonomis menciptakan lingkungan belajar yang nyaman untuk sesi praktikum yang panjang.',
            specs: [
                'PC High-End (Intel i7/Ryzen 7, RAM 16GB, SSD 512GB)',
                'Monitor LED 24 inch Full HD',
                'Koneksi Internet Dedicated 100 Mbps',
                'Software Lisensi Original (Adobe, AutoCAD, JetBrains)',
                'Full AC & Ergonomic Chair',
                'Proyektor Smart untuk Presentasi'
            ]
        },
        'gor': {
            category: 'OLAHRAGA & KESEHATAN',
            title: 'Gedung Olahraga (GOR)',
            description: 'Gedung Olahraga SMK MARHAS menyediakan fasilitas indoor yang luas untuk berbagai aktivitas olahraga dan kegiatan ekstrakurikuler. Dengan luas lebih dari 500 m², GOR kami dapat menampung berbagai jenis olahraga seperti futsal, basket, voli, dan badminton. Fasilitas ini juga digunakan untuk kegiatan upacara, seminar, dan acara sekolah lainnya. Lantai berkualitas tinggi dengan sistem drainase yang baik memastikan keamanan dan kenyamanan siswa saat beraktivitas.',
            specs: [
                'Luas Area 500+ m²',
                'Lapangan Futsal Standar',
                'Ring Basket Profesional',
                'Net Voli & Badminton',
                'Tribun Penonton Kapasitas 200 Orang',
                'Ruang Ganti & Toilet Terpisah',
                'Sistem Ventilasi & Pencahayaan Optimal'
            ]
        },
        'kampus': {
            category: 'INFRASTRUKTUR',
            title: 'Kampus I & Kampus II',
            description: 'SMK MARHAS memiliki dua lokasi kampus yang strategis dan terintegrasi dengan baik. Kampus I berlokasi di area utama yang mudah diakses dengan transportasi umum, sementara Kampus II menyediakan fasilitas tambahan untuk praktikum dan workshop. Kedua kampus terhubung dengan sistem transportasi internal yang memudahkan mobilitas siswa dan guru. Total luas lahan mencapai lebih dari 2 hektar dengan berbagai fasilitas pendukung seperti kantin, mushola, parkir, dan area hijau yang asri.',
            specs: [
                'Total Luas Lahan 2+ Hektar',
                'Transportasi Antar Kampus',
                'Akses Mudah Transportasi Umum',
                'Area Parkir Luas untuk Motor & Mobil',
                'Kantin & Koperasi Siswa',
                'Mushola Nyaman & Bersih',
                'Taman & Area Hijau'
            ]
        },
        'perpustakaan': {
            category: 'LITERASI & INFORMASI',
            title: 'Perpustakaan Digital',
            description: 'Perpustakaan SMK MARHAS merupakan pusat literasi yang modern dengan koleksi lebih dari 10.000 buku fisik dan akses ke ribuan e-book dan jurnal digital. Ruang baca yang nyaman dengan desain minimalis modern menciptakan atmosfer yang kondusif untuk belajar. Sistem katalog digital memudahkan pencarian buku, dan layanan peminjaman menggunakan sistem barcode yang efisien. Perpustakaan juga menyediakan area diskusi kelompok dan ruang baca individu yang tenang.',
            specs: [
                'Koleksi 10.000+ Buku Fisik',
                'Akses E-Book & Jurnal Digital',
                'Sistem Katalog Digital',
                'Ruang Baca Nyaman (AC)',
                'Area Diskusi Kelompok',
                'Komputer untuk Akses Digital',
                'Layanan Peminjaman Barcode'
            ]
        },
        'wifi': {
            category: 'KONEKTIVITAS',
            title: 'WiFi Area Sekolah',
            description: 'Seluruh area SMK MARHAS dilengkapi dengan jaringan WiFi berkecepatan tinggi yang dapat diakses oleh siswa dan guru. Dengan bandwidth total 500 Mbps dan sistem load balancing, koneksi internet tetap stabil meskipun digunakan oleh ratusan pengguna secara bersamaan. Sistem keamanan jaringan yang ketat memastikan akses internet yang aman dan terfilter sesuai dengan kebutuhan pendidikan. Hotspot tersebar di seluruh area termasuk kelas, perpustakaan, kantin, dan area outdoor.',
            specs: [
                'Bandwidth Total 500 Mbps',
                'Coverage Seluruh Area Sekolah',
                'Sistem Load Balancing',
                'Keamanan Jaringan Terenkripsi',
                'Content Filtering untuk Pendidikan',
                'Hotspot di Kelas, Perpustakaan, Kantin',
                'Support untuk 500+ Device Bersamaan'
            ]
        },
        'cctv': {
            category: 'KEAMANAN',
            title: 'CCTV Monitoring 24 Jam',
            description: 'Sistem keamanan CCTV SMK MARHAS menggunakan teknologi IP Camera dengan resolusi Full HD yang dipasang di lebih dari 100 titik strategis di seluruh area sekolah. Rekaman tersimpan secara otomatis selama 30 hari dan dapat diakses kapan saja untuk keperluan investigasi. Ruang kontrol keamanan beroperasi 24/7 dengan petugas terlatih yang memantau seluruh aktivitas. Sistem ini terintegrasi dengan alarm dan notifikasi otomatis untuk meningkatkan respons terhadap insiden keamanan.',
            specs: [
                '100+ Kamera IP Full HD',
                'Rekaman Tersimpan 30 Hari',
                'Ruang Kontrol 24/7',
                'Night Vision Technology',
                'Integrasi dengan Sistem Alarm',
                'Notifikasi Real-time',
                'Backup Power untuk Kontinuitas'
            ]
        },
        'absensi': {
            category: 'ADMINISTRASI DIGITAL',
            title: 'Sistem Absensi Digital',
            description: 'SMK MARHAS menggunakan sistem absensi digital berbasis fingerprint dan kartu RFID yang terintegrasi dengan database sekolah. Sistem ini mencatat kehadiran siswa dan guru secara real-time dan otomatis mengirimkan notifikasi kepada orang tua melalui SMS atau aplikasi mobile. Data kehadiran dapat diakses kapan saja oleh guru dan wali kelas untuk monitoring. Laporan kehadiran bulanan dihasilkan secara otomatis untuk keperluan administrasi dan evaluasi.',
            specs: [
                'Fingerprint & RFID Card Reader',
                'Integrasi Database Real-time',
                'Notifikasi Otomatis ke Orang Tua',
                'Dashboard Monitoring untuk Guru',
                'Laporan Kehadiran Otomatis',
                'Mobile App untuk Orang Tua',
                'Backup Data Cloud'
            ]
        }
    };

    // Current slide index
    let currentSlide = 0;

    // Open Modal
    function openModal(facilityId) {
        const data = facilityData[facilityId];
        if (!data) return;

        // Populate modal content
        document.getElementById('modalCategory').textContent = data.category;
        document.getElementById('modalTitle').textContent = data.title;
        document.getElementById('modalDescription').textContent = data.description;

        // Populate specs
        const specsList = document.getElementById('modalSpecs');
        specsList.innerHTML = '';
        data.specs.forEach(spec => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-check-circle"></i> ${spec}`;
            specsList.appendChild(li);
        });

        // Reset carousel
        currentSlide = 0;
        updateCarousel();

        // Show modal
        document.getElementById('facilityModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close Modal
    function closeModal() {
        document.getElementById('facilityModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Change Slide
    function changeSlide(direction) {
        const slides = document.querySelectorAll('.carousel-slide');
        currentSlide += direction;
        
        if (currentSlide >= slides.length) currentSlide = 0;
        if (currentSlide < 0) currentSlide = slides.length - 1;
        
        updateCarousel();
    }

    // Go to Specific Slide
    function goToSlide(index) {
        currentSlide = index;
        updateCarousel();
    }

    // Update Carousel
    function updateCarousel() {
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        
        slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentSlide);
        });
        
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
    }

    // Add click event to facility boxes
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.facility-box').forEach(box => {
            box.addEventListener('click', function() {
                const facilityId = this.getAttribute('data-facility');
                openModal(facilityId);
            });
        });

        // Close modal when clicking outside
        document.getElementById('facilityModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    });

    // --- Mini Carousel Logic ---
    function setMiniSlide(carouselId, index) {
        const container = document.getElementById(carouselId);
        if (!container) return;

        const slides = container.querySelectorAll('.mini-carousel-slide');
        const indicators = container.querySelectorAll('.mini-indicator');

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        indicators.forEach((ind, i) => {
            ind.classList.toggle('active', i === index);
        });
    }

    // Auto Slide for Mini Carousels
    function initAutoSlide() {
        const carousels = ['carousel-lab', 'carousel-bengkel', 'carousel-kelas'];
        
        carousels.forEach(id => {
            let currentIndex = 0;
            const container = document.getElementById(id);
            if (!container) return;
            
            const slideCount = container.querySelectorAll('.mini-carousel-slide').length;
            
            // Random offset start to prevent all sliding at exact same time
            setTimeout(() => {
                setInterval(() => {
                    // Find current active index
                    const slides = container.querySelectorAll('.mini-carousel-slide');
                    let activeIndex = 0;
                    slides.forEach((slide, i) => {
                        if (slide.classList.contains('active')) activeIndex = i;
                    });
                    
                    const nextIndex = (activeIndex + 1) % slideCount;
                    setMiniSlide(id, nextIndex);
                }, 4000); // 4 seconds interval
            }, Math.random() * 2000);
        });
    }
    
    // Start auto slide
    window.addEventListener('load', initAutoSlide);
</script>
@endpush