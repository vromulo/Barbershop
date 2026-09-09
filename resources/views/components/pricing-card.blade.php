@props([
    'name',
    'price',
    'period' => null,
    'description',
    'features' => [],
    'popular' => false,
    'badge' => null,
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
    'ctaText' => 'Book This Service',
])

<div {{ $attributes->merge([
    'class' => 'relative rounded-3xl p-6 sm:p-8 flex flex-col justify-between transition-all duration-300 ' . 
    ($popular 
        ? 'glass-panel bg-brand-surface/90 border-amber-500/40 shadow-gold-glow -translate-y-2 lg:-translate-y-3' 
        : 'glass-panel glass-panel-hover border-white/10')
]) }}>
    
    <!-- Top Highlight Badge for Popular / Recommended Plan -->
    @if ($popular || $badge)
        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-amber-500 text-black shadow-md">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                {{ $badge ?? 'Most Requested' }}
            </span>
        </div>
    @endif

    <div>
        <!-- Plan Header -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-white tracking-tight mb-2">{{ $name }}</h3>
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">{{ $description }}</p>
        </div>

        <!-- Price Display -->
        <div class="flex items-baseline gap-1.5 mb-6 pb-6 border-b border-white/10">
            <span class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">{{ $price }}</span>
            @if ($period)
                <span class="text-xs text-slate-400 font-medium tracking-wide">/ {{ $period }}</span>
            @endif
        </div>

        <!-- Included Services Checklist -->
        <div class="space-y-3.5 mb-8">
            <span class="text-xs font-semibold tracking-wider uppercase text-slate-400">Included In Service:</span>
            <ul class="space-y-3">
                @foreach ($features as $feature)
                    <li class="flex items-start gap-3 text-sm text-slate-200">
                        <div class="w-5 h-5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Card Booking CTA -->
    <div class="pt-2">
        <x-button 
            href="{{ $bookingUrl }}" 
            target="_blank" 
            rel="noopener noreferrer" 
            variant="{{ $popular ? 'primary' : 'glass' }}" 
            size="md"
            class="w-full text-center"
        >
            <span>{{ $ctaText }}</span>
            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </x-button>
    </div>

</div>