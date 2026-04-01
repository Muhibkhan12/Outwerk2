<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>One Stop Solutions – BPO & Contact Centre</title>

    <!-- Tailwind + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: white;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Space Grotesk', monospace;
        }

        /* Custom Animations */
        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        @keyframes bounce-soft {

            0%,
            100% {
                transform: translateY(0) rotate(45deg);
                opacity: 0.5;
            }

            50% {
                transform: translateY(8px) rotate(45deg);
                opacity: 1;
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-blink-cursor {
            animation: blink 0.9s step-end infinite;
        }

        .animate-bounce-soft {
            animation: bounce-soft 1.8s infinite ease-in-out;
        }

        .animate-fade-up {
            animation: fadeUp 0.8s ease both;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Utility Classes */
        .min-h-screen-custom {
            min-height: 100vh;
            min-height: 100dvh;
        }

        .btn-hover {
            transition: all 0.2s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
        }

        /* Safe Area Support */
        .safe-top {
            padding-top: env(safe-area-inset-top);
        }

        /* Mobile Touch Targets */
        @media (max-width: 640px) {

            a,
            button {
                min-height: 44px;
            }
        }
    </style>
</head>

<body class="bg-white antialiased overflow-x-hidden">

    <!-- Header Section -->
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

<!-- Hero Section - Services Page (Matching Outwerk Design) -->
<section class="relative overflow-hidden min-h-[70vh] flex items-center">
    <!-- Background Glow Effects -->
    <div class="glow-dark-green absolute top-0 left-0 w-[600px] h-[600px] opacity-40 pointer-events-none"></div>
    <div class="glow-forest absolute bottom-0 right-0 w-[500px] h-[500px] opacity-30 pointer-events-none"></div>
    
    <!-- Grid Texture Overlay -->
    <div class="absolute inset-0 pointer-events-none opacity-20" style="background-image: linear-gradient(rgba(46, 125, 50, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(46, 125, 50, 0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-16 py-20 md:py-28 w-full">
        <!-- Breadcrumb / Navigation Hint -->
        <div class="flex items-center gap-2 mb-8 fade-up">
            <span class="mono text-xs tracking-widest text-green-500 uppercase">Services</span>
            <div class="thin-line w-12"></div>
            <span class="mono text-xs tracking-widest text-zinc-500 uppercase">What We Deliver</span>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Column - Heading with Scribble Effect -->
            <div class="fade-up">
                <h1 class="hero-text text-white leading-tight">
                    <span class="block">Our</span>
                    <span class="gradient-dark-green inline-flex items-center gap-2">
                        Services
                        <span class="scribble-wrap inline-block relative">
                            <svg viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[110%] h-[150%] pointer-events-none">
                                <ellipse cx="60" cy="20" rx="55" ry="16" class="scribble-path" stroke="#2e7d32" stroke-width="2.5" fill="none" stroke-dasharray="500" stroke-dashoffset="500" />
                            </svg>
                        </span>
                    </span>
                </h1>
            </div>

            <!-- Right Column - Description with Modern Styling -->
            <div class="fade-up" style="transition-delay: 0.1s">
                <div class="relative">
                    <!-- Decorative accent line -->
                    <div class="absolute -left-6 top-0 bottom-0 w-px bg-gradient-to-b from-green-500 via-emerald-600 to-transparent"></div>
                    
                    <div class="space-y-6 pl-6">
                        <p class="text-gray-300 leading-relaxed text-base md:text-lg font-light">
                            We are a creative agency with several services focused on quality and innovation for your business — turning bold ideas into digital realities.
                        </p>
                        
                        <!-- Stats / Quick Highlights -->
                        <div class="flex flex-wrap gap-6 pt-4">
                            <div class="flex items-center gap-2">
                                <span class="dark-green-dot"></span>
                                <span class="mono text-xs text-green-500/80 tracking-wider">50+ Projects</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="dark-green-dot"></span>
                                <span class="mono text-xs text-green-500/80 tracking-wider">24/7 Support</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="dark-green-dot"></span>
                                <span class="mono text-xs text-green-500/80 tracking-wider">Global Reach</span>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <div class="pt-4">
                            <a href="#contact" class="pill-btn text-white inline-flex items-center gap-2 group">
                                Explore Services
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Animated Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 hidden md:block fade-up" style="animation-delay: 0.3s">
            <div class="flex flex-col items-center gap-2">
                <span class="mono text-[10px] text-green-600/60 tracking-widest">SCROLL</span>
                <div class="w-px h-12 bg-gradient-to-b from-green-500/50 to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Ensure the scribble animation works */
    .scribble-path.animated {
        animation: draw-scribble 1.2s cubic-bezier(.4, 0, .2, 1) forwards;
    }
    
    @keyframes draw-scribble {
        to {
            stroke-dashoffset: 0;
        }
    }
    
    /* Fade-up animation (if not already defined) */
    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    
    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    // Trigger scribble animation when the section comes into view
    (function() {
        const heroSection = document.querySelector('.hero-section, section.relative');
        const scribblePaths = document.querySelectorAll('.scribble-path');
        
        const scribbleObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    scribblePaths.forEach(path => {
                        setTimeout(() => {
                            path.classList.add('animated');
                        }, 400);
                    });
                    scribbleObserver.disconnect();
                }
            });
        }, { threshold: 0.3 });
        
        if (scribblePaths.length) {
            scribbleObserver.observe(document.querySelector('.hero-section') || document.querySelector('section.relative'));
        }
    })();
</script>

    <section id="services" class="relative py-20 sm:py-28 md:py-32 px-5 sm:px-6 bg-white overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-300/40"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-teal-300/40"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-teal-300/40"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-300/40"></div>
            <div class="absolute top-1/3 right-12 w-px h-48 rotate-45 bg-gradient-to-b from-emerald-400/0 via-emerald-400/20 to-emerald-400/0"></div>
            <div class="absolute bottom-1/3 left-12 w-px h-48 -rotate-45 bg-gradient-to-b from-teal-400/0 via-teal-400/20 to-teal-400/0"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 sm:mb-20 md:mb-24">
                <div class="inline-flex items-center gap-2 mb-6">
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-600 font-secondary">OUR SERVICES</span>
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                </div>
                <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight">
                    <span class="text-gray-800">WHAT WE</span>
                    <span class="block mt-2 bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">EXCEL AT</span>
                </h2>
                <p class="text-base sm:text-lg max-w-xl mx-auto leading-relaxed text-gray-500 mt-4 font-secondary">
                    Comprehensive BPO and digital solutions tailored to your business needs
                </p>
            </div>



            <!-- BPO SERVICES Category -->
            <div class="mb-20">
                <div class="flex items-center gap-3 mb-10 sm:mb-12">
                    <div class="w-1 h-8 bg-emerald-500 rounded-full"></div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-emerald-600 font-primary">BPO SERVICES</h3>
                    <span class="text-sm font-light ml-2 text-emerald-400 font-secondary">/01</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- INBOUND CALLS Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-emerald-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-emerald-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/8867482/pexels-photo-8867482.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Inbound call center" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-700/90 via-emerald-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">INBOUND CALLS</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">24/7 SUPPORT</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-emerald-600 to-teal-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">INBOUND CALLS</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Customer Service</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Order Processing</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Helpdesk & Troubleshooting</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">24/7 Call Handling</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- OUTBOUND CALLS Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-emerald-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-emerald-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=1974&auto=format&fit=crop" alt="Outbound calls" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-700/90 via-emerald-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">OUTBOUND CALLS</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">PROACTIVE REACH</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-emerald-600 to-teal-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">OUTBOUND CALLS</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Telemarketing</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Appointment Setting</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Market Research</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Lead Qualification</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CUSTOMER SUPPORT Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-emerald-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-emerald-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?q=80&w=1973&auto=format&fit=crop" alt="Customer support" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-700/90 via-emerald-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">CUSTOMER SUPPORT</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">24/7 ASSISTANCE</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-emerald-600 to-teal-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">CUSTOMER SUPPORT</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Multi-channel Support</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Feedback Analysis</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">CRM Management</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Complaint Resolution</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TECHNICAL HELPDESK Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-teal-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-teal-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?q=80&w=1973&auto=format&fit=crop" alt="Technical helpdesk" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-teal-700/90 via-teal-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">TECHNICAL HELPDESK</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">REMOTE IT SUPPORT</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-teal-600 to-emerald-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">TECHNICAL HELPDESK</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Software & Application Support</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">System & Network Troubleshooting</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Remote User Assistance</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SALES & LEAD GENERATION Category -->
            <div class="mb-20">
                <div class="flex items-center gap-3 mb-10 sm:mb-12">
                    <div class="w-1 h-8 bg-emerald-500 rounded-full"></div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-emerald-600 font-primary">SALES & LEAD GENERATION</h3>
                    <span class="text-sm font-light ml-2 text-emerald-400 font-secondary">/02</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- LEAD GENERATION Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-emerald-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-emerald-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=2070&auto=format&fit=crop" alt="Lead generation" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-700/90 via-emerald-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">LEAD GENERATION</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">QUALIFIED LEADS</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-emerald-600 to-teal-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">LEAD GENERATION</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">B2B Prospecting</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Cold Calling Campaigns</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Appointment Setting</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Market Research</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEB SOLUTIONS Category -->
            <div class="mb-20">
                <div class="flex items-center gap-3 mb-10 sm:mb-12">
                    <div class="w-1 h-8 bg-teal-500 rounded-full"></div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-teal-600 font-primary">WEB SOLUTIONS</h3>
                    <span class="text-sm font-light ml-2 text-teal-400 font-secondary">/03</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- WEB DEVELOPMENT Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-teal-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-teal-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop" alt="Web development" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-teal-700/90 via-teal-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">WEB DEVELOPMENT</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">DESIGN & DEVELOP</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-teal-600 to-emerald-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">WEB DEVELOPMENT</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Custom Web Development</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">E-commerce Solutions</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">API Integration</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Responsive Design</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DIGITAL MARKETING Category -->
            <div class="mb-20">
                <div class="flex items-center gap-3 mb-10 sm:mb-12">
                    <div class="w-1 h-8 bg-teal-500 rounded-full"></div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-teal-600 font-primary">DIGITAL MARKETING</h3>
                    <span class="text-sm font-light ml-2 text-teal-400 font-secondary">/04</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- SEO & SEM Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-teal-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-teal-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" alt="SEO & SEM" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-teal-700/90 via-teal-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">SEO & SEM</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">CAMPAIGN MANAGEMENT</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-teal-600 to-emerald-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">SEO & SEM</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Keyword Research & Strategy</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">PPC Campaign Setup</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Performance Analytics</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Conversion Optimization</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SOCIAL MEDIA Card -->
                    <div class="service-card-wrapper group relative">
                        <div class="service-card relative bg-white border-2 border-teal-200 rounded-2xl h-[420px] sm:h-[460px] overflow-hidden cursor-pointer transition-all duration-500 hover:border-teal-400">
                            <div class="service-front absolute inset-0 transition-all duration-500 group-hover:opacity-0 group-hover:translate-y-[-20px]">
                                <div class="service-image absolute inset-0 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?q=80&w=2070&auto=format&fit=crop" alt="Social Media" loading="lazy" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-teal-700/90 via-teal-600/60 to-transparent"></div>
                                </div>
                                <div class="service-content absolute inset-0 p-6 sm:p-8 flex flex-col justify-end z-10">
                                    <div class="mb-4">
                                        <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3 tracking-wide">SOCIAL MEDIA</h4>
                                        <div class="w-12 h-0.5 bg-white/80 rounded-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                                        <span class="text-white text-xs tracking-widest font-secondary">MANAGEMENT</span>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-back absolute inset-0 p-6 sm:p-8 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out bg-gradient-to-br from-teal-600 to-emerald-600">
                                <div class="h-full flex flex-col">
                                    <h4 class="font-primary font-bold text-xl sm:text-2xl text-white mb-3">SOCIAL MEDIA MANAGEMENT</h4>
                                    <div class="w-12 h-0.5 bg-white/80 rounded-full mb-4"></div>
                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Multi-Platform Management</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Content Calendar Planning</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Community Engagement</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div><span class="text-white text-xs sm:text-sm font-secondary">Analytics & Insights</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 sm:mt-20 md:mt-24 text-center">
                <div class="max-w-md mx-auto">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4 tracking-tight text-gray-800 font-primary">Need a custom solution?</h3>
                    <p class="mb-6 sm:mb-8 text-sm text-gray-500 font-secondary">Let's discuss your specific requirements</p>
                    <a href="#contact" class="group inline-flex items-center gap-3 px-6 sm:px-8 py-3 sm:py-4 font-semibold rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white hover:shadow-xl hover:scale-[1.02] transition-all font-secondary">
                        <span>GET IN TOUCH</span>
                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                    </a>
                    <p class="text-xs mt-6 tracking-wider text-gray-400 font-secondary">TRUSTED · 24/7 · GLOBAL</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section id="process" class="relative overflow-hidden bg-gray-900 py-24 sm:py-32 px-5 sm:px-6 md:px-12 lg:px-20">
        <!-- Background Decorations -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-500/30"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-emerald-500/30"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-emerald-500/30"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-500/30"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Left Column - Process Steps -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 mb-6">
                        <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                        <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-400 font-secondary">Operational Excellence</span>
                        <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    </div>

                    <h2 class="font-primary text-4xl sm:text-5xl font-bold tracking-tight text-white mb-4">
                        DEVELOPMENT<br>
                        <span class="bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">PIPELINE</span>
                    </h2>

                    <p class="text-gray-400 leading-relaxed mb-8 font-secondary max-w-md">
                        A streamlined workflow that transforms ideas into exceptional solutions through a structured, transparent process.
                    </p>

                    <!-- Process Steps -->
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="process-step group">
                            <div class="flex items-start gap-5">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
                                    <span class="text-emerald-400 font-bold text-lg">01</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="font-primary font-bold text-xl text-white">Discovery & Planning</h3>
                                        <span class="text-xs text-emerald-400 font-mono">2-3 WEEKS</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Comprehensive analysis and strategic planning to establish project foundations.</p>
                                    <div class="flex flex-wrap gap-3">
                                        <span class="text-xs text-gray-500">• Requirement Analysis</span>
                                        <span class="text-xs text-gray-500">• Strategy Formulation</span>
                                        <span class="text-xs text-gray-500">• Roadmap Creation</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="process-step group">
                            <div class="flex items-start gap-5">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
                                    <span class="text-emerald-400 font-bold text-lg">02</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="font-primary font-bold text-xl text-white">Design & Development</h3>
                                        <span class="text-xs text-emerald-400 font-mono">3-4 WEEKS</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Crafting exceptional digital experiences through innovative design and development.</p>
                                    <div class="flex flex-wrap gap-3">
                                        <span class="text-xs text-gray-500">• UI/UX Design</span>
                                        <span class="text-xs text-gray-500">• Agile Development</span>
                                        <span class="text-xs text-gray-500">• Code Implementation</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="process-step group">
                            <div class="flex items-start gap-5">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
                                    <span class="text-emerald-400 font-bold text-lg">03</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="font-primary font-bold text-xl text-white">Testing & Implementation</h3>
                                        <span class="text-xs text-emerald-400 font-mono">1-2 WEEKS</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Comprehensive testing protocols and smooth deployment strategies.</p>
                                    <div class="flex flex-wrap gap-3">
                                        <span class="text-xs text-gray-500">• Quality Assurance</span>
                                        <span class="text-xs text-gray-500">• Performance Testing</span>
                                        <span class="text-xs text-gray-500">• Deployment</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="process-step group">
                            <div class="flex items-start gap-5">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
                                    <span class="text-emerald-400 font-bold text-lg">04</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="font-primary font-bold text-xl text-white">Support & Optimization</h3>
                                        <span class="text-xs text-emerald-400 font-mono">ONGOING</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Continuous improvement and maintenance for optimal performance.</p>
                                    <div class="flex flex-wrap gap-3">
                                        <span class="text-xs text-gray-500">• Ongoing Support</span>
                                        <span class="text-xs text-gray-500">• Performance Optimization</span>
                                        <span class="text-xs text-gray-500">• Continuous Updates</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Visual Card -->
                <div class="reveal-right">
                    <div class="relative group">
                        <!-- Main Image Container -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop"
                                alt="Development Pipeline Process"
                                class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105"
                                style="aspect-ratio: 4/3;">

                            <!-- Dark Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent"></div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 border-t-2 border-r-2 border-emerald-500/30 rounded-tr-2xl pointer-events-none"></div>
                        <div class="absolute -bottom-4 -left-4 w-24 h-24 border-b-2 border-l-2 border-emerald-500/30 rounded-bl-2xl pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 sm:py-24 md:py-32 px-5 sm:px-6 lg:px-20">
        <!-- Background Decorations -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-500/30"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-emerald-500/30"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-emerald-500/30"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-500/30"></div>

            <!-- Glow Orbs -->
            <div class="absolute w-[500px] h-[400px] -top-32 -left-32 rounded-full bg-emerald-500/20 blur-[120px]"></div>
            <div class="absolute w-[400px] h-[350px] -bottom-32 -right-32 rounded-full bg-teal-500/15 blur-[100px]"></div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Column - Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 mb-6">
                        <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                        <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-400 font-secondary">Let's optimize together</span>
                        <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    </div>

                    <h2 class="font-primary text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-4">
                        Scale your business<br>
                        with <em class="bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent not-italic">nexusBPO</em>
                    </h2>

                    <p class="text-gray-400 text-base max-w-md mx-auto lg:mx-0 font-secondary">
                        Partner with us to transform your operations and achieve unprecedented growth.
                    </p>
                </div>

                <!-- Right Column - Contact Info -->
                <div class="space-y-6 text-center lg:text-right">
                    <div class="inline-block lg:block">
                        <div class="text-xs font-mono tracking-wider text-emerald-400 mb-3 font-secondary">TALK TO A SPECIALIST</div>
                        <a href="tel:+13460594935" class="group inline-flex items-center gap-3 text-2xl sm:text-3xl lg:text-4xl font-bold text-white hover:text-emerald-400 transition-all duration-300">
                            <i class="fas fa-phone-alt text-emerald-500 text-xl group-hover:scale-110 transition-transform"></i>
                            <span class="font-primary">+1 (346) 059-4935</span>
                        </a>
                    </div>

                    <div class="pt-4">
                        <a href="mailto:hello@nexusbpo.co" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-full hover:shadow-xl hover:scale-[1.02] transition-all duration-300 font-secondary">
                            <span>Start your journey</span>
                            <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
    @include("footer.php");
    ?>

    <style>
        /* Header Styles */
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

        /* Process Section Styles */
        .process-step {
            transition: all 0.3s ease;
            cursor: default;
        }

        .process-step:hover {
            transform: translateX(8px);
        }

        .process-step:hover .w-12 {
            border-color: rgb(16, 185, 129);
            background: rgba(16, 185, 129, 0.2);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        /* Reveal Animations */
        .reveal-left,
        .reveal-right {
            opacity: 0;
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal-left {
            transform: translateX(-30px);
        }

        .reveal-right {
            transform: translateX(30px);
        }

        .reveal-left.visible,
        .reveal-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .font-primary {
            font-family: 'Space Grotesk', monospace;
        }

        .font-secondary {
            font-family: 'Inter', system-ui, sans-serif;
        }
    </style>

    <script>
        // Navbar scroll hide/show effect
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

        // Mobile menu toggle
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

        // Intersection Observer for reveal animations
        const processRevealElements = document.querySelectorAll('#process .reveal-left, #process .reveal-right');
        const processObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    processObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        processRevealElements.forEach(el => processObserver.observe(el));
    </script>
</body>

</html>