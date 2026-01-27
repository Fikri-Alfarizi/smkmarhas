@extends('layouts.frontend')

@section('title', $job['title'] . ' - ' . $job['company'] . ' | BKK SMK MARHAS')

@section('content')

@include('partials.hero-section', [
    'breadcrumbs' => [
        ['label' => 'Beranda', 'url' => route('views.beranda')],
        ['label' => 'BKK', 'url' => null],
        ['label' => 'Info Lowongan', 'url' => route('bkk.lowongan')],
        ['label' => 'Detail Lowongan', 'url' => null],
    ],
    'heading' => 'Detail <span class="highlight">Lowongan Kerja</span>'
])

<div class="container-custom" style="padding: 60px 64px;">
    <div class="job-detail-layout" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
        
        <div class="job-content fade-in">
            <div class="job-header" style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <span class="job-badge" style="background: var(--green-lightest); color: var(--primary-color); padding: 5px 12px; border-radius: 20px; font-size: 13px; font-weight: 600; display: inline-block; margin-bottom: 10px;">{{ $job['type'] }}</span>
                <h1 style="font-size: 32px; font-weight: 800; color: #1f2937; margin-bottom: 10px;">{{ $job['title'] }}</h1>
                <div class="job-company" style="font-size: 18px; color: #555; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-building" style="color: #aaa;"></i> {{ $job['company'] }}
                </div>
            </div>

            <div class="job-section" style="margin-bottom: 30px;">
                <h3 style="font-size: 20px; font-weight: 700; color: #333; margin-bottom: 15px;">Deskripsi Pekerjaan</h3>
                <p style="color: #555; line-height: 1.8; text-align: justify;">
                    {{ $job['description'] }}
                </p>
            </div>

            <div class="job-section" style="margin-bottom: 30px;">
                <h3 style="font-size: 20px; font-weight: 700; color: #333; margin-bottom: 15px;">Kualifikasi</h3>
                <ul style="list-style: none; padding: 0;">
                    @foreach($job['qualifications'] as $qual)
                    <li style="margin-bottom: 10px; padding-left: 25px; position: relative; color: #555;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--primary-color);"></i>
                        {{ $qual }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="job-contact-info" style="background: #f9f9f9; padding: 25px; border-radius: 12px;">
                <h3 style="font-size: 18px; font-weight: 700; color: #333; margin-bottom: 20px;">Informasi Perusahaan</h3>
                
                <div class="info-row" style="margin-bottom: 15px; display: flex; gap: 15px;">
                    <div class="icon" style="width: 24px; text-align: center; color: var(--primary-color);"><i class="fas fa-map-marker-alt" style="font-size: 20px;"></i></div>
                    <div class="info-text">
                        <div style="font-size: 13px; color: #888; margin-bottom: 5px; font-weight: 600;">ALAMAT KANTOR</div>
                        <div style="color: #333; font-weight: 500;">{{ $job['address'] }}</div>
                    </div>
                </div>

                <div class="info-row" style="display: flex; gap: 15px;">
                    <div class="icon" style="width: 24px; text-align: center; color: var(--primary-color);"><i class="fas fa-globe" style="font-size: 20px;"></i></div>
                    <div class="info-text">
                        <div style="font-size: 13px; color: #888; margin-bottom: 5px; font-weight: 600;">WEBSITE RESMI</div>
                        <a href="{{ $job['website'] }}" target="_blank" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">{{ $job['website'] }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-sidebar fade-in fade-in-delay-1">
            <div class="sidebar-card" style="background: white; border: 1px solid #eee; padding: 25px; border-radius: 12px; position: sticky; top: 100px;">
                <h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Ringkasan Lowongan</h4>
                
                <div class="summary-item" style="margin-bottom: 15px;">
                    <div style="font-size: 13px; color: #888;">Posisi</div>
                    <div style="font-weight: 600; color: #333;">{{ $job['title'] }}</div>
                </div>

                <div class="summary-item" style="margin-bottom: 15px;">
                    <div style="font-size: 13px; color: #888;">Lokasi</div>
                    <div style="font-weight: 600; color: #333;">{{ $job['location'] }}</div>
                </div>

                <div class="summary-item" style="margin-bottom: 15px;">
                    <div style="font-size: 13px; color: #888;">Batas Lamaran</div>
                    <div style="font-weight: 600; color: #d9534f;">{{ $job['deadline'] }}</div>
                </div>

                <div class="summary-item" style="margin-bottom: 25px;">
                    <div style="font-size: 13px; color: #888;">Jurusan Terkait</div>
                    <div style="font-weight: 600; color: var(--primary-color);">{{ $job['category'] }}</div>
                </div>

                <a href="#" class="btn-primary" style="display: block; width: 100%; text-align: center; margin-bottom: 10px;">LAMAR SEKARANG</a>
                <a href="{{ route('bkk.lowongan') }}" class="btn-secondary" style="display: block; width: 100%; text-align: center;">KEMBALI KE LIST</a>
            </div>
        </div>

    </div>
</div>

<style>
    @media (max-width: 900px) {
        .job-detail-layout {
            grid-template-columns: 1fr !important;
        }
        .container-custom {
            padding: 40px 20px !important;
        }
    }
</style>

@endsection