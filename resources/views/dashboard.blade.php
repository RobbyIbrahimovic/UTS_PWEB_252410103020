@extends('layouts.app')

@section('title', 'Dashboard - Prompt Engineering Events')

@section('content')
<div class="space-y-8">
    {{-- Banner Utama Geometris --}}
    <div class="p-6 sm:p-8 bg-slate-900/80 border border-slate-800 rounded-sm relative overflow-hidden shadow-xl backdrop-blur-sm">
        <div class="w-4 h-4 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
        <div class="w-4 h-4 border-b-2 border-r-2 border-cyan-400 absolute bottom-0 right-0"></div>

        <div class="relative z-10 max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-xs font-mono rounded-sm mb-4">
                <span class="w-2 h-2 rotate-45 bg-cyan-400"></span>
                SESI AKTIF: <span class="font-bold text-white">{{ $username }}</span>
            </div>

            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white mb-3">
                Selamat Datang di Tech Event Hub, <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-indigo-400 to-purple-400">{{ $username }}</span>
            </h1>

            <p class="text-slate-400 text-sm sm:text-base leading-relaxed mb-6">
                Eksplorasi rangkaian seminar, workshop, dan forum diskusi tingkat lanjut seputar Prompt Engineering dan ekosistem Artificial Intelligence modern.
            </p>

            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="px-5 py-2.5 bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-bold text-xs rounded-sm transition shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                    Lihat Daftar Event &rarr;
                </a>
                <a href="{{ route('profile', ['username' => $username]) }}" class="px-5 py-2.5 border border-slate-700 hover:border-slate-500 text-slate-300 text-xs rounded-sm transition">
                    Lihat Profil Pengguna
                </a>
            </div>
        </div>
    </div>

    {{-- Ringkasan Banner & Info Geometris --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-cyan-500/40 transition">
            <div class="w-2.5 h-2.5 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
            <div class="text-[11px] font-mono text-cyan-400 mb-1">AGENDA EVENT</div>
            <h3 class="text-lg font-bold text-white mb-1">Workshop &amp; Webinar</h3>
            <p class="text-xs text-slate-400">Rangkaian sesi intensif bersama para praktisi dan pakar AI.</p>
        </div>

        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-indigo-500/40 transition">
            <div class="w-2.5 h-2.5 border-t-2 border-l-2 border-indigo-400 absolute top-0 left-0"></div>
            <div class="text-[11px] font-mono text-indigo-400 mb-1">TINGKAT KEMAMPUAN</div>
            <h3 class="text-lg font-bold text-white mb-1">Pemula hingga Expert</h3>
            <p class="text-xs text-slate-400">Materi terstruktur mulai dari etika prompt hingga skala produksi.</p>
        </div>

        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-purple-500/40 transition">
            <div class="w-2.5 h-2.5 border-t-2 border-l-2 border-purple-400 absolute top-0 left-0"></div>
            <div class="text-[11px] font-mono text-purple-400 mb-1">MANFAAT PESERTA</div>
            <h3 class="text-lg font-bold text-white mb-1">Sertifikat &amp; Jejaring</h3>
            <p class="text-xs text-slate-400">Bangun koneksi dengan sesama prompt engineer di seluruh Indonesia.</p>
        </div>
    </div>
</div>
@endsection

