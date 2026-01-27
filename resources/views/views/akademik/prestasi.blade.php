@extends('layouts.frontend')

@section('title', 'Prestasi Siswa - SMK MARHAS')

@section('content')

<div class="prestasi-wrapper">
    <div class="container-custom">
        <div class="stats-title-section fade-in">
            <h2>Peserta Didik Berprestasi Tersebar Diberbagai Provinsi</h2>
            <p>Lacak jumlah Peserta Didik berprestasi berdasarkan wilayah dan kategori.</p>
        </div>

        <div class="filter-card fade-in">
            <form action="" method="GET">
                <div class="filter-grid">
                    <div class="filter-item">
                        <label class="filter-label">Provinsi</label>
                        <select class="filter-select">
                            <option value="">Cari Provinsi</option>
                            <option value="jabar">Jawa Barat</option>
                            <option value="jateng">Jawa Tengah</option>
                            <option value="jatim">Jawa Timur</option>
                        </select>
                    </div>

                    <div class="filter-item">
                        <label class="filter-label">Kabupaten</label>
                        <select class="filter-select" disabled>
                            <option value="">Cari Kabupaten</option>
                        </select>
                    </div>

                    <div class="filter-item">
                        <label class="filter-label">Tingkat Prestasi</label>
                        <select class="filter-select">
                            <option value="">Semua</option>
                            <option value="internasional">Internasional</option>
                            <option value="nasional">Nasional</option>
                            <option value="provinsi">Provinsi</option>
                            <option value="kabkota">Kabupaten/Kota</option>
                        </select>
                    </div>

                    <div class="filter-item">
                        <label class="filter-label">Jenjang Pendidikan</label>
                        <select class="filter-select">
                            <option value="">Semua</option>
                            <option value="smk">SMK</option>
                            <option value="smp">SMP</option>
                            <option value="sd">SD</option>
                        </select>
                    </div>

                    <div class="filter-item">
                        <label class="filter-label">Kategori</label>
                        <select class="filter-select">
                            <option value="">Semua</option>
                            <option value="sains">Sains & Teknologi</option>
                            <option value="olahraga">Olahraga</option>
                            <option value="seni">Seni & Budaya</option>
                            <option value="agama">Keagamaan</option>
                        </select>
                    </div>

                     <div class="filter-item">
                        <label class="filter-label">Tahun</label>
                        <select class="filter-select">
                            <option value="">Semua</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>

                    <div class="search-row">
                        <div class="filter-item" style="flex-grow: 1;">
                            <label class="filter-label">Kata Kunci</label>
                            <input type="text" class="filter-input" placeholder="Cari nama siswa atau event...">
                        </div>
                        <button type="button" class="btn-search">
                            <i class="fas fa-search"></i> Cari Data
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-container fade-in">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama Siswa / Tim</th>
                        <th width="30%">Nama Kompetisi</th>
                        <th width="15%">Kategori</th>
                        <th width="15%">Tingkat</th>
                        <th width="15%">Capaian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <strong>Ahmad Subagja</strong>
                            <div style="font-size: 12px; color: #666;">Kelas XI - Teknik Pemesinan</div>
                        </td>
                        <td>
                            Lomba Kompetensi Siswa (LKS) Bidang CNC Milling
                            <div style="font-size: 12px; color: #666;"><i class="far fa-calendar"></i> 2024</div>
                        </td>
                        <td>Teknologi</td>
                        <td><span class="badge badge-level">Kabupaten</span></td>
                        <td>Juara 1 (Emas)</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>
                            <strong>Siti Aminah</strong>
                            <div style="font-size: 12px; color: #666;">Kelas XII - PPLG</div>
                        </td>
                        <td>
                            Web Technologies Competition
                            <div style="font-size: 12px; color: #666;"><i class="far fa-calendar"></i> 2024</div>
                        </td>
                        <td>Sains & Tek</td>
                        <td><span class="badge badge-level">Provinsi</span></td>
                        <td>Juara 2 (Perak)</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>
                            <strong>Tim Voli Putra MARHAS</strong>
                            <div style="font-size: 12px; color: #666;">Ekstrakurikuler</div>
                        </td>
                        <td>
                            Turnamen Voli Antar Pelajar Regional
                            <div style="font-size: 12px; color: #666;"><i class="far fa-calendar"></i> 2023</div>
                        </td>
                        <td>Olahraga</td>
                        <td><span class="badge badge-level">Regional</span></td>
                        <td>Juara 3 (Perunggu)</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>
                            <strong>Rina Wulandari</strong>
                            <div style="font-size: 12px; color: #666;">Kelas X - PPLG</div>
                        </td>
                        <td>
                            Olimpiade Matematika Terapan
                            <div style="font-size: 12px; color: #666;"><i class="far fa-calendar"></i> 2023</div>
                        </td>
                        <td>Sains</td>
                        <td><span class="badge badge-level">Nasional</span></td>
                        <td>Gold Medal</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>
                            <strong>Fajar Shadiq</strong>
                            <div style="font-size: 12px; color: #666;">Kelas XI - TSM</div>
                        </td>
                        <td>
                            Safety Riding Competition Honda
                            <div style="font-size: 12px; color: #666;"><i class="far fa-calendar"></i> 2022</div>
                        </td>
                        <td>Otomotif</td>
                        <td><span class="badge badge-level">Provinsi</span></td>
                        <td>Runner Up</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="margin-top: 30px; text-align: center; color: #999;">
            <button class="btn-secondary" style="background: white; border: 1px solid #ddd;">Muat Lebih Banyak</button>
        </div>

    </div>
</div>
@endsection