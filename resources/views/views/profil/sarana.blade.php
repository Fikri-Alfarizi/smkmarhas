@extends('layouts.frontend')

@section('title', 'Sarana & Prasarana - SMK MARHAS Margahayu')

@section('content')
<style>


    /* --- CONTENT STYLES --- */
    .sarana-section {
        padding: 80px 64px;
        background: #fff;
    }

    /* --- FACILITIES GRID (MATCHING FASILITAS.BLADE.PHP) --- */
    .facilities-grid-4 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 50px;
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
    .sarana-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 20px;
        overflow-y: auto;
    }

    .sarana-modal.active {
        display: flex;
    }

    .modal-content-sarana {
        background: white;
        border-radius: 25px;
        max-width: 900px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        animation: slideUp 0.3s ease;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-close-sarana {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 45px;
        height: 45px;
        background: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        z-index: 10;
        /* box-shadow: 0 4px 15px rgba(0,0,0,0.2); */
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-close-sarana:hover {
        background: var(--primary-color);
        color: white;
        transform: rotate(90deg);
    }

    .modal-header-sarana {
        background: linear-gradient(135deg, var(--primary-color), #16a34a);
        padding: 50px 40px 40px;
        text-align: center;
        color: white;
        border-radius: 25px 25px 0 0;
    }

    .modal-header-sarana .sarana-icon-large {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 45px;
        color: white;
    }

    .modal-header-sarana h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .modal-body-sarana {
        padding: 40px;
    }

    .modal-section {
        margin-bottom: 35px;
    }

    .modal-section h3 {
        font-size: 22px;
        color: #1f2937;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .modal-section h3 i {
        color: var(--primary-color);
    }

    .modal-section p {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        text-align: justify;
    }

    .social-links {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 20px;
        background: #f3f4f6;
        border-radius: 12px;
        text-decoration: none;
        color: #1f2937;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }

    .social-link i {
        font-size: 20px;
    }

    .photo-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .photo-item {
        aspect-ratio: 1;
        background: #f0f0f0;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 40px;
    }

    .photo-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .info-list {
        list-style: none;
        padding: 0;
    }

    .info-list li {
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #555;
    }

    .info-list li i {
        color: var(--primary-color);
        width: 20px;
    }

    /* Responsive Modal */
    @media (max-width: 900px) {
        .modal-content-sarana {
            max-height: 95vh;
        }
        
        .modal-header-sarana {
            padding: 40px 25px 30px;
        }
        
        .modal-header-sarana .sarana-icon-large {
            width: 80px;
            height: 80px;
            font-size: 35px;
        }
        
        .modal-header-sarana h2 {
            font-size: 24px;
        }
        
        .modal-body-sarana {
            padding: 25px;
        }
        
        .photo-gallery {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        
        .social-links {
            flex-direction: column;
        }
        
        .social-link {
            width: 100%;
            justify-content: center;
        }
    }

    .sarana-card i {
        font-size: 50px;
        color: white;
        margin-bottom: 20px;
        display: block;
    }

    .sarana-card h3 {
        font-size: 18px;
        color: white;
        margin: 0;
        font-weight: 700;
    }

    /* Hide description on all screens */
    .sarana-card p {
        display: none;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) {

        
        .sarana-section { 
            padding: 40px 20px; 
        }
        
        .facilities-grid-4 { 
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .facility-box {
            padding: 25px 15px;
        }
        .facility-box i {
            font-size: 32px;
            margin-bottom: 10px;
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
        <!-- Lab. Bahasa -->
        <div class="facility-box fade-in" data-sarana="lab-bahasa">
            <i class="fas fa-language"></i>
            <h4>Lab. Bahasa</h4>
            <p>Ruang kedap suara dengan sistem audio modern untuk praktik bahasa asing.</p>
        </div>

        <!-- 5 Unit Lab. Komputer -->
        <div class="facility-box fade-in fade-in-delay-1" data-sarana="lab-komputer">
            <i class="fas fa-laptop-code"></i>
            <h4>5 Unit Lab. Komputer</h4>
            <p>Laboratorium khusus dengan spesifikasi tinggi untuk tiap kompetensi keahlian.</p>
        </div>

        <!-- Gor Olah Raga -->
        <div class="facility-box fade-in fade-in-delay-2" data-sarana="gor">
            <i class="fas fa-running"></i>
            <h4>GOR Olah Raga</h4>
            <p>Gedung olahraga indoor yang luas untuk berbagai kegiatan siswa.</p>
        </div>

        <!-- Kampus I-II -->
        <div class="facility-box fade-in fade-in-delay-3" data-sarana="kampus">
            <i class="fas fa-map-marked-alt"></i>
            <h4>Kampus I - II</h4>
            <p>Area sekolah yang luas terbagi dalam dua lokasi strategis yang terintegrasi.</p>
        </div>

        <!-- Perpus -->
        <div class="facility-box fade-in" data-sarana="perpustakaan">
            <i class="fas fa-book"></i>
            <h4>Perpustakaan</h4>
            <p>Pusat literasi dengan koleksi buku fisik dan akses e-book yang lengkap.</p>
        </div>

        <!-- WiFi -->
        <div class="facility-box fade-in fade-in-delay-1" data-sarana="wifi">
            <i class="fas fa-wifi"></i>
            <h4>WiFi Area</h4>
            <p>Akses internet nirkabel berkecepatan tinggi di seluruh area lingkungan sekolah.</p>
        </div>

        <!-- CCTV -->
        <div class="facility-box fade-in fade-in-delay-2" data-sarana="cctv">
            <i class="fas fa-video"></i>
            <h4>CCTV 24 Jam</h4>
            <p>Sistem keamanan kamera pengawas di setiap sudut untuk menjamin keamanan.</p>
        </div>

        <!-- Sistem Absensi Digital -->
        <div class="facility-box fade-in fade-in-delay-3" data-sarana="absensi">
            <i class="fas fa-fingerprint"></i>
            <h4>Absensi Digital</h4>
            <p>Sistem kehadiran otomatis untuk guru dan siswa yang terintegrasi database.</p>
        </div>
    </div>
</section>

<!-- Modal for Sarana Details -->
<div class="sarana-modal" id="saranaModal">
    <div class="modal-content-sarana">
        <button class="modal-close-sarana" onclick="closeSaranaModal()">&times;</button>
        
        <div class="modal-header-sarana">
            <div class="sarana-icon-large" id="modalIconLarge">
                <i class="fas fa-language"></i>
            </div>
            <h2 id="modalTitle">Nama Fasilitas</h2>
        </div>
        
        <div class="modal-body-sarana">
            <!-- Deskripsi -->
            <div class="modal-section">
                <h3><i class="fas fa-info-circle"></i> Tentang</h3>
                <p id="modalDeskripsi">Deskripsi lengkap fasilitas akan muncul di sini.</p>
            </div>

            <!-- Spesifikasi -->
            <div class="modal-section">
                <h3><i class="fas fa-list-check"></i> Spesifikasi</h3>
                <ul class="info-list" id="modalSpecs">
                    <!-- Will be populated by JavaScript -->
                </ul>
            </div>

            <!-- Kontak -->
            <div class="modal-section">
                <h3><i class="fas fa-phone-alt"></i> Kontak & Informasi</h3>
                <div class="social-links" id="modalKontak">
                    <!-- Will be populated by JavaScript -->
                </div>
            </div>

            <!-- Galeri Foto -->
            <div class="modal-section">
                <h3><i class="fas fa-images"></i> Galeri Foto</h3>
                <div class="photo-gallery" id="modalGallery">
                    <!-- Will be populated by JavaScript -->
                </div>
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

    // Sarana Data
    const saranaData = {
        'lab-bahasa': {
            nama: 'Laboratorium Bahasa',
            icon: 'fas fa-language',
            deskripsi: 'Laboratorium Bahasa SMK MARHAS dilengkapi dengan teknologi audio terkini yang memungkinkan siswa untuk belajar bahasa asing dengan metode yang interaktif dan efektif. Ruangan kedap suara memastikan konsentrasi maksimal dalam pembelajaran. Sistem audio digital memungkinkan guru untuk berkomunikasi langsung dengan setiap siswa secara individual atau berkelompok. Fasilitas ini mendukung pembelajaran bahasa Inggris, Jepang, dan bahasa asing lainnya sesuai kebutuhan kurikulum. Dengan kapasitas 40 siswa per sesi, lab bahasa menjadi pusat pembelajaran komunikasi yang modern dan nyaman.',
            spesifikasi: [
                'Headset Audio Premium untuk setiap siswa',
                'Sistem Kontrol Guru Digital',
                'Ruang Kedap Suara Akustik',
                'Software Pembelajaran Bahasa Interaktif',
                'Kapasitas 40 Siswa per Sesi',
                'AC & Pencahayaan Optimal'
            ],
            kontak: {
                email: 'mailto:labahasa@smkmarhas.sch.id',
                phone: 'tel:+622254109261'
            },
            photos: 6
        },
        'lab-komputer': {
            nama: '5 Unit Laboratorium Komputer',
            icon: 'fas fa-network-wired',
            deskripsi: 'SMK MARHAS memiliki 5 laboratorium komputer yang masing-masing dirancang khusus untuk mendukung kompetensi keahlian yang berbeda. Setiap lab dilengkapi dengan komputer spesifikasi tinggi yang mampu menjalankan software profesional seperti Adobe Creative Suite, AutoCAD, dan berbagai IDE untuk programming. Koneksi internet dedicated 100 Mbps memastikan akses cepat ke sumber belajar online. Ruangan ber-AC dengan kursi ergonomis menciptakan lingkungan belajar yang nyaman untuk sesi praktikum yang panjang. Total terdapat lebih dari 200 unit komputer yang siap digunakan untuk mendukung pembelajaran berbasis teknologi.',
            spesifikasi: [
                'PC High-End (Intel i7/Ryzen 7, RAM 16GB, SSD 512GB)',
                'Monitor LED 24 inch Full HD',
                'Koneksi Internet Dedicated 100 Mbps',
                'Software Lisensi Original (Adobe, AutoCAD, JetBrains)',
                'Full AC & Ergonomic Chair',
                'Proyektor Smart untuk Presentasi',
                'Total 200+ Unit Komputer'
            ],
            kontak: {
                email: 'mailto:labkom@smkmarhas.sch.id',
                phone: 'tel:+622254109262'
            },
            photos: 6
        },
        'gor': {
            nama: 'Gedung Olahraga (GOR)',
            icon: 'fas fa-volleyball-ball',
            deskripsi: 'Gedung Olahraga SMK MARHAS menyediakan fasilitas indoor yang luas untuk berbagai aktivitas olahraga dan kegiatan ekstrakurikuler. Dengan luas lebih dari 500 m², GOR kami dapat menampung berbagai jenis olahraga seperti futsal, basket, voli, dan badminton. Fasilitas ini juga digunakan untuk kegiatan upacara, seminar, dan acara sekolah lainnya. Lantai berkualitas tinggi dengan sistem drainase yang baik memastikan keamanan dan kenyamanan siswa saat beraktivitas. Tribun penonton dengan kapasitas 200 orang membuat GOR ini ideal untuk pertandingan dan kompetisi.',
            spesifikasi: [
                'Luas Area 500+ m²',
                'Lapangan Futsal Standar',
                'Ring Basket Profesional',
                'Net Voli & Badminton',
                'Tribun Penonton Kapasitas 200 Orang',
                'Ruang Ganti & Toilet Terpisah',
                'Sistem Ventilasi & Pencahayaan Optimal',
                'Sound System untuk Event'
            ],
            kontak: {
                email: 'mailto:gor@smkmarhas.sch.id',
                phone: 'tel:+622254109263'
            },
            photos: 6
        },
        'kampus': {
            nama: 'Kampus I & Kampus II',
            icon: 'fas fa-school',
            deskripsi: 'SMK MARHAS memiliki dua lokasi kampus yang strategis dan terintegrasi dengan baik. Kampus I berlokasi di area utama yang mudah diakses dengan transportasi umum, sementara Kampus II menyediakan fasilitas tambahan untuk praktikum dan workshop. Kedua kampus terhubung dengan sistem transportasi internal yang memudahkan mobilitas siswa dan guru. Total luas lahan mencapai lebih dari 2 hektar dengan berbagai fasilitas pendukung seperti kantin, mushola, parkir, dan area hijau yang asri. Lingkungan belajar yang kondusif dengan tata ruang yang modern membuat proses pembelajaran menjadi lebih efektif dan menyenangkan.',
            spesifikasi: [
                'Total Luas Lahan 2+ Hektar',
                'Transportasi Antar Kampus',
                'Akses Mudah Transportasi Umum',
                'Area Parkir Luas untuk Motor & Mobil',
                'Kantin & Koperasi Siswa',
                'Mushola Nyaman & Bersih',
                'Taman & Area Hijau',
                'Security 24 Jam'
            ],
            kontak: {
                email: 'mailto:info@smkmarhas.sch.id',
                phone: 'tel:+622254109260'
            },
            photos: 6
        },
        'perpustakaan': {
            nama: 'Perpustakaan Digital',
            icon: 'fas fa-book-open',
            deskripsi: 'Perpustakaan SMK MARHAS merupakan pusat literasi yang modern dengan koleksi lebih dari 10.000 buku fisik dan akses ke ribuan e-book dan jurnal digital. Ruang baca yang nyaman dengan desain minimalis modern menciptakan atmosfer yang kondusif untuk belajar. Sistem katalog digital memudahkan pencarian buku, dan layanan peminjaman menggunakan sistem barcode yang efisien. Perpustakaan juga menyediakan area diskusi kelompok dan ruang baca individu yang tenang. Dengan jam operasional yang panjang dan staf yang ramah, perpustakaan menjadi tempat favorit siswa untuk belajar dan mengerjakan tugas.',
            spesifikasi: [
                'Koleksi 10.000+ Buku Fisik',
                'Akses E-Book & Jurnal Digital',
                'Sistem Katalog Digital',
                'Ruang Baca Nyaman (AC)',
                'Area Diskusi Kelompok',
                'Komputer untuk Akses Digital',
                'Layanan Peminjaman Barcode',
                'WiFi Gratis'
            ],
            kontak: {
                email: 'mailto:perpus@smkmarhas.sch.id',
                phone: 'tel:+622254109264'
            },
            photos: 6
        },
        'wifi': {
            nama: 'WiFi Area Sekolah',
            icon: 'fas fa-wifi',
            deskripsi: 'Seluruh area SMK MARHAS dilengkapi dengan jaringan WiFi berkecepatan tinggi yang dapat diakses oleh siswa dan guru. Dengan bandwidth total 500 Mbps dan sistem load balancing, koneksi internet tetap stabil meskipun digunakan oleh ratusan pengguna secara bersamaan. Sistem keamanan jaringan yang ketat memastikan akses internet yang aman dan terfilter sesuai dengan kebutuhan pendidikan. Hotspot tersebar di seluruh area termasuk kelas, perpustakaan, kantin, dan area outdoor. Siswa dapat menggunakan WiFi untuk mengakses materi pembelajaran online, mengerjakan tugas, dan berkomunikasi dengan guru.',
            spesifikasi: [
                'Bandwidth Total 500 Mbps',
                'Coverage Seluruh Area Sekolah',
                'Sistem Load Balancing',
                'Keamanan Jaringan Terenkripsi',
                'Content Filtering untuk Pendidikan',
                'Hotspot di Kelas, Perpustakaan, Kantin',
                'Support untuk 500+ Device Bersamaan',
                'Monitoring 24/7'
            ],
            kontak: {
                email: 'mailto:it@smkmarhas.sch.id',
                phone: 'tel:+622254109265'
            },
            photos: 6
        },
        'cctv': {
            nama: 'CCTV Monitoring 24 Jam',
            icon: 'fas fa-video',
            deskripsi: 'Sistem keamanan CCTV SMK MARHAS menggunakan teknologi IP Camera dengan resolusi Full HD yang dipasang di lebih dari 100 titik strategis di seluruh area sekolah. Rekaman tersimpan secara otomatis selama 30 hari dan dapat diakses kapan saja untuk keperluan investigasi. Ruang kontrol keamanan beroperasi 24/7 dengan petugas terlatih yang memantau seluruh aktivitas. Sistem ini terintegrasi dengan alarm dan notifikasi otomatis untuk meningkatkan respons terhadap insiden keamanan. Dengan teknologi night vision dan weather-proof, CCTV tetap berfungsi optimal dalam berbagai kondisi.',
            spesifikasi: [
                '100+ Kamera IP Full HD',
                'Rekaman Tersimpan 30 Hari',
                'Ruang Kontrol 24/7',
                'Night Vision Technology',
                'Integrasi dengan Sistem Alarm',
                'Notifikasi Real-time',
                'Backup Power untuk Kontinuitas',
                'Weather-proof Cameras'
            ],
            kontak: {
                email: 'mailto:security@smkmarhas.sch.id',
                phone: 'tel:+622254109266'
            },
            photos: 6
        },
        'absensi': {
            nama: 'Sistem Absensi Digital',
            icon: 'fas fa-fingerprint',
            deskripsi: 'SMK MARHAS menggunakan sistem absensi digital berbasis fingerprint dan kartu RFID yang terintegrasi dengan database sekolah. Sistem ini mencatat kehadiran siswa dan guru secara real-time dan otomatis mengirimkan notifikasi kepada orang tua melalui SMS atau aplikasi mobile. Data kehadiran dapat diakses kapan saja oleh guru dan wali kelas untuk monitoring. Laporan kehadiran bulanan dihasilkan secara otomatis untuk keperluan administrasi dan evaluasi. Dengan sistem yang akurat dan efisien, proses absensi menjadi lebih cepat dan transparan.',
            spesifikasi: [
                'Fingerprint & RFID Card Reader',
                'Integrasi Database Real-time',
                'Notifikasi Otomatis ke Orang Tua',
                'Dashboard Monitoring untuk Guru',
                'Laporan Kehadiran Otomatis',
                'Mobile App untuk Orang Tua',
                'Backup Data Cloud',
                'Multi-device Support'
            ],
            kontak: {
                email: 'mailto:admin@smkmarhas.sch.id',
                phone: 'tel:+622254109267'
            },
            photos: 6
        }
    };

    // Open Modal
    function openSaranaModal(saranaId) {
        const data = saranaData[saranaId];
        if (!data) return;

        // Set header (Dynamic Title)
        document.getElementById('modalIconLarge').innerHTML = `<i class="${data.icon}"></i>`;
        document.getElementById('modalTitle').textContent = data.nama;
        
        // GENERIC CONTENT (Lorem Ipsum)
        const loremIpsumText = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.`;

        // Set deskripsi
        document.getElementById('modalDeskripsi').innerHTML = loremIpsumText;

        // Set spesifikasi list (Generic)
        const specsList = document.getElementById('modalSpecs');
        specsList.innerHTML = '';
        const loremSpecs = [
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
            'Sed do eiusmod tempor incididunt',
            'Ut labore et dolore magna aliqua',
            'Ut enim ad minim veniam',
            'Quis nostrud exercitation ullamco'
        ];
        
        loremSpecs.forEach(spec => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-check-circle"></i> ${spec}`;
            specsList.appendChild(li);
        });

        // Set kontak (Generic)
        const kontakContainer = document.getElementById('modalKontak');
        kontakContainer.innerHTML = '';
        // Using generic contact info or keeping specific if available? 
        // Request said "satu saja untuk semua", implied fully generic content.
        kontakContainer.innerHTML += `<a href="#" class="social-link"><i class="fas fa-envelope"></i> email@loremipsum.com</a>`;
        kontakContainer.innerHTML += `<a href="#" class="social-link"><i class="fas fa-phone"></i> +62 123 4567 890</a>`;


        // Set photo gallery (Generic placeholder count)
        const gallery = document.getElementById('modalGallery');
        gallery.innerHTML = '';
        for (let i = 0; i < 6; i++) {
            gallery.innerHTML += `<div class="photo-item"><i class="fas fa-image"></i></div>`;
        }

        // Show modal
        document.getElementById('saranaModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close Modal
    function closeSaranaModal() {
        document.getElementById('saranaModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Add click event to sarana cards
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.facility-box').forEach(card => {
            card.addEventListener('click', function() {
                const saranaId = this.getAttribute('data-sarana');
                openSaranaModal(saranaId);
            });
        });

        // Close modal when clicking outside
        document.getElementById('saranaModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSaranaModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSaranaModal();
            }
        });
    });
</script>
@endpush