@extends('layouts.frontend')

@section('title', 'Kalender Akademik 2026 - SMK MARHAS')

@section('content')
@php
    $startYear = 2026;
    $startDate = \Carbon\Carbon::create($startYear, 1, 1);
    $endDate = \Carbon\Carbon::create($startYear, 12, 31);
    
    $events = [
        "2026-01-01" => ["title" => "Tahun Baru Masehi", "desc" => "Libur Nasional Tahun Baru 2026.", "type" => "red"],
        "2026-01-05" => ["title" => "Hari Pertama Sekolah", "desc" => "Awal Semester Genap. Seluruh siswa wajib hadir.", "type" => "green"],
        "2026-01-26" => ["title" => "Mulai PKL Tahap 2", "desc" => "Pelepasan siswa kelas XI untuk PKL.", "type" => "white"],
        "2026-02-17" => ["title" => "Isra Mi'raj", "desc" => "Libur Peringatan Isra Mi'raj Nabi Muhammad SAW.", "type" => "red"],
        "2026-02-23" => ["title" => "PTS Genap", "desc" => "Penilaian Tengah Semester Genap dimulai.", "type" => "green"],
        "2026-03-11" => ["title" => "Libur Awal Puasa", "desc" => "Perkiraan libur awal Puasa Ramadhan 1447 H.", "type" => "red"],
        "2026-04-10" => ["title" => "Cuti Bersama", "desc" => "Cuti Bersama Hari Raya Idul Fitri.", "type" => "red"],
        "2026-04-11" => ["title" => "Idul Fitri 1447 H", "desc" => "Hari Raya Idul Fitri 1 Syawal 1447 H.", "type" => "red"],
        "2026-05-01" => ["title" => "Hari Buruh", "desc" => "Libur Nasional Hari Buruh Internasional.", "type" => "red"],
        "2026-05-14" => ["title" => "Kenaikan Isa Almasih", "desc" => "Libur Nasional Kenaikan Isa Almasih.", "type" => "red"],
        "2026-06-01" => ["title" => "Hari Lahir Pancasila", "desc" => "Libur Nasional Hari Lahir Pancasila.", "type" => "red"],
        "2026-06-15" => ["title" => "PAT Genap", "desc" => "Penilaian Akhir Tahun (PAT) Semester Genap.", "type" => "green"],
        "2026-06-27" => ["title" => "Pembagian Rapor", "desc" => "Pembagian Rapor Semester Genap.", "type" => "white"],
    ];
@endphp

<div class="kalender-wrapper">
    <div class="container-custom">
        <div class="page-title fade-in">
            <h1>Kalender Akademik 2026</h1>
            <p>Agenda Kegiatan Semester Genap & Ganjil</p>
        </div>

        <div class="year-grid fade-in">
            @for ($m = 1; $m <= 12; $m++)
                @php
                    $dt = \Carbon\Carbon::create($startYear, $m, 1);
                    $monthName = $dt->translatedFormat('F');
                    $daysInMonth = $dt->daysInMonth;
                    $firstDayOfWeek = $dt->dayOfWeek;
                @endphp

                <div class="month-card">
                    <div class="month-name">{{ $monthName }}</div>
                    
                    <div class="days-header">
                        <div>Min</div>
                        <div>Sen</div>
                        <div>Sel</div>
                        <div>Rab</div>
                        <div>Kam</div>
                        <div>Jum</div>
                        <div>Sab</div>
                    </div>

                    <div class="days-grid">
                        @for ($i = 0; $i < $firstDayOfWeek; $i++)
                            <div class="day-cell empty"></div>
                        @endfor

                        @for ($d = 1; $d <= $daysInMonth; $d++)
                            @php
                                $currentDate = \Carbon\Carbon::create($startYear, $m, $d);
                                $dateString = $currentDate->format('Y-m-d');
                                $isWeekend = ($currentDate->dayOfWeek == 0);
                                
                                $cellClass = '';
                                $eventTitle = '';
                                $eventDesc = 'Tidak ada agenda khusus.';
                                $eventCategory = '';

                                if (isset($events[$dateString])) {
                                    $ev = $events[$dateString];
                                    $cellClass = 'has-event event-' . $ev['type'];
                                    $eventTitle = $ev['title'];
                                    $eventDesc = $ev['desc'];
                                    
                                    if ($ev['type'] == 'red') $eventCategory = 'Libur Nasional';
                                    elseif ($ev['type'] == 'green') $eventCategory = 'Agenda Sekolah';
                                    else $eventCategory = 'Info Penting';

                                } elseif ($isWeekend) {
                                    $cellClass = 'is-weekend';
                                    $eventTitle = 'Minggu';
                                    $eventCategory = 'Libur Akhir Pekan';
                                }

                                $safeTitle = addslashes($eventTitle ?: 'Normal');
                                $safeDesc = addslashes($eventDesc);
                                $safeCat = addslashes($eventCategory ?: 'Hari Biasa');
                                $displayDate = $currentDate->translatedFormat('l, d F Y');
                            @endphp

                            <div class="day-cell {{ $cellClass }} {{ $dateString == date('Y-m-d') ? 'today' : '' }}"
                                 onclick="openModal('{{ $displayDate }}', '{{ $safeTitle }}', '{{ $safeCat }}', '{{ $safeDesc }}')">
                                {{ $d }}
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
@endsection