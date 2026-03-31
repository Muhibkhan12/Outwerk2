<header id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500" role="banner">
    <!-- Premium Dark Background with Depth -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-gray-900 to-gray-950"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/30 via-transparent to-black/30"></div>
    
    <!-- Dynamic Edge Glow -->
    <div class="absolute top-0 left-1/4 w-1/2 h-px bg-gradient-to-r from-transparent via-emerald-500/50 to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-emerald-500/30 to-transparent"></div>
    
    <!-- Bold Geometric Corner Accents -->
    <div class="absolute top-0 right-0 w-40 h-40">
        <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-emerald-500/30"></div>
        <div class="absolute top-2 right-2 w-16 h-16 border-t border-r border-emerald-500/20"></div>
    </div>
    <div class="absolute bottom-0 left-0 w-40 h-40">
        <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-emerald-500/30"></div>
        <div class="absolute bottom-2 left-2 w-16 h-16 border-b border-l border-emerald-500/20"></div>
    </div>
    
    <!-- Diagonal Lines Pattern -->
    <div class="absolute inset-0 pointer-events-none opacity-10" style="background-image: repeating-linear-gradient(45deg, rgba(16,185,129,0.2) 0px, rgba(16,185,129,0.2) 1px, transparent 1px, transparent 20px);"></div>
    
    <!-- Subtle Noise Texture -->
    <div class="absolute inset-0 pointer-events-none opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"%3E%3Cfilter id="noise"%3E%3CfeTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" stitchTiles="stitch"/%3E%3C/filter%3E%3Crect width="100%25" height="100%25" filter="url(%23noise)" opacity="0.4"/%3E%3C/svg%3E'); background-size: 120px;"></div>

    <nav class="max-w-7xl mx-auto px-6 lg:px-8 h-20 lg:h-24 flex items-center justify-between relative z-10">
        <!-- Logo -->
        <a href="index.html" class="flex items-center gap-4 group relative">
            <div class="absolute -inset-2 bg-emerald-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></div>
            
            <div class="relative">
                <div class="absolute inset-0 bg-emerald-500/30 -skew-x-12 blur-md group-hover:blur-xl transition-all duration-500"></div>
                <div class="relative w-14 h-14 lg:w-16 lg:h-16 overflow-hidden border-2 border-emerald-500/60 group-hover:border-emerald-400 transition-all duration-300 shadow-xl group-hover:shadow-emerald-500/20">
                    <img src="images/logo-main.webp" alt="One Stop Solutions Logo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="absolute -top-1 -right-1 w-3 h-3 border-t-2 border-r-2 border-emerald-400"></div>
                <div class="absolute -bottom-1 -left-1 w-3 h-3 border-b-2 border-l-2 border-emerald-400"></div>
            </div>
            
            <div class="leading-tight">
                <div class="font-mono text-white text-xl lg:text-2xl font-bold tracking-tighter group-hover:tracking-tight transition-all duration-300">
                    OUTWERK
                    <span class="text-emerald-400">.</span>
                </div>
                <div class="font-mono text-emerald-400/80 text-[11px] lg:text-xs tracking-[0.2em] uppercase mt-0.5">SOLUTIONS</div>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <ul class="hidden lg:flex items-center gap-1">
            <li>
                <a href="index.html" class="nav-link relative px-5 py-2.5 text-gray-300 hover:text-white transition-all duration-300 text-sm font-mono font-medium tracking-wide group">
                    <span class="relative z-10">HOME</span>
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-emerald-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
            </li>

            <!-- Services Dropdown -->
            <li class="relative group">
                <button class="nav-link relative px-5 py-2.5 text-gray-300 hover:text-white transition-all duration-300 text-sm font-mono font-medium tracking-wide flex items-center gap-2 group">
                    <span>SERVICES</span>
                    <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-emerald-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </button>

                <div class="absolute left-0 top-full pt-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="relative">
                        <div class="absolute -top-2 left-8 w-4 h-4 bg-gray-900 rotate-45 border-l border-t border-emerald-500/40 shadow-lg"></div>
                        <div class="bg-gray-900/95 backdrop-blur-sm border border-emerald-500/30 shadow-2xl min-w-[320px] overflow-hidden">
                            <div class="px-5 pt-4 pb-2 border-b border-gray-800">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-px bg-emerald-500"></div>
                                    <span class="text-[10px] text-emerald-500 font-mono tracking-wider">EXPLORE</span>
                                    <div class="w-6 h-px bg-emerald-500"></div>
                                </div>
                            </div>
                            <div class="py-2">
                                <a href="services.html#bpo-services" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">BPO Services</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                                <a href="services.html#web-services" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Web Development</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                                <a href="services.html#sales-lead-generation" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Lead Generation</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                                <a href="services.html#digital-marketing" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Digital Marketing</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                            </div>
                            <div class="border-t border-gray-800 p-3 bg-gradient-to-r from-emerald-500/5 to-transparent">
                                <a href="services.html" class="group flex items-center justify-center gap-2 text-sm font-mono text-emerald-500 hover:text-emerald-400 transition">
                                    <span>VIEW ALL SERVICES</span>
                                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Careers Dropdown -->
            <li class="relative group">
                <button class="nav-link relative px-5 py-2.5 text-gray-300 hover:text-white transition-all duration-300 text-sm font-mono font-medium tracking-wide flex items-center gap-2 group">
                    <span>CAREERS</span>
                    <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-emerald-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </button>

                <div class="absolute left-0 top-full pt-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="relative">
                        <div class="absolute -top-2 left-8 w-4 h-4 bg-gray-900 rotate-45 border-l border-t border-emerald-500/40 shadow-lg"></div>
                        <div class="bg-gray-900/95 backdrop-blur-sm border border-emerald-500/30 shadow-2xl min-w-[280px] overflow-hidden">
                            <div class="px-5 pt-4 pb-2 border-b border-gray-800">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-px bg-emerald-500"></div>
                                    <span class="text-[10px] text-emerald-500 font-mono tracking-wider">JOIN US</span>
                                    <div class="w-6 h-px bg-emerald-500"></div>
                                </div>
                            </div>
                            <div class="py-2">
                                <a href="career.html#open-positions" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Open Positions</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                                <a href="career.html#why-join-us" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Why Join Us</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                                <a href="career.html#life-at-outwerk" class="flex items-center justify-between px-5 py-3 text-gray-300 hover:text-white hover:bg-emerald-500/5 transition-all group/item border-l-2 border-transparent hover:border-emerald-500">
                                    <span class="text-sm font-mono">Life at Outwerk</span>
                                    <span class="text-xs text-emerald-500 opacity-0 group-hover/item:opacity-100 transition-all translate-x-0 group-hover/item:translate-x-1">→</span>
                                </a>
                            </div>
                            <div class="border-t border-gray-800 p-3 bg-gradient-to-r from-emerald-500/10 to-transparent">
                                <a href="career.html#apply" class="group flex items-center justify-center gap-2 text-sm font-mono text-white bg-emerald-600 hover:bg-emerald-700 transition-all py-2.5 px-4">
                                    <span>APPLY NOW</span>
                                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Contact Button -->
            <li class="ml-4">
                <a href="contact.html" class="group relative px-7 py-2.5 flex items-center gap-2 overflow-hidden transition-all duration-300 text-white text-sm font-mono font-semibold tracking-wide">
                    <span class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-emerald-500"></span>
                    <span class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white/50 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                    <span class="relative z-10">CONTACT</span>
                    <svg class="relative z-10 w-3 h-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="lg:hidden relative w-12 h-12 flex flex-col items-center justify-center gap-1.5 group" aria-label="Toggle mobile menu">
            <div class="absolute inset-0 border-2 border-gray-700 group-hover:border-emerald-500 transition-all duration-300"></div>
            <div class="absolute inset-1 border border-gray-800 group-hover:border-emerald-500/30 transition-all duration-300"></div>
            <span class="w-5 h-0.5 bg-white rounded-full transition-all duration-300 group-hover:w-6"></span>
            <span class="w-6 h-0.5 bg-white rounded-full transition-all duration-300"></span>
            <span class="w-4 h-0.5 bg-white rounded-full transition-all duration-300 group-hover:w-5"></span>
        </button>
    </nav>

    <!-- Mobile Menu Panel -->
    <div id="mobileMenu" class="fixed lg:hidden inset-0 bg-gray-950 z-40 transform translate-x-full transition-transform duration-500 ease-out">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between px-6 pt-8 pb-6 border-b border-gray-800">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 overflow-hidden border-2 border-emerald-500/50 shadow-xl">
                        <img src="images/logo-main.webp" alt="One Stop Solutions Logo" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="text-white font-mono font-bold text-lg tracking-tighter">OUTWERK</div>
                        <div class="text-emerald-500 text-[10px] tracking-[0.2em] uppercase mt-0.5">SOLUTIONS</div>
                    </div>
                </div>
                <button id="closeMobileMenu" class="w-12 h-12 flex items-center justify-center border-2 border-gray-700 hover:border-emerald-500 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto py-8 px-6">
                <div class="space-y-2">
                    <a href="index.html" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-900 transition-all border-l-2 border-transparent hover:border-emerald-500 font-mono text-base">HOME</a>

                    <div>
                        <button id="mobileServicesBtn" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-900 transition-all border-l-2 border-transparent hover:border-emerald-500 font-mono text-base">
                            SERVICES
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobileServicesMenu" class="hidden ml-8 mt-2 space-y-1">
                            <a href="services.html#bpo-services" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">BPO Services</a>
                            <a href="services.html#web-services" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Web Development</a>
                            <a href="services.html#sales-lead-generation" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Lead Generation</a>
                            <a href="services.html#digital-marketing" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Digital Marketing</a>
                            <a href="services.html" class="block px-4 py-2.5 text-sm text-emerald-500 hover:text-emerald-400 transition-all font-mono mt-2">VIEW ALL →</a>
                        </div>
                    </div>

                    <div>
                        <button id="mobileCareersBtn" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-900 transition-all border-l-2 border-transparent hover:border-emerald-500 font-mono text-base">
                            CAREERS
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobileCareersMenu" class="hidden ml-8 mt-2 space-y-1">
                            <a href="career.html#open-positions" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Open Positions</a>
                            <a href="career.html#why-join-us" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Why Join Us</a>
                            <a href="career.html#life-at-outwerk" class="block px-4 py-2.5 text-sm text-gray-500 hover:text-white hover:bg-gray-900 transition-all font-mono border-l border-gray-800 hover:border-emerald-500">Life at Outwerk</a>
                        </div>
                    </div>

                    <a href="contact.html" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-900 transition-all border-l-2 border-transparent hover:border-emerald-500 font-mono text-base">CONTACT</a>
                </div>
            </div>

            <div class="border-t border-gray-800 px-6 py-6 space-y-4">
                <a href="career.html#apply" class="block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-mono font-semibold py-3.5 transition-all border border-emerald-500 text-base">APPLY NOW →</a>
                <div class="grid grid-cols-2 gap-3">
                    <a href="tel:+923001234567" class="flex items-center justify-center border-2 border-gray-700 hover:border-emerald-500 hover:bg-gray-900 py-3 text-gray-400 hover:text-white text-sm font-mono transition-all">CALL US</a>
                    <a href="mailto:info@onestopsolutions.com" class="flex items-center justify-center border-2 border-gray-700 hover:border-emerald-500 hover:bg-gray-900 py-3 text-gray-400 hover:text-white text-sm font-mono transition-all">EMAIL US</a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    #navbar {
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    #navbar.nav-hidden {
        transform: translateY(-100%);
    }
    
    #navbar.scrolled {
        background: rgba(17, 24, 39, 0.98);
        backdrop-filter: blur(12px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    }
    
    body.menu-open {
        overflow: hidden;
    }
    
    .nav-link {
        transition: all 0.3s ease;
    }
    
    #navbar * {
        box-sizing: border-box;
    }
</style>

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    let ticking = false;

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    navbar.classList.add('nav-hidden');
                } else {
                    navbar.classList.remove('nav-hidden');
                }
                
                lastScrollTop = scrollTop;
                ticking = false;
            });
            ticking = true;
        }
    });

    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileServicesBtn = document.getElementById('mobileServicesBtn');
    const mobileServicesMenu = document.getElementById('mobileServicesMenu');
    const mobileCareersBtn = document.getElementById('mobileCareersBtn');
    const mobileCareersMenu = document.getElementById('mobileCareersMenu');
    let servicesOpen = false;
    let careersOpen = false;

    function openMobileMenu() {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.classList.add('menu-open');
    }

    function closeMobileMenuFunc() {
        mobileMenu.classList.add('translate-x-full');
        mobileMenu.classList.remove('translate-x-0');
        document.body.classList.remove('menu-open');
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
    if (closeMobileMenu) closeMobileMenu.addEventListener('click', closeMobileMenuFunc);

    if (mobileServicesBtn) {
        mobileServicesBtn.addEventListener('click', () => {
            servicesOpen = !servicesOpen;
            mobileServicesMenu.classList.toggle('hidden');
            const icon = mobileServicesBtn.querySelector('svg');
            if (icon) icon.style.transform = servicesOpen ? 'rotate(180deg)' : 'rotate(0)';
        });
    }

    if (mobileCareersBtn) {
        mobileCareersBtn.addEventListener('click', () => {
            careersOpen = !careersOpen;
            mobileCareersMenu.classList.toggle('hidden');
            const icon = mobileCareersBtn.querySelector('svg');
            if (icon) icon.style.transform = careersOpen ? 'rotate(180deg)' : 'rotate(0)';
        });
    }

    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', closeMobileMenuFunc);
    });
</script>