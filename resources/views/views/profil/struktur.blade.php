@extends('layouts.frontend')

@section('title', 'Struktur Organisasi - SMK MARHAS Margahayu')

@section('content')


@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Profil', 'url' => null],
        ['label' => 'Struktur Organisasi', 'url' => null],
    ],
    'heading' => '<span class="highlight">SMK MARHAS Margahayu</span> Struktur Organisasi'
])

<section class="structure-section">
    <div class="fade-in">
        <span style="font-weight: 700; color: var(--primary-color); letter-spacing: 2px;">MANAGEMENT</span>
        <h2 style="font-size: 32px; color: #1f2937; margin-top: 10px;">STRUKTUR ORGANISASI</h2>
        <p style="color: #666; margin-top: 10px;">Sinergi untuk mewujudkan visi SMK MARHAS Margahayu</p>
    </div>

    <div style="margin-top: 50px; text-align: center;">
        <img src="{{ asset('image/bagan-struktur.png') }}" 
             alt="Struktur Organisasi" 
             style="width: 100%; max-width: 1000px; height: auto; display: block; margin: 0 auto;">
    </div>
</section>
@endsection