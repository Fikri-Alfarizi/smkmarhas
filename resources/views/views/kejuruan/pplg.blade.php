@extends('layouts.frontend')

@section('title', 'PPLG (Pengembangan Perangkat Lunak & Gim) - SMK MARHAS')

@section('content')

    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Kejuruan', 'url' => null],
            ['label' => 'PPLG', 'url' => null],
        ],
        'heading' => '<span class="highlight">Jurusan</span> PPLG'
    ])

    <div class="pplg-wrapper">
        <div class="pplg-container">

            <div class="row-custom">
                <div class="col-left">
                    <div class="hero-slider">
                        <div class="hero-slides">
                            <div class="hero-slide active">
                                <img src="{{ asset('image/lab-pplg-1.jpg') }}" alt="Lab PPLG" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-2.jpg') }}" alt="Praktikum Coding" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-3.jpg') }}" alt="Game Development" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-4.jpg') }}" alt="Web Development" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="slide-placeholder" style="display:none;">
                                    <span>1510 x 796 px</span>
                                </div>
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('image/lab-pplg-5.jpg') }}" alt="Mobile App" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
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
                            <img src="{{ asset('image/kaprog-pplg.jpg') }}" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22140%22 height=%22140%22%3E%3Crect fill=%22%2316a34a%22 width=%22140%22 height=%22140%22/%3E%3Ctext x=%2270%22 y=%2275%22 text-anchor=%22middle%22 fill=%22white%22 font-size=%2214%22%3EFoto%3C/text%3E%3C/svg%3E';" alt="Ketua Program">
                        </div>
                        <div class="kaprog-name">Nama Kaprog, S.Kom.</div>
                        <div class="kaprog-title">Ketua Program PPLG</div>
                    </div>
                </div>
            </div>

            <div class="row-custom">
                <div class="col-left">
                    <p class="content-text">
                        Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK MARHAS Margahayu membekali siswa/i dengan pengetahuan, kemampuan, dan keterampilan dalam dunia teknologi informasi modern.
                        <br><br>
                        Siswa diajarkan untuk menjadi tenaga ahli yang kompeten dalam merancang bangun perangkat lunak (Software Engineering), membuat website dinamis, mengembangkan aplikasi mobile (Android), serta dasar-dasar pengembangan Gim. Lulusan PPLG disiapkan untuk berwirausaha (Technopreneur) maupun bekerja di industri startup dan korporat.
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

                        <li class="menu-item-wrapper">
                            <div class="menu-item">
                                <span class="menu-text">KUNJUNGAN INDUSTRI</span>
                                <span class="menu-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <p>Kami bekerja sama dengan berbagai perusahaan teknologi top untuk memberikan wawasan industri kepada siswa:</p>
                                    <ul style="list-style-type: disc; padding-left: 20px; margin-top: 5px;">
                                        <li>Gameloft Indonesia (Yogyakarta)</li>
                                        <li>Agate International (Bandung)</li>
                                        <li>PT. Telekomunikasi Indonesia</li>
                                        <li>Software House & Digital Agency di Bandung & Jakarta</li>
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

            <div class="row-custom" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 40px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 24px; color: #1f2937; margin-bottom: 20px; border-left: 5px solid var(--primary-color); padding-left: 15px;">
                        Informasi Lengkap PPLG
                    </h3>
                    <div class="content-text">
                        <p style="margin-bottom: 15px;">
                            Pengembangan Perangkat Lunak dan Gim (PPLG) adalah kompetensi keahlian yang mempelajari cara merancang, membuat, menguji, dan memelihara perangkat lunak, mulai dari website, aplikasi mobile, hingga video game interaktif. Jurusan ini sangat relevan dengan kebutuhan Era Digital 4.0 di mana hampir semua sektor industri membutuhkan digitalisasi.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Fasilitas Unggulan:</strong><br>
                            SMK MARHAS menyediakan Laboratorium Komputer dengan spesifikasi tinggi (High-End PC) yang mampu menjalankan software berat seperti Android Studio, Unity 3D, dan Adobe Creative Cloud. Koneksi internet dedicated memastikan proses belajar dan eksplorasi teknologi berjalan lancar tanpa hambatan.
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Metode Pembelajaran:</strong><br>
                            Kami menerapkan metode pembelajaran berbasis proyek (<em>Project Based Learning</em>) dan <em>Teaching Factory</em>. Siswa tidak hanya belajar teori koding, tetapi langsung praktik membuat produk digital nyata. Budaya "Clean Code" dan logika algoritma menjadi pondasi utama yang kami tanamkan sejak kelas X.
                        </p>
                        <p>
                            <strong>Sertifikasi Industri:</strong><br>
                            Lulusan PPLG dibekali sertifikasi kompetensi dari BNSP serta kesempatan mengikuti ujian sertifikasi internasional dari vendor teknologi terkemuka (seperti Microsoft Technology Associate atau Oracle Academy) untuk meningkatkan daya saing di pasar kerja global.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
                        Galeri Kegiatan PPLG
                    </h3>
                    <div class="galeri-grid">
                        <div class="galeri-item">
                            <div class="galeri-placeholder">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <span class="galeri-label">Praktikum di Lab</span>
                        </div>
                        <div class="galeri-item">
                            <div class="galeri-placeholder">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <span class="galeri-label">Presentasi Project</span>
                        </div>
                        <div class="galeri-item">
                            <div class="galeri-placeholder">
                                <i class="fas fa-building"></i>
                            </div>
                            <span class="galeri-label">Kunjungan Industri</span>
                        </div>
                        <div class="galeri-item">
                            <div class="galeri-placeholder">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <span class="galeri-label">Kompetisi LKS</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
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

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 15px; border-left: 4px solid #E1306C; padding-left: 12px;">
                        <i class="fab fa-instagram" style="color: #E1306C; margin-right: 8px;"></i>
                        Instagram PPLG SMK MARHAS
                    </h3>
                    <p style="color: #666; margin-bottom: 20px; font-size: 14px;">Ikuti kegiatan terbaru jurusan di Instagram kami</p>
                    <div class="ig-grid">
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-1.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e5e5e5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-2.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23d4d4d4%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-3.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23c5c5c5%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-4.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23b8b8b8%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-5.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23ababab%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="ig-item">
                            <img src="{{ asset('image/ig-mesin-6.jpg') }}" alt="Instagram" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23999999%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E';">
                        </a>
                    </div>
                    <div style="margin-top: 15px; text-align: center;">
                        <a href="https://instagram.com/pplg.smkmarhas" target="_blank" class="btn-ig-follow">
                            <i class="fab fa-instagram"></i> Follow @pplg.smkmarhas
                        </a>
                    </div>
                </div>
            </div>

            <div class="row-custom" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                <div class="col-left" style="max-width: 100%; flex: 0 0 100%;">
                    <h3 style="font-size: 20px; color: #333; margin-bottom: 20px; border-left: 4px solid #00a651; padding-left: 12px;">
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