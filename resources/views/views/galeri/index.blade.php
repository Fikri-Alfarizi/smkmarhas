@extends('layouts.frontend')

@section('title', 'Registrasi Alumni - BKK SMK MARHAS')

@section('content')

<div class="bkk-hero fade-in">
    <h1>REGISTRASI ALUMNI</h1>
    <p>Lengkapi Form di bawah ini untuk terdata di Database Alumni</p>
</div>

<div class="page-container fade-in">
    <div class="content-grid">
        
        <div class="form-card">
            <h2 class="form-title">Formulir Data Diri Alumni</h2>
            <form action="#" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>NIS</label>
                    <input type="text" class="form-control" name="nis" placeholder="Ketik disini.." required>
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Ketik disini.." required>
                </div>

                <div class="form-group">
                    <label>Jurusan / Tahun Lulus</label>
                    <input type="text" class="form-control" name="jurusan_tahun" placeholder="Contoh: RPL/2017">
                </div>

                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl" placeholder="Ketik disini.. (Contoh: Bandung, 17 Agustus 2005)">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="jk" value="L"> Laki-laki</label>
                        <label class="radio-option"><input type="radio" name="jk" value="P"> Perempuan</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <div class="radio-group" style="column-gap: 15px; row-gap: 10px;">
                        <label class="radio-option"><input type="radio" name="agama" value="Islam"> Islam</label>
                        <label class="radio-option"><input type="radio" name="agama" value="Katolik"> Katolik</label>
                        <label class="radio-option"><input type="radio" name="agama" value="Protestan"> Protestan</label>
                        <label class="radio-option"><input type="radio" name="agama" value="Hindu"> Hindu</label>
                        <label class="radio-option"><input type="radio" name="agama" value="Budha"> Budha</label>
                        <label class="radio-option"><input type="radio" name="agama" value="Konghucu"> Konghucu</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" placeholder="Ketik disini.."></textarea>
                </div>

                <div class="form-group">
                    <label>Nomor HP/Whatsapp</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Ketik disini..">
                </div>

                <div class="form-group">
                    <label>Sosial Media</label>
                    <input type="text" class="form-control" name="sosmed" placeholder="Ketik disini.. (Contoh: IG @username)">
                </div>

                <div class="form-group">
                    <label>Kondisi dan Dimana</label>
                    <div class="radio-group" style="column-gap: 15px; row-gap: 10px;">
                        <label class="radio-option"><input type="radio" name="kondisi" value="Bekerja"> Bekerja</label>
                        <label class="radio-option"><input type="radio" name="kondisi" value="Wirausaha"> Wirausaha</label>
                        <label class="radio-option"><input type="radio" name="kondisi" value="Kuliah"> Kuliah</label>
                        <label class="radio-option"><input type="radio" name="kondisi" value="Belum Bekerja"> Belum Bekerja</label>
                        <label class="radio-option"><input type="radio" name="kondisi" value="Lain-lain"> Lain-lain</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Dimana dan Alamat (Tempat Kerja/Kuliah/Usaha)</label>
                    <input type="text" class="form-control" name="tempat_kondisi" placeholder="Ketik disini..">
                </div>

                <div class="btn-row">
                    <button type="submit" class="btn-submit">Daftar</button>
                    <button type="reset" class="btn-reset">Reset</button>
                </div>

            </form>
        </div>

        <div class="sidebar-card">
            <h3 class="sidebar-title"><i class="fas fa-briefcase"></i> Info Loker</h3>
            
            <div class="loker-list">
                <a href="#" class="loker-item">
                    <span class="loker-title">Junior Web Developer</span>
                    <span class="loker-meta">PT. Teknologi Maju • Bandung</span>
                </a>
                <a href="#" class="loker-item">
                    <span class="loker-title">Admin Gudang</span>
                    <span class="loker-meta">CV. Logistik Jaya • Cimahi</span>
                </a>
                <a href="#" class="loker-item">
                    <span class="loker-title">Teknisi Mesin CNC</span>
                    <span class="loker-meta">PT. Manufaktur Indonesia • Kab. Bandung</span>
                </a>
                <a href="#" class="loker-item">
                    <span class="loker-title">Staff Admin & Keuangan</span>
                    <span class="loker-meta">Klinik Sehat • Bandung</span>
                </a>
                
                <div style="text-align: center; margin-top: 10px;">
                    <a href="#" style="color: var(--primary-color); font-weight: 600; font-size: 14px; text-decoration: none;">Lihat Semua Lowongan &rarr;</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection