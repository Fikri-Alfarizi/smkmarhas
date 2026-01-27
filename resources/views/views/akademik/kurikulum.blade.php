@extends('layouts.frontend')

@section('title', 'Kurikulum - SMK MARHAS')

@section('content')

<div class="kurikulum-wrapper">
    <div class="container-custom">
        
        <div class="doc-header fade-in">
            <div class="doc-icon"><i class="fas fa-book-reader"></i></div>
            <h1 class="doc-title">Kurikulum Pembelajaran</h1>
            <p class="doc-subtitle">Penerapan Kurikulum Merdeka yang berpusat pada peserta didik dan terkoneksi dengan dunia industri.</p>
        </div>

        <div class="content-section fade-in">
            <div class="section-title"><i class="fas fa-star"></i> Prinsip Pembelajaran</div>
            <div class="feature-grid">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-shapes"></i></div>
                    <div class="feature-title">Kurikulum Merdeka</div>
                    <div class="feature-desc">Pembelajaran intrakurikuler yang beragam di mana konten akan lebih optimal agar peserta didik memiliki cukup waktu untuk mendalami konsep.</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-handshake"></i></div>
                    <div class="feature-title">Link & Match</div>
                    <div class="feature-desc">Penyelarasan kurikulum sekolah dengan kebutuhan IDUKA (Industri, Dunia Usaha, dan Dunia Kerja).</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                    <div class="feature-title">Teaching Factory</div>
                    <div class="feature-desc">Model pembelajaran berbasis produk (barang/jasa) melalui sinergi sekolah dengan industri.</div>
                </div>
            </div>
        </div>

        <div class="content-section fade-in">
            <div class="section-title"><i class="fas fa-layer-group"></i> Struktur Kurikulum</div>
            <table class="curriculum-table">
                <thead>
                    <tr>
                        <th width="30%">Kelompok Mata Pelajaran</th>
                        <th>Rincian Materi / Muatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>A. Muatan Nasional</strong>
                            <div style="font-size: 12px; color: #9ca3af; margin-top: 5px;">Wajib ditempuh seluruh jurusan</div>
                        </td>
                        <td>
                            <ul>
                                <li>Pendidikan Agama dan Budi Pekerti</li>
                                <li>Pendidikan Pancasila dan Kewarganegaraan</li>
                                <li>Bahasa Indonesia</li>
                                <li>Matematika</li>
                                <li>Sejarah Indonesia</li>
                                <li>Bahasa Inggris</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>B. Muatan Kewilayahan</strong>
                            <div style="font-size: 12px; color: #9ca3af; margin-top: 5px;">Muatan Lokal Jawa Barat</div>
                        </td>
                        <td>
                            <ul>
                                <li>Seni Budaya</li>
                                <li>Pendidikan Jasmani, Olahraga, dan Kesehatan</li>
                                <li>Bahasa Sunda</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>C. Muatan Kejuruan</strong>
                            <div style="font-size: 12px; color: #9ca3af; margin-top: 5px;">Sesuai Konsentrasi Keahlian</div>
                        </td>
                        <td>
                            <ul>
                                <li><strong>Dasar Program Keahlian:</strong> Fisika, Kimia, Gambar Teknik (Tergantung Jurusan)</li>
                                <li><strong>Konsentrasi Keahlian:</strong> 
                                    <span style="display:block; margin-top:5px; margin-left:10px;">• Teknik Pemesinan (Bubut, Frais, CNC)</span>
                                    <span style="display:block; margin-left:10px;">• PPLG (Coding, Database, Web)</span>
                                </li>
                                <li>Produk Kreatif dan Kewirausahaan</li>
                                <li>Praktik Kerja Lapangan (PKL)</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section fade-in">
            <div class="section-title"><i class="fas fa-file-download"></i> Dokumen Akademik</div>
            
            <div style="display: flex; flex-direction: column; gap: 15px;">
                <div class="download-bar">
                    <div class="download-info">
                        <h4>Struktur Kurikulum Lengkap</h4>
                        <p>Dokumen detail pembagian jam pelajaran per semester tahun ajaran 2025/2026.</p>
                    </div>
                    <a href="#" class="btn-download"><i class="fas fa-download"></i> Unduh PDF</a>
                </div>

                <div class="download-bar">
                    <div class="download-info">
                        <h4>Panduan Akademik & Tata Tertib</h4>
                        <p>Buku saku siswa mengenai peraturan akademik dan tata tertib sekolah.</p>
                    </div>
                    <a href="#" class="btn-download"><i class="fas fa-download"></i> Unduh PDF</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection