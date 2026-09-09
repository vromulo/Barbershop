@props([
    'variant' => 'primary', // 'primary' (gold), 'glass' (frosted secondary), 'outline'
    'size' => 'md',        // 'sm', 'md', 'lg'
    'href' => null,        // If provided, renders as <a>, otherwise <button>
    'type' => 'button',
])

@php
    $baseClasses = "inline-flex items-center justify-center font-medium tracking-wide transition-all duration-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-brand-dark disabled:opacity-50 disabled:cursor-not-allowed select-none group";

    $sizeClasses = match ($size) {
        'sm' => 'px-3.5 py-1.5 text-xs gap-1.5',
        'lg' => 'px-7 py-3.5 text-base gap-2.5',
        default => 'px-5 py-2.5 text-sm gap-2',
    };

    $variantClasses = match ($variant) {
        'primary' => 'bg-amber-500 hover:bg-amber-400 text-black font-semibold shadow-gold-glow hover:shadow-[0_0_30px_-2px_rgba(245,158,11,0.5)] focus:ring-amber-400 active:scale-[0.98]',
        'glass' => 'glass-panel hover:bg-white/10 text-white border-white/10 hover:border-white/20 shadow-glass-sm focus:ring-white/20 active:scale-[0.98]',
        'outline' => 'bg-transparent text-amber-400 border border-amber-500/40 hover:bg-amber-500/10 hover:border-amber-400 focus:ring-amber-500 active:scale-[0.98]',
        default => 'bg-amber-500 hover:bg-amber-400 text-black font-semibold',
    };

    $classes = "{$baseClasses} {$sizeClasses} {$variantClasses}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif