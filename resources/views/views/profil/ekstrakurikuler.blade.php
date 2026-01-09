@extends('layouts.frontend')

@section('title', 'Ekstrakurikuler - SMK MARHAS Margahayu')

@section('content')
<style>


    /* --- EKSTRAKULIKULER GRID --- */
    .ekstra-section {
        padding: 80px 64px;
        background: #fff;
    }

    .ekstra-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 50px;
    }

    .ekstra-card {
        background: #fff;
        border-radius: 20px;
        padding: 35px 25px;
        text-align: center;
        border: 1px solid #f0f0f0;
        transition: all 0.3s ease;
        /* box-shadow: 0 5px 15px rgba(0,0,0,0.02); */
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    /* Hover Overlay - Slide from Bottom */
    .ekstra-card::after {
        content: 'Lihat Detail';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
        background: rgba(21, 128, 61, 0.95);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 700;
        transition: height 0.3s ease;
        z-index: 2;
    }

    .ekstra-card:hover::after {
        height: 100%;
    }

    .ekstra-card:hover {
        transform: translateY(-10px);
        border-color: var(--primary-color);
        /* box-shadow: 0 15px 30px rgba(21, 128, 61, 0.1); */
    }

    /* Modal Styles */
    .ekstra-modal {
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

    .ekstra-modal.active {
        display: flex;
    }

    .modal-content-ekstra {
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

    .modal-close-ekstra {
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

    .modal-close-ekstra:hover {
        background: var(--primary-color);
        color: white;
        transform: rotate(90deg);
    }

    .modal-header-ekstra {
        background: linear-gradient(135deg, var(--primary-color), #16a34a);
        padding: 50px 40px 40px;
        text-align: center;
        color: white;
        border-radius: 25px 25px 0 0;
    }

    .modal-header-ekstra .ekstra-icon-large {
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

    .modal-header-ekstra h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .modal-header-ekstra .tag-kategori {
        background: rgba(255, 255, 255, 0.25);
        color: white;
    }

    .modal-body-ekstra {
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
        .modal-content-ekstra {
            max-height: 95vh;
        }
        
        .modal-header-ekstra {
            padding: 40px 25px 30px;
        }
        
        .modal-header-ekstra .ekstra-icon-large {
            width: 80px;
            height: 80px;
            font-size: 35px;
        }
        
        .modal-header-ekstra h2 {
            font-size: 24px;
        }
        
        .modal-body-ekstra {
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

    .ekstra-logo {
        width: 100%;
        max-width: 200px;
        aspect-ratio: 1/1;
        object-fit: contain;
        border-radius: 15px;
        display: block;
        margin: 0 auto 20px;
        /* background: var(--green-lightest); */
        /* padding: 10px; */
    }

    .ekstra-card:hover .ekstra-logo {
        /* No hover effect needed for image typically, or add scale */
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .ekstra-card h3 {
        font-size: 19px;
        color: #1f2937;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .ekstra-card p {
        font-size: 14px;
        color: #6b7280;
        line-height: 1.6;
        display: none;
    }

    .tag-kategori {
        display: inline-block;
        padding: 4px 12px;
        background: #f3f4f6;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        color: #4b5563;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) {

        
        .ekstra-section { 
            padding: 40px 20px; 
        }
        
        .ekstra-grid { 
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .ekstra-card {
            padding: 25px 15px;
        }
        
        .ekstra-icon {
            width: 70px;
            height: 70px;
            font-size: 28px;
        }
        
        .ekstra-card h3 {
            font-size: 15px;
            margin-bottom: 0;
        }
        
        .ekstra-card p {
            display: none;
        }
        
        .tag-kategori {
            font-size: 9px;
            padding: 3px 8px;
        }
    }
</style>

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Ekstrakurikuler', 'url' => null],
    ],
    'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Ekstrakurikuler'
])

<section class="ekstra-section">
    <div class="fade-in" style="text-align: center; max-width: 700px; margin: 0 auto;">
        <span class="section-badge">PENGEMBANGAN DIRI</span>
        <h2 style="font-size: 32px; color: #1f2937; margin-top: 10px;">EKSTRAKURIKULER</h2>
        <p style="color: #666; margin-top: 15px;">Wadah bagi siswa untuk mengeksplorasi bakat, mengasah kepemimpinan, dan meraih prestasi di luar bidang akademik.</p>
    </div>

    <div class="ekstra-grid">
        <div class="ekstra-card fade-in" data-ekstra="osis">
            <span class="tag-kategori">Organisasi</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="OSIS">
            <h3>OSIS</h3>
            <p>Pusat organisasi siswa yang mengelola berbagai kegiatan sekolah dan kepemimpinan.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="pramuka">
            <span class="tag-kategori">Wajib / Karakter</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Pramuka">
            <h3>Pramuka</h3>
            <p>Membentuk karakter disiplin, kemandirian, dan cinta alam melalui kegiatan kepanduan.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="paskibra">
            <span class="tag-kategori">Karakter</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Paskibra">
            <h3>Paskibra</h3>
            <p>Pelatihan baris-berbaris dan penanaman jiwa nasionalisme yang kuat.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="taekwondo">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Taekwondo">
            <h3>Taekwondo</h3>
            <p>Seni bela diri asal Korea untuk melatih fisik, mental, dan pertahanan diri.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="basket">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Basketball Club">
            <h3>Basketball Club</h3>
            <p>Tim basket SMK MARHAS yang aktif mengikuti kompetisi antar pelajar.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="futsal">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Futsal">
            <h3>Futsal Putra/Putri</h3>
            <p>Ekstrakurikuler terfavorit yang fokus pada teknik bola dan kerjasama tim.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="badminton">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Badminton">
            <h3>Badminton</h3>
            <p>Wadah bagi pecinta bulutangkis untuk mengasah teknik smes dan kelincahan.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="pencaksilat">
            <span class="tag-kategori">Bela Diri</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Pencak Silat">
            <h3>Pencak Silat</h3>
            <p>Melestarikan budaya bangsa melalui seni bela diri tradisional Indonesia.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="voli">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Bola Voli">
            <h3>Bola Voli</h3>
            <p>Latihan rutin untuk membangun kekuatan fisik dan strategi permainan voli.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="english">
            <span class="tag-kategori">Akademik</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="English Club">
            <h3>English Club</h3>
            <p>Mengasah kemampuan berbicara, debat, dan storytelling dalam bahasa Inggris.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="smart">
            <span class="tag-kategori">Sains/Teknologi</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="SMART">
            <h3>SMART</h3>
            <p>Wadah kreativitas siswa dalam bidang sains, penelitian, dan inovasi.</p>
        </div>

        <div class="ekstra-card fade-in" data-ekstra="mio">
            <span class="tag-kategori">Kesenian</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Mio">
            <h3>Mio</h3>
            <p>Ekstrakurikuler bidang musik dan kesenian untuk menyalurkan bakat seni siswa.</p>
        </div>
    </div>
</section>

<!-- Modal for Ekstrakurikuler Details -->
<div class="ekstra-modal" id="ekstraModal">
    <div class="modal-content-ekstra">
        <button class="modal-close-ekstra" onclick="closeEkstraModal()">&times;</button>
        
        <div class="modal-header-ekstra">
            <div class="ekstra-icon-large" id="modalIconLarge">
                <i class="fas fa-users"></i>
            </div>
            <span class="tag-kategori" id="modalKategori">Kategori</span>
            <h2 id="modalTitle">Nama Ekstrakurikuler</h2>
        </div>
        
        <div class="modal-body-ekstra">
            <!-- Deskripsi -->
            <div class="modal-section">
                <h3><i class="fas fa-info-circle"></i> Tentang</h3>
                <p id="modalDeskripsi">Deskripsi lengkap ekstrakurikuler akan muncul di sini.</p>
            </div>

            <!-- Informasi -->
            <div class="modal-section">
                <h3><i class="fas fa-calendar-alt"></i> Informasi</h3>
                <ul class="info-list" id="modalInfo">
                    <!-- Will be populated by JavaScript -->
                </ul>
            </div>

            <!-- Social Media -->
            <div class="modal-section">
                <h3><i class="fas fa-share-alt"></i> Sosial Media</h3>
                <div class="social-links" id="modalSocial">
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

    // Ekstrakurikuler Data
    const ekstraData = {
        'osis': {
            kategori: 'Organisasi',
            nama: 'OSIS',
            image: 'placeholder_logo.png',
            deskripsi: 'Organisasi Siswa Intra Sekolah (OSIS) adalah wadah utama bagi siswa SMK MARHAS untuk mengembangkan jiwa kepemimpinan, kreativitas, dan tanggung jawab. OSIS mengelola berbagai kegiatan sekolah mulai dari acara akademik, olahraga, hingga kegiatan sosial. Melalui OSIS, siswa belajar berorganisasi, membuat keputusan bersama, dan mengimplementasikan program-program yang bermanfaat bagi seluruh warga sekolah.',
            jadwal: 'Setiap Sabtu, 14:00 - 16:00',
            pembina: 'Bapak/Ibu Pembina OSIS',
            tempat: 'Ruang OSIS',
            peserta: '30-40 Siswa Aktif',
            sosmed: {
                instagram: 'https://instagram.com/osis.smkmarhas',
                youtube: 'https://youtube.com/@osismarhas',
                email: 'mailto:osis@smkmarhas.sch.id'
            },
            photos: 6
        },
        'pramuka': {
            kategori: 'Wajib / Karakter',
            nama: 'Pramuka',
            image: 'placeholder_logo.png',
            deskripsi: 'Pramuka SMK MARHAS merupakan ekstrakurikuler wajib yang bertujuan membentuk karakter siswa melalui kegiatan kepanduan. Siswa dilatih untuk mandiri, disiplin, peduli lingkungan, dan memiliki jiwa petualang. Kegiatan meliputi PBB, pioneering, survival, hiking, dan berbagai permainan edukatif yang mengasah kerjasama tim dan problem solving.',
            jadwal: 'Setiap Jumat, 15:00 - 17:00',
            pembina: 'Kakak Pembina Pramuka',
            tempat: 'Lapangan Upacara / Alam Terbuka',
            peserta: 'Seluruh Siswa Kelas X',
            sosmed: {
                instagram: 'https://instagram.com/pramuka.marhas',
                tiktok: 'https://tiktok.com/@pramukamarhas'
            },
            photos: 6
        },
        'paskibra': {
            kategori: 'Karakter',
            nama: 'Paskibra',
            image: 'placeholder_logo.png',
            deskripsi: 'Pasukan Pengibar Bendera (Paskibra) SMK MARHAS adalah tim elite yang bertugas mengibarkan bendera merah putih pada upacara-upacara penting. Anggota Paskibra dilatih dengan disiplin tinggi dalam hal PBB, tata upacara, dan kedisiplinan. Paskibra juga menjadi representasi sekolah dalam berbagai event dan kompetisi tingkat kabupaten hingga provinsi.',
            jadwal: 'Senin & Kamis, 15:30 - 17:30',
            pembina: 'Pelatih Paskibra',
            tempat: 'Lapangan Upacara',
            peserta: '20-25 Siswa Pilihan',
            sosmed: {
                instagram: 'https://instagram.com/paskibra.marhas',
                youtube: 'https://youtube.com/@paskibramarhas'
            },
            photos: 6
        },
        'taekwondo': {
            kategori: 'Olahraga',
            nama: 'Taekwondo',
            image: 'placeholder_logo.png',
            deskripsi: 'Taekwondo SMK MARHAS mengajarkan seni bela diri asal Korea yang fokus pada tendangan, pukulan, dan pertahanan diri. Selain melatih fisik, Taekwondo juga membentuk mental, kedisiplinan, dan rasa percaya diri siswa. Tim Taekwondo sekolah rutin mengikuti kejuaraan dan telah meraih berbagai prestasi di tingkat regional.',
            jadwal: 'Selasa & Kamis, 15:00 - 17:00',
            pembina: 'Sabeum Taekwondo',
            tempat: 'GOR / Dojang',
            peserta: '25-30 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/taekwondo.marhas',
                tiktok: 'https://tiktok.com/@tkdmarhas'
            },
            photos: 6
        },
        'basket': {
            kategori: 'Olahraga',
            nama: 'Basketball Club',
            image: 'placeholder_logo.png',
            deskripsi: 'Basketball Club SMK MARHAS adalah wadah bagi siswa yang memiliki passion dalam olahraga basket. Latihan rutin meliputi teknik dasar, strategi permainan, dan physical conditioning. Tim basket sekolah aktif mengikuti kompetisi antar pelajar dan telah menjadi salah satu tim unggulan di wilayah Kabupaten Bandung.',
            jadwal: 'Rabu & Sabtu, 15:00 - 17:00',
            pembina: 'Coach Basketball',
            tempat: 'Lapangan Basket / GOR',
            peserta: '15-20 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/basket.marhas',
                youtube: 'https://youtube.com/@basketmarhas'
            },
            photos: 6
        },
        'futsal': {
            kategori: 'Olahraga',
            nama: 'Futsal Putra/Putri',
            image: 'placeholder_logo.png',
            deskripsi: 'Futsal adalah ekstrakurikuler paling favorit di SMK MARHAS. Dengan dua tim (putra dan putri), siswa dilatih teknik kontrol bola, passing, shooting, dan strategi permainan futsal. Tim futsal sekolah rutin bertanding dengan sekolah lain dan telah menorehkan berbagai prestasi di kompetisi tingkat kabupaten dan provinsi.',
            jadwal: 'Senin & Jumat, 15:30 - 17:30',
            pembina: 'Pelatih Futsal',
            tempat: 'Lapangan Futsal',
            peserta: '30-35 Siswa (Putra & Putri)',
            sosmed: {
                instagram: 'https://instagram.com/futsal.marhas',
                tiktok: 'https://tiktok.com/@futsalmarhas'
            },
            photos: 6
        },
        'badminton': {
            kategori: 'Olahraga',
            nama: 'Badminton',
            image: 'placeholder_logo.png',
            deskripsi: 'Ekstrakurikuler Badminton SMK MARHAS melatih siswa dalam teknik dasar bulutangkis seperti servis, smash, dropshot, dan footwork. Dengan fasilitas lapangan indoor yang memadai, siswa dapat berlatih dengan nyaman. Tim badminton sekolah juga aktif mengikuti turnamen dan telah mengharumkan nama sekolah di berbagai kejuaraan.',
            jadwal: 'Selasa & Kamis, 15:00 - 17:00',
            pembina: 'Pelatih Badminton',
            tempat: 'GOR Indoor',
            peserta: '20-25 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/badminton.marhas'
            },
            photos: 6
        },
        'pencaksilat': {
            kategori: 'Bela Diri',
            nama: 'Pencak Silat',
            image: 'placeholder_logo.png',
            deskripsi: 'Pencak Silat adalah seni bela diri tradisional Indonesia yang dilestarikan di SMK MARHAS. Siswa dilatih jurus-jurus pencak silat, teknik pertahanan diri, dan nilai-nilai budaya Indonesia. Ekstrakurikuler ini tidak hanya melatih fisik, tetapi juga mental dan spiritual siswa. Tim Pencak Silat sekolah rutin mengikuti kejuaraan dan menjadi kebanggaan sekolah.',
            jadwal: 'Rabu & Sabtu, 15:00 - 17:00',
            pembina: 'Pelatih Pencak Silat',
            tempat: 'GOR / Aula',
            peserta: '20-25 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/silat.marhas',
                youtube: 'https://youtube.com/@silatmarhas'
            },
            photos: 6
        },
        'voli': {
            kategori: 'Olahraga',
            nama: 'Bola Voli',
            image: 'placeholder_logo.png',
            deskripsi: 'Ekstrakurikuler Bola Voli SMK MARHAS melatih siswa dalam teknik passing, smash, blocking, dan strategi permainan voli. Dengan latihan rutin dan pembinaan yang baik, tim voli sekolah telah menjadi salah satu tim yang diperhitungkan di kompetisi antar pelajar. Kegiatan ini juga melatih kerjasama tim dan sportivitas.',
            jadwal: 'Senin & Kamis, 15:30 - 17:30',
            pembina: 'Pelatih Voli',
            tempat: 'Lapangan Voli / GOR',
            peserta: '20-25 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/voli.marhas'
            },
            photos: 6
        },
        'english': {
            kategori: 'Akademik',
            nama: 'English Club',
            image: 'placeholder_logo.png',
            deskripsi: 'English Club SMK MARHAS adalah wadah bagi siswa untuk mengasah kemampuan berbahasa Inggris melalui berbagai kegiatan menarik seperti conversation, debate, storytelling, dan drama. Siswa dilatih untuk percaya diri berbicara dalam bahasa Inggris dan mempersiapkan diri untuk kompetisi speech dan debate tingkat regional maupun nasional.',
            jadwal: 'Rabu, 15:00 - 17:00',
            pembina: 'Guru Bahasa Inggris',
            tempat: 'Lab. Bahasa',
            peserta: '15-20 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/englishclub.marhas',
                youtube: 'https://youtube.com/@englishmarhas'
            },
            photos: 6
        },
        'smart': {
            kategori: 'Sains/Teknologi',
            nama: 'SMART',
            image: 'placeholder_logo.png',
            deskripsi: 'SMART (Science, Math, and Research Team) adalah ekstrakurikuler yang fokus pada pengembangan kreativitas dan inovasi siswa di bidang sains dan teknologi. Siswa dilatih untuk melakukan penelitian, membuat karya ilmiah, dan mengikuti kompetisi sains tingkat nasional. SMART juga menjadi wadah bagi siswa yang ingin mengembangkan project berbasis teknologi.',
            jadwal: 'Kamis, 15:00 - 17:00',
            pembina: 'Guru Sains & Teknologi',
            tempat: 'Lab. Komputer / Lab. Sains',
            peserta: '15-20 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/smart.marhas',
                youtube: 'https://youtube.com/@smartmarhas'
            },
            photos: 6
        },
        'mio': {
            kategori: 'Kesenian',
            nama: 'Mio (Musik & Seni)',
            image: 'placeholder_logo.png',
            deskripsi: 'Mio adalah ekstrakurikuler yang menampung bakat seni siswa, khususnya di bidang musik dan seni pertunjukan. Siswa dapat belajar bermain alat musik, menyanyi, menari, dan berteater. Mio rutin tampil di acara-acara sekolah dan menjadi pengisi acara di berbagai event. Ekstrakurikuler ini juga mempersiapkan siswa untuk mengikuti festival seni dan kompetisi musik.',
            jadwal: 'Jumat, 15:00 - 17:00',
            pembina: 'Guru Seni & Musik',
            tempat: 'Ruang Seni / Aula',
            peserta: '20-30 Siswa',
            sosmed: {
                instagram: 'https://instagram.com/mio.marhas',
                youtube: 'https://youtube.com/@miomarhas',
                tiktok: 'https://tiktok.com/@miomarhas'
            },
            photos: 6
        }
    };

    // Open Modal
    function openEkstraModal(ekstraId) {
        const data = ekstraData[ekstraId];
        if (!data) return;

        // Set header
        const imageUrl = `{{ asset('image') }}/${data.image}`;
        document.getElementById('modalIconLarge').innerHTML = `<img src="${imageUrl}" style="width:100%; height:100%; object-fit:cover; border-radius:20px;" alt="${data.nama}">`;
        document.getElementById('modalKategori').textContent = data.kategori;
        document.getElementById('modalTitle').textContent = data.nama;
        
        // Set deskripsi
        document.getElementById('modalDeskripsi').textContent = data.deskripsi;

        // Set info list
        const infoList = document.getElementById('modalInfo');
        infoList.innerHTML = `
            <li><i class="fas fa-clock"></i> <strong>Jadwal:</strong> ${data.jadwal}</li>
            <li><i class="fas fa-user-tie"></i> <strong>Pembina:</strong> ${data.pembina}</li>
            <li><i class="fas fa-map-marker-alt"></i> <strong>Tempat:</strong> ${data.tempat}</li>
            <li><i class="fas fa-users"></i> <strong>Peserta:</strong> ${data.peserta}</li>
        `;

        // Set social media
        const socialContainer = document.getElementById('modalSocial');
        socialContainer.innerHTML = '';
        if (data.sosmed.instagram) {
            socialContainer.innerHTML += `<a href="${data.sosmed.instagram}" target="_blank" class="social-link"><i class="fab fa-instagram"></i> Instagram</a>`;
        }
        if (data.sosmed.youtube) {
            socialContainer.innerHTML += `<a href="${data.sosmed.youtube}" target="_blank" class="social-link"><i class="fab fa-youtube"></i> YouTube</a>`;
        }
        if (data.sosmed.tiktok) {
            socialContainer.innerHTML += `<a href="${data.sosmed.tiktok}" target="_blank" class="social-link"><i class="fab fa-tiktok"></i> TikTok</a>`;
        }
        if (data.sosmed.email) {
            socialContainer.innerHTML += `<a href="${data.sosmed.email}" class="social-link"><i class="fas fa-envelope"></i> Email</a>`;
        }

        // Set photo gallery
        const gallery = document.getElementById('modalGallery');
        gallery.innerHTML = '';
        for (let i = 0; i < data.photos; i++) {
            gallery.innerHTML += `<div class="photo-item"><i class="fas fa-image"></i></div>`;
        }

        // Show modal
        document.getElementById('ekstraModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close Modal
    function closeEkstraModal() {
        document.getElementById('ekstraModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Add click event to ekstra cards
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ekstra-card').forEach(card => {
            card.addEventListener('click', function() {
                const ekstraId = this.getAttribute('data-ekstra');
                openEkstraModal(ekstraId);
            });
        });

        // Close modal when clicking outside
        document.getElementById('ekstraModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeEkstraModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEkstraModal();
            }
        });
    });
</script>
@endpush