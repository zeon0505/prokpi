@extends('layouts.app')
@section('title', 'Akreditasi KPI')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">

  {{-- Card Wrapper Gambar Sertifikat --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden p-2 sm:p-4">
    <div class="w-full flex justify-center">
      <img 
        src="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.png') }}" 
        alt="Sertifikat Akreditasi KPI STAIMAS Wonogiri" 
        class="w-full h-auto rounded-xl border border-gray-100 shadow-sm object-contain"
        onerror="this.onerror=null; this.src='{{ asset('assest/Sertifikat Akreditasi KPI.jpg') }}';"
      />
    </div>
  </div>

  {{-- Tombol Aksi Tambahan di Bawah --}}
  <div class="flex justify-center gap-3">
    <a href="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.pdf') }}" target="_blank"
       class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-sm font-bold px-6 py-3 rounded-xl transition-all shadow">
      <i class="fas fa-file-pdf"></i> Lihat Versi PDF
    </a>
    <a href="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.png') }}" download
       class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-bold px-6 py-3 rounded-xl transition-all">
      <i class="fas fa-download"></i> Unduh Gambar
    </a>
  </div>

</div>
@endsection
