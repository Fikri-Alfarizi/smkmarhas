@extends('layouts.frontend')

@section('title', 'Hubungi Kami - SMK MARHAS Margahayu')

@section('content')


    @include('partials.hero-section', [
        'breadcrumbs' => [
            ['label' => 'Beranda', 'url' => route('views.beranda')],
            ['label' => 'Kontak', 'url' => null],
        ],
        'heading' => 'Hubungi <span class="highlight">Kami</span>'
    ])

    <section class="contact-container">
        <div class="contact-info">
            <div class="fade-in">
                <span class="section-badge">INFO KONTAK</span>
                <h2 style="margin: 15px 0 30px;">Saluran Komunikasi <br><span class="text-primary">Resmi Sekolah</span></h2>
            </div>

            <div class="info-item fade-in">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info-text">
                    <h4>Alamat Sekolah</h4>
                    <p>Jl. Terusan Kopo No.385/299, Margahayu Sel., Kec. Margahayu, Kabupaten Bandung, Jawa Barat 40226</p>
                </div>
            </div>

            <div class="info-item fade-in">
                <i class="fas fa-phone-alt"></i>
                <div class="info-text">
                    <h4>Telepon / Fax</h4>
                    <p>(022) 5410926</p>
                </div>
            </div>

            <div class="info-item fade-in">
                <i class="fas fa-envelope"></i>
                <div class="info-text">
                    <h4>Email</h4>
                    <p>adm.smkmarhas@gmail.com</p>
                </div>
            </div>

            <div class="info-item fade-in">
                <i class="fas fa-clock"></i>
                <div class="info-text">
                    <h4>Jam Operasional</h4>
                    <p>Senin - Jumat: 06:45 – 16:45 WIB<br>Sabtu - Minggu: Tutup</p>
                </div>
            </div>
        </div>

        <div class="contact-form fade-in">
            <div class="contact-form-card">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="email@contoh.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subjek</label>
                        <input type="text" class="form-control" placeholder="Tujuan pesan (Misal: Info PPDB)">
                    </div>
                    <div class="form-group">
                        <label>Pesan Anda</label>
                        <textarea class="form-control" rows="5"
                            placeholder="Tuliskan pesan Anda secara detail..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 15px;">KIRIM PESAN
                        SEKARANG</button>
                </form>
            </div>
        </div>
    </section>

    <section class="map-section fade-in">
        <div class="map-wrapper">
            <iframe width="100%" height="650px" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2NIWI3Tv9iDPrlnowr_0ZqZWoAQydKJU&q=SMK%20Marhas%20Margahayu%20(SMK%20Pusat%20Keunggulan)%2C%20Jalan%20Terusan%20Kopo%2C%20Margahayu%20Selatan%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2C%20Indonesia&maptype=roadmap"
                allowfullscreen></iframe>
        </div>
    </section>
@endsection