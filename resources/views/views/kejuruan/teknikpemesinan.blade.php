@extends('layouts.frontend')

@section('title', 'Teknik Pemesinan - SMK MARHAS')

@section('content')
    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Kejuruan', 'url' => null],
            ['label' => 'Teknik Pemesinan', 'url' => null],
        ],
        'heading' => '<span class="highlight">Jurusan</span> Teknik Pemesinan'
    ])

    <div class="mesin-wrapper">
        <div class="mesin-container">

            <div class="row-custom">
                <div class="col-left">
                    <div class="hero-slider">
                        <div class="hero-slides">
                            <div class="hero-slide active">
                                <img src="{{ asset('image/lab-mesin-1.jpg') }}" alt="Lab Pemesinan" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-mesin-2.jpg') }}" alt="Mesin Bubut" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-mesin-3.jpg') }}" alt="Mesin CNC" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-mesin-4.jpg') }}" alt="Praktikum Frais" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-mesin-5.jpg') }}" alt="Praktikum Gerinda" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
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
                            <img src="{{ asset('image/kaprog-mesin.jpg') }}" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22140%22 height=%22140%22%3E%3Crect fill=%22%2316a34a%22 width=%22140%22 height=%22140%22/%3E%3Ctext x=%2270%22 y=%2275%22 text-anchor=%22middle%22 fill=%22white%22 font-size=%2214%22%3EFoto%3C/text%3E%3C/svg%3E';" alt="Ketua Program">
                        </div>
                        <div class="kaprog-name">Nama Kaprog, S.T.</div>
                        <div class="kaprog-title">Ketua Program Teknik Pemesinan</div>
                    </div>
                </div>
            </div>

            <div class="row-custom">
                <div class="col-left">
                    <p class="content-text">
                        Jurusan Teknik Pemesinan di SMK MARHAS Margahayu berfokus pada penguasaan keterampilan dalam proses manufaktur menggunakan mesin-mesin industri. Siswa dilatih untuk menjadi tenaga profesional yang kompeten dalam mengoperasikan mesin bubut, milling, gerinda, hingga mesin-mesin CNC (Computer Numerical Control) yang canggih.
                        <br><br>
                        Kurikulum Teknik Pemesinan dirancang untuk memenuhi kebutuhan industri manufaktur modern, mencakup desain teknik (CAD/CAM), pengelasan, dan perawatan mesin. Lulusan jurusan ini memiliki prospek karir yang luas, mulai dari operator mesin industri, teknisi mechanical, hingga drafter teknik di berbagai perusahaan manufaktur berskala nasional maupun internasional.
                    </p>
                </div>

                <div class="col-right">
                    <ul class="menu-list">
                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">KURIKULUM</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Dasar Perancangan Teknik Mesin</li>
                                        <li>Gambar Teknik Manufaktur (CAD 2D/3D)</li>
                                        <li>Teknik Pemesinan Bubut & Frais</li>
                                        <li>Teknik Pemesinan Gerinda</li>
                                        <li>Teknik Pemesinan NC/CNC & CAM</li>
                                        <li>Produk Kreatif dan Kewirausahaan</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">PELUANG KERJA</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Operator Mesin Industri (Bubut, Milling, CNC)</li>
                                        <li>Programmer CNC</li>
                                        <li>Quality Control (QC) Manufaktur</li>
                                        <li>Drafter Teknik (CAD Operator)</li>
                                        <li>Maintenance & Repair Technician</li>
                                        <li>Wirausaha Bengkel Pemesinan</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">KUNJUNGAN INDUSTRI</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <p>Siswa diajak mengunjungi berbagai industri manufaktur terkemuka untuk melihat langsung proses produksi dan budaya kerja, antara lain:</p>
                                    <ul style="list-style-type: disc; padding-left: 20px; margin-top: 5px;">
                                        <li>PT. Dirgantara Indonesia (Indonesian Aerospace)</li>
                                        <li>PT. Pindad (Persero)</li>
                                        <li>Toyota Motor Manufacturing Indonesia</li>
                                        <li>Berbagai industri komponen otomotif di kawasan industri Jawa Barat</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">PRESTASI</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <ul style="list-style-type: disc; padding-left: 20px;">
                                        <li>Juara 1 Lomba Kompetensi Siswa (LKS) Tingkat Kabupaten - Bidang CNC Turning</li>
                                        <li>Juara 2 LKS Tingkat Provinsi - Bidang Mechanical Engineering CAD</li>
                                        <li>Juara Harapan 1 Lomba Inovasi Teknologi Tepat Guna</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 40px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 24px; color: #1f2937; margin-bottom: 20px; border-left: 5px solid var(--primary-color); padding-left: 15px;">
                        Informasi Lengkap Teknik Pemesinan
                    </h3>
                    <div class="content-text">
                        <p style="margin-bottom: 15px;">
                            Teknik Pemesinan adalah salah satu kompetensi keahlian yang paling mendasar dan vital dalam dunia industri manufaktur. Di SMK MARHAS, jurusan ini tidak hanya mengajarkan cara mengoperasikan mesin, tetapi juga menanamkan pola pikir presisi, disiplin, dan keselamatan kerja (K3) yang menjadi standar industri global.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Fasilitas Unggulan:</strong><br>
                            Kami memiliki bengkel pemesinan yang luas dan lengkap, terdiri dari mesin bubut konvensional, mesin frais, mesin gerinda, hingga mesin CNC (Computer Numerical Control) terbaru. Siswa juga dibekali dengan laboratorium komputer untuk desain CAD (Computer Aided Design) dan simulasi CAM (Computer Aided Manufacturing) sebelum melakukan eksekusi pada mesin nyata.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Metode Pembelajaran:</strong><br>
                            Pembelajaran dilakukan dengan sistem blok (Teori dan Praktik) dengan porsi praktik yang lebih dominan (70:30). Kami menerapkan model <em>Project Based Learning</em> (PjBL) di mana siswa mengerjakan proyek-proyek nyata, mulai dari pembuatan komponen sederhana, sparepart mesin, hingga perakitan alat tepat guna. Hal ini bertujuan untuk melatih soft skills seperti pemecahan masalah (<em>problem solving</em>) dan kerjasama tim.
                        </p>
                        <p>
                            <strong>Sertifikasi Kompetensi:</strong><br>
                            Setiap lulusan Teknik Pemesinan SMK MARHAS akan mengikuti uji kompetensi keahlian yang bekerja sama dengan Lembaga Sertifikasi Profesi (LSP) P1 maupun P2. Sertifikat ini diakui secara nasional oleh Badan Nasional Sertifikasi Profesi (BNSP), menjadi nilai tambah yang signifikan saat melamar kerja di industri.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid var(--primary-color); padding-left: 12px;">
                        Galeri Kegiatan Teknik Pemesinan
                    </h3>
                    <div class="galeri-grid">
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-mesin-1.jpg') }}" alt="Praktikum Mesin Bubut" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Praktikum Mesin Bubut</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-mesin-2.jpg') }}" alt="Praktikum CNC" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Praktikum CNC</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-mesin-3.jpg') }}" alt="Kunjungan Industri" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Kunjungan Industri</span>
                        </div>
                        <div class="galeri-item">
                            <img src="{{ asset('image/gallery-mesin-4.jpg') }}" alt="Kompetisi LKS" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="galeri-placeholder" style="display:none;">
                                <span>786 x 588 px</span>
                            </div>
                            <span class="galeri-label">Kompetisi LKS</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid var(--primary-color); padding-left: 12px;">
                        Keunggulan Jurusan Teknik Pemesinan
                    </h3>
                    <div class="keunggulan-grid">
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-cogs"></i></div>
                            <div class="keunggulan-info">
                                <h4>Bengkel Lengkap</h4>
                                <p>Mesin bubut, frais, gerinda, dan CNC terbaru</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-drafting-compass"></i></div>
                            <div class="keunggulan-info">
                                <h4>Lab CAD/CAM</h4>
                                <p>Laboratorium komputer untuk desain dan simulasi</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-certificate"></i></div>
                            <div class="keunggulan-info">
                                <h4>Sertifikasi BNSP</h4>
                                <p>Sertifikat kompetensi diakui nasional</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-hard-hat"></i></div>
                            <div class="keunggulan-info">
                                <h4>Standar K3</h4>
                                <p>Keselamatan kerja sesuai standar industri</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-industry"></i></div>
                            <div class="keunggulan-info">
                                <h4>Mitra Industri</h4>
                                <p>Kerjasama dengan perusahaan manufaktur</p>
                            </div>
                        </div>
                        <div class="keunggulan-card">
                            <div class="keunggulan-icon-box"><i class="fas fa-user-tie"></i></div>
                            <div class="keunggulan-info">
                                <h4>Instruktur Berpengalaman</h4>
                                <p>Pengajar dari praktisi industri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 15px; border-left: 4px solid #E1306C; padding-left: 12px;">
                        <i class="fab fa-instagram" style="color: #E1306C; margin-right: 8px;"></i>
                        Instagram Teknik Pemesinan SMK MARHAS
                    </h3>
                    <p style="color: #666; margin-bottom: 20px; font-size: 14px;">Ikuti kegiatan terbaru jurusan Teknik Pemesinan di Instagram kami</p>
                    <div class="ig-grid">
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-1.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e5e5e5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-2.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23d4d4d4%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-3.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23c5c5c5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-4.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23b8b8b8%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-5.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23ababab%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-6.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23999999%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                    </div>
                    <div style="margin-top: 15px; text-align: center;">
                        <a href="https://instagram.com/tp.smkmarhas" target="_blank" class="btn-ig-follow">
                            <i class="fab fa-instagram"></i> Follow @tp.smkmarhas
                        </a>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 40px; margin-bottom: 20px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid var(--primary-color); padding-left: 12px;">
                        Agenda Kegiatan Teknik Pemesinan
                    </h3>
                    <table class="agenda-table">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Tanggal</th>
                                <th style="width: 50%;">Kegiatan</th>
                                <th style="width: 30%;">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20 Jan 2026</td>
                                <td>Kunjungan Industri ke PT. Pindad</td>
                                <td>Bandung</td>
                            </tr>
                            <tr>
                                <td>05 Feb 2026</td>
                                <td>Workshop CNC Programming</td>
                                <td>Bengkel Pemesinan</td>
                            </tr>
                            <tr>
                                <td>15 Feb 2026</td>
                                <td>LKS CNC Turning - Tingkat Provinsi</td>
                                <td>BPPTIK Bandung</td>
                            </tr>
                            <tr>
                                <td>25 Mar 2026</td>
                                <td>Pameran Produk Pemesinan 2026</td>
                                <td>Aula SMK MARHAS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

         </div>
    </div>
@endsection