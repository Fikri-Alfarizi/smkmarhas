@extends('layouts.frontend')

@section('title', 'Ekstrakurikuler - SMK MARHAS Margahayu')

@section('content')


@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Ekstrakurikuler', 'url' => null],
    ],
    'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Ekstrakurikuler'
])

<section class="ekstra-section">
    <div class="fade-in" style="text-align: center; max-width: 700px; margin: 0 auto;">
        <span class="section-badge">PENGEMBANGAN DIRI</span>
        <h2 style="font-size: 32px; color: #1f2937; margin-top: 10px;">EKSTRAKURIKULER</h2>
        <p style="color: #666; margin-top: 15px;">Wadah bagi siswa untuk mengeksplorasi bakat, mengasah kepemimpinan, dan meraih prestasi di luar bidang akademik.</p>
    </div>

    <div class="ekstra-grid">
        <a href="{{ route('views.ekstra.detail', 'osis') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Organisasi</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="OSIS">
            <h3>OSIS</h3>
            <p>Pusat organisasi siswa yang mengelola berbagai kegiatan sekolah dan kepemimpinan.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'pramuka') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Wajib / Karakter</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Pramuka">
            <h3>Pramuka</h3>
            <p>Membentuk karakter disiplin, kemandirian, dan cinta alam melalui kegiatan kepanduan.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'paskibra') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Karakter</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Paskibra">
            <h3>Paskibra</h3>
            <p>Pelatihan baris-berbaris dan penanaman jiwa nasionalisme yang kuat.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'taekwondo') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Taekwondo">
            <h3>Taekwondo</h3>
            <p>Seni bela diri asal Korea untuk melatih fisik, mental, dan pertahanan diri.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'basket') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Basketball Club">
            <h3>Basketball Club</h3>
            <p>Tim basket SMK MARHAS yang aktif mengikuti kompetisi antar pelajar.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'futsal') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Futsal">
            <h3>Futsal Putra/Putri</h3>
            <p>Ekstrakurikuler terfavorit yang fokus pada teknik bola dan kerjasama tim.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'badminton') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Badminton">
            <h3>Badminton</h3>
            <p>Wadah bagi pecinta bulutangkis untuk mengasah teknik smes dan kelincahan.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'pencaksilat') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Bela Diri</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Pencak Silat">
            <h3>Pencak Silat</h3>
            <p>Melestarikan budaya bangsa melalui seni bela diri tradisional Indonesia.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'voli') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Olahraga</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Bola Voli">
            <h3>Bola Voli</h3>
            <p>Latihan rutin untuk membangun kekuatan fisik dan strategi permainan voli.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'english') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Akademik</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="English Club">
            <h3>English Club</h3>
            <p>Mengasah kemampuan berbicara, debat, dan storytelling dalam bahasa Inggris.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'smart') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Sains/Teknologi</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="SMART">
            <h3>SMART</h3>
            <p>Wadah kreativitas siswa dalam bidang sains, penelitian, dan inovasi.</p>
        </a>

        <a href="{{ route('views.ekstra.detail', 'mio') }}" class="ekstra-card fade-in">
            <span class="tag-kategori">Kesenian</span>
            <img src="{{ asset('image/placeholder_logo.png') }}" class="ekstra-logo" alt="Mio">
            <h3>Mio</h3>
            <p>Ekstrakurikuler bidang musik dan kesenian untuk menyalurkan bakat seni siswa.</p>
        </a>
    </div>
</section>
@endsection
