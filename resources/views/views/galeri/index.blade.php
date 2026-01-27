@extends('layouts.frontend')

@section('title', 'Galeri Sekolah - SMK MARHAS Margahayu')

@section('content')

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'Galeri', 'url' => null],
    ],
    'heading' => 'Galeri <span class="highlight">Sekolah</span>'
])

<div class="container-custom">
    
    <div class="photo-grid">
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
        <div class="green-box fade-in" style="display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: bold;">1080x1080px</div>
    </div>

    <div class="btn-center-wrapper fade-in">
        <a href="#" class="btn-see-all">Lihat Semua Foto</a>
    </div>

    <div class="video-section fade-in">
        <div style="text-align: center;">
            <h2 class="section-title">Galeri Video</h2>
            <p style="color: #6b7280;">Cuplikan kegiatan dan profil sekolah</p>
        </div>

        <div class="video-grid">
            <div class="video-box" style="background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                1280x720px
            </div>

            <div class="video-box" style="background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                 1280x720px
            </div>
            
             <div class="video-box" style="background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                1280x720px
           </div>

           <div class="video-box" style="background: var(--green-medium); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                1280x720px
           </div>
        </div>
    </div>

</div>
@endsection