<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>Careers at Outwerk Solutions | Join Our Team</title>

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/logo-main.webp">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation Library CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>

    <style>
        /* Custom Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: white;
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

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.5;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }
        }

        .animate-fade-up {
            animation: fadeUp 0.6s ease forwards;
        }

        .animate-blink {
            animation: blink 2s ease infinite;
        }

        .animate-pulse-slow {
            animation: pulse 2s ease-in-out infinite;
        }

        /* Service Card Flip Styles */
        .service-front,
        .service-back {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .service-card-wrapper:hover .service-front {
            opacity: 0;
            transform: translateY(-20px);
        }

        .service-card-wrapper:hover .service-back {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card-wrapper.simulated-hover .service-front {
            opacity: 0;
            transform: translateY(-20px);
        }

        .service-card-wrapper.simulated-hover .service-back {
            opacity: 1;
            transform: translateY(0);
        }

        /* Circuit Animation */
        .circuit-node.active-node {
            transform: translateY(-50%) scale(1.3);
            background-color: #22c55e !important;
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.5);
        }

        .moving-point {
            transition: left 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Scrollbar Styles */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #22c55e;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #16a34a;
        }

        ::selection {
            background: #22c55e;
            color: white;
        }

        /* Navbar Styles */
        #navbar {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #navbar.nav-hidden {
            transform: translateY(-100%);
        }

        #navbar.scrolled {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        body.menu-open {
            overflow: hidden;
        }

        .nav-link {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <?php @include("header.php"); ?>


    <!-- Careers Hero Section -->
    <section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 -left-32 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-emerald-400/20 rounded-full blur-3xl animate-pulse delay-1000"></div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="w-full h-full" style="background-image: linear-gradient(rgba(16,185,129,0.2) 1px, transparent 1px), linear-gradient(90deg, rgba(16,185,129,0.2) 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>

            <!-- Floating Particles -->
            <div class="absolute top-20 left-1/4 w-1 h-1 bg-emerald-400 rounded-full animate-ping"></div>
            <div class="absolute top-40 right-1/3 w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
            <div class="absolute bottom-32 left-1/3 w-1.5 h-1.5 bg-emerald-300 rounded-full animate-bounce"></div>
            <div class="absolute top-1/2 right-1/4 w-1 h-1 bg-white/50 rounded-full animate-ping delay-300"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-40 h-40 border-t-2 border-l-2 border-emerald-500/20"></div>
            <div class="absolute top-0 right-0 w-40 h-40 border-t-2 border-r-2 border-emerald-500/20"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 border-b-2 border-l-2 border-emerald-500/20"></div>
            <div class="absolute bottom-0 right-0 w-40 h-40 border-b-2 border-r-2 border-emerald-500/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-emerald-500/10 backdrop-blur-sm border border-emerald-500/30 rounded-full px-4 py-2 mb-6 animate-fade-up" data-aos="fade-down">
                <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-emerald-400 tracking-wider">JOIN OUR TEAM</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-['Space_Grotesk'] text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.1] tracking-tight" data-aos="fade-up" data-aos-delay="100">
                <span class="bg-gradient-to-r from-white to-emerald-200 bg-clip-text text-transparent">Build Your</span>
                <br>
                <span class="relative inline-block">
                    <span class="text-emerald-400">Career</span>
                    <span class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 to-emerald-500 rounded-full"></span>
                </span>
                <span class="text-white"> With Us</span>
            </h1>

            <!-- Description -->
            <p class="text-gray-300 text-base sm:text-lg md:text-xl max-w-2xl mx-auto mb-8 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Join a team of innovators, creators, and problem-solvers who are shaping the future of digital solutions.
            </p>

            <!-- Stats -->
            <div class="flex flex-wrap justify-center gap-8 sm:gap-12 mb-10" data-aos="fade-up" data-aos-delay="250">
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-emerald-400 font-['Space_Grotesk']">12+</div>
                    <div class="text-xs sm:text-sm text-gray-400 mt-1">Years Excellence</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-emerald-400 font-['Space_Grotesk']">150+</div>
                    <div class="text-xs sm:text-sm text-gray-400 mt-1">Team Members</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-emerald-400 font-['Space_Grotesk']">3</div>
                    <div class="text-xs sm:text-sm text-gray-400 mt-1">Global Offices</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-emerald-400 font-['Space_Grotesk']">98%</div>
                    <div class="text-xs sm:text-sm text-gray-400 mt-1">Satisfaction Rate</div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300">
                <a href="#Talent-section" class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-300 shadow-lg">
                    <span>Explore Opportunities</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#apply" class="group inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-emerald-500 text-emerald-400 hover:bg-emerald-500 hover:text-white font-semibold rounded-full transition-all duration-300">
                    <span>Apply Now</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce" data-aos="fade-up" data-aos-delay="400">
                <span class="text-xs text-gray-400 tracking-wider uppercase">Scroll to explore</span>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7m14-6l-7 7-7-7"></path>
                </svg>
            </div>
        </div>
    </section>

    <style>
        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fade-up 0.8s ease forwards;
        }

        .delay-1000 {
            animation-delay: 1s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }
    </style>

    <script>
        // Add AOS initialization if you want to use AOS with this section
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        }
    </script>

    <!-- Talent We Value Section - Modern & Improved -->
    <section id="Talent-section" class="py-20 sm:py-24 md:py-28 lg:py-32 relative bg-white overflow-hidden">
        <!-- Sophisticated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-200/40"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-emerald-200/40"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-emerald-200/40"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-200/40"></div>

            <!-- Soft Gradient Orbs -->
            <div class="absolute top-1/3 -left-32 w-80 h-80 bg-emerald-100/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/3 -right-32 w-80 h-80 bg-emerald-50/40 rounded-full blur-3xl"></div>

            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 opacity-[0.02]">
                <div class="w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, #22c55e 1px, transparent 1px); background-size: 32px 32px;"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <div class="inline-flex items-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    <span class="text-xs sm:text-sm font-medium tracking-[0.2em] uppercase text-emerald-600">OUR CULTURE DNA</span>
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                </div>
                <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-4">
                    Talent We <span class="text-emerald-500">Value</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-400 to-emerald-500 mx-auto my-6 rounded-full"></div>
                <p class="text-gray-500 text-base sm:text-lg leading-relaxed">
                    We've built a workplace where <span class="font-semibold text-emerald-600">collaboration</span>,
                    <span class="font-semibold text-emerald-600">growth</span>, and
                    <span class="font-semibold text-emerald-600">balance</span> create exceptional results.
                </p>
            </div>

            <!-- Talent Grid - 5 Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 md:gap-6">
                <!-- Card 1 -->
                <div class="group relative h-[400px] overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-500/20 hover:border-emerald-400/50" data-card-index="0">
                    <div class="absolute inset-0">
                        <img src="images/girl.webp" alt="Energetic Innovators" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full border border-white/30">01</span>
                        </div>
                        <i class="fas fa-lightbulb text-3xl text-emerald-300 mb-3"></i>
                        <h3 class="font-primary text-xl font-bold text-white mb-2">Energetic Innovators</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Creative minds solving complex problems with fresh perspectives.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-white/70 text-xs tracking-wide">PROBLEM SOLVING</span>
                            <div class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center">
                                <i class="fas fa-bolt text-white/80 text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Hover Content -->
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-700 p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 flex flex-col justify-between z-20">
                        <div>
                            <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full mb-4">01</span>
                            <i class="fas fa-lightbulb text-2xl text-white/80 mb-3"></i>
                            <h3 class="font-primary text-xl font-bold text-white mb-2">Energetic Innovators</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-4">Creative minds who thrive on solving complex problems with fresh perspectives and innovative approaches.</p>
                            <div class="space-y-2 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Problem Solving</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Creativity & Innovation</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Fresh Perspectives</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/20">
                            <div class="text-white/70 text-xs tracking-wide">INNOVATION CULTURE</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative h-[400px] overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-500/20 hover:border-emerald-400/50" data-card-index="1">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=450&fit=crop" alt="Seasoned Experts" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                        <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full border border-white/30 w-fit mb-3">02</span>
                        <i class="fas fa-user-graduate text-3xl text-emerald-300 mb-3"></i>
                        <h3 class="font-primary text-xl font-bold text-white mb-2">Seasoned Experts</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Professionals with diverse backgrounds and deep industry expertise.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-white/70 text-xs tracking-wide">EXPERIENCE</span>
                            <div class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center"><i class="fas fa-user-clock text-white/80 text-xs"></i></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-700 p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 flex flex-col justify-between z-20">
                        <div><span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full mb-4">02</span><i class="fas fa-user-graduate text-2xl text-white/80 mb-3"></i>
                            <h3 class="font-primary text-xl font-bold text-white mb-2">Seasoned Experts</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-4">Professionals with diverse backgrounds and deep industry expertise gained through years of practical experience.</p>
                            <div class="space-y-2 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Industry Expertise</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Practical Knowledge</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Mentorship</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/20">
                            <div class="text-white/70 text-xs tracking-wide">PROFESSIONAL EXCELLENCE</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative h-[400px] overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-500/20 hover:border-emerald-400/50" data-card-index="2">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=600&h=450&fit=crop" alt="Educated Specialists" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                        <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full border border-white/30 w-fit mb-3">03</span>
                        <i class="fas fa-graduation-cap text-3xl text-emerald-300 mb-3"></i>
                        <h3 class="font-primary text-xl font-bold text-white mb-2">Educated Specialists</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Formally trained experts bringing academic excellence to practical challenges.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-white/70 text-xs tracking-wide">EDUCATION</span>
                            <div class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center"><i class="fas fa-graduation-cap text-white/80 text-xs"></i></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-700 p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 flex flex-col justify-between z-20">
                        <div><span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full mb-4">03</span><i class="fas fa-graduation-cap text-2xl text-white/80 mb-3"></i>
                            <h3 class="font-primary text-xl font-bold text-white mb-2">Educated Specialists</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-4">Formally trained experts who bring academic excellence, specialized knowledge, and research-based approaches to practical challenges.</p>
                            <div class="space-y-2 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Academic Excellence</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Specialized Knowledge</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Research-Based</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/20">
                            <div class="text-white/70 text-xs tracking-wide">ACADEMIC EXCELLENCE</div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group relative h-[400px] overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-500/20 hover:border-emerald-400/50" data-card-index="3">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=450&fit=crop" alt="Growth Champions" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                        <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full border border-white/30 w-fit mb-3">04</span>
                        <i class="fas fa-chart-line text-3xl text-emerald-300 mb-3"></i>
                        <h3 class="font-primary text-xl font-bold text-white mb-2">Growth Champions</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Individuals committed to continuous learning and professional development.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-white/70 text-xs tracking-wide">LEARNING</span>
                            <div class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center"><i class="fas fa-seedling text-white/80 text-xs"></i></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-700 p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 flex flex-col justify-between z-20">
                        <div><span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full mb-4">04</span><i class="fas fa-chart-line text-2xl text-white/80 mb-3"></i>
                            <h3 class="font-primary text-xl font-bold text-white mb-2">Growth Champions</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-4">Individuals passionately committed to continuous learning, skill development, and helping others grow.</p>
                            <div class="space-y-2 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Continuous Learning</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Skill Development</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Helping Others Grow</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/20">
                            <div class="text-white/70 text-xs tracking-wide">CONTINUOUS GROWTH</div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="group relative h-[400px] overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-500/20 hover:border-emerald-400/50" data-card-index="4">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=600&h=450&fit=crop" alt="Global Thinkers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                        <span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full border border-white/30 w-fit mb-3">05</span>
                        <i class="fas fa-globe text-3xl text-emerald-300 mb-3"></i>
                        <h3 class="font-primary text-xl font-bold text-white mb-2">Global Thinkers</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Professionals with international outlook who understand global markets.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-white/70 text-xs tracking-wide">GLOBAL MINDSET</span>
                            <div class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center"><i class="fas fa-globe text-white/80 text-xs"></i></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-700 p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 flex flex-col justify-between z-20">
                        <div><span class="inline-block px-3 py-1 text-xs font-bold text-white bg-white/20 backdrop-blur-sm rounded-full mb-4">05</span><i class="fas fa-globe text-2xl text-white/80 mb-3"></i>
                            <h3 class="font-primary text-xl font-bold text-white mb-2">Global Thinkers</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-4">Professionals with international outlook and cultural intelligence who understand global markets and diverse perspectives.</p>
                            <div class="space-y-2 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Global Mindset</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">Cultural Intelligence</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-white rotate-45"></div><span class="text-white text-sm">International Outlook</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/20">
                            <div class="text-white/70 text-xs tracking-wide">INTERNATIONAL OUTLOOK</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Circuit Animation -->
            <div class="relative max-w-4xl mx-auto mt-16 hidden lg:block">
                <div class="absolute top-1/2 left-0 right-0 h-px bg-gradient-to-r from-transparent via-emerald-400 to-transparent transform -translate-y-1/2"></div>
                <div class="circuit-node absolute top-1/2 transform -translate-y-1/2 w-3 h-3 bg-emerald-500 rounded-full shadow-lg cursor-pointer transition-all duration-300 hover:scale-150" style="left: 10%"></div>
                <div class="circuit-node absolute top-1/2 transform -translate-y-1/2 w-3 h-3 bg-emerald-400 rounded-full cursor-pointer transition-all duration-300 hover:scale-150" style="left: 30%"></div>
                <div class="circuit-node absolute top-1/2 transform -translate-y-1/2 w-3 h-3 bg-emerald-400 rounded-full cursor-pointer transition-all duration-300 hover:scale-150" style="left: 50%"></div>
                <div class="circuit-node absolute top-1/2 transform -translate-y-1/2 w-3 h-3 bg-emerald-400 rounded-full cursor-pointer transition-all duration-300 hover:scale-150" style="left: 70%"></div>
                <div class="circuit-node absolute top-1/2 transform -translate-y-1/2 w-3 h-3 bg-emerald-400 rounded-full cursor-pointer transition-all duration-300 hover:scale-150" style="left: 90%"></div>
                <div id="movingPoint" class="absolute top-1/2 transform -translate-y-1/2 w-5 h-5 bg-emerald-500 rounded-full shadow-lg shadow-emerald-500/50 transition-all duration-700 cursor-pointer"></div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16 lg:mt-20">
                <div class="inline-block">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Ready to Make an Impact?</h3>
                    <p class="text-gray-500 mb-6">Discover opportunities to grow with us and shape the future</p>
                    <a href="#apply" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-300 shadow-md">
                        <span>View Open Positions</span>
                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .circuit-node.active-node {
            transform: translateY(-50%) scale(1.5);
            background-color: #22c55e !important;
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.6);
        }

        .moving-point::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }

        .group.simulated-hover .absolute.inset-0.bg-gradient-to-br {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    </style>

    <section
        id="workplace-excellence"
        aria-label="Workplace Excellence culture and approach"
        class="bg-black py-12 md:py-28 overflow-hidden">

        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 lg:gap-20 items-center">

                <!-- Text Column -->
                <div>
                    <div class="reveal flex items-center gap-[10px] text-emerald-400 text-[0.65rem] sm:text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-4 sm:mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-emerald-400 font-['Inter']">Our culture</div>
                    <h2 class="reveal d1 font-['Space_Grotesk'] font-bold leading-[1.1] tracking-[-0.025em] text-white mb-6 sm:mb-8"
                        style="font-size:clamp(1.5rem, 3.8vw, 2.8rem);">
                        Where <span class="bg-emerald-500 text-white px-[0.15em] pb-[0.05em] inline-block -skew-x-3 shadow-[-6px_6px_0_rgba(0,0,0,0.12)]">innovation</span> meets collaboration
                    </h2>

                    <ol class="flex flex-col gap-6 sm:gap-9 mt-6 sm:mt-8" style="list-style:none; padding:0;">
                        <li class="reveal d1 relative pl-[50px] sm:pl-[60px] md:pl-20 group">
                            <div class="absolute left-0 top-0 w-9 h-9 sm:w-11 sm:h-11 md:w-14 md:h-14 bg-emerald-500 rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-base sm:text-lg md:text-xl font-bold text-white shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3" aria-hidden="true">01</div>
                            <div class="absolute left-[18px] sm:left-[22px] md:left-[27px] top-9 sm:top-11 md:top-14 w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(16,185,129,0.3)] to-transparent pointer-events-none" aria-hidden="true"></div>
                            <h3 class="font-['Space_Grotesk'] text-sm sm:text-base md:text-lg font-bold mb-2 text-white">Teamwork excellence</h3>
                            <p class="text-gray-400 text-xs sm:text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">Together we achieve more than any one person can do. Our supportive environment creates highly productive collaboration across all teams.</p>
                        </li>
                        <li class="reveal d2 relative pl-[50px] sm:pl-[60px] md:pl-20 group">
                            <div class="absolute left-0 top-0 w-9 h-9 sm:w-11 sm:h-11 md:w-14 md:h-14 bg-emerald-500 rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-base sm:text-lg md:text-xl font-bold text-white shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3" aria-hidden="true">02</div>
                            <div class="absolute left-[18px] sm:left-[22px] md:left-[27px] top-9 sm:top-11 md:top-14 w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(16,185,129,0.3)] to-transparent pointer-events-none" aria-hidden="true"></div>
                            <h3 class="font-['Space_Grotesk'] text-sm sm:text-base md:text-lg font-bold mb-2 text-white">Continuous development</h3>
                            <p class="text-gray-400 text-xs sm:text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">We shape brighter futures through continuous learning and advancement, creating dynamic growth opportunities for everyone — skill enhancement, career paths, and a true learning culture.</p>
                        </li>
                        <li class="reveal d3 relative pl-[50px] sm:pl-[60px] md:pl-20 group">
                            <div class="absolute left-0 top-0 w-9 h-9 sm:w-11 sm:h-11 md:w-14 md:h-14 bg-emerald-500 rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-base sm:text-lg md:text-xl font-bold text-white shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3" aria-hidden="true">03</div>
                            <div class="absolute left-[18px] sm:left-[22px] md:left-[27px] top-9 sm:top-11 md:top-14 w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(16,185,129,0.3)] to-transparent pointer-events-none" aria-hidden="true"></div>
                            <h3 class="font-['Space_Grotesk'] text-sm sm:text-base md:text-lg font-bold mb-2 text-white">Work-life balance</h3>
                            <p class="text-gray-400 text-xs sm:text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">Human connections drive our success. We provide a safe, welcoming environment that respects both staff and clients, fostering well-being and wellness first.</p>
                        </li>
                        <li class="reveal d4 relative pl-[50px] sm:pl-[60px] md:pl-20 group">
                            <div class="absolute left-0 top-0 w-9 h-9 sm:w-11 sm:h-11 md:w-14 md:h-14 bg-emerald-500 rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-base sm:text-lg md:text-xl font-bold text-white shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3" aria-hidden="true">04</div>
                            <h3 class="font-['Space_Grotesk'] text-sm sm:text-base md:text-lg font-bold mb-2 text-white">Unwavering commitment</h3>
                            <p class="text-gray-400 text-xs sm:text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">Delivering world-class services at competitive prices while ensuring utmost client satisfaction is our core mission. Excellence in service, every time.</p>
                        </li>
                    </ol>
                </div>

                <!-- Images Column with Auto-Scroll Slider -->
                <div class="reveal-right relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-[0_30px_50px_-20px_rgba(0,0,0,0.5)]" style="height: 600px; border: 1px solid rgba(16,185,129,0.2);">
                        <div class="auto-scroll-container">
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop"
                                    alt="Team collaboration at workplace"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">team collaboration</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Innovation Sessions</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
                                    alt="Modern office environment"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">office environment</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Modern Workspaces</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop"
                                    alt="Training and development session"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">learning & development</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Continuous Growth</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1200&auto=format&fit=crop"
                                    alt="Team celebrating success"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">innovation & celebration</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Creative Sessions</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop"
                                    alt="Global team collaboration"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">global community</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Team Celebrations</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop"
                                    alt="Team meeting discussion"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">teamwork in action</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Strategic Planning</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Duplicate for seamless loop -->
                            <div class="scroll-item relative h-full w-full flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop"
                                    alt="Team collaboration"
                                    class="w-full h-full object-cover grayscale contrast-[1.05]"
                                    loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="text-white text-xs tracking-widest uppercase font-['Inter'] mb-1">collaborative spirit</div>
                                        <h4 class="font-['Space_Grotesk'] text-lg font-bold text-white">Innovation Sessions</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -left-6 sm:-bottom-6 sm:-left-8 bg-white text-black rounded-2xl px-4 py-3 sm:px-5 sm:py-4 shadow-2xl z-10">
                        <div class="font-['Space_Grotesk'] text-xl sm:text-2xl md:text-3xl font-bold text-emerald-500 tracking-[-0.03em] leading-none">JOIN US</div>
                        <div class="text-[10px] sm:text-xs text-black/55 mt-1 font-['Inter']"><a href="#careers" class="hover:text-emerald-500 transition-colors">View Careers</a> · <a href="#culture" class="hover:text-emerald-500 transition-colors">Our Culture</a></div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 sm:mt-20 md:mt-24 text-center">
                <a href="#apply" class="group inline-flex items-center gap-3 px-8 py-3 sm:px-10 sm:py-4 bg-emerald-500 text-white font-['Inter'] text-sm sm:text-base font-semibold tracking-wide rounded-full transition-all duration-300 hover:bg-white hover:text-emerald-500 hover:shadow-[0_10px_25px_-5px_rgba(16,185,129,0.4)]">
                    <span>VIEW CAREERS</span>
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <p class="text-gray-500 text-xs sm:text-sm mt-6 font-['Inter']">Be part of something exceptional</p>
            </div>
        </div>
    </section>

    <style>
        /* Auto-scroll animation for the slider */
        .auto-scroll-container {
            display: flex;
            flex-direction: column;
            height: 100%;
            animation: autoScroll 25s linear infinite;
        }

        .scroll-item {
            flex-shrink: 0;
            height: calc(100% / 3);
            width: 100%;
            position: relative;
        }

        @keyframes autoScroll {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-66.666%);
            }
        }

        /* Pause animation on hover */
        .auto-scroll-container:hover {
            animation-play-state: paused;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .auto-scroll-container {
                animation-duration: 20s;
            }
        }
    </style>

    <script>
        // Add reveal class intersection observer for scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const revealElements = document.querySelectorAll('.reveal, .reveal-right');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            revealElements.forEach(el => observer.observe(el));
        });
    </script>

    <?php @include("footer.php"); ?>

    <script>
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        }

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');

        if (navbar) {
            window.addEventListener('scroll', function() {
                const currentScroll = window.scrollY;
                if (currentScroll > 50) navbar.classList.add('scrolled');
                else navbar.classList.remove('scrolled');
                if (currentScroll > lastScroll && currentScroll > 100) navbar.classList.add('nav-hidden');
                else navbar.classList.remove('nav-hidden');
                lastScroll = currentScroll;
            });
        }

        // Circuit animation for talent cards
        (function() {
            const cards = document.querySelectorAll('.service-card-wrapper');
            const nodes = document.querySelectorAll('.circuit-node');
            const movingPoint = document.getElementById('movingPoint');
            let currentIndex = 0;
            let autoInterval;

            if (cards.length && nodes.length) {
                function activateCard(index) {
                    cards.forEach((card, i) => {
                        if (i === index) card.classList.add('simulated-hover');
                        else card.classList.remove('simulated-hover');
                    });
                    nodes.forEach((node, i) => {
                        if (i === index) {
                            node.classList.add('active-node');
                            node.style.backgroundColor = '#22c55e';
                            node.style.boxShadow = '0 0 15px rgba(34,197,94,0.5)';
                        } else {
                            node.classList.remove('active-node');
                            node.style.backgroundColor = '#4ade80';
                            node.style.boxShadow = 'none';
                        }
                    });
                    if (movingPoint && nodes[index]) {
                        movingPoint.style.left = nodes[index].style.left;
                    }
                }

                function startAuto() {
                    if (autoInterval) clearInterval(autoInterval);
                    autoInterval = setInterval(() => {
                        currentIndex = (currentIndex + 1) % cards.length;
                        activateCard(currentIndex);
                    }, 3000);
                }

                startAuto();

                nodes.forEach((node, i) => {
                    node.addEventListener('mouseenter', () => {
                        clearInterval(autoInterval);
                        currentIndex = i;
                        activateCard(i);
                    });
                    node.addEventListener('mouseleave', () => startAuto());
                });

                cards.forEach((card, i) => {
                    card.addEventListener('mouseenter', () => {
                        clearInterval(autoInterval);
                        currentIndex = i;
                        activateCard(i);
                    });
                    card.addEventListener('mouseleave', () => startAuto());
                });

                activateCard(0);
            }
        })();

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const navbarHeight = document.getElementById('navbar')?.offsetHeight || 80;
                    window.scrollTo({
                        top: target.offsetTop - navbarHeight - 20,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>