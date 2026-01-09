@extends('layouts.frontend')

@section('title', 'Profil Sekolah - SMK MARHAS Margahayu')

@section('content')
    <style>
        /* --- CONTENT STYLES --- */
        .profile-section {
            padding: 80px 64px;
            background: #fff;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            /* box-shadow: 0 10px 30px rgba(0,0,0,0.05); */
            padding: 40px;
            margin-bottom: 40px;
            border: 1px solid #f0f0f0;
        }

        .section-badge {
            display: inline-block;
            padding: 8px 20px;
            background: var(--green-lightest);
            color: var(--primary-color);
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .content-text {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        .history-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .image-box {
            background: var(--primary-color);
            border-radius: 0;
            /* No radius - square box */
            height: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            line-height: 1.5;
            position: relative;
            overflow: hidden;
        }

        /* --- IDENTITAS TABLE --- */
        .table-identitas {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-identitas tr {
            border-bottom: 1px solid #eee;
        }

        .table-identitas td {
            padding: 15px;
            font-size: 15px;
        }

        .table-identitas td:first-child {
            font-weight: 700;
            color: #333;
            width: 30%;
            background: #f9fafb;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .profile-section {
                padding: 40px 20px;
            }

            .history-grid {
                grid-template-columns: 1fr;
            }

            .image-box {
                height: 250px;
            }

            .table-identitas td:first-child {
                width: 40%;
            }
        }
    </style>

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

                               <div class="image-box fade-in">
                <i class="fas fa-image" style="font-size: 48px; margin-bottom: 10px; opacity: 0.7;"></i>


                               <span>Upload Gambar</span>
                <span style="opacity: 0.7;">826 x 600 px</span>
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

@push('scripts')
    <script>
        // Pastikan animasi fade-in tetap berjalan di halaman ini
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
    </script>
@endpush