@extends('layouts.frontend')

@section('title', 'Info Lowongan Kerja - BKK SMK MARHAS')

@section('content')
    <div class="page-wrapper">
        <div class="container-custom">

            <div class="page-header fade-in">
                <h1>Informasi Lowongan Kerja</h1>
                <p>Temukan karier impianmu bersama mitra industri SMK MARHAS</p>
            </div>

            <div class="loker-layout fade-in">
                <aside class="sidebar-category">
                    <h3 class="sidebar-title">Kategori Pekerjaan</h3>
                    <ul class="category-list">
                        <li>
                            <button class="category-btn active" onclick="filterLoker('all', this)">
                                Semua Lowongan <span class="count-badge">5</span>
                            </button>
                        </li>
                        <li>
                            <button class="category-btn" onclick="filterLoker('rpl', this)">
                                RPL / PPLG <span class="count-badge">2</span>
                            </button>
                        </li>
                        <li>
                            <button class="category-btn" onclick="filterLoker('mesin', this)">
                                Teknik Mesin <span class="count-badge">2</span>
                            </button>
                        </li>
                        <li>
                            <button class="category-btn" onclick="filterLoker('jobfair', this)">
                                Job Fair <span class="count-badge">1</span>
                            </button>
                        </li>
                    </ul>
                </aside>

                <main class="content-area">
                    <h2 class="section-title">Daftar Lowongan Kerja</h2>

                    <div id="lokerGrid" style="display: flex; flex-direction: column; gap: 20px;">

                        <div class="loker-card" data-category="mesin">
                            <div class="loker-main">
                                <span class="company">PT. Astra Honda Motor</span>
                                <h3 class="job-title">Operator Produksi (CNC Specialist)</h3>
                                <div class="job-meta">
                                    <div class="meta-item"><i class="fas fa-map-marker-alt"></i> Bekasi, Jawa Barat</div>
                                    <div class="meta-item"><i class="fas fa-tools"></i> Teknik Pemesinan</div>
                                    <div class="meta-item"><i class="far fa-clock"></i> Batas: 30 Des 2024</div>
                                </div>
                            </div>
                            <a href="{{ route('bkk.lowongan.detail', 'astra-honda-motor') }}" class="btn-detail">Detail & Lamar</a>
                        </div>

                        <div class="loker-card" data-category="rpl">
                            <div class="loker-main">
                                <span class="company">Tech Innovate Solutions</span>
                                <h3 class="job-title">Junior Web Developer</h3>
                                <div class="job-meta">
                                    <div class="meta-item"><i class="fas fa-map-marker-alt"></i> Bandung (Remote)</div>
                                    <div class="meta-item"><i class="fas fa-laptop-code"></i> PPLG / RPL</div>
                                    <div class="meta-item"><i class="far fa-clock"></i> Batas: 15 Jan 2025</div>
                                </div>
                            </div>
                            <a href="{{ route('bkk.lowongan.detail', 'tech-innovate') }}" class="btn-detail">Detail & Lamar</a>
                        </div>

                        <div class="loker-card" data-category="mesin">
                            <div class="loker-main">
                                <span class="company">CV. Logam Jaya Abadi</span>
                                <h3 class="job-title">Technician Staff</h3>
                                <div class="job-meta">
                                    <div class="meta-item"><i class="fas fa-map-marker-alt"></i> Cimahi</div>
                                    <div class="meta-item"><i class="fas fa-tools"></i> Teknik Pemesinan</div>
                                    <div class="meta-item"><i class="far fa-clock"></i> Batas: 20 Jan 2025</div>
                                </div>
                            </div>
                            <a href="{{ route('bkk.lowongan.detail', 'cv-logam-jaya') }}" class="btn-detail">Detail & Lamar</a>
                        </div>

                        <div class="loker-card" data-category="rpl">
                            <div class="loker-main">
                                <span class="company">Startup Studio Bandung</span>
                                <h3 class="job-title">Mobile App Developer Intern</h3>
                                <div class="job-meta">
                                    <div class="meta-item"><i class="fas fa-map-marker-alt"></i> Bandung</div>
                                    <div class="meta-item"><i class="fas fa-mobile-alt"></i> PPLG</div>
                                    <div class="meta-item"><i class="far fa-clock"></i> Batas: 10 Feb 2025</div>
                                </div>
                            </div>
                            <a href="{{ route('bkk.lowongan.detail', 'startup-studio') }}" class="btn-detail">Detail & Lamar</a>
                        </div>

                        <div class="loker-card" data-category="jobfair">
                            <div class="loker-main">
                                <span class="company">Disnaker Kab. Bandung</span>
                                <h3 class="job-title">Job Fair Raya Bandung 2025</h3>
                                <div class="job-meta">
                                    <div class="meta-item"><i class="fas fa-map-marker-alt"></i> Dome Bale Rame</div>
                                    <div class="meta-item"><i class="fas fa-users"></i> Umum / Alumni</div>
                                    <div class="meta-item"><i class="far fa-calendar-alt"></i> Pelaksanaan: 1-3 Maret 2025</div>
                                </div>
                            </div>
                            <a href="#" class="btn-detail">Lihat Info</a>
                        </div>

                    </div>

                    <div id="emptyState" style="display: none; text-align: center; padding: 40px; color: #64748b;">
                        <i class="far fa-folder-open" style="font-size: 40px; margin-bottom: 10px; display: block;"></i>
                        <p>Tidak ada lowongan untuk kategori ini.</p>
                    </div>

                </main>
            </div>
        </div>
</div>
@endsection