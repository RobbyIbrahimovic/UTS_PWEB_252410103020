@extends('layouts.app')

@section('title', 'Profil Pengguna - Prompt Engineering Events')

@section('content')
<div class="max-w-2xl mx-auto py-4">
    {{-- Card Profil Geometris --}}
    <div class="bg-slate-900/80 border border-slate-800 rounded-sm p-6 sm:p-8 relative shadow-2xl backdrop-blur-sm">
        <div class="w-3.5 h-3.5 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
        <div class="w-3.5 h-3.5 border-b-2 border-r-2 border-cyan-400 absolute bottom-0 right-0"></div>

        {{-- Header Card --}}
        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 pb-6 border-b border-slate-800 text-center sm:text-left">
            <div class="w-20 h-20 rotate-45 border-2 border-cyan-400 bg-cyan-950/40 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(34,211,238,0.25)]">
                <span class="-rotate-45 font-black text-2xl text-cyan-300 font-mono">
                    {{ strtoupper(substr($username, 0, 2)) }}
                </span>
            </div>

            <div class="flex-grow">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <h2 class="text-2xl font-bold text-white tracking-wide">{{ $username }}</h2>
                    <span class="inline-flex items-center px-3 py-1 bg-cyan-950/80 border border-cyan-500/50 text-cyan-300 text-xs font-mono rounded-sm self-center sm:self-auto">
                        Peserta Event
                    </span>
                </div>
                <p class="text-xs text-slate-400 font-mono mt-1">ID CARD PESERTA &bull; PROMPT ENGINEERING 2026</p>
            </div>
        </div>

        {{-- Detail Informasi --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 py-6 text-sm">
            <div class="p-3.5 bg-slate-950/60 border border-slate-800/80 rounded-sm">
                <div class="text-[11px] font-mono text-slate-400 uppercase">Nama Peserta</div>
                <div class="font-semibold text-white mt-0.5">{{ $username }}</div>
            </div>

            <div class="p-3.5 bg-slate-950/60 border border-slate-800/80 rounded-sm">
                <div class="text-[11px] font-mono text-slate-400 uppercase">Status Partisipasi</div>
                <div class="font-semibold text-cyan-400 mt-0.5">Peserta Event</div>
            </div>

            <div class="p-3.5 bg-slate-950/60 border border-slate-800/80 rounded-sm">
                <div class="text-[11px] font-mono text-slate-400 uppercase">Komunitas</div>
                <div class="font-semibold text-slate-200 mt-0.5">Prompt Engineering Enthusiast</div>
            </div>

            <div class="p-3.5 bg-slate-950/60 border border-slate-800/80 rounded-sm">
                <div class="text-[11px] font-mono text-slate-400 uppercase">Tahun Partisipasi</div>
                <div class="font-semibold text-slate-200 mt-0.5">2026 (Active Batch)</div>
            </div>
        </div>

        {{-- Navigasi Tombol Aksi --}}
        <div class="pt-4 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-3">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="text-xs text-slate-400 hover:text-cyan-400 transition flex items-center gap-1.5">
                &larr; Kembali ke Dashboard
            </a>

            <div class="flex items-center gap-2">
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="px-4 py-2 bg-indigo-950 border border-indigo-700/60 text-cyan-300 hover:bg-indigo-900 text-xs font-semibold rounded-sm transition">
                    Kelola Event
                </a>
                <a href="{{ route('login') }}" class="px-4 py-2 border border-slate-700 hover:border-slate-500 text-slate-300 text-xs rounded-sm transition">
                    Keluar / Ganti Akun
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

