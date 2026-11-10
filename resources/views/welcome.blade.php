@extends('layouts.app')

@section('title', 'Prompt Engineering Events')

@section('content')
<div class="py-12 text-center">
    {{-- Badge Placeholder --}}
    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-cyan-500/40 bg-cyan-950/40 text-cyan-300 text-xs font-mono mb-6">
        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
        Lorem Ipsum Dolor Sit Amet
    </div>

    {{-- Head Utama Prompt Engineering Enthusiast --}}
    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
        PROMPT ENGINEERING <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-indigo-400 to-purple-400">ENTHUSIAST</span>
    </h1>
    <p class="text-slate-400 max-w-xl mx-auto text-sm sm:text-base mb-8">
        Hub eksplorasi dan wadah belajar bagi para prompt enjoyer untuk mengasah skill AI prompting, riset konteks, dan eksperimen teknologi generasi terbaru.
    </p>

    {{-- Placeholder Card --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left">
        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-cyan-500/50 transition">
            <div class="w-3 h-3 border-t-2 border-l-2 border-cyan-400 absolute top-0 left-0"></div>
            <div class="text-xs font-mono text-cyan-400 mb-2">01 / SECTION ALPHA</div>
            <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
            <p class="text-xs text-slate-400">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-indigo-500/50 transition">
            <div class="w-3 h-3 border-t-2 border-l-2 border-indigo-400 absolute top-0 left-0"></div>
            <div class="text-xs font-mono text-indigo-400 mb-2">02 / SECTION BETA</div>
            <h3 class="text-lg font-bold text-white mb-1">Dolor Sit Amet</h3>
            <p class="text-xs text-slate-400">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
        </div>

        <div class="p-5 bg-slate-900/60 border border-slate-800 rounded-sm relative group hover:border-purple-500/50 transition">
            <div class="w-3 h-3 border-t-2 border-l-2 border-purple-400 absolute top-0 left-0"></div>
            <div class="text-xs font-mono text-purple-400 mb-2">03 / SECTION GAMMA</div>
            <h3 class="text-lg font-bold text-white mb-1">Consectetur Elit</h3>
            <p class="text-xs text-slate-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
        </div>
    </div>
</div>
@endsection
