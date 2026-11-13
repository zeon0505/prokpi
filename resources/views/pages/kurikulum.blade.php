@extends('layouts.app')

@section('content')
<div class="space-y-10">

  {{-- Intro --}}
  <div class="bg-white rounded-3xl border border-gray-100 p-8 shadow-sm space-y-4">
    <div class="flex items-start gap-4">
      <div class="w-14 h-14 bg-teal-600 text-white rounded-2xl flex items-center justify-center text-xl shadow-lg flex-shrink-0">
        <i class="fas fa-graduation-cap"></i>
      </div>
      <div>
        <h2 class="font-bold text-gray-800 text-xl">Kurikulum S1 Komunikasi dan Penyiaran Islam</h2>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Kurikulum KPI dirancang untuk menghasilkan lulusan yang kompeten dalam komunikasi Islam, jurnalistik, produksi media, dan dakwah digital. Beban studi diselesaikan dalam 8 semester (4 tahun).</p>
      </div>
    </div>
  </div>

  {{-- Semester Map --}}
  <div class="space-y-4">
    <h3 class="font-bold text-gray-800 text-lg">Distribusi Mata Kuliah Per Semester</h3>

    @php
    $semesters = [
      1 => [
        'Pancasila dan Kewarganegaraan',
        'Bahasa Indonesia',
        'Bahasa Inggris',
        'Ilmu Tauhid',
        'Akhlaq Tasawuf',
        'Studi Islam dan Pemberdayaan Masyarakat',
        'Bahasa Arab',
        'Sejarah Peradaban Islam',
        'Metodologi Studi Islam',
        'Filsafat Umum',
      ],
      2 => [
        'English for Communication',
        'Pengantar Ilmu Komunikasi',
        'Dasar-Dasar Penyiaran',
        'Public Speaking',
        'Sosiologi Komunikasi',
        'Hukum dan Etika Media',
        'Fiqih Kontemporer',
      ],
      3 => [
        'Teori Komunikasi',
        'Komunikasi Islam',
        'Komunikasi Antar Budaya',
        'Psikologi Komunikasi',
        'Desain Komunikasi Visual',
        'Fotografi',
        'Komunikasi Massa',
        'Marketing Komunikasi',
      ],
      4 => [
        'Teknik Editing Video',
        'Teknik Lobi dan Negosiasi',
        'Pengelolaan Website',
        'Statistik Sosial',
        'Komunikasi Digital dan Media Baru',
        'Komunikasi Politik',
        'Dasar-Dasar Jurnalistik*',
        'Public Relation*',
      ],
      5 => [
        'Analisis Teks Media',
        'Metode Penelitian Kuantitatif',
        'Penulisan Kreatif*',
        'Protokoler dan MC*',
        'Jurnalistik Video*',
        'Jurnalistik Online*',
        'Produksi Konten Media Digital*',
        'Analisis Sosial Media**',
        'Bahasa Jurnalistik**',
      ],
      6 => [
        'Metode Penelitian Kualitatif',
        'Sinematografi',
        'Dakwah Kontemporer',
        'Periklanan dan Branding*',
        'Jurnalistik Investigasi*',
        'Penulisan Feature dan Opini*',
        'Manajemen Pers*',
        'Management Event*',
        'Teknik Announcing**',
        'Komunikasi Organisasi**',
      ],
      7 => [
        'Praktikum Profesi',
        'Kuliah Pengabdian Masyarakat',
      ],
      8 => [
        'Skripsi',
      ],
    ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      @foreach($semesters as $sem => $matkul)
      <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="bg-teal-700 px-5 py-3 flex items-center gap-3">
          <span class="text-white font-black text-lg">Semester {{ $sem }}</span>
          <span class="ml-auto text-[11px] text-teal-200 font-semibold bg-white/10 px-2.5 py-0.5 rounded-full">{{ count($matkul) }} MK</span>
        </div>
        <div class="px-5 py-4 space-y-1.5">
          @foreach($matkul as $mk)
          <div class="flex items-center gap-2.5 text-sm text-gray-700">
            <i class="fas fa-book-open text-teal-500 text-[11px] flex-shrink-0"></i>
            {{ $mk }}
          </div>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
    <p class="text-xs text-gray-500 italic mt-2">* / ** Mata Kuliah Peminatan / Konsentrasi</p>
  </div>

  {{-- Download CTA --}}
  <div class="bg-gray-100/70 border border-gray-200/50 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="flex items-center gap-4">
      <div class="w-14 h-14 bg-red-500 text-white rounded-2xl flex items-center justify-center text-xl shadow-lg shadow-red-500/10">
        <i class="fas fa-file-pdf"></i>
      </div>
      <div>
        <h4 class="font-bold text-gray-800 text-lg">Dokumen Lengkap Kurikulum KPI</h4>
        <p class="text-sm text-gray-500">Unduh dokumen resmi struktur kurikulum dalam format PDF.</p>
      </div>
    </div>
    <a href="https://drive.google.com/file/d/1Xh-8eYSYaGyTPKhzxoENRqqnvY7ydzk5/view?usp=sharing" target="_blank" class="w-full md:w-auto bg-teal-700 hover:bg-teal-800 text-white font-bold px-8 py-3.5 rounded-xl text-sm shadow transition-colors flex items-center justify-center gap-2">
      <i class="fas fa-cloud-download-alt"></i> Download PDF Kurikulum
    </a>
  </div>

</div>
@endsection
