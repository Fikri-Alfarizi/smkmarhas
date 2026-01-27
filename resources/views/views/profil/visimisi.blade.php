@extends('layouts.frontend')

@section('title', 'Visi & Misi - SMK MARHAS Margahayu')

@section('content')
    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Profil', 'url' => null],
            ['label' => 'Visi & Misi', 'url' => null],
        ],
        'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Visi & Misi'
    ])

<section class="visimisi-container">
    <div class="visimisi-grid">
        <div class="visi-card fade-in">
            <span class="section-label">OUR VISION</span>
            <h2>VISI</h2>
            <p class="visi-text">
                "Menjadi Lembaga Pendidikan Kejuruan yang Unggul, Mencetak Lulusan yang Kompeten, Berkarakter Religius, dan Berdaya Saing di Tingkat Nasional maupun Internasional."
            </p>
        </div>

        <div class="fade-in">
            <span class="section-label">OUR MISSION</span>
            <h2 style="font-size: 36px; color: var(--primary-color); margin-bottom: 20px; font-weight: 800;">MISI</h2>
            
            <div class="misi-container">
                <div class="misi-card">
                    <div class="misi-number">01</div>
                    <h3>Menyelenggarakan pendidikan dan pelatihan yang berbasis kompetensi sesuai dengan kebutuhan dunia industri.</h3>
                </div>

                <div class="misi-card">
                    <div class="misi-number">02</div>
                    <h3>Menanamkan nilai-nilai religius dan budi pekerti luhur dalam setiap aktivitas pendidikan.</h3>
                </div>

                <div class="misi-card">
                    <div class="misi-number">03</div>
                    <h3>Meningkatkan kualitas SDM pendidik dan tenaga kependidikan yang profesional dan bersertifikasi.</h3>
                </div>

                <div class="misi-card">
                    <div class="misi-number">04</div>
                    <h3>Menjalin kemitraan yang strategis dengan dunia usaha dan dunia industri (DUDI).</h3>
                </div>

                <div class="misi-card">
                    <div class="misi-number">05</div>
                    <h3>Mengembangkan jiwa wirausaha dan inovasi bagi seluruh peserta didik.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection