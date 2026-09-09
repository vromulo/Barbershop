@props([
    'title',
    'description',
    'icon' => null,
    'badge' => null,
    'duration' => null,
])

<div {{ $attributes->merge(['class' => 'group relative rounded-2xl glass-panel glass-panel-hover p-6 sm:p-7 flex flex-col justify-between transition-all duration-300 hover:border-amber-400/40']) }}>
    <!-- Ambient Inner Glow on Card Hover -->
    <div class="pointer-events-none absolute -inset-px rounded-2xl bg-gradient-to-b from-amber-400/10 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 -z-10"></div>

    <div>
        <!-- Card Header: Icon & Optional Tag -->
        <div class="flex items-center justify-between gap-4 mb-6">
            <div class="w-12 h-12 rounded-xl glass-panel bg-white/[0.06] border border-white/10 flex items-center justify-center text-amber-400 transition-transform duration-300 group-hover:scale-110 group-hover:bg-amber-400/10 group-hover:border-amber-400/30">
                @if (isset($iconSlot))
                    {{ $iconSlot }}
                @elseif ($icon)
                    {!! $icon !!}
                @else
                    <!-- Default Barber Shears Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879a3 3 0 11-4.242-4.242L10.757 10.5m1.243 1.5L9.121 9.121a3 3 0 10-4.242 4.242L7.757 16.243"/>
                    </svg>
                @endif
            </div>

            <div class="flex items-center gap-2">
                @if ($duration)
                    <span class="text-xs text-slate-400 font-medium px-2.5 py-1 rounded-full bg-white/[0.03] border border-white/5">
                        {{ $duration }}
                    </span>
                @endif

                @if ($badge)
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-300 px-2.5 py-1 rounded-full bg-amber-500/10 border border-amber-500/20">
                        {{ $badge }}
                    </span>
                @endif
            </div>
        </div>

        <!-- Service Details -->
        <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-300 transition-colors tracking-tight mb-2.5">
            {{ $title }}
        </h3>

        <p class="text-sm text-slate-300 leading-relaxed font-normal">
            {{ $description }}
        </p>
    </div>

    <!-- Subtle Bottom Link Indicator -->
    <div class="mt-6 pt-4 border-t border-white/5 flex items-center justify-between text-xs font-medium text-slate-400 group-hover:text-amber-400 transition-colors">
        <span>Available for booking</span>
        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </div>
</div>