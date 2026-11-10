<nav class="bg-slate-950/80 backdrop-blur-md border-b border-indigo-900/60 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="flex items-center gap-2 text-white font-bold tracking-wider hover:opacity-90 transition">
                <span class="w-6 h-6 rotate-45 border-2 border-cyan-400 bg-cyan-400/20 flex items-center justify-center text-xs text-cyan-300 font-mono">✦</span>
                <span class="text-lg tracking-widest font-black">P<span class="text-cyan-400">.E</span></span>
            </a>

            <div class="flex items-center gap-4 sm:gap-6 text-sm font-medium">
                <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="text-slate-300 hover:text-cyan-400 transition">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="text-slate-300 hover:text-cyan-400 transition">
                    Kelola Event
                </a>
                <a href="{{ route('profile', ['username' => request('username')]) }}" class="text-slate-300 hover:text-cyan-400 transition">
                    Profile
                </a>

                @if (request('username'))
                    <a href="{{ route('login') }}" class="px-3 py-1.5 border border-cyan-400/60 text-cyan-300 rounded text-xs hover:bg-cyan-400/10 transition">
                        User: <span class="font-bold">{{ request('username') }}</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-1.5 bg-cyan-400 text-slate-950 font-semibold rounded text-xs hover:bg-cyan-300 transition shadow-[0_0_12px_rgba(34,211,238,0.4)]">
                        Masuk
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
