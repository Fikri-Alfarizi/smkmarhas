@extends('layouts.frontend')

@section('content')
  <div class="hero-wrapper">
    <div class="hero-slider" id="heroSlider">
      <div class="hero-text-overlay fade-in">
        <h1 style="font-size: 40px; font-weight: 800; margin-bottom: 10px;">SMK MARHAS<br>MARGAHAYU</h1>
        <p style="font-size: 18px; font-weight: 500;">Sekolah Pusat Keunggulan, Mencetak Generasi Kompeten dan Berkarakter.</p>
      </div>

      <div class="slider-container" id="sliderContainer">
        <div class="slide active" style="color: white; font-size: 32px; font-weight: bold;">
          1440x625px
        </div>
        <div class="slide" style="color: white; font-size: 32px; font-weight: bold;">
          1440x625px
        </div>
      </div>
      <div class="slider-nav">
        <div class="slider-dot active" data-slide="0"></div>
        <div class="slider-dot" data-slide="1"></div>
      </div>
    </div>
  </div>

  <div class="welcome-container">
    <div class="hero-stats-grid">
      <div class="fade-in fade-in-delay-1">
        <h2 style="font-size: 24px; margin-bottom: 15px; color: #333;">Kenapa Harus <br><span class="text-primary">SMK MARHAS?</span></h2>
        <div class="program-list">
          <div class="program-item-row">
            <div class="p-dot"><i class="fas fa-check"></i></div>
            <div class="p-text">Kurikulum Berbasis Industri</div>
          </div>
          <div class="program-item-row">
            <div class="p-dot"><i class="fas fa-check"></i></div>
            <div class="p-text">Fasilitas Praktik Lengkap</div>
          </div>
          <div class="program-item-row">
            <div class="p-dot"><i class="fas fa-check"></i></div>
            <div class="p-text">Penyaluran Kerja (BKK)</div>
          </div>
        </div>
        <a href="#" class="btn-primary" style="margin-top: 20px; width: 100%;">DAFTAR SPMB SEKARANG</a>
      </div>

      <div class="hero-cards-row fade-in fade-in-delay-2">
        <div class="card-placeholder">
          <span>249x200px</span>
          <div class="card-label">Ekstrakurikuler</div>
        </div>
        <div class="card-placeholder">
          <span>249x200px</span>
          <div class="card-label">Prestasi Siswa</div>
        </div>
        <div class="card-placeholder">
          <span>249x200px</span>
          <div class="card-label">Kunjungan Industri</div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-hero-slider">
    <div class="slide active">
      <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:24px;">
        480x200px</div>
    </div>
  </div>

  <div class="mobile-welcome fade-in">
    <h1>Selamat Datang di<br>SMK MARHAS</h1>
    <p>Pusat Keunggulan, Mencetak Generasi Kompeten.</p>
    <a href="#" class="mobile-program-btn">DAFTAR PPDB SEKARANG</a>
    <div class="mobile-program-list">
      <div class="mobile-program-item">
        <div class="mobile-program-dot"><i class="fas fa-check"></i></div>
        <div class="mobile-program-text">Kurikulum Industri</div>
      </div>
      <div class="mobile-program-item">
        <div class="mobile-program-dot"><i class="fas fa-check"></i></div>
        <div class="mobile-program-text">Fasilitas Lengkap</div>
      </div>
      <div class="mobile-program-item">
        <div class="mobile-program-dot"><i class="fas fa-check"></i></div>
        <div class="mobile-program-text">Siap Kerja</div>
      </div>
    </div>

    <div class="mobile-stats-row fade-in" style="display: flex; margin: 20px 0 0 0;">
      <div class="mobile-stat-item">
        <div class="stat-number">A</div>
        <div class="stat-label">Akreditasi<br>BAN-SM</div>
      </div>
      <div class="mobile-stat-item">
        <div class="stat-number">2</div>
        <div class="stat-label">Jurusan<br>Unggulan</div>
      </div>
      <div class="mobile-stat-item">
        <div class="stat-number">1k+</div>
        <div class="stat-label">Alumni<br>Terserap Kerja</div>
      </div>
    </div>
  </div>

  <div class="mobile-image-gallery fade-in fade-in-delay-1">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <div class="section-content">
    <div class="profile-layout">
      <div class="profile-image-placeholder fade-in">
        <i class="fas fa-image" style="font-size: 48px; margin-bottom: 10px; opacity: 0.7;"></i>
        <span>Upload Gambar</span>
        <span style="opacity: 0.7;">400 x 350 px</span>
      </div>

      <div class="profile-info">
        <h2 class="section-title fade-in">
          <span class="divider-v"></span>
          <span>Profil <span class="text-primary">Sekolah</span></span>
        </h2>
        <p class="profile-desc fade-in fade-in-delay-1">
          SMK MARHAS Margahayu adalah lembaga pendidikan kejuruan yang berdedikasi tinggi dalam mencetak lulusan yang
          siap kerja, cerdas, dan berakhlak mulia. Berlokasi strategis di Kabupaten Bandung, kami terus berinovasi
          dalam metode pembelajaran dan melengkapi fasilitas praktik sesuai standar industri terkini.
        </p>

        <div class="stats-row fade-in fade-in-delay-2">
          <div class="stats-item">
            <div class="big-number">A</div>
            <div class="stats-text">
              <div>Akreditasi</div>
              <div>BAN-SM</div>
            </div>
          </div>
          <div class="stats-item">
            <div class="big-number">2</div>
            <div class="stats-text">
              <div>Jurusan</div>
              <div>Unggulan</div>
            </div>
          </div>
          <div class="stats-item">
            <div class="big-number">1k+</div>
            <div class="stats-text">
              <div>Alumni</div>
              <div>Terserap Kerja</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="benefits-pill fade-in fade-in-delay-3">
      <div class="contact-info-box">
        <h3>Penerimaan Siswa Baru</h3>
        <p>Tahun Ajaran 2025/2026 Telah Dibuka!</p>
      </div>

      <div class="benefit-list">
        <div class="b-item">
          <div class="b-dot"><i class="fas fa-check"></i></div>Terakreditasi "A"
        </div>
        <div class="b-item">
          <div class="b-dot"><i class="fas fa-check"></i></div>Guru Sertifikasi
        </div>
        <div class="b-item">
          <div class="b-dot"><i class="fas fa-check"></i></div>Lingkungan Asri
        </div>
      </div>

      <a href="#" class="btn-primary">INFO LENGKAP</a>
    </div>

    <div class="programs-header fade-in">
      <h2>Kompetensi Keahlian</h2>
      <p class="fade-in fade-in-delay-1">Pilih jurusan sesuai minat dan bakatmu untuk masa depan gemilang</p>
    </div>

    <div class="program-grid">
      <div class="program-card fade-in fade-in-delay-1">
        <div class="pc-image-box">
          256x256
        </div>
        <div class="card-content">
          <h3 class="pc-title">Teknik Pemesinan</h3>
          <p class="pc-desc">Ahli dalam pengoperasian mesin bubut, CNC, dan manufaktur industri modern.</p>
          <div class="pc-arrow"><i class="fas fa-arrow-right"></i></div>
        </div>
      </div>

      <div class="program-card fade-in fade-in-delay-4">
        <div class="pc-image-box">
          256x256
        </div>
        <div class="card-content">
          <h3 class="pc-title">Rekayasa Perangkat Lunak</h3>
          <p class="pc-desc">Fokus pada pembuatan website, aplikasi mobile, dan coding profesional.</p>
          <div class="pc-arrow"><i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </div>

    <div class="dream-layout">
      <div class="dream-content">
        <div class="dream-subtitle fade-in">Visi Kami</div>
        <h2 class="dream-title fade-in">BMW: Bekerja, Melanjutkan, Wirausaha</h2>
        <div class="dream-tagline fade-in fade-in-delay-1">Siapkan Masa Depanmu di Sini</div>

        <div class="dream-buttons">
          <div class="db-row fade-in fade-in-delay-2">
            <div class="db-item bg-light-green">
              <div class="db-dot"><i class="fas fa-star"></i></div>Pendidikan Karakter
            </div>
            <div class="db-item bg-dark-green">
              <div class="db-dot"><i class="fas fa-star"></i></div>Siap Kerja
            </div>
          </div>
          <div class="db-row fade-in fade-in-delay-3">
            <div class="db-item bg-light-green">
              <div class="db-dot"><i class="fas fa-star"></i></div>Disiplin Tinggi
            </div>
            <div class="db-item bg-dark-green">
              <div class="db-dot"><i class="fas fa-star"></i></div>Kompeten
            </div>
          </div>
        </div>
      </div>

      <div class="dream-image-placeholder fade-in fade-in-delay-2">
        <i class="fas fa-image" style="font-size: 48px; margin-bottom: 10px; opacity: 0.7;"></i>
        <span>Upload Gambar</span>
        <span style="opacity: 0.7;">631 × 400 px</span>
      </div>
    </div>

    <div class="gallery-section">
      <h2 style="font-size: 36px; margin-bottom: 10px; font-weight: 700;" class="fade-in">Galeri Kegiatan</h2>
      <p style="color: #767676; font-weight: 500; margin-bottom: 20px;" class="fade-in fade-in-delay-1">Dokumentasi aktivitas siswa di lingkungan sekolah dan industri</p>

      <div class="gallery-layout-row">
        <div class="gallery-col-left fade-in fade-in-delay-2">
          <div class="gallery-grid">
            @for ($i = 0; $i < 12; $i++)
              <div class="gallery-item">
                1080x1080
              </div>
            @endfor
          </div>
          <div style="margin-top: 20px; text-align: left;">
            <a href="javascript:void(0);" id="loadMoreGallery" onclick="loadMoreGalleryItems()"
              style="color: var(--primary-color); font-weight: 600; text-decoration: none;">Lihat Seluruh Galeri &rarr;</a>
          </div>
        </div>

        <script>
          function loadMoreGalleryItems() {
            const galleryGrid = document.querySelector('.gallery-section .gallery-grid');
            const socialColumn = document.querySelector('.gallery-col-right');
            const loadMoreBtn = document.getElementById('loadMoreGallery');

            const addItems = () => {
              for (let i = 0; i < 12; i++) {
                const item = document.createElement('div');
                item.className = 'gallery-item fade-in';
                item.textContent = '1080x1080';
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                galleryGrid.appendChild(item);

                setTimeout(() => {
                  item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                  item.style.opacity = '1';
                  item.style.transform = 'translateY(0)';
                }, i * 50);
              }
            };

            const checkHeight = () => {
              const galleryHeight = galleryGrid.parentElement.offsetHeight;
              const socialHeight = socialColumn.offsetHeight;

              if (galleryHeight < socialHeight) {
                addItems();
                setTimeout(checkHeight, 100);
              } else {
                loadMoreBtn.innerHTML = 'Galeri Lengkap ✓';
                loadMoreBtn.style.pointerEvents = 'none';
                loadMoreBtn.style.color = '#888';
              }
            };

            checkHeight();
          }
        </script>

        <div class="gallery-col-right fade-in fade-in-delay-3">
          <div class="instagram-feed-container">
            <div class="instagram-header">
              <i class="fab fa-instagram" style="font-size: 24px;"></i>
              <span>@marhasupdate</span>
            </div>

            <div style="flex: 1; background: white; min-height: 500px;">
              <div class="tagembed-widget" style="width:100%;height:100%;min-height:500px;overflow:auto;"
                data-widget-id="313437" data-website="1"></div>
              <script src="https://widget.tagembed.com/embed.min.js" type="text/javascript"></script>
            </div>
          </div>

          <div class="tiktok-feed-container">
            <div class="tiktok-header">
              <i class="fab fa-tiktok" style="font-size: 24px;"></i>
              <span>@marhasupdate</span>
            </div>

            <div style="flex: 1; background: white;">
              <script src="https://elfsightcdn.com/platform.js" async></script>
              <div class="elfsight-app-e7b1febe-2c1c-4c20-9619-b3ca0f179095" data-elfsight-app-lazy></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-profile fade-in">
    <h2 class="mobile-profile-title">Profil SMK MARHAS</h2>
    <p class="mobile-profile-desc">
      SMK MARHAS Margahayu adalah lembaga pendidikan kejuruan yang berdedikasi tinggi dalam mencetak lulusan yang siap
      kerja, cerdas, dan berakhlak mulia.
    </p>

    <div class="mobile-stats">
      <div class="mobile-big-number">A</div>
      <div class="mobile-stats-text">
        <div>Akreditasi</div>
        <div>BAN-SM</div>
      </div>
      <div class="mobile-exp-badge">Terakreditasi</div>
    </div>

    <div class="mobile-profile-image">
      <i class="fas fa-image" style="font-size: 36px; margin-bottom: 8px; opacity: 0.7;"></i>
      <span>Upload Gambar</span>
      <span style="opacity: 0.7;">440x200px</span>
    </div>
  </div>

  <div class="mobile-benefits fade-in">
    <h3 class="mobile-benefits-title">PENERIMAAN SISWA BARU</h3>
    <div class="mobile-benefit-list">
      <div class="mobile-benefit-item">
        <div class="mobile-benefit-dot"><i class="fas fa-check"></i></div>
        <div>Terakreditasi "A"</div>
      </div>
      <div class="mobile-benefit-item">
        <div class="mobile-benefit-dot"><i class="fas fa-check"></i></div>
        <div>Guru Sertifikasi</div>
      </div>
      <div class="mobile-benefit-item">
        <div class="mobile-benefit-dot"><i class="fas fa-check"></i></div>
        <div>Lingkungan Asri</div>
      </div>
    </div>
    <div class="mobile-contact-info">
      <h3>Tahun Ajaran 2025/2026</h3>
      <p>Telah Dibuka!</p>
    </div>
  </div>

  <div class="mobile-programs fade-in">
    <div class="mobile-programs-header">
      <h2>Kompetensi Keahlian</h2>
      <p>Pilih jurusan sesuai minat dan bakatmu</p>
    </div>
    <div class="mobile-program-grid">
      <div class="mobile-program-card fade-in fade-in-delay-1">
        <div></div>
        <div class="mobile-program-card-content">
          <h3 class="mobile-program-card-title">Teknik Pemesinan</h3>
          <p class="mobile-program-card-desc">Ahli operasional mesin & manufaktur</p>
          <div class="mobile-program-card-arrow">
            <i class="fas fa-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="mobile-program-card fade-in fade-in-delay-2">
        <div></div>
        <div class="mobile-program-card-content">
          <h3 class="mobile-program-card-title">RPL</h3>
          <p class="mobile-program-card-desc">Software Engineering & Coding</p>
          <div class="mobile-program-card-arrow">
            <i class="fas fa-arrow-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-dream fade-in">
    <div class="mobile-dream-content">
      <div class="mobile-dream-subtitle">Visi Kami</div>
      <h2 class="mobile-dream-title">BMW: Bekerja, Melanjutkan, Wirausaha</h2>
      <div class="mobile-dream-tagline">Siapkan Masa Depanmu di Sini</div>
    </div>
    <div class="mobile-dream-buttons">
      <div class="mobile-db-item light">
        <div class="mobile-db-dot"><i class="fas fa-star"></i></div>
        Pendidikan Karakter
      </div>
      <div class="mobile-db-item">
        <div class="mobile-db-dot"><i class="fas fa-star"></i></div>
        Siap Kerja
      </div>
      <div class="mobile-db-item light">
        <div class="mobile-db-dot"><i class="fas fa-star"></i></div>
        Disiplin Tinggi
      </div>
      <div class="mobile-db-item">
        <div class="mobile-db-dot"><i class="fas fa-star"></i></div>
        Kompeten
      </div>
    </div>
    <div class="mobile-dream-image fade-in fade-in-delay-1">
      <i class="fas fa-image" style="font-size: 36px; margin-bottom: 8px; opacity: 0.7;"></i>
      <span>Upload Gambar</span>
      <span style="opacity: 0.7;">440x180px</span>
    </div>
    <div class="mobile-dream-box">
      <h3 class="mobile-dream-box-title">SMK MARHAS</h3>
      <p class="mobile-dream-box-desc">Mencetak Generasi Kompeten dan Berkarakter</p>
    </div>
  </div>

  <div class="mobile-gallery fade-in">
    <div class="mobile-gallery-header">
      <h2>Galeri Kegiatan</h2>
      <p>Dokumentasi aktivitas siswa</p>
    </div>
    <div class="mobile-gallery-grid">
      <div class="mobile-gallery-item fade-in fade-in-delay-1">215x215px</div>
      <div class="mobile-gallery-item fade-in fade-in-delay-2">215x215px</div>
      <div class="mobile-gallery-item fade-in fade-in-delay-3">215x215px</div>
      <div class="mobile-gallery-item fade-in fade-in-delay-4">215x215px</div>
    </div>
  </div>
@endsection