@props([
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
    'badgeText' => 'Master Barbering • Raeford, NC',
    'titleLine1' => 'Precision Cuts.',
    'titleLine2' => 'Timeless Craft.',
    'description' => 'Elevate your daily presence with bespoke grooming. From razor-sharp fades and crisp beard sculpts to traditional hot-towel straight razor shaves, James delivers mastery in every detail.',
])

<section id="home" class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copywriting & Actions (7 Cols on desktop) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left z-10">
                
                <!-- Eyebrow Pill -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border-amber-500/30 bg-amber-500/5 mb-6">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-amber-300">
                        {{ $badgeText }}
                    </span>
                </div>

                <!-- Main Display Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white leading-[1.08] mb-6">
                    {{ $titleLine1 }} <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-amber-400 to-amber-600">
                        {{ $titleLine2 }}
                    </span>
                </h1>

                <!-- Subtitle / Brand Description -->
                <p class="text-base sm:text-lg text-slate-300 max-w-xl font-normal leading-relaxed mb-8">
                    {{ $description }}
                </p>

                <!-- Action CTA Cluster -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full sm:w-auto">
                    <x-button 
                        href="{{ $bookingUrl }}" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        variant="primary" 
                        size="lg"
                    >
                        <span>Book an Appointment</span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </x-button>

                    <x-button 
                        href="#services" 
                        variant="glass" 
                        size="lg"
                    >
                        Explore Services
                    </x-button>
                </div>

                <!-- Trust Micro-Metrics Bar -->
                <div class="mt-10 pt-8 border-t border-white/10 grid grid-cols-3 gap-6 sm:gap-10 w-full max-w-lg">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white tracking-tight">5.0 ★</div>
                        <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Client Rating</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Est. 2020</div>
                        <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Heritage & Trust</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white tracking-tight">100%</div>
                        <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Satisfaction</div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Glassmorphism Card & Visual Booking Preview (5 Cols on desktop) -->
            <div class="lg:col-span-5 relative w-full flex justify-center">
                <!-- Atmospheric background glow for the image card -->
                <div class="absolute -inset-2 bg-gradient-to-r from-amber-500/20 to-slate-500/10 rounded-3xl blur-2xl -z-10"></div>

                <!-- Main Glass Showcase Container -->
                <div class="w-full max-w-md rounded-3xl glass-panel p-4 sm:p-6 border border-white/15 shadow-glass-lg relative overflow-hidden backdrop-blur-2xl">
                    
                    <!-- Decorative Top Header in Mockup -->
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                        </div>
                        <span class="text-xs font-mono text-slate-400">jamesdbarber.setmore.com</span>
                    </div>

                    <!-- Visual Imagery Display -->
                    <div class="relative h-64 sm:h-72 w-full rounded-2xl overflow-hidden mb-4 group bg-brand-surface">
                        <img 
                            src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?q=80&w=1000&auto=format&fit=crop" 
                            alt="Barber craftsmanship and precision grooming" 
                            class="w-full h-full object-cover object-center filter brightness-90 group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="eager"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent"></div>
                        
                        <!-- Floating Micro Pill Inside Image -->
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between p-2.5 rounded-xl glass-panel bg-brand-dark/80 backdrop-blur-md border border-white/10">
                            <div class="flex items-center gap-2.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></div>
                                <span class="text-xs font-medium text-slate-200">Accepting Appointments Today</span>
                            </div>
                            <span class="text-[11px] font-semibold text-amber-400">Raeford, NC</span>
                        </div>
                    </div>

                    <!-- Quick Appointment Schedule Prompt Card -->
                    <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-xs font-medium text-slate-200">Next Available Slot</span>
                            <span class="text-[11px] text-slate-400">Walk-ins & scheduled bookings</span>
                        </div>
                        <x-button 
                            href="{{ $bookingUrl }}" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            variant="primary" 
                            size="sm"
                        >
                            Select Time
                        </x-button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>