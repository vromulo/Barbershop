@props([
    'bookingUrl' => 'https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0',
    'logoSrc' => '/images/JamesDBarber.jpg'
])

<header class="sticky top-0 z-50 w-full px-4 sm:px-6 lg:px-8 pt-4 transition-all duration-300">
    <div 
        x-data="{ mobileMenuOpen: false }" 
        class="relative max-w-7xl mx-auto rounded-2xl glass-panel bg-brand-dark/70 backdrop-blur-xl border border-white/10 shadow-glass-sm px-4 sm:px-6 py-3 transition-all"
    >
        <div class="flex items-center justify-between">
            <!-- Brand Logo & Name -->
            <a href="#home" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10 rounded-xl overflow-hidden border border-white/10 bg-white/5 p-1 transition-transform duration-300 group-hover:scale-105">
                    <img 
                        src="{{ asset($logoSrc) }}" 
                        alt="James The Barber Logo" 
                        class="w-full h-full object-contain filter drop-shadow"
                    />
                </div>
                <div class="flex flex-col">
                    <span class="text-base font-bold tracking-tight text-white group-hover:text-amber-400 transition-colors">
                        JAMES <span class="text-amber-400 font-normal italic">The Barber</span>
                    </span>
                    <span class="text-[10px] tracking-widest uppercase text-slate-400 font-medium">EST. 2020 • RAEFORD, NC</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="#home" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Home</a>
                <a href="#services" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Services</a>
                <a href="#showcase" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Experience</a>
                <a href="#pricing" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Pricing</a>
                <a href="#reviews" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Reviews</a>
                <a href="#contact" class="px-3 py-1.5 text-sm font-medium text-slate-300 hover:text-white transition-colors rounded-lg hover:bg-white/5">Contact</a>
            </nav>

            <!-- Actions Desktop -->
            <div class="hidden md:flex items-center gap-3">
                <x-button 
                    href="{{ $bookingUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="glass" 
                    size="sm"
                >
                    Sign In
                </x-button>

                <x-button 
                    href="{{ $bookingUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="primary" 
                    size="sm"
                >
                    <span>Book Now</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </x-button>
            </div>

            <!-- Mobile Hamburger Toggle Button -->
            <button 
                type="button" 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="md:hidden inline-flex items-center justify-center p-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 border border-white/10 focus:outline-none"
                aria-label="Toggle Navigation Menu"
            >
                <!-- Hamburger Icon -->
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <!-- Close (X) Icon -->
                <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Collapsible Menu -->
        <div 
            x-show="mobileMenuOpen" 
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden mt-4 pt-4 border-t border-white/10 flex flex-col gap-2"
        >
            <a @click="mobileMenuOpen = false" href="#home" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Home</a>
            <a @click="mobileMenuOpen = false" href="#services" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Services</a>
            <a @click="mobileMenuOpen = false" href="#showcase" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Experience</a>
            <a @click="mobileMenuOpen = false" href="#pricing" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Pricing</a>
            <a @click="mobileMenuOpen = false" href="#reviews" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Reviews</a>
            <a @click="mobileMenuOpen = false" href="#contact" class="px-3 py-2 text-sm font-medium text-slate-200 hover:bg-white/5 rounded-lg transition-colors">Contact</a>

            <div class="grid grid-cols-2 gap-2 pt-3 mt-2 border-t border-white/10">
                <x-button 
                    href="{{ $bookingUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="glass" 
                    size="sm"
                    class="w-full text-center"
                >
                    Sign In
                </x-button>

                <x-button 
                    href="{{ $bookingUrl }}" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    variant="primary" 
                    size="sm"
                    class="w-full text-center"
                >
                    Book Now
                </x-button>
            </div>
        </div>
    </div>
</header>