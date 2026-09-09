@props([
    'logoSrc' => '/images/JamesDBarber.jpg',
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
    'address' => 'Brgy. Santo Angel Central , Santa Cruz, PH, 4009',
    'shopLocation' => 'One Stop Barbershop',
])

<footer id="contact" class="border-t border-white/10 bg-brand-dark/95 backdrop-blur-2xl pt-16 pb-12 relative overflow-hidden">
    <!-- Subtle Ambient Footer Glow -->
    <div class="pointer-events-none absolute -bottom-24 left-1/2 -translate-x-1/2 w-[38rem] h-48 bg-amber-500/10 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 pb-12 border-b border-white/10">
            
            <!-- Column 1 & 2: Brand & Identity (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 flex flex-col items-start">
                <a href="#home" class="flex items-center gap-3 group mb-4">
                    <div class="relative w-11 h-11 rounded-xl overflow-hidden border border-white/10 bg-white/5 p-1 transition-transform group-hover:scale-105">
                        <img 
                            src="{{ asset($logoSrc) }}" 
                            alt="James The Barber Logo" 
                            class="w-full h-full object-contain filter drop-shadow"
                        />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold tracking-tight text-white group-hover:text-amber-400 transition-colors">
                            JAMES <span class="text-amber-400 font-normal italic">The Barber</span>
                        </span>
                        <span class="text-[10px] tracking-widest uppercase text-slate-400 font-medium">EST. 2020 • LAGUNA, PH</span>
                    </div>
                </a>

                <p class="text-sm text-slate-300 leading-relaxed max-w-sm mb-6">
                    Bespoke haircuts, precision skin fades, and traditional straight razor hot towel grooming. Located inside {{ $shopLocation }}.
                </p>

                <!-- Social Links -->
                <div class="flex items-center gap-3">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/jamesearon27?stkn=MTh0N3lqYnJjaGJraQ==" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl glass-panel border border-white/10 flex items-center justify-center text-slate-300 hover:text-amber-400 hover:border-amber-400/40 transition-all" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=100070723366447" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl glass-panel border border-white/10 flex items-center justify-center text-slate-300 hover:text-amber-400 hover:border-amber-400/40 transition-all" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Column 3: Quick Navigation -->
            <div class="flex flex-col">
                <h4 class="text-sm font-semibold tracking-wider text-white uppercase mb-4">Quick Links</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#home" class="text-slate-400 hover:text-amber-400 transition-colors">Home</a></li>
                    <li><a href="#services" class="text-slate-400 hover:text-amber-400 transition-colors">Our Services</a></li>
                    <li><a href="#showcase" class="text-slate-400 hover:text-amber-400 transition-colors">Shop Experience</a></li>
                    <li><a href="#pricing" class="text-slate-400 hover:text-amber-400 transition-colors">Pricing Menu</a></li>
                    <li><a href="#reviews" class="text-slate-400 hover:text-amber-400 transition-colors">Client Reviews</a></li>
                </ul>
            </div>

            <!-- Column 4: Hours & Schedule -->
            <div class="flex flex-col">
                <h4 class="text-sm font-semibold tracking-wider text-white uppercase mb-4">Shop Hours</h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-400">
                    <li class="flex justify-between py-1 border-b border-white/5">
                        <span>Tue – Fri:</span>
                        <span class="text-slate-200 font-medium">9:00 AM – 6:00 PM</span>
                    </li>
                    <li class="flex justify-between py-1 border-b border-white/5">
                        <span>Saturday:</span>
                        <span class="text-slate-200 font-medium">8:00 AM – 4:00 PM</span>
                    </li>
                    <li class="flex justify-between py-1">
                        <span>Sun – Mon:</span>
                        <span class="text-amber-400/80 font-medium">Closed / By Appt</span>
                    </li>
                </ul>
            </div>

            <!-- Column 5: Location & Contact -->
            <div class="flex flex-col">
                <h4 class="text-sm font-semibold tracking-wider text-white uppercase mb-4">Location</h4>
                <div class="space-y-3 text-xs sm:text-sm text-slate-400">
                    <div class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-amber-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>
                            <strong class="text-slate-200 block">{{ $shopLocation }}</strong>
                            {{ $address }}
                        </span>
                    </div>

                    <div class="pt-2">
                        <x-button 
                            href="{{ $bookingUrl }}" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            variant="primary" 
                            size="sm"
                            class="w-full text-center"
                        >
                            Book Online
                        </x-button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Policies Bar -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <div>
                &copy; {{ date('Y') }} James The Barber. All rights reserved. Est. 2020.
            </div>
            <div class="flex items-center gap-6">
                <a href="#services" class="hover:text-slate-200 transition-colors">Services</a>
                <a href="#pricing" class="hover:text-slate-200 transition-colors">Pricing</a>
                <a href="{{ $bookingUrl }}" target="_blank" rel="noopener noreferrer" class="hover:text-amber-400 transition-colors">Setmore Booking Portal</a>
            </div>
        </div>
    </div>
</footer>