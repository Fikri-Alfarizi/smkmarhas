@extends('layouts.frontend')

@section('title', $sarana['nama'] . ' - Sarana SMK MARHAS')

@section('content')

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Sarana & Prasarana', 'url' => route('views.sarana')],
        ['label' => $sarana['nama'], 'url' => null],
    ],
    'heading' => '<span class="highlight">' . e($sarana['nama']) . '</span>'
])

<section class="sarana-detail-section">
    <a href="{{ route('views.sarana') }}" class="back-link fade-in">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Sarana
    </a>
    
    <div class="sarana-detail-header fade-in">
        <div class="sarana-icon-large">
            <i class="{{ $sarana['icon'] }}"></i>
        </div>
        <div class="sarana-header-info">
            <h1>{{ $sarana['nama'] }}</h1>
        </div>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-info-circle"></i> Tentang Fasilitas</h2>
        <p>{{ $sarana['deskripsi'] }}</p>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-list-check"></i> Spesifikasi</h2>
        <div class="specs-grid">
            @foreach($sarana['spesifikasi'] as $spec)
            <div class="spec-item">
                <i class="fas fa-check-circle"></i>
                <span>{{ $spec }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-phone-alt"></i> Kontak & Informasi</h2>
        <div class="contact-links">
            <a href="mailto:{{ $sarana['kontak']['email'] }}" class="contact-link">
                <i class="fas fa-envelope"></i> {{ $sarana['kontak']['email'] }}
            </a>
            <a href="tel:{{ $sarana['kontak']['phone'] }}" class="contact-link">
                <i class="fas fa-phone"></i> {{ $sarana['kontak']['phone'] }}
            </a>
        </div>
    </div>

    <div class="detail-section fade-in">
        <h2><i class="fas fa-images"></i> Galeri Foto</h2>
        <div class="photo-gallery">
            @for($i = 0; $i < $sarana['photos']; $i++)
            <div class="photo-item">
                <i class="fas fa-image"></i>
            </div>
            @endfor
        </div>
    </div>
</section>

@endsection