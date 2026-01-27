@extends('layouts.frontend')

@section('title', 'Sambutan Kepala Sekolah - SMK MARHAS Margahayu')

@section('content')

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Sambutan Kepala Sekolah', 'url' => null],
    ],
    'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Sambutan Kepala Sekolah'
])

<section class="section-content">
    <div class="sambutan-layout">
        <div class="headmaster-frame fade-in">
            <div class="headmaster-image">
                <span style="font-size: 30px; font-weight: bold; color: #aaa;">417 × 556px</span>
            </div>
            <div class="headmaster-info">
                <div class="headmaster-name">Nama Kepala Sekolah, S.Pd., M.M.</div>
                <div class="headmaster-title">Kepala Sekolah SMK MARHAS</div>
            </div>
        </div>

        <div class="fade-in fade-in-delay-1">
            <i class="fas fa-quote-left quote-icon"></i>
            <h2 style="font-size: 32px; color: #1f2937; margin-bottom: 25px; line-height: 1.3;">
                Membangun Generasi <span class="text-primary">Unggul & Berakhlak Mulia</span> di Era Digital
            </h2>
            
            <div class="sambutan-text">
                <p style="margin-bottom: 20px;">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                
                <p style="margin-bottom: 20px;">
                    Puji syukur kita panjatkan ke hadirat Allah SWT atas segala rahmat dan karunia-Nya. Selamat datang di portal resmi SMK MARHAS Margahayu, wadah informasi dan komunikasi bagi seluruh keluarga besar sekolah, industri, dan masyarakat luas.
                </p>

                <p style="margin-bottom: 20px;">
                    Sebagai <b>Sekolah Pusat Keunggulan</b>, SMK MARHAS berkomitmen untuk terus bertransformasi mengikuti perkembangan teknologi dan kebutuhan Industri Dunia Kerja (IDUKA). Fokus utama kami bukan hanya mencetak lulusan yang mahir secara teknis (hard skills), tetapi juga memiliki karakter yang kuat, disiplin, dan etika kerja yang baik (soft skills).
                </p>

                <p style="margin-bottom: 20px;">
                    Pendidikan kejuruan saat ini menuntut kita untuk lebih adaptatif. Melalui kurikulum industri yang kami terapkan, kami yakin siswa-siswi SMK MARHAS akan mampu menjawab tantangan global, baik untuk <b>Bekerja, Melanjutkan studi, maupun Berwirausaha (BMW)</b>.
                </p>

                <p style="margin-bottom: 25px;">
                    Terima kasih atas kepercayaan orang tua siswa yang telah memilih SMK MARHAS sebagai tempat bertumbuh. Mari kita bersinergi demi masa depan putra-putri kita yang lebih gemilang.
                </p>

                <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
            </div>

            <div style="margin-top: 40px; border-top: 2px solid #eee; padding-top: 20px;">
                <img src="{{ asset('image/signature.png') }}" alt="Tanda Tangan" style="height: 60px; display: block; margin-bottom: 10px; opacity: 0.7;">
                <strong>Kepala Sekolah SMK MARHAS</strong>
            </div>
        </div>
    </div>
</section>
    
<div style="margin-top: 80px;"></div>

<section class="section-content">
    <div class="container fade-in">
        <h2 style="text-align: center; margin-bottom: 50px; color: #1f2937;">Dewan Guru & Staf <span class="text-primary">SMK MARHAS</span></h2>
        
        <div class="teachers-grid">
            <div class="teacher-card">
                <div class="teacher-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="teacher-info">
                    <div class="teacher-name">Nama Guru 1, S.Pd.</div>
                    <div class="teacher-role">Wakil Kepala Sekolah Kurikulum</div>
                </div>
            </div>

            <div class="teacher-card">
                <div class="teacher-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="teacher-info">
                    <div class="teacher-name">Nama Guru 2, M.Kom.</div>
                    <div class="teacher-role">Kepala Program Keahlian</div>
                </div>
            </div>

            <div class="teacher-card">
                <div class="teacher-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="teacher-info">
                    <div class="teacher-name">Nama Guru 3, S.T.</div>
                    <div class="teacher-role">Koordinator Kesiswaan</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection