@props([
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
    'locationUrl' => 'https://maps.google.com/?q=261+Flagstone+Ln+Unit+5,+Raeford,+NC',
])

<section id="book" class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Glassmorphism Highlight Banner -->
        <div class="relative rounded-3xl glass-panel bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-amber-500/30 p-8 sm:p-12 lg:p-16 overflow-hidden shadow-2xl text-center">
            
            <!-- Ambient Glow Spots Inside the Card -->
            <div class="pointer-events-none absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-amber-500/20 rounded-full blur-3xl -z-10"></div>
            <div class="pointer-events-none absolute -bottom-24 right-10 w-72 h-72 bg-amber-600/10 rounded-full blur-3xl -z-10"></div>

            <!-- Top Pill Status -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border-amber-500/30 bg-amber-500/10 mb-6">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                <span class="text-xs font-semibold tracking-wider uppercase text-amber-300">
                    Appointments Available This Week
                </span>
            </div>

            <!-- Action Headline -->
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight max-w-3xl mx-auto leading-tight mb-6">
                Ready For Your Next <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-amber-400 to-amber-500">
                    Signature Cut?
                </span>
            </h2>

            <!-- Subtitle -->
            <p class="text-slate-300 text-sm sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed font-normal">
                Avoid the waiting room queue. Select your preferred service, choose an available time slot, and experience craft barbering in Raeford.
            </p>

            <!-- Dual Action Button Reusability -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-md mx-auto">
                <x-button 
                    href="{{ $bookingUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="primary" 
                    size="lg"
                    class="w-full sm:w-auto"
                >
                    <span>Book Appointment Online</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </x-button>

                <x-button 
                    href="{{ $locationUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="glass" 
                    size="lg"
                    class="w-full sm:w-auto"
                >
                    <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Get Directions</span>
                </x-button>
            </div>

            <!-- Shop Quick Info Footer Strip Inside Card -->
            <div class="mt-12 pt-8 border-t border-white/10 flex flex-wrap items-center justify-center gap-6 sm:gap-12 text-xs sm:text-sm text-slate-400">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                    <span>Walk-Ins Accommodated (Subject to availability)</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span>One Stop Barbershop, Raeford, NC</span>
                </div>
            </div>

        </div>

    </div>
</section>