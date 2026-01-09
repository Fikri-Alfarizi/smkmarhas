@extends('layouts.frontend')

@section('title', 'PPLG (Pengembangan Perangkat Lunak & Gim) - SMK MARHAS')

@section('content')
    <style>
        /* --- RESET & LAYOUT UMUM --- */
        .pplg-wrapper {
            background-color: #f4f4f4;
            /* Background abu-abu muda seperti di gambar */
            padding: 40px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .pplg-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
            background: white;
            /* box-shadow: 0 2px 10px rgba(0,0,0,0.05); */
            padding-bottom: 50px;
        }

        /* --- GRID SYSTEM CUSTOM (Jika tidak pakai Bootstrap full) --- */
        .row-custom {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-left {
            flex: 0 0 70%;
            max-width: 70%;
            padding: 20px;
        }

        .col-right {
            flex: 0 0 30%;
            max-width: 30%;
            padding: 20px;
        }

        /* --- HERO SLIDER (Kiri Atas) --- */
        .hero-slider {
            position: relative;
            width: 100%;
            height: 400px;
            border: 1px solid #ddd;
            background: #00a651;
            overflow: hidden;
        }

        .hero-slides {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #00a651;
            color: white;
            font-size: 18px;
            font-weight: 500;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            z-index: 10;
        }

        .slider-btn:hover {
            background: #00a651;
            color: white;
        }

        .slider-prev {
            left: 10px;
        }

        .slider-next {
            right: 10px;
        }

        .slider-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }

        .slider-dot.active {
            background: white;
        }

        /* --- PROFILE CARD (Kanan Atas) --- */
        .profile-card {
            border: 1px solid #eee;
            padding: 20px;
            text-align: center;
            background: white;
            margin-bottom: 30px;
        }

        .profile-img-box {
            width: 140px;
            height: 140px;
            margin: 0 auto 15px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #00a651;
            /* Lingkaran Hijau */
            padding: 3px;
            background: white;
        }

        .profile-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .kaprog-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .kaprog-title {
            font-size: 14px;
            color: #777;
        }

        /* --- TEXT CONTENT (Kiri Bawah) --- */
        .content-text {
            text-align: justify;
            line-height: 1.8;
            color: #555;
            font-size: 15px;
            margin-top: 20px;
        }

        /* --- MENU ACCORDION / "PLUS PLUS" (Kanan Bawah) --- */
        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            background-color: #00c0c0;
            /* Warna Tosca */
            color: white;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
            font-size: 14px;
        }

        .menu-item:hover {
            background-color: #008b8b;
        }

        .menu-text {
            padding: 12px 15px;
            text-transform: uppercase;
        }

        .menu-icon {
            background-color: #222;
            /* Kotak Hitam untuk icon plus */
            color: white;
            width: 45px;
            height: 45px;
            /* Tinggi disesuaikan agar full height */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        /* Accordion Styles */
        .menu-item.active .menu-icon {
            transform: rotate(45deg);
            /* Roate plus to becomes x (close) optional */
            background-color: var(--primary-color);
        }

        .menu-item.active {
            background-color: #008b8b;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background: #f9f9f9;
            border-left: 3px solid #00c0c0;
        }

        .accordion-inner {
            padding: 15px;
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {

            .col-left,
            .col-right {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .profile-card {
                margin-top: 20px;
            }
        }
    </style>

    <div class="pplg-wrapper">
        <div class="pplg-container">

            <div class="row-custom">
                <div class="col-left">
                    <!-- HERO IMAGE SLIDER -->
                    <div class="hero-slider">
                        <div class="hero-slides">
                            <div class="hero-slide active">
                                <img src="{{ asset('image/lab-pplg-1.jpg') }}" alt="Lab PPLG" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-2.jpg') }}" alt="Praktikum Coding" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-3.jpg') }}" alt="Game Development" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-4.jpg') }}" alt="Web Development" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-5.jpg') }}" alt="Mobile App" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                        </div>
                        <button class="slider-btn slider-prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="slider-btn slider-next"><i class="fas fa-chevron-right"></i></button>
                        <div class="slider-dots"></div>
                    </div>
                </div>

                <div class="col-right">
                    <div class="profile-card">
                        <div class="profile-img-box">
                            <img src="{{ asset('image/kaprog-pplg.jpg') }}" alt="Ketua Program">
                        </div>
                        <div class="kaprog-name">Nama Kaprog, S.Kom.</div>
                        <div class="kaprog-title">Ketua Program PPLG</div>
                    </div>
                </div>
            </div>

            <div class="row-custom">
                <div class="col-left">
                    <p class="content-text">
                        Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK MARHAS Margahayu membekali siswa/i dengan
                        pengetahuan, kemampuan, dan keterampilan dalam dunia teknologi informasi modern.
                        <br><br>
                        Siswa diajarkan untuk menjadi tenaga ahli yang kompeten dalam merancang bangun perangkat lunak
                        (Software Engineering), membuat website dinamis, mengembangkan aplikasi mobile (Android), serta
                        dasar-dasar pengembangan Gim. Lulusan PPLG disiapkan untuk berwirausaha (Technopreneur) maupun
                        bekerja di industri startup dan korporat.
                    </p>
                </div>

                <div class="col-right">
                    <ul class="menu-list">
                        <!-- KURIKULUM -->
                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">KURIKULUM</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Dasar Logika & Algoritma Pemrograman</li>
                                        <li>Pemrograman Web (HTML, CSS, JS, PHP/Laravel)</li>
                                        <li>Pemrograman Berorientasi Objek (Java/OOP)</li>
                                        <li>Pemrograman Perangkat Bergerak (Android/Kotlin)</li>
                                        <li>Basis Data (MySQL, MongoDB)</li>
                                        <li>Pengembangan Gim (Unity/C#)</li>
                                        <li>Produk Kreatif & Kewirausahaan</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- PELUANG KERJA -->
                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">PELUANG KERJA</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Full Stack Web Developer</li>
                                        <li>Mobile Application Developer (Android/iOS)</li>
                                        <li>Game Developer & Designer</li>
                                        <li>UI/UX Designer</li>
                                        <li>Database Administrator</li>
                                        <li>Software Quality Assurance (QA)</li>
                                        <li>IT Consultant & Startup Founder</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- KUNJUNGAN INDUSTRI -->
                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">KUNJUNGAN INDUSTRI</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <p>Kami bekerja sama dengan berbagai perusahaan teknologi top untuk memberikan wawasan
                                        industri kepada siswa:</p>
                                    <ul style="list-style-type: disc; padding-left: 20px; margin-top: 5px;">
                                        <li>Gameloft Indonesia (Yogyakarta)</li>
                                        <li>Agate International (Bandung)</li>
                                        <li>PT. Telekomunikasi Indonesia</li>
                                        <li>Software House & Digital Agency di Bandung & Jakarta</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- PRESTASI -->
                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">PRESTASI</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Juara 1 LKS Tingkat Kabupaten - Web Technologies</li>
                                        <li>Juara 2 LKS Tingkat Provinsi - IT Software Solutions for Business</li>
                                        <li>Finalis Kompetisi Hackathon Pelajar Nasional</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- NEW SECTION: INFORMASI LENGKAP -->
            <div class="row-custom" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 40px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3
                        style="font-size: 24px; color: #1f2937; margin-bottom: 20px; border-left: 5px solid var(--primary-color); padding-left: 15px;">
                        Informasi Lengkap PPLG
                    </h3>
                    <div class="content-text">
                        <p style="margin-bottom: 15px;">
                            Pengembangan Perangkat Lunak dan Gim (PPLG) adalah kompetensi keahlian yang mempelajari cara
                            merancang, membuat, menguji, dan memelihara perangkat lunak, mulai dari website, aplikasi
                            mobile, hingga video game interaktif. Jurusan ini sangat relevan dengan kebutuhan Era Digital
                            4.0 di mana hampir semua sektor industri membutuhkan digitalisasi.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Fasilitas Unggulan:</strong><br>
                            SMK MARHAS menyediakan Laboratorium Komputer dengan spesifikasi tinggi (High-End PC) yang mampu
                            menjalankan software berat seperti Android Studio, Unity 3D, dan Adobe Creative Cloud. Koneksi
                            internet dedicated memastikan proses belajar dan eksplorasi teknologi berjalan lancar tanpa
                            hambatan.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Metode Pembelajaran:</strong><br>
                            Kami menerapkan metode pembelajaran berbasis proyek (<em>Project Based Learning</em>) dan
                            <em>Teaching Factory</em>. Siswa tidak hanya belajar teori koding, tetapi langsung praktik
                            membuat produk digital nyata. Budaya "Clean Code" dan logika algoritma menjadi pondasi utama
                            yang kami tanamkan sejak kelas X.
                        </p>
                        <p>
                            <strong>Sertifikasi Industri:</strong><br>
                            Lulusan PPLG dibekali sertifikasi kompetensi dari BNSP serta kesempatan mengikuti ujian
                            sertifikasi internasional dari vendor teknologi terkemuka (seperti Microsoft Technology
                            Associate atau Oracle Academy) untuk meningkatkan daya saing di pasar kerja global.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SECTION: GALERI KEGIATAN -->
            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3
                        style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
                        Galeri Kegiatan PPLG
                    </h3>

                    <div class="galeri-grid">
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-pplg-1.jpg') }}" alt="Praktikum Lab"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Praktikum di Lab</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-pplg-2.jpg') }}" alt="Presentasi Project"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Presentasi Project</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-pplg-3.jpg') }}" alt="Kunjungan Industri"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Kunjungan Industri</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-pplg-4.jpg') }}" alt="Kompetisi LKS"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Kompetisi LKS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION: KEUNGGULAN JURUSAN -->
            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3
                        style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
                        Keunggulan Jurusan PPLG
                    </h3>

                    <div class="keunggulan-grid">
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-laptop-code"></i></div>
                            <div class="keunggulan-info">
                                <h4>Lab High-End PC</h4>
                                <p>Komputer spesifikasi tinggi untuk development & game design</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-project-diagram"></i></div>
                            <div class="keunggulan-info">
                                <h4>Project Based Learning</h4>
                                <p>Belajar langsung dengan membuat produk digital nyata</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-certificate"></i></div>
                            <div class="keunggulan-info">
                                <h4>Sertifikasi Industri</h4>
                                <p>BNSP, Microsoft MTA, Oracle Academy</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-users-cog"></i></div>
                            <div class="keunggulan-info">
                                <h4>Teaching Factory</h4>
                                <p>Kolaborasi dengan industri untuk pengalaman kerja nyata</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-wifi"></i></div>
                            <div class="keunggulan-info">
                                <h4>Internet Dedicated</h4>
                                <p>Koneksi khusus untuk proses belajar</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-chalkboard-teacher"></i></div>
                            <div class="keunggulan-info">
                                <h4>Guru Bersertifikat</h4>
                                <p>Pengajar tersertifikasi dengan pengalaman industri IT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION: INSTAGRAM FEED -->
            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3
                        style="font-size: 20px; color: #333; margin-bottom: 15px; border-left: 4px solid #E1306C; padding-left: 12px;">
                        <i class="fab fa-instagram" style="color: #E1306C; margin-right: 8px;"></i>
                        Instagram PPLG SMK MARHAS
                    </h3>
                    <p style="color: #666; margin-bottom: 20px; font-size: 14px;">Ikuti kegiatan terbaru jurusan PPLG di
                        Instagram kami</p>

                    <div class="ig-grid">
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-1.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e5e5e5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-2.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23d4d4d4%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-3.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23c5c5c5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-4.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23b8b8b8%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-5.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23ababab%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-pplg-6.jpg') }}" alt="Instagram"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%239e9e9e%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                    </div>

                    <div style="text-align: center; margin-top: 20px;">
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="btn-ig-follow">
                            <i class="fab fa-instagram"></i> Follow @pplg.smkmarhas
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECTION: AGENDA KEGIATAN -->
            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3
                        style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
                        Agenda Kegiatan PPLG
                    </h3>

                    <table class="agenda-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kegiatan</th>
                                <th>Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>15 Jan 2026</strong></td>
                                <td>Kunjungan Industri ke Gameloft Indonesia</td>
                                <td>Yogyakarta</td>
                            </tr>
                            <tr>
                                <td><strong>25 Jan 2026</strong></td>
                                <td>Workshop Game Development dengan Unity</td>
                                <td>Lab PPLG</td>
                            </tr>
                            <tr>
                                <td><strong>10 Feb 2026</strong></td>
                                <td>LKS IT Software Solutions - Tingkat Provinsi</td>
                                <td>BPPTIK Bandung</td>
                            </tr>
                            <tr>
                                <td><strong>20 Mar 2026</strong></td>
                                <td>PPLG Project Expo 2026 - Pameran Karya Siswa</td>
                                <td>Aula SMK MARHAS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* --- KEUNGGULAN GRID --- */
        .keunggulan-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .keunggulan-card {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 18px;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
        }

        .keunggulan-card:hover {
            border-color: #00a651;
        }

        .keunggulan-icon-box {
            width: 45px;
            height: 45px;
            background: #00a651;
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .keunggulan-info h4 {
            font-size: 15px;
            color: #333;
            margin: 0 0 5px 0;
        }

        .keunggulan-info p {
            font-size: 13px;
            color: #666;
            margin: 0;
            line-height: 1.4;
        }

        /* --- INSTAGRAM GRID --- */
        .ig-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
        }

        .ig-item {
            aspect-ratio: 1;
            overflow: hidden;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .ig-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ig-item:hover {
            opacity: 0.8;
        }

        .btn-ig-follow {
            display: inline-block;
            padding: 10px 25px;
            background: #E1306C;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
        }

        .btn-ig-follow:hover {
            background: #c92461;
        }

        /* --- AGENDA TABLE --- */
        .agenda-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .agenda-table th,
        .agenda-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e5e5e5;
        }

        .agenda-table th {
            background: #f5f5f5;
            font-weight: 600;
            color: #333;
        }

        .agenda-table tbody tr:hover {
            background: #fafafa;
        }

        /* --- GALERI GRID --- */
        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .galeri-item {
            position: relative;
            aspect-ratio: 4/3;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .galeri-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .galeri-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #00a651;
            color: white;
            font-size: 16px;
            font-weight: 500;
        }

        .galeri-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 8px 10px;
            font-size: 13px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .galeri-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }



        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .keunggulan-grid {
                grid-template-columns: 1fr;
            }

            .ig-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .ig-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-slider {
                height: 280px;
            }

            .gallery-nav {
                width: 40px;
                height: 40px;
                font-size: 14px;
            }

            .agenda-table {
                font-size: 13px;
            }

            .agenda-table th,
            .agenda-table td {
                padding: 10px 8px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- ACCORDION MENU ---
            const menuItems = document.querySelectorAll('.menu-item');

            menuItems.forEach(item => {
                item.addEventListener('click', function () {
                    // Toggle active class on button
                    this.classList.toggle('active');

                    // Get content element (sibling)
                    const content = this.nextElementSibling;

                    // Toggle animation
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });

            // --- HERO SLIDER ---
            const slides = document.querySelectorAll('.hero-slide');
            const prevBtn = document.querySelector('.slider-prev');
            const nextBtn = document.querySelector('.slider-next');
            const dotsContainer = document.querySelector('.slider-dots');
            let currentSlide = 0;
            let autoSlideInterval;

            // Create dots
            if (slides.length > 0 && dotsContainer) {
                slides.forEach((_, index) => {
                    const dot = document.createElement('div');
                    dot.classList.add('slider-dot');
                    if (index === 0) dot.classList.add('active');
                    dot.addEventListener('click', () => goToSlide(index));
                    dotsContainer.appendChild(dot);
                });
            }

            function updateSlider() {
                slides.forEach((slide, index) => {
                    slide.classList.remove('active');
                    if (index === currentSlide) {
                        slide.classList.add('active');
                    }
                });

                const dots = document.querySelectorAll('.slider-dot');
                dots.forEach((dot, index) => {
                    dot.classList.remove('active');
                    if (index === currentSlide) {
                        dot.classList.add('active');
                    }
                });
            }

            function goToSlide(index) {
                currentSlide = index;
                updateSlider();
                resetAutoSlide();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlider();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                updateSlider();
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 4000);
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
            if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetAutoSlide(); });

            if (slides.length > 0) {
                startAutoSlide();
            }
        });
    </script>
@endpush