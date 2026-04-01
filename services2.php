<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Outwerk Solution — Premium BPO & Digital Services</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts: Space Grotesk + Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        /* Custom CSS Variables - Dull Green Theme */
        :root {
            --dull-green: #2d3e2b;
            --muted-green: #3a4a38;
            --dark-muted: #1e2a1c;
            --soft-green: #4a5b48;
            --glow-green: rgba(46, 78, 46, 0.2);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #0a0f0a;
            color: #d4d9d4;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
        
        .font-secondary {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        
        .font-primary {
            font-family: 'Space Grotesk', sans-serif;
        }
        
        /* Custom Animations */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-up {
            animation: fadeUp 0.8s ease forwards;
        }
        
        /* Glow Effects - Dulled */
        .glow-dark-green {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(46, 78, 46, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
        }
        
        .glow-forest {
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(62, 82, 62, 0.18) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
        }
        
        /* Card Hover Animations - Reveal from Bottom */
        .service-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        /* Reveal Overlay */
        .card-reveal {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #1e2a1c 0%, #2d3e2b 100%);
            transform: translateY(100%);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 20;
            border-top: 2px solid #6b8a68;
        }
        
        .service-card-wrapper:hover .card-reveal {
            transform: translateY(0);
        }
        
        .service-card-wrapper:hover .service-card img {
            transform: scale(1.05);
        }
        
        .service-card-wrapper:hover .service-card {
            border-color: #6b8a68;
            box-shadow: 0 0 30px rgba(75, 95, 73, 0.2);
        }
        
        /* Content inside card (initial) */
        .card-content {
            position: relative;
            z-index: 10;
            transition: opacity 0.3s ease;
        }
        
        .service-card-wrapper:hover .card-content {
            opacity: 0.5;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0a0f0a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #4a5b48;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #5a6f58;
        }
        
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Selection Color - Dull Green */
        ::selection {
            background: #4a5b48;
            color: #eef5e8;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar - Dull Green Theme -->
    <nav class="fixed top-0 left-0 right-0 z-50 px-8 md:px-16 py-6 flex items-center justify-between backdrop-blur-md bg-black/40 border-b border-[#3a4a38]/40">
        <div class="flex items-center gap-3">
            <div class="w-2 h-2 bg-[#5a6f58] rounded-full"></div>
            <span class="text-sm tracking-widest uppercase text-white font-secondary">Outwerk<span class="text-[#6b8a68]">.</span></span>
        </div>
        <div class="hidden md:flex items-center gap-10">
            <a href="#services" class="nav-link text-sm uppercase tracking-wider text-gray-300 hover:text-[#8aa885] transition-colors font-secondary">Services</a>
            <a href="#about" class="nav-link text-sm uppercase tracking-wider text-gray-300 hover:text-[#8aa885] transition-colors font-secondary">About</a>
            <a href="#work" class="nav-link text-sm uppercase tracking-wider text-gray-300 hover:text-[#8aa885] transition-colors font-secondary">Work</a>
            <a href="#contact" class="nav-link text-sm uppercase tracking-wider text-gray-300 hover:text-[#8aa885] transition-colors font-secondary">Contact</a>
        </div>
        <a href="#contact" class="px-6 py-2 border border-[#4a5b48]/50 text-sm uppercase tracking-wider text-white hover:bg-[#4a5b48] hover:border-[#6b8a68] transition-all font-secondary">
            Get in touch
        </a>
    </nav>

    <style>
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: #6b8a68;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>


    <!-- ─── HERO ─── -->
    <section class="section-px section-py-hero min-h-screen flex flex-col justify-end pb-16 pt-32 px-8 md:px-16 overflow-hidden">

        <div class="glow-dark-green" style="top:-100px; right:-100px;"></div>
        <div class="glow-forest" style="bottom:100px; left:-80px;"></div>

        <div class="flex items-center gap-4 mb-6 fade-up">
            <span class="mono text-xs tracking-widest text-green-500 uppercase">— Est. 2019</span>
            <div class="thin-line" style="width:60px;"></div>
            <span class="mono text-xs tracking-widest text-zinc-500 uppercase">BPO Solutions</span>
        </div>

        <div class="hero-text text-white leading-none mb-6">
            <div class="fade-up" style="transition-delay:0.05s">WE ARE THE TEAM</div>
            <div class="fade-up" style="transition-delay:0.1s">OF
                <span class="scribble-wrap" id="scribble-word">
                    BUSINESS
                    <svg viewBox="0 0 220 60" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="110" cy="30" rx="105" ry="26" class="scribble-path" id="scribble-el" />
                    </svg>
                </span>
            </div>
            <div class="fade-up" style="transition-delay:0.15s">PROCESS</div>
            <div class="fade-up flex flex-wrap items-baseline gap-x-4" style="transition-delay:0.2s">
                <span>OUTSOURCING</span>
                <span class="gradient-dark-green">EXPERTS</span>
            </div>
        </div>

        <div class="hero-sub-row flex flex-col md:flex-row md:items-end justify-between gap-6 mt-6 fade-up" style="transition-delay:0.25s">
            <p class="text-zinc-400 text-sm md:text-base max-w-xs md:max-w-sm leading-relaxed">
                Streamlining operations. Amplifying growth. We handle your back-office so you can focus on what matters.
            </p>
            <a href="#contact" class="pill-btn text-white self-start">
                Start a project ↗
            </a>
        </div>

        <div class="thin-line mt-12 fade-up" style="transition-delay:0.3s"></div>

        <div class="stats-grid grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 fade-up" style="transition-delay:0.35s">
            <div>
                <div class="stat-num" data-target="250">0</div>
                <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">CLIENTS SERVED</div>
            </div>
            <div>
                <div class="stat-num" data-target="12">0</div>
                <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">COUNTRIES</div>
            </div>
            <div>
                <div class="stat-num" data-target="98">0</div>
                <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">% RETENTION</div>
            </div>
            <div>
                <div class="stat-num" data-target="6">0</div>
                <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">YEARS OF EXCELLENCE</div>
            </div>
        </div>

    </section>

    <!-- SERVICES SECTION - REVEAL HOVER EFFECT -->
    <section id="services" class="relative py-20 sm:py-28 md:py-32 px-5 sm:px-6 bg-[#0a0f0a] overflow-hidden">
        <!-- Background Decorations - Dull Green -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-[#3a4a38]/30"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-[#4a5b48]/30"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#4a5b48]/30"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#3a4a38]/30"></div>
            <div class="absolute inset-0 opacity-[0.01]">
                <div class="w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, #4a5b48 1px, transparent 1px); background-size: 40px 40px;"></div>
            </div>
            <div class="glow-dark-green" style="top:20%; left:-10%; opacity:0.2;"></div>
            <div class="glow-forest" style="bottom:10%; right:-5%; opacity:0.2;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header - Dull Green -->
            <div class="text-center mb-16 sm:mb-20 md:mb-24">
                <div class="inline-flex items-center gap-2 mb-6">
                    <div class="w-2 h-2 bg-[#6b8a68] rotate-45"></div>
                    <span class="text-xs font-medium tracking-[0.2em] uppercase text-[#8aa885] font-secondary">OUR SERVICES</span>
                    <div class="w-2 h-2 bg-[#6b8a68] rotate-45"></div>
                </div>
                <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight">
                    <span class="text-white">WHAT WE</span>
                    <span class="block mt-2 bg-gradient-to-r from-[#6b8a68] to-[#8aa885] bg-clip-text text-transparent">EXCEL AT</span>
                </h2>
                <p class="text-base sm:text-lg max-w-xl mx-auto leading-relaxed text-gray-500 mt-4 font-secondary">
                    Comprehensive BPO and digital solutions tailored to your business needs
                </p>
            </div>

            <!-- 3x3 Edgy Grid with Reveal Hover Effect -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Card 1: INBOUND CALLS -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.pexels.com/photos/8867482/pexels-photo-8867482.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Inbound calls" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">01</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <!-- Reveal Overlay -->
                        <div class="card-reveal">
                            <i class="fas fa-phone-alt text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">INBOUND CALLS</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">24/7 customer support, order processing, helpdesk & troubleshooting</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: OUTBOUND CALLS -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=1974&auto=format&fit=crop" alt="Outbound calls" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">02</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-phone-volume text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">OUTBOUND CALLS</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Telemarketing, appointment setting, market research & lead qualification</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: CUSTOMER SUPPORT -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?q=80&w=1973&auto=format&fit=crop" alt="Customer support" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">03</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-headset text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">CUSTOMER SUPPORT</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Multi-channel support, feedback analysis, CRM management, complaint resolution</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: LEAD GENERATION -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#4a5b48] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=2070&auto=format&fit=crop" alt="Lead generation" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">04</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-chart-line text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">LEAD GENERATION</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">B2B prospecting, cold calling, appointment setting, market research</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5: TECHNICAL HELPDESK -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1974&auto=format&fit=crop" alt="Technical helpdesk" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">05</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-laptop-code text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">TECHNICAL HELPDESK</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Software support, network troubleshooting, remote assistance, IT infrastructure</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: WEB DEVELOPMENT -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#4a5b48] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop" alt="Web development" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">06</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-code text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">WEB DEVELOPMENT</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Custom development, e-commerce, API integration, responsive design</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7: SEO & SEM -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" alt="SEO & SEM" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">07</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fab fa-google text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">SEO & SEM</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Keyword strategy, PPC campaigns, performance analytics, conversion optimization</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8: SOCIAL MEDIA MANAGEMENT -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#4a5b48] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?q=80&w=2070&auto=format&fit=crop" alt="Social Media" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">08</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fab fa-instagram text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">SOCIAL MEDIA</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Multi-platform management, content planning, community engagement, analytics</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 9: CONTENT MARKETING -->
                <div class="service-card-wrapper group relative cursor-pointer">
                    <div class="service-card relative bg-black/40 border-2 border-[#3a4a38] h-[380px] overflow-hidden transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-[#1e2a1c]/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=2070&auto=format&fit=crop" alt="Content Marketing" class="w-full h-full object-cover transition-transform duration-700">
                        <div class="card-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                            <span class="text-4xl font-bold text-[#4a5b48]/30 absolute bottom-4 right-4 font-primary">09</span>
                            <div class="w-12 h-0.5 bg-[#6b8a68] mb-3"></div>
                        </div>
                        <div class="card-reveal">
                            <i class="fas fa-pen-fancy text-3xl text-[#8aa885] mb-4"></i>
                            <h4 class="font-primary font-bold text-2xl text-white mb-2 tracking-wide">CONTENT MARKETING</h4>
                            <div class="w-12 h-0.5 bg-[#8aa885] mb-4"></div>
                            <p class="text-gray-300 text-sm mb-4 font-secondary">Blog writing, video production, email newsletters, brand storytelling</p>
                            <div class="flex items-center gap-2 text-[#8aa885] text-xs font-mono mt-2">
                                <span>EXPLORE SERVICE</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Section - Dull Green -->
            <div class="mt-20 sm:mt-24 md:mt-28 text-center">
                <div class="max-w-md mx-auto">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4 tracking-tight text-white font-primary">Need a custom solution?</h3>
                    <p class="mb-6 sm:mb-8 text-sm text-gray-500 font-secondary">Let's discuss your specific requirements</p>
                    <a href="#contact" class="group inline-flex items-center gap-3 px-6 sm:px-8 py-3 sm:py-4 font-semibold border-2 border-[#4a5b48] bg-transparent text-[#8aa885] hover:bg-[#4a5b48] hover:text-white hover:border-[#6b8a68] transition-all font-secondary">
                        <span>GET IN TOUCH</span>
                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                    </a>
                    <p class="text-xs mt-6 tracking-wider text-[#4a5b48]/60 font-mono">TRUSTED · 24/7 · GLOBAL</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true, offset: 100 });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '') return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        const navbar = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-black/80', 'backdrop-blur-lg');
            } else {
                navbar.classList.remove('bg-black/80', 'backdrop-blur-lg');
            }
        });
    </script>
</body>
</html>