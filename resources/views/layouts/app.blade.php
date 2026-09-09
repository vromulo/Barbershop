<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="James The Barber - Bespoke haircuts, precision skin fades, and traditional hot-towel razor shaves in Raeford, NC. Est. 2020.">

        <title>James The Barber | Master Craftsman • Raeford, NC</title>

        <!-- Google Fonts: Inter & Plus Jakarta Sans -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800|plus-jakarta-sans:600,700,800&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Vite Assets -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-brand-dark text-slate-100 font-sans antialiased selection:bg-amber-500 selection:text-black min-h-screen relative overflow-x-hidden">

        <!-- Ambient Mesh Glow Canvas -->
        <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
            <div class="absolute -top-40 left-1/4 w-[35rem] h-[35rem] bg-amber-500/10 rounded-full blur-[130px]"></div>
            <div class="absolute top-1/3 -right-20 w-[32rem] h-[32rem] bg-slate-600/10 rounded-full blur-[140px]"></div>
            <div class="absolute bottom-1/4 left-10 w-[30rem] h-[30rem] bg-amber-600/5 rounded-full blur-[150px]"></div>
        </div>

        <!-- 1. Sticky Navigation Island -->
        <x-navbar 
            logo-src="/images/JamesDBarber.jpg" 
            booking-url="https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0"
        />

        <main>
            <!-- 2. Hero Section (In-animation on load) -->
            <div class="reveal-on-scroll">
                <x-hero 
                    booking-url="https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0"
                />
            </div>

            <!-- 3. Features / Services Section -->
            <section id="services" class="py-20 relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-16 reveal-on-scroll">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border-amber-500/20 bg-amber-500/5 mb-3">
                            <span class="text-xs font-semibold tracking-wider uppercase text-amber-400">Craftsmanship & Services</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">
                            Tailored Grooming Specialties
                        </h2>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            Every service combines vintage precision techniques with modern style aesthetics to keep you looking sharp and refined.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        <div class="reveal-on-scroll">
                            <x-feature-card
                                title="Signature Precision Cut"
                                description="Consultation, tailored scissor and clipper work, razor neck cleanup, and a light styling finish suited to your face profile."
                                duration="35 mins"
                                badge="Popular"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879a3 3 0 11-4.242-4.242L10.757 10.5m1.243 1.5L9.121 9.121a3 3 0 10-4.242 4.242L7.757 16.243"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>

                        <div class="reveal-on-scroll delay-100">
                            <x-feature-card
                                title="Seamless Skin Fades"
                                description="Ultra-clean taper, drop, low, mid, or high bald fades blended with absolute symmetry and razor-sharp edge detailing."
                                duration="40 mins"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>

                        <div class="reveal-on-scroll delay-200">
                            <x-feature-card
                                title="Beard Sculpt & Shape"
                                description="Detailed length reduction, symmetry lining, straight razor cheek definition, and warm organic beard oil treatment."
                                duration="25 mins"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>

                        <div class="reveal-on-scroll">
                            <x-feature-card
                                title="Hot Towel Razor Shave"
                                description="Classic barbershop ritual featuring pre-shave essential oils, steaming hot towels, rich lather, and a surgical-grade razor pass."
                                duration="30 mins"
                                badge="Classic"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>

                        <div class="reveal-on-scroll delay-100">
                            <x-feature-card
                                title="Crisp Lineup & Enhancements"
                                description="Fast refresh around temple points, neck hairline, and beard border with optional semi-permanent hair enhancements."
                                duration="20 mins"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>

                        <div class="reveal-on-scroll delay-200">
                            <x-feature-card
                                title="Young Gentlemen & Seniors"
                                description="Patient, gentle, and sharp cuts for boys (12 and under) and distinguished gentlemen looking for dependable, polite service."
                                duration="30 mins"
                            >
                                <x-slot:iconSlot>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </x-slot:iconSlot>
                            </x-feature-card>
                        </div>
                    </div>

                </div>
            </section>

            <!-- 4. Product Showcase (Shop Experience & Bento Gallery) -->
            <div class="reveal-on-scroll">
                <x-showcase 
                    booking-url="https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0"
                />
            </div>

            <!-- 5. Pricing Section -->
            <section id="pricing" class="py-20 relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-16 reveal-on-scroll">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border-amber-500/20 bg-amber-500/5 mb-3">
                            <span class="text-xs font-semibold tracking-wider uppercase text-amber-400">Clear & Transparent Pricing</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">
                            Signature Service Packages
                        </h2>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            Choose the grooming package that suits your schedule and aesthetic. No surprise charges.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch pt-4">
                        <div class="reveal-on-scroll">
                            <x-pricing-card
                                name="Classic Haircut"
                                price="$35"
                                period="session"
                                description="Traditional precision cut for everyday style and professional maintenance."
                                :features="[
                                    'Custom consultation & cut',
                                    'Straight razor neck clean-up',
                                    'Hot steam towel refresh',
                                    'Styling with artisan pomade'
                                ]"
                                cta-text="Book Classic Cut"
                            />
                        </div>

                        <div class="reveal-on-scroll delay-100">
                            <x-pricing-card
                                name="Cut + Beard Sculpt"
                                price="$55"
                                period="session"
                                description="Complete head-to-beard transformation with precision taper and razor line work."
                                :popular="true"
                                badge="Most Popular"
                                :features="[
                                    'Signature fade or scissor haircut',
                                    'Complete beard sculpt & trim',
                                    'Straight razor cheek and neck lines',
                                    'Hot towel steam & facial essential oil',
                                    'Finishing balm & styling clay'
                                ]"
                                cta-text="Book Cut & Beard"
                            />
                        </div>

                        <div class="reveal-on-scroll delay-200">
                            <x-pricing-card
                                name="The Royal Treatment"
                                price="$75"
                                period="session"
                                description="The ultimate luxury grooming experience with straight razor shave and facial care."
                                :features="[
                                    'Master haircut of your choice',
                                    'Traditional hot-towel straight razor shave',
                                    'Exfoliating mini-facial cleansing',
                                    'Invigorating scalp massage',
                                    'Premium beard treatment & splash'
                                ]"
                                cta-text="Book Royal VIP"
                            />
                        </div>
                    </div>

                </div>
            </section>

            <!-- 6. Testimonials Section -->
            <section id="reviews" class="py-20 relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-16 reveal-on-scroll">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border-amber-500/20 bg-amber-500/5 mb-3">
                            <span class="text-xs font-semibold tracking-wider uppercase text-amber-400">Client Endorsements</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">
                            What Our Clients Say
                        </h2>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            Consistency, precision cuts, and respect for your time. Read verified reviews from regular clients.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 items-stretch">
                        <div class="reveal-on-scroll">
                            <x-testimonial-card
                                name="Marcus Vance"
                                role="Local Resident • Raeford"
                                service="Cut + Beard Sculpt"
                                photo="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop"
                                review="James is easily the most consistent barber in the area. His fade blends are seamless, and booking via Setmore means I never waste time sitting in a waiting queue."
                            />
                        </div>

                        <div class="reveal-on-scroll delay-100">
                            <x-testimonial-card
                                name="David Chen"
                                role="Regular Client • 2+ Years"
                                service="The Royal Treatment"
                                photo="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&auto=format&fit=crop"
                                review="The hot-towel straight razor shave is hands-down the best experience. The shop is clean, sterile, and James takes time to get the hairline exact every single visit."
                            />
                        </div>

                        <div class="reveal-on-scroll delay-200">
                            <x-testimonial-card
                                name="Terrence Brooks"
                                role="Military Veteran"
                                service="Signature Precision Cut"
                                photo="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=200&auto=format&fit=crop"
                                review="Precision taper, crisp edge-up, and top-tier professionalism. You walk out with complete confidence. Highly recommend booking a few days ahead!"
                            />
                        </div>
                    </div>

                </div>
            </section>

            <!-- 7. Call-To-Action (CTA) Section -->
            <div class="reveal-on-scroll">
                <x-cta-section 
                    booking-url="https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0"
                />
            </div>
        </main>

        <!-- 8. Complete Responsive Footer (STRICTLY NO IN-ANIMATION) -->
        <x-footer 
            logo-src="/images/JamesDBarber.jpg"
            booking-url="https://jamesdbarber.setmore.com/?utm_id=97758_v0_s00_e0_tv0"
        />

    </body>
</html>