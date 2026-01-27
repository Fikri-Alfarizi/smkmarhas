@extends('layouts.frontend')

@section('title', 'Berita & Kegiatan - SMK MARHAS')

@section('content')
    <div class="berita-wrapper">
        <div class="container-custom">

            <div class="page-header fade-in">
                <h2>Agenda & Informasi Sekolah</h2>
                <p style="color: #666; margin-top: 5px;">Berita terbaru, jadwal ujian, dan informasi kegiatan di SMK MARHAS Margahayu.</p>
            </div>

            <div class="news-grid">

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Monday, 22 Dec 2025
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Ujian Akhir Semester (UAS) Tahun Ajaran 2025/2026</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kampus SMK MARHAS Margahayu</span>
                            </div>
                            <div class="meta-row">
                                <i class="far fa-clock"></i>
                                <span>22 - 27 Desember 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Monday, 08 Dec 2025
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Wisuda & Pelepasan Siswa Kelas XII Angkatan 2025</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Hotel Sutan Raja, Soreang</span>
                            </div>
                            <div class="meta-row">
                                <i class="far fa-clock"></i>
                                <span>08.00 WIB - Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Saturday, 31 May 2025
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Penerimaan Peserta Didik Baru (PPDB) Gelombang 1</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Sekretariat PPDB SMK MARHAS</span>
                            </div>
                            <div class="meta-row">
                                <i class="far fa-clock"></i>
                                <span>14.00 - 19.00 WIB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Thursday, 15 Jan 2026
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Kunjungan Industri Jurusan PPLG ke Gameloft Indonesia</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Yogyakarta, Jawa Tengah</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Sunday, 20 Jan 2026
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Turnamen Futsal Antar Pelajar Se-Bandung Raya</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>GOR Saparua Bandung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item fade-in">
                    <div class="event-thumb-box">
                        <div class="date-badge">
                            <i class="far fa-calendar-alt"></i> Friday, 25 Jan 2026
                        </div>
                        <div style="width: 100%; height: 100%; background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1920x1080px
                        </div>
                    </div>
                    <div class="event-content-below">
                        <h3 class="event-title">Workshop "Digital Marketing" untuk Kelas XI Bisnis Daring</h3>
                        <div class="event-meta">
                            <div class="meta-row">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Lab Komputer 1 SMK MARHAS</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection