<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method untuk halaman Beranda
    public function index()
    {
        return view('views.beranda'); // atau nama view beranda Anda
    }

    // Method untuk halaman Profil Sekolah
    public function profilSekolah()
    {
        return view('views.profil.profilsekolah');
    }

    public function sambutan()
    {
        return view('views.profil.sambutan');
    }

    public function visimisi()
    {
        return view('views.profil.visimisi');
    }

    public function struktur()
    {
        return view('views.profil.struktur');
    }   

    public function sarana()
    {
        return view('views.profil.sarana');
    }

    public function fasilitas()
    {
        return view('views.profil.fasilitas');
    }

    public function ekstrakurikuler()
    {
        return view('views.profil.ekstrakurikuler');
    }

    public function mesin()
    {
        return view('views.kejuruan.teknikpemesinan');
    }

    public function pplg()
    {
        return view('views.kejuruan.pplg');
    }

    public function galeri()
    {
        return view('views.galeri.index');
    }

    public function registrasiAlumni() {
        return view('views.bkk.registrasialumni');
    }

    public function infoLowongan() {
        return view('views.bkk.infolowongan');
    }

    public function kontak()
    {
        return view('views.kontak');
    }

    public function berita()
    {
        return view('views.berita.index');
    }

    public function kurikulum()
    {
        return view('views.akademik.kurikulum');
    }

    public function kalender()
    {
        return view('views.akademik.kalender');
    }

    public function prestasi()
    {
        return view('views.akademik.prestasi');
    }
}