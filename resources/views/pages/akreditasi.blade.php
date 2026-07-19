@extends('layouts.app')
@section('title', 'Akreditasi KPI')

@section('content')
<div class="max-w-5xl mx-auto space-y-6">

  {{-- Header Card --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">
    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center flex-shrink-0">
      <i class="fas fa-certificate text-2xl text-teal-600"></i>
    </div>
    <div>
      <h2 class="text-xl font-extrabold text-gray-900">Sertifikat Akreditasi</h2>
      <p class="text-sm text-gray-500 mt-0.5">Program Studi Komunikasi dan Penyiaran Islam (KPI) S1 – STAIMAS Wonogiri</p>
    </div>
    <a href="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.pdf') }}" download
       class="ml-auto flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-colors shadow whitespace-nowrap">
      <i class="fas fa-download"></i> Unduh PDF
    </a>
  </div>

  {{-- PDF Viewer --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <iframe
      src="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.pdf') }}#toolbar=1&navpanes=0&scrollbar=1"
      class="w-full"
      style="height: 85vh; min-height: 600px; border: none;"
      title="Sertifikat Akreditasi KPI STAIMAS Wonogiri">
      <div class="p-8 text-center text-gray-500">
        <i class="fas fa-file-pdf text-4xl text-red-400 mb-3 block"></i>
        <p class="font-semibold">Browser Anda tidak mendukung tampilan PDF langsung.</p>
        <a href="{{ asset('assest/Sertifikat%20Akreditasi%20KPI.pdf') }}" download
           class="mt-4 inline-flex items-center gap-2 bg-teal-700 text-white px-5 py-2 rounded-lg font-semibold text-sm">
          <i class="fas fa-download"></i> Unduh Sertifikat
        </a>
      </div>
    </iframe>
  </div>

</div>
@endsection
