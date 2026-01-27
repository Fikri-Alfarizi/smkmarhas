@extends('layouts.frontend')

@section('title', 'Profil Sekolah - SMK MARHAS Margahayu')

@section('content')

    @include('partials.hero-section', [
        'heroImage' => asset('image/logoss.png'),
        'heroImageMobile' => asset('image/logoss.png'),
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Profil Sekolah', 'url' => null],
        ],
        'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Sekolah Pusat Keunggulan'
    ])

    <section class="profile-section">
        <div class="history-grid">

            <div class="image-box fade-in desktop-only">
                <i class="fas fa-image" style="font-size: 48px; margin-bottom: 10px; opacity: 0.7;"></i>
                <span>Upload Gambar</span>
                <span style="opacity: 0.7;">631 x 400 px</span>
            </div>

            <div class="mobile-image-box fade-in mobile-only">
                <i class="fas fa-image" style="font-size: 36px; margin-bottom: 8px; opacity: 0.7;"></i>
                <span>Upload Gambar</span>
                <span style="opacity: 0.7;">400x250px</span>
            </div>

            <div class="fade-in fade-in-delay-1">
                <span class="section-badge">SEJARAH SINGKAT</span>
                <h2 style="font-size: 32px; color: #1f2937; margin-bottom: 20px;">Membangun Masa Depan <br><span class="text-primary">Sejak 20 Tahun Lalu</span></h2>
                <p class="content-text">
                    SMK MARHAS Margahayu didirikan dengan semangat untuk memberikan akses pendidikan kejuruan yang berkualitas bagi masyarakat Kabupaten Bandung. Seiring berjalannya waktu, sekolah ini terus berkembang menjadi <b>Sekolah Pusat Keunggulan (Center of Excellence)</b>.
                </p>
                <p class="content-text" style="margin-top: 15px;">
                    Kami berfokus pada integrasi antara kurikulum pendidikan dengan kebutuhan nyata dunia industri, sehingga setiap lulusan tidak hanya memiliki ijazah, tetapi juga kompetensi bersertifikasi yang diakui secara nasional maupun internasional.
                </p>
            </div>
        </div>

        <div style="margin-top: 60px;"></div>

        <div class="info-card fade-in">
            <h3 style="margin-bottom: 25px; display: flex; align-items: center; gap: 15px;">
                <i class="fas fa-id-card text-primary"></i> Identitas Sekolah
            </h3>
            <table class="table-identitas">
                <tr>
                    <td>Nama Sekolah</td>
                    <td>SMK MARHAS Margahayu</td>
                </tr>
                <tr>
                    <td>NPSN</td>
                    <td>20206214</td>
                </tr>
                <tr>
                    <td>Status Sekolah</td>
                    <td>Swasta (Pusat Keunggulan)</td>
                </tr>
                <tr>
                    <td>Akreditasi</td>
                    <td>A (Sangat Baik)</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>Jl. Terusan Kopo No.385/299, Margahayu, Kec. Margahayu, Kab. Bandung</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>adm.smkmarhas@gmail.com</td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>(022) 5410926</td>
                </tr>
            </table>
        </div>
    </section>

@endsection