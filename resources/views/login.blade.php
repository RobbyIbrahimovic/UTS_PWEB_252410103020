@extends('layouts.app')

@section('title', 'Masuk - Prompt Engineering Events')

@section('content')
<div class="flex items-center justify-center py-10">
    <div class="w-full max-w-md">
        <div class="bg-slate-900/80 border border-slate-800 p-8 rounded-sm relative shadow-2xl backdrop-blur-sm">
            <div class="w-3 h-3 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
            <div class="w-3 h-3 border-b-2 border-r-2 border-cyan-400 absolute bottom-0 right-0"></div>

            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-10 h-10 border border-cyan-500/40 bg-cyan-500/10 text-cyan-300 font-mono text-sm rotate-45 mb-3">
                    <span class="-rotate-45 font-bold">P.E</span>
                </div>
                <h2 class="text-2xl font-bold tracking-tight text-white">MASUK</h2>
                <p class="text-xs text-slate-400 mt-1">Gunakan username anda untuk mengakses dashboard event</p>
            </div>

            <form action="{{ route('dashboard') }}" method="GET" class="space-y-4">
                <div>
                    <label for="username" class="block text-xs font-mono text-slate-300 mb-1.5 uppercase tracking-wider">
                        username pengguna
                    </label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        required 
                        autocomplete="off"
                        pattern="[a-zA-Z0-9 ]+"
                        oninvalid="this.value === '' ? this.setCustomValidity('Tolong isi form tersebut! :[') : this.setCustomValidity('Username hanya boleh berisi huruf, angka, dan spasi deska :P')"
                        oninput="this.setCustomValidity('')"
                        placeholder="Ex: Sasuke Deskah" 
                        class="w-full px-3.5 py-2.5 bg-slate-950/80 border border-slate-700 rounded-sm text-sm text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition"
                    >
                </div>

                <button 
                    type="submit" 
                    class="w-full py-2.5 bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-bold text-sm rounded-sm transition shadow-[0_0_15px_rgba(34,211,238,0.3)] mt-2"
                >
                    Masuk ke Dashboard &rarr;
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-slate-800 text-center">
                <span class="text-cyan-400 font-mono text-xs tracking-widest">◈ ◈ ◈</span>
            </div>
        </div>
    </div>
</div>
@endsection

