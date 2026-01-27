@extends('layouts.frontend')

@section('title', $ekstra['nama'] . ' - Ekstrakurikuler SMK MARHAS')

@section('content')

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Ekstrakurikuler', 'url' => route('views.ekstra')],
        ['label' => $ekstra['nama'], 'url' => null],
    ],
    'heading' => '<span class="highlight">' . e($ekstra['nama']) . '</span>'
])

<section class="ekstra-detail-section">
    <a href="{{ route('views.ekstra') }}" class="back-link fade-in">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Ekstrakurikuler
    </a>
    
    <div class="ekstra-detail-header fade-in">
        <div class="ekstra-icon-large">
            <img src="{{ asset('image/' . $ekstra['image']) }}" alt="{{ $ekstra['nama'] }}">
        </div>
        <div class="ekstra-header-info">
            <span class="tag-kategori">{{ $ekstra['kategori'] }}</span>
            <h1>{{ $ekstra['nama'] }}</h1>
        </div>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-info-circle"></i> Tentang</h2>
        <p>{{ $ekstra['deskripsi'] }}</p>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-calendar-alt"></i> Informasi</h2>
        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Jadwal</strong>
                    <span>{{ $ekstra['jadwal'] }}</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-user-tie"></i>
                <div>
                    <strong>Pembina</strong>
                    <span>{{ $ekstra['pembina'] }}</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Tempat</strong>
                    <span>{{ $ekstra['tempat'] }}</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-users"></i>
                <div>
                    <strong>Peserta</strong>
                    <span>{{ $ekstra['peserta'] }}</span>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($ekstra['sosmed']))
    <div class="detail-section fade-in">
        <h2><i class="fas fa-share-alt"></i> Sosial Media</h2>
        <div class="social-links">
            @if(isset($ekstra['sosmed']['instagram']))
            <a href="{{ $ekstra['sosmed']['instagram'] }}" target="_blank" class="social-link instagram">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            @endif
            @if(isset($ekstra['sosmed']['youtube']))
            <a href="{{ $ekstra['sosmed']['youtube'] }}" target="_blank" class="social-link youtube">
                <i class="fab fa-youtube"></i> YouTube
            </a>
            @endif
            @if(isset($ekstra['sosmed']['tiktok']))
            <a href="{{ $ekstra['sosmed']['tiktok'] }}" target="_blank" class="social-link tiktok">
                <i class="fab fa-tiktok"></i> TikTok
            </a>
            @endif
            @if(isset($ekstra['sosmed']['email']))
            <a href="{{ $ekstra['sosmed']['email'] }}" class="social-link email">
                <i class="fas fa-envelope"></i> Email
            </a>
            @endif
        </div>
    </div>
    @endif

    <div class="detail-section fade-in">
        <h2><i class="fas fa-images"></i> Galeri Foto</h2>
        <div class="photo-gallery">
            @for($i = 0; $i < $ekstra['photos']; $i++)
            <div class="photo-item">
                <i class="fas fa-image"></i>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection
