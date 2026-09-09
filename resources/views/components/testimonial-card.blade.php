@props([
    'name',
    'role' => 'Verified Client', // Adapted from SaaS "position" to barbershop client type
    'photo' => null,
    'rating' => 5,
    'service' => null,
    'review',
])

<div {{ $attributes->merge(['class' => 'group relative rounded-3xl glass-panel glass-panel-hover p-6 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:border-amber-400/30']) }}>
    
    <!-- Top Row: Star Rating & Service Tag -->
    <div>
        <div class="flex items-center justify-between mb-5">
            <!-- 5-Star Indicator -->
            <div class="flex items-center gap-1 text-amber-400">
                @for ($i = 0; $i < $rating; $i++)
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                @endfor
            </div>

            @if ($service)
                <span class="text-[11px] font-medium tracking-wide text-slate-400 px-2.5 py-0.5 rounded-full bg-white/[0.04] border border-white/5">
                    {{ $service }}
                </span>
            @endif
        </div>

        <!-- Review Body Quote -->
        <blockquote class="text-sm sm:text-base text-slate-200 leading-relaxed font-normal mb-6 relative">
            <span class="text-3xl font-serif text-amber-400/30 select-none absolute -top-3 -left-2">“</span>
            <p class="relative z-10 pl-3">
                {{ $review }}
            </p>
        </blockquote>
    </div>

    <!-- Bottom Row: Client Identity -->
    <div class="flex items-center gap-3.5 pt-5 border-t border-white/10">
        <!-- Customer Photo Avatar -->
        <div class="relative w-11 h-11 rounded-full overflow-hidden border border-amber-500/30 bg-brand-surface shrink-0">
            @if ($photo)
                <img 
                    src="{{ $photo }}" 
                    alt="{{ $name }}" 
                    class="w-full h-full object-cover" 
                    loading="lazy"
                />
            @else
                <!-- Fallback Initial Avatar -->
                <div class="w-full h-full flex items-center justify-center font-bold text-sm text-amber-400 bg-amber-500/10">
                    {{ strtoupper(substr($name, 0, 1)) }}
                </div>
            @endif
        </div>

        <!-- Client Name & Designation -->
        <div class="flex flex-col">
            <span class="text-sm font-semibold text-white tracking-tight group-hover:text-amber-300 transition-colors">
                {{ $name }}
            </span>
            <div class="flex items-center gap-1.5">
                <svg class="w-3 h-3 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-xs text-slate-400">{{ $role }}</span>
            </div>
        </div>
    </div>

</div>