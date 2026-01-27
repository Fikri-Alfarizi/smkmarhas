<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('views.beranda');
    }

    public function profilSekolah()
    {
        return view('views.profil.profilsekolah');
    }

    public function sambutan()
    {
        return view('views.profil.sambutan');
    }

    public function visimisi()
    {
        return view('views.profil.visimisi');
    }

    public function struktur()
    {
        return view('views.profil.struktur');
    }

    public function sarana()
    {
        return view('views.profil.sarana');
    }

    public function saranaDetail($slug)
    {
        $saranaData = [
            'lab-bahasa' => [
                'nama' => 'Laboratorium Bahasa',
                'icon' => 'fas fa-language',
                'deskripsi' => 'Laboratorium Bahasa SMK MARHAS dilengkapi dengan teknologi audio terkini yang memungkinkan siswa untuk belajar bahasa asing dengan metode yang interaktif dan efektif. Ruangan kedap suara memastikan konsentrasi maksimal dalam pembelajaran. Sistem audio digital memungkinkan guru untuk berkomunikasi langsung dengan setiap siswa secara individual atau berkelompok. Fasilitas ini mendukung pembelajaran bahasa Inggris, Jepang, dan bahasa asing lainnya sesuai kebutuhan kurikulum.',
                'spesifikasi' => [
                    'Headset Audio Premium untuk setiap siswa',
                    'Sistem Kontrol Guru Digital',
                    'Ruang Kedap Suara Akustik',
                    'Software Pembelajaran Bahasa Interaktif',
                    'Kapasitas 40 Siswa per Sesi',
                    'AC & Pencahayaan Optimal'
                ],
                'kontak' => [
                    'email' => 'labbahasa@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'lab-komputer' => [
                'nama' => '5 Unit Laboratorium Komputer',
                'icon' => 'fas fa-laptop-code',
                'deskripsi' => 'SMK MARHAS memiliki 5 laboratorium komputer yang masing-masing dirancang khusus untuk mendukung kompetensi keahlian yang berbeda. Setiap lab dilengkapi dengan komputer spesifikasi tinggi yang mampu menjalankan software profesional seperti Adobe Creative Suite, AutoCAD, dan berbagai IDE untuk programming. Koneksi internet dedicated 100 Mbps memastikan akses cepat ke sumber belajar online.',
                'spesifikasi' => [
                    'PC High-End (Intel i7/Ryzen 7, RAM 16GB, SSD 512GB)',
                    'Monitor LED 24 inch Full HD',
                    'Koneksi Internet Dedicated 100 Mbps',
                    'Software Lisensi Original (Adobe, AutoCAD, JetBrains)',
                    'Full AC & Ergonomic Chair',
                    'Proyektor Smart untuk Presentasi',
                    'Total 200+ Unit Komputer'
                ],
                'kontak' => [
                    'email' => 'labkom@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'gor' => [
                'nama' => 'Gedung Olahraga (GOR)',
                'icon' => 'fas fa-running',
                'deskripsi' => 'Gedung Olahraga SMK MARHAS menyediakan fasilitas indoor yang luas untuk berbagai aktivitas olahraga dan kegiatan ekstrakurikuler. Dengan luas lebih dari 500 m², GOR kami dapat menampung berbagai jenis olahraga seperti futsal, basket, voli, dan badminton. Fasilitas ini juga digunakan untuk kegiatan upacara, seminar, dan acara sekolah lainnya.',
                'spesifikasi' => [
                    'Luas Area 500+ m²',
                    'Lapangan Futsal Standar',
                    'Ring Basket Profesional',
                    'Net Voli & Badminton',
                    'Tribun Penonton Kapasitas 200 Orang',
                    'Ruang Ganti & Toilet Terpisah',
                    'Sistem Ventilasi & Pencahayaan Optimal',
                    'Sound System untuk Event'
                ],
                'kontak' => [
                    'email' => 'gor@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'kampus' => [
                'nama' => 'Kampus I & Kampus II',
                'icon' => 'fas fa-map-marked-alt',
                'deskripsi' => 'SMK MARHAS memiliki dua lokasi kampus yang strategis dan terintegrasi dengan baik. Kampus I berlokasi di area utama yang mudah diakses dengan transportasi umum, sementara Kampus II menyediakan fasilitas tambahan untuk praktikum dan workshop. Kedua kampus terhubung dengan sistem transportasi internal yang memudahkan mobilitas siswa dan guru.',
                'spesifikasi' => [
                    'Total Luas Lahan 2+ Hektar',
                    'Transportasi Antar Kampus',
                    'Akses Mudah Transportasi Umum',
                    'Area Parkir Luas untuk Motor & Mobil',
                    'Kantin & Koperasi Siswa',
                    'Mushola Nyaman & Bersih',
                    'Taman & Area Hijau',
                    'Security 24 Jam'
                ],
                'kontak' => [
                    'email' => 'info@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'perpustakaan' => [
                'nama' => 'Perpustakaan Digital',
                'icon' => 'fas fa-book',
                'deskripsi' => 'Perpustakaan SMK MARHAS merupakan pusat literasi yang modern dengan koleksi lebih dari 10.000 buku fisik dan akses ke ribuan e-book dan jurnal digital. Ruang baca yang nyaman dengan desain minimalis modern menciptakan atmosfer yang kondusif untuk belajar. Sistem katalog digital memudahkan pencarian buku.',
                'spesifikasi' => [
                    'Koleksi 10.000+ Buku Fisik',
                    'Akses E-Book & Jurnal Digital',
                    'Sistem Katalog Digital',
                    'Ruang Baca Nyaman (AC)',
                    'Area Diskusi Kelompok',
                    'Komputer untuk Akses Digital',
                    'Layanan Peminjaman Barcode',
                    'WiFi Gratis'
                ],
                'kontak' => [
                    'email' => 'perpus@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'wifi' => [
                'nama' => 'WiFi Area Sekolah',
                'icon' => 'fas fa-wifi',
                'deskripsi' => 'Seluruh area SMK MARHAS dilengkapi dengan jaringan WiFi berkecepatan tinggi yang dapat diakses oleh siswa dan guru. Dengan bandwidth total 500 Mbps dan sistem load balancing, koneksi internet tetap stabil meskipun digunakan oleh ratusan pengguna secara bersamaan.',
                'spesifikasi' => [
                    'Bandwidth Total 500 Mbps',
                    'Coverage Seluruh Area Sekolah',
                    'Sistem Load Balancing',
                    'Keamanan Jaringan Terenkripsi',
                    'Content Filtering untuk Pendidikan',
                    'Hotspot di Kelas, Perpustakaan, Kantin',
                    'Support untuk 500+ Device Bersamaan',
                    'Monitoring 24/7'
                ],
                'kontak' => [
                    'email' => 'it@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'cctv' => [
                'nama' => 'CCTV Monitoring 24 Jam',
                'icon' => 'fas fa-video',
                'deskripsi' => 'Sistem keamanan CCTV SMK MARHAS menggunakan teknologi IP Camera dengan resolusi Full HD yang dipasang di lebih dari 100 titik strategis di seluruh area sekolah. Rekaman tersimpan secara otomatis selama 30 hari dan dapat diakses kapan saja untuk keperluan investigasi.',
                'spesifikasi' => [
                    '100+ Kamera IP Full HD',
                    'Rekaman Tersimpan 30 Hari',
                    'Ruang Kontrol 24/7',
                    'Night Vision Technology',
                    'Integrasi dengan Sistem Alarm',
                    'Notifikasi Real-time',
                    'Backup Power untuk Kontinuitas',
                    'Weather-proof Cameras'
                ],
                'kontak' => [
                    'email' => 'security@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ],
            'absensi' => [
                'nama' => 'Sistem Absensi Digital',
                'icon' => 'fas fa-fingerprint',
                'deskripsi' => 'SMK MARHAS menggunakan sistem absensi digital berbasis fingerprint dan kartu RFID yang terintegrasi dengan database sekolah. Sistem ini mencatat kehadiran siswa dan guru secara real-time dan otomatis mengirimkan notifikasi kepada orang tua melalui SMS atau aplikasi mobile.',
                'spesifikasi' => [
                    'Fingerprint & RFID Card Reader',
                    'Integrasi Database Real-time',
                    'Notifikasi Otomatis ke Orang Tua',
                    'Dashboard Monitoring untuk Guru',
                    'Laporan Kehadiran Otomatis',
                    'Mobile App untuk Orang Tua',
                    'Backup Data Cloud',
                    'Multi-device Support'
                ],
                'kontak' => [
                    'email' => 'admin@smkmarhas.sch.id',
                    'phone' => '(022) 5410926'
                ],
                'photos' => 6
            ]
        ];

        if (!isset($saranaData[$slug])) {
            abort(404);
        }

        $sarana = $saranaData[$slug];
        $sarana['slug'] = $slug;

        return view('views.profil.sarana-detail', compact('sarana'));
    }

    public function fasilitas()
    {
        return view('views.profil.fasilitas');
    }

    public function ekstrakurikuler()
    {
        return view('views.profil.ekstrakurikuler');
    }

    public function ekstrakurikulerDetail($slug)
    {
        $ekstraData = [
            'osis' => [
                'kategori' => 'Organisasi',
                'nama' => 'OSIS',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Organisasi Siswa Intra Sekolah (OSIS) adalah wadah utama bagi siswa SMK MARHAS untuk mengembangkan jiwa kepemimpinan, kreativitas, dan tanggung jawab. OSIS mengelola berbagai kegiatan sekolah mulai dari acara akademik, olahraga, hingga kegiatan sosial. Melalui OSIS, siswa belajar berorganisasi, membuat keputusan bersama, dan mengimplementasikan program-program yang bermanfaat bagi seluruh warga sekolah.',
                'jadwal' => 'Setiap Sabtu, 14:00 - 16:00',
                'pembina' => 'Bapak/Ibu Pembina OSIS',
                'tempat' => 'Ruang OSIS',
                'peserta' => '30-40 Siswa Aktif',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/osis.smkmarhas',
                    'youtube' => 'https://youtube.com/@osismarhas',
                    'email' => 'mailto:osis@smkmarhas.sch.id'
                ],
                'photos' => 6
            ],
            'pramuka' => [
                'kategori' => 'Wajib / Karakter',
                'nama' => 'Pramuka',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Pramuka SMK MARHAS merupakan ekstrakurikuler wajib yang bertujuan membentuk karakter siswa melalui kegiatan kepanduan. Siswa dilatih untuk mandiri, disiplin, peduli lingkungan, dan memiliki jiwa petualang. Kegiatan meliputi PBB, pioneering, survival, hiking, dan berbagai permainan edukatif yang mengasah kerjasama tim dan problem solving.',
                'jadwal' => 'Setiap Jumat, 15:00 - 17:00',
                'pembina' => 'Kakak Pembina Pramuka',
                'tempat' => 'Lapangan Upacara / Alam Terbuka',
                'peserta' => 'Seluruh Siswa Kelas X',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/pramuka.marhas',
                    'tiktok' => 'https://tiktok.com/@pramukamarhas'
                ],
                'photos' => 6
            ],
            'paskibra' => [
                'kategori' => 'Karakter',
                'nama' => 'Paskibra',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Pasukan Pengibar Bendera (Paskibra) SMK MARHAS adalah tim elite yang bertugas mengibarkan bendera merah putih pada upacara-upacara penting. Anggota Paskibra dilatih dengan disiplin tinggi dalam hal PBB, tata upacara, dan kedisiplinan. Paskibra juga menjadi representasi sekolah dalam berbagai event dan kompetisi tingkat kabupaten hingga provinsi.',
                'jadwal' => 'Senin & Kamis, 15:30 - 17:30',
                'pembina' => 'Pelatih Paskibra',
                'tempat' => 'Lapangan Upacara',
                'peserta' => '20-25 Siswa Pilihan',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/paskibra.marhas',
                    'youtube' => 'https://youtube.com/@paskibramarhas'
                ],
                'photos' => 6
            ],
            'taekwondo' => [
                'kategori' => 'Olahraga',
                'nama' => 'Taekwondo',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Taekwondo SMK MARHAS mengajarkan seni bela diri asal Korea yang fokus pada tendangan, pukulan, dan pertahanan diri. Selain melatih fisik, Taekwondo juga membentuk mental, kedisiplinan, dan rasa percaya diri siswa. Tim Taekwondo sekolah rutin mengikuti kejuaraan dan telah meraih berbagai prestasi di tingkat regional.',
                'jadwal' => 'Selasa & Kamis, 15:00 - 17:00',
                'pembina' => 'Sabeum Taekwondo',
                'tempat' => 'GOR / Dojang',
                'peserta' => '25-30 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/taekwondo.marhas',
                    'tiktok' => 'https://tiktok.com/@tkdmarhas'
                ],
                'photos' => 6
            ],
            'basket' => [
                'kategori' => 'Olahraga',
                'nama' => 'Basketball Club',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Basketball Club SMK MARHAS adalah wadah bagi siswa yang memiliki passion dalam olahraga basket. Latihan rutin meliputi teknik dasar, strategi permainan, dan physical conditioning. Tim basket sekolah aktif mengikuti kompetisi antar pelajar dan telah menjadi salah satu tim unggulan di wilayah Kabupaten Bandung.',
                'jadwal' => 'Rabu & Sabtu, 15:00 - 17:00',
                'pembina' => 'Coach Basketball',
                'tempat' => 'Lapangan Basket / GOR',
                'peserta' => '15-20 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/basket.marhas',
                    'youtube' => 'https://youtube.com/@basketmarhas'
                ],
                'photos' => 6
            ],
            'futsal' => [
                'kategori' => 'Olahraga',
                'nama' => 'Futsal Putra/Putri',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Futsal adalah ekstrakurikuler paling favorit di SMK MARHAS. Dengan dua tim (putra dan putri), siswa dilatih teknik kontrol bola, passing, shooting, dan strategi permainan futsal. Tim futsal sekolah rutin bertanding dengan sekolah lain dan telah menorehkan berbagai prestasi di kompetisi tingkat kabupaten dan provinsi.',
                'jadwal' => 'Senin & Jumat, 15:30 - 17:30',
                'pembina' => 'Pelatih Futsal',
                'tempat' => 'Lapangan Futsal',
                'peserta' => '30-35 Siswa (Putra & Putri)',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/futsal.marhas',
                    'tiktok' => 'https://tiktok.com/@futsalmarhas'
                ],
                'photos' => 6
            ],
            'badminton' => [
                'kategori' => 'Olahraga',
                'nama' => 'Badminton',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Ekstrakurikuler Badminton SMK MARHAS melatih siswa dalam teknik dasar bulutangkis seperti servis, smash, dropshot, dan footwork. Dengan fasilitas lapangan indoor yang memadai, siswa dapat berlatih dengan nyaman. Tim badminton sekolah juga aktif mengikuti turnamen dan telah mengharumkan nama sekolah di berbagai kejuaraan.',
                'jadwal' => 'Selasa & Kamis, 15:00 - 17:00',
                'pembina' => 'Pelatih Badminton',
                'tempat' => 'GOR Indoor',
                'peserta' => '20-25 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/badminton.marhas'
                ],
                'photos' => 6
            ],
            'pencaksilat' => [
                'kategori' => 'Bela Diri',
                'nama' => 'Pencak Silat',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Pencak Silat adalah seni bela diri tradisional Indonesia yang dilestarikan di SMK MARHAS. Siswa dilatih jurus-jurus pencak silat, teknik pertahanan diri, dan nilai-nilai budaya Indonesia. Ekstrakurikuler ini tidak hanya melatih fisik, tetapi juga mental dan spiritual siswa. Tim Pencak Silat sekolah rutin mengikuti kejuaraan dan menjadi kebanggaan sekolah.',
                'jadwal' => 'Rabu & Sabtu, 15:00 - 17:00',
                'pembina' => 'Pelatih Pencak Silat',
                'tempat' => 'GOR / Aula',
                'peserta' => '20-25 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/silat.marhas',
                    'youtube' => 'https://youtube.com/@silatmarhas'
                ],
                'photos' => 6
            ],
            'voli' => [
                'kategori' => 'Olahraga',
                'nama' => 'Bola Voli',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Ekstrakurikuler Bola Voli SMK MARHAS melatih siswa dalam teknik passing, smash, blocking, dan strategi permainan voli. Dengan latihan rutin dan pembinaan yang baik, tim voli sekolah telah menjadi salah satu tim yang diperhitungkan di kompetisi antar pelajar. Kegiatan ini juga melatih kerjasama tim dan sportivitas.',
                'jadwal' => 'Senin & Kamis, 15:30 - 17:30',
                'pembina' => 'Pelatih Voli',
                'tempat' => 'Lapangan Voli / GOR',
                'peserta' => '20-25 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/voli.marhas'
                ],
                'photos' => 6
            ],
            'english' => [
                'kategori' => 'Akademik',
                'nama' => 'English Club',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'English Club SMK MARHAS adalah wadah bagi siswa untuk mengasah kemampuan berbahasa Inggris melalui berbagai kegiatan menarik seperti conversation, debate, storytelling, dan drama. Siswa dilatih untuk percaya diri berbicara dalam bahasa Inggris dan mempersiapkan diri untuk kompetisi speech dan debate tingkat regional maupun nasional.',
                'jadwal' => 'Rabu, 15:00 - 17:00',
                'pembina' => 'Guru Bahasa Inggris',
                'tempat' => 'Lab. Bahasa',
                'peserta' => '15-20 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/englishclub.marhas',
                    'youtube' => 'https://youtube.com/@englishmarhas'
                ],
                'photos' => 6
            ],
            'smart' => [
                'kategori' => 'Sains/Teknologi',
                'nama' => 'SMART',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'SMART (Science, Math, and Research Team) adalah ekstrakurikuler yang fokus pada pengembangan kreativitas dan inovasi siswa di bidang sains dan teknologi. Siswa dilatih untuk melakukan penelitian, membuat karya ilmiah, dan mengikuti kompetisi sains tingkat nasional. SMART juga menjadi wadah bagi siswa yang ingin mengembangkan project berbasis teknologi.',
                'jadwal' => 'Kamis, 15:00 - 17:00',
                'pembina' => 'Guru Sains & Teknologi',
                'tempat' => 'Lab. Komputer / Lab. Sains',
                'peserta' => '15-20 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/smart.marhas',
                    'youtube' => 'https://youtube.com/@smartmarhas'
                ],
                'photos' => 6
            ],
            'mio' => [
                'kategori' => 'Kesenian',
                'nama' => 'Mio (Musik & Seni)',
                'image' => 'placeholder_logo.png',
                'deskripsi' => 'Mio adalah ekstrakurikuler yang menampung bakat seni siswa, khususnya di bidang musik dan seni pertunjukan. Siswa dapat belajar bermain alat musik, menyanyi, menari, dan berteater. Mio rutin tampil di acara-acara sekolah dan menjadi pengisi acara di berbagai event. Ekstrakurikuler ini juga mempersiapkan siswa untuk mengikuti festival seni dan kompetisi musik.',
                'jadwal' => 'Jumat, 15:00 - 17:00',
                'pembina' => 'Guru Seni & Musik',
                'tempat' => 'Ruang Seni / Aula',
                'peserta' => '20-30 Siswa',
                'sosmed' => [
                    'instagram' => 'https://instagram.com/mio.marhas',
                    'youtube' => 'https://youtube.com/@miomarhas',
                    'tiktok' => 'https://tiktok.com/@miomarhas'
                ],
                'photos' => 6
            ]
        ];

        if (!isset($ekstraData[$slug])) {
            abort(404);
        }

        $ekstra = $ekstraData[$slug];
        $ekstra['slug'] = $slug;

        return view('views.profil.ekstrakurikuler-detail', compact('ekstra'));
    }

    public function mesin()
    {
        return view('views.kejuruan.teknikpemesinan');
    }

    public function pplg()
    {
        return view('views.kejuruan.pplg');
    }

    public function galeri()
    {
        return view('views.galeri.index');
    }

    public function registrasiAlumni()
    {
        return view('views.bkk.registrasialumni');
    }

    public function infoLowongan()
    {
        return view('views.bkk.infolowongan');
    }

    public function infoLowonganDetail($slug)
    {
        $jobs = [
            'astra-honda-motor' => [
                'title' => 'Operator Produksi (CNC Specialist)',
                'company' => 'PT. Astra Honda Motor',
                'type' => 'Full Time',
                'location' => 'Bekasi, Jawa Barat',
                'deadline' => '30 Des 2024',
                'category' => 'Teknik Pemesinan',
                'address' => 'Kawasan Industri MM2100, Jalan Irian1 Blok Jj1, Cikarang Barat, Bekasi, Jawa Barat 17530',
                'website' => 'https://www.astra-honda.com',
                'description' => 'Kami mencari lulusan SMK Teknik Pemesinan yang berdedikasi tinggi untuk bergabung sebagai Operator Produksi khusus mesin CNC. Kandidat akan bertanggung jawab dalam pengoperasian mesin produksi, memastikan kualitas output sesuai standar, dan pemeliharaan ringan mesin.',
                'qualifications' => [
                    'Lulusan SMK Jurusan Teknik Pemesinan',
                    'Usia maksimal 22 tahun',
                    'Memahami dasar pemrograman CNC (G-Code & M-Code)',
                    'Mampu membaca gambar teknik',
                    'Sehat jasmani dan tidak buta warna',
                    'Bersedia ditempatkan di Cikarang/Bekasi'
                ]
            ],
            'tech-innovate' => [
                'title' => 'Junior Web Developer',
                'company' => 'Tech Innovate Solutions',
                'type' => 'Internship / Full Time',
                'location' => 'Bandung (Remote)',
                'deadline' => '15 Jan 2025',
                'category' => 'RPL / PPLG',
                'address' => 'Jl. Dago No. 123, Coblong, Bandung, Jawa Barat 40132',
                'website' => 'https://example-tech-innovate.com',
                'description' => 'Kesempatan bagi talenta muda untuk belajar dan berkontribusi dalam pengembangan aplikasi web modern. Anda akan bekerja bersama tim senior developer dalam membangun solusi berbasis web menggunakan teknologi terkini seperti Laravel dan React.',
                'qualifications' => [
                    'Lulusan SMK RPL/PPLG',
                    'Memahami HTML, CSS, PHP, dan JavaScript Dasar',
                    'Pernah membuat project web sederhana (Portfolio)',
                    'Memiliki keinginan belajar yang tinggi',
                    'Mampu bekerja dalam tim'
                ]
            ],
            'cv-logam-jaya' => [
                'title' => 'Technician Staff',
                'company' => 'CV. Logam Jaya Abadi',
                'type' => 'Full Time',
                'location' => 'Cimahi',
                'deadline' => '20 Jan 2025',
                'category' => 'Teknik Pemesinan',
                'address' => 'Kawai Industrial Park, Jl. Raya Nanjung No. 88, Cimahi Selatan',
                'website' => 'https://cvlogamjaya.co.id',
                'description' => 'Dibutuhkan teknisi mesin bubut manual yang berpengalaman atau fresh graduate yang memiliki skill dasar yang kuat. Pekerjaan meliputi pembuatan spare part mesin industri sesuai pesanan.',
                'qualifications' => [
                    'SMK Teknik Mesin',
                    'Mampu mengoperasikan mesin bubut manual',
                    'Teliti dan disiplin',
                    'Domisili Cimahi dan sekitarnya diutamakan'
                ]
            ],
            'startup-studio' => [
                'title' => 'Mobile App Developer Intern',
                'company' => 'Startup Studio Bandung',
                'type' => 'Internship',
                'location' => 'Bandung',
                'deadline' => '10 Feb 2025',
                'category' => 'PPLG',
                'address' => 'Bandung Digital Valley, Menara Bandung Digital Lt. 4',
                'website' => 'https://startupstudio.bdg',
                'description' => 'Program magang 3 bulan untuk pengembangan aplikasi mobile (Android/Flutter). Peserta akan dibimbing langsung oleh mentor berpengalaman.',
                'qualifications' => [
                    'Siswa/Alumni SMK PPLG',
                    'Tertarik dengan mobile development',
                    'Paham logika dasar pemrograman',
                    'Memiliki laptop sendiri'
                ]
            ]
        ];

        if (!isset($jobs[$slug])) {
            abort(404);
        }

        $job = $jobs[$slug];
        return view('views.bkk.detail', compact('job'));
    }

    public function kontak()
    {
        return view('views.kontak');
    }

    public function berita()
    {
        return view('views.berita.index');
    }

    public function kurikulum()
    {
        return view('views.akademik.kurikulum');
    }

    public function kalender()
    {
        return view('views.akademik.kalender');
    }

    public function prestasi()
    {
        return view('views.akademik.prestasi');
    }
}