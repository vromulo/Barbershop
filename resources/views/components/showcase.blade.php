@props([
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
])

<section id="showcase" class="py-20 relative overflow-hidden">
    <!-- Atmospheric background light accents -->
    <div class="pointer-events-none absolute top-1/2 left-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl -z-10"></div>
    <div class="pointer-events-none absolute bottom-10 right-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-panel border-amber-500/20 bg-amber-500/5 mb-3">
                <span class="text-xs font-semibold tracking-wider uppercase text-amber-400">The Experience</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">
                More Than Just A Haircut
            </h2>
            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                Step into an elevated environment dedicated to detail, precision tool craft, and reliable appointment scheduling.
            </p>
        </div>

        <!-- Showcase Bento / Feature Presentation Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left: Curated Visual Atmosphere Grid (7 Cols on desktop) -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Large Feature Image Card -->
                <div class="sm:col-span-2 relative h-72 rounded-3xl glass-panel p-2 border border-white/10 overflow-hidden group shadow-glass-sm">
                    <img 
                        src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=1200&auto=format&fit=crop" 
                        alt="Vintage barbershop chair and mirror atmosphere" 
                        class="w-full h-full object-cover rounded-2xl filter brightness-90 group-hover:scale-105 transition-transform duration-700 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between">
                        <div>
                            <span class="text-xs font-mono uppercase tracking-widest text-amber-400">Atmosphere</span>
                            <h3 class="text-lg font-bold text-white">Classic Heritage & Modern Standards</h3>
                        </div>
                        <span class="hidden sm:inline-flex px-3 py-1 text-xs rounded-full glass-panel text-slate-300">Laguna, PH</span>
                    </div>
                </div>

                <!-- Small Grid Card 1: Tool Mastery -->
                <div class="relative h-56 rounded-3xl glass-panel p-2 border border-white/10 overflow-hidden group shadow-glass-sm">
                    <img 
                        src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?q=80&w=800&auto=format&fit=crop" 
                        alt="Sanitized barber clippers, razors, and grooming tools" 
                        class="w-full h-full object-cover rounded-2xl filter brightness-90 group-hover:scale-105 transition-transform duration-700 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-5 right-5">
                        <span class="text-[11px] font-mono uppercase text-amber-400">Sterile Setup</span>
                        <h4 class="text-sm font-semibold text-white">Hospital-Grade Sanitation</h4>
                    </div>
                </div>

                <!-- Small Grid Card 2: Precision Craft -->
                <div class="relative h-56 rounded-3xl glass-panel p-2 border border-white/10 overflow-hidden group shadow-glass-sm">
                    <img 
                        src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?q=80&w=800&auto=format&fit=crop" 
                        alt="Detailed beard lineup and hair styling" 
                        class="w-full h-full object-cover rounded-2xl filter brightness-90 group-hover:scale-105 transition-transform duration-700 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-5 right-5">
                        <span class="text-[11px] font-mono uppercase text-amber-400">Technique</span>
                        <h4 class="text-sm font-semibold text-white">Customized To Your Style</h4>
                    </div>
                </div>

            </div>

            <!-- Right: Feature Cards & Booking Experience (5 Cols on desktop) -->
            <div class="lg:col-span-5 flex flex-col gap-5">
                
                <!-- Benefit 1: Real-time Booking Flow -->
                <div class="glass-panel glass-panel-hover p-6 rounded-2xl border border-white/10">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-white mb-1">Guaranteed Scheduled Time</h3>
                            <p class="text-sm text-slate-300 leading-relaxed">
                                No wasted hours sitting in packed waiting areas. Reserve your slot via our automated calendar and take the chair right on time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Benefit 2: Tailored Consultations -->
                <div class="glass-panel glass-panel-hover p-6 rounded-2xl border border-white/10">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-white mb-1">One-on-One Barber Consultation</h3>
                            <p class="text-sm text-slate-300 leading-relaxed">
                                Every session begins with an evaluation of head shape, hair density, growth direction, and beard lines to match your personal vision.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Benefit 3: Premium Products -->
                <div class="glass-panel glass-panel-hover p-6 rounded-2xl border border-white/10">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-white mb-1">Artisan Pomades & Balms</h3>
                            <p class="text-sm text-slate-300 leading-relaxed">
                                We finish every cut with salon-grade hair clays, organic beard serums, and skin-soothing post-shave tonics.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Inline Action -->
                <div class="pt-2">
                    <x-button 
                        href="{{ $bookingUrl }}" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        variant="primary" 
                        size="md"
                        class="w-full sm:w-auto"
                    >
                        <span>Reserve Your Chair</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </x-button>
                </div>

            </div>

        </div>

    </div>
</section>