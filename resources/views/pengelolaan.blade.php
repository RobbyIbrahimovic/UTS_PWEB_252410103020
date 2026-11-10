@extends('layouts.app')

@section('title', 'Pengelolaan Event - Prompt Engineering Events')

@section('content')
<div class="space-y-6">
    {{-- header judul halaman --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-slate-800">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-xs font-mono rounded-sm mb-2">
                <span class="w-2 h-2 rotate-45 bg-cyan-400"></span>
                MANAJEMEN AGENDA &bull; SESI: <span class="font-bold text-white">{{ $username }}</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">
                Daftar &amp; Pengelolaan Event
            </h1>
            <p class="text-xs sm:text-sm text-slate-400 mt-1">
                Jadwal lengkap seminar dan workshop komunitas Prompt Engineering Enthusiast 2026.
            </p>
        </div>

        <div class="flex items-center gap-2 self-start sm:self-center">
            <span class="px-3 py-1.5 bg-slate-900 border border-slate-700 text-slate-300 text-xs font-mono rounded-sm">
                Total: {{ count($events) }} Event
            </span>
        </div>
    </div>

    {{-- tabel nampilin data event pake looping foreach --}}
    <div class="bg-slate-900/80 border border-slate-800 rounded-sm relative overflow-hidden shadow-2xl backdrop-blur-sm">
        <div class="w-3.5 h-3.5 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
        <div class="w-3.5 h-3.5 border-b-2 border-r-2 border-cyan-400 absolute bottom-0 right-0"></div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-950/80 text-[11px] font-mono text-slate-400 uppercase tracking-wider border-b border-slate-800">
                    <tr>
                        <th scope="col" class="py-3.5 px-4 text-center w-16">ID</th>
                        <th scope="col" class="py-3.5 px-4">Event</th>
                        <th scope="col" class="py-3.5 px-4">Pemateri</th>
                        <th scope="col" class="py-3.5 px-4">Kategori</th>
                        <th scope="col" class="py-3.5 px-4 text-center">Kuota</th>
                        <th scope="col" class="py-3.5 px-4 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80 text-slate-200">
                    @foreach ($events as $event)
                        <tr class="hover:bg-slate-800/40 transition">
                            <td class="py-4 px-4 text-center font-mono text-xs text-cyan-400">
                                #{{ str_pad($event['id'], 2, '0', STR_PAD_LEFT) }}
                            </td>
                            
                            {{-- poster dan nama event --}}
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-3">
                                    <img 
                                        src="{{ asset($event['foto_acara']) }}" 
                                        alt="{{ $event['nama_event'] }}" 
                                        class="w-14 h-10 object-cover rounded-sm border border-slate-700 shrink-0 shadow"
                                    >
                                    <span class="font-semibold text-white">
                                        {{ $event['nama_event'] }}
                                    </span>
                                </div>
                            </td>

                            {{-- foto profil pemateri dan namanya --}}
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-2.5">
                                    <img 
                                        src="{{ asset($event['foto_pemateri']) }}" 
                                        alt="{{ $event['pemateri'] }}" 
                                        class="w-8 h-8 rounded-full object-cover border border-cyan-400/60 shrink-0"
                                    >
                                    <span class="text-xs text-slate-200 font-medium">
                                        {{ $event['pemateri'] }}
                                    </span>
                                </div>
                            </td>

                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 bg-indigo-950/70 border border-indigo-700/50 text-indigo-300 text-xs font-mono rounded-sm">
                                    {{ $event['kategori'] }}
                                </span>
                            </td>

                            <td class="py-4 px-4 text-center font-mono text-xs text-slate-300">
                                {{ $event['kuota'] }} Kursi
                            </td>

                            {{-- badge status buka atau penuh --}}
                            <td class="py-4 px-4 text-center">
                                @if (in_array(strtolower($event['status']), ['buka', 'dibuka']))
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-emerald-950/60 border border-emerald-500/50 text-emerald-400 text-xs font-mono rounded-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                        {{ $event['status'] }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-rose-950/60 border border-rose-500/50 text-rose-400 text-xs font-mono rounded-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span>
                                        {{ $event['status'] }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- navigasi bawah --}}
    <div class="flex items-center justify-between text-xs text-slate-400 pt-2">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-cyan-400 transition flex items-center gap-1.5">
            &larr; Kembali ke Dashboard
        </a>
        <a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-cyan-400 transition flex items-center gap-1.5">
            Lihat Profil Peserta &rarr;
        </a>
    </div>
</div>
@endsection
