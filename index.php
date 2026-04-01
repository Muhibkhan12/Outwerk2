<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>One Stop Solutions – BPO & Contact Centre</title>
    <!-- Tailwind + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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

        .animate-blink-cursor {
            animation: blink 0.9s step-end infinite;
        }

        .animate-bounce-soft {
            animation: bounce-soft 1.8s infinite ease-in-out;
        }

        .btn-hover {
            transition: all 0.2s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
        }

        .svg-container {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 5;
        }

        .svg-container svg {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
        }

        .safe-top {
            padding-top: env(safe-area-inset-top);
        }

        /* Primary Font - Space Grotesk for all headings */
        .font-primary,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font {
            font-family: 'Space Grotesk', monospace;
        }

        /* Secondary Font - Inter for body text */
        .font-secondary,
        body,
        p,
        span,
        a,
        button,
        input,
        textarea,
        label,
        .body-text {
            font-family: 'Inter', system-ui, sans-serif;
        }

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

        .service-card-wrapper:hover {
            transform: translateY(-4px);
        }

        .progress-bar {
            transition: width 1.5s cubic-bezier(0.22, 0.97, 0.36, 1);
        }

        .carousel-slide {
            transition: all 0.3s ease;
        }

        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap');

        .grayscale {
            filter: grayscale(0.3);
            transition: filter 0.5s ease;
        }

        .grayscale:hover {
            filter: grayscale(0);
        }

        @media (max-width: 640px) {

            a,
            button {
                min-height: 44px;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        /* Full height sections */
        .min-h-screen-custom {
            min-height: 100vh;
            min-height: 100dvh;
        }
    </style>
</head>
<?php @include("header.php") ?>
<body class="bg-white antialiased overflow-x-hidden font-secondary">

    

<section class="creative-digital-section">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Custom Tailwind Config Override -->
    <style>
        .creative-digital-section {
            all: initial;
            display: block;
            font-family: 'Space Grotesk', sans-serif;
        }

        .creative-digital-section * {
            box-sizing: border-box;
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

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 0 0 14px rgba(34, 197, 94, 0.2), 0 0 0 28px rgba(34, 197, 94, 0.1);
            }

            50% {
                box-shadow: 0 0 0 20px rgba(34, 197, 94, 0.25), 0 0 0 38px rgba(34, 197, 94, 0.12);
            }
        }

        .animate-fade-up {
            animation: fadeUp 0.8s ease both;
        }

        .animate-fade-up-delay-1 {
            animation-delay: 0.1s;
        }

        .animate-fade-up-delay-2 {
            animation-delay: 0.25s;
        }

        .animate-fade-up-delay-3 {
            animation-delay: 0.4s;
        }

        .animate-fade-up-delay-4 {
            animation-delay: 0.55s;
        }

        .animate-blink {
            animation: blink 2s ease infinite;
        }

        .animate-pulse-soft {
            animation: pulse 2.8s ease infinite;
        }

        .play-btn .icon-pause {
            display: none;
        }

        .video-overlay.playing .play-btn .icon-play {
            display: none;
        }

        .video-overlay.playing .play-btn .icon-pause {
            display: block;
        }

        .video-overlay.faded {
            opacity: 0;
            pointer-events: none;
        }

        .video-inner:hover .video-overlay.faded.paused {
            opacity: 1;
            pointer-events: auto;
        }

        /* Fix for video container - ensure proper sizing */
        .video-container-fixed {
            position: relative;
            width: 100%;
            height: auto;
            background: #dcfce7;
            border-radius: 1rem;
            overflow: hidden;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            background: #1a2e1f;
        }

        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay-element {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            cursor: pointer;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .video-wrapper {
                padding-bottom: 56.25%;
                /* Keep 16:9 on mobile too */
            }
        }
    </style>

    <!-- Background Elements - UPDATED WITH SOLID BG COLOR -->
    <div class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <!-- Optional: Add a subtle pattern overlay -->
    <div class="absolute inset-0 pointer-events-none opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2310b981" fill-opacity="0.3"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-repeat: repeat;"></div>
    
    <!-- Background Glow Orbs - Adjusted for dark theme -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-[600px] h-[500px] -top-48 -left-32 rounded-full bg-emerald-500/20 blur-[100px]"></div>
        <div class="absolute w-[450px] h-[400px] -bottom-24 -right-32 rounded-full bg-teal-500/15 blur-[100px]"></div>
        <div class="absolute w-[350px] h-[350px] top-2/5 left-2/5 rounded-full bg-emerald-400/10 blur-[100px]"></div>
    </div>
    
    <!-- Grid Pattern - Dark version -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.08]" style="background-image: linear-gradient(rgba(16,185,129,0.15) 1px, transparent 1px), linear-gradient(90deg, rgba(16,185,129,0.15) 1px, transparent 1px); background-size: 60px 60px;"></div>
    
    <!-- Dark overlay for depth -->
    <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
        <!-- Hero Grid -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Column -->
            <div class="animate-fade-up animate-fade-up-delay-1">
                <div class="inline-flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/30 rounded-full px-4 py-2 mb-6 backdrop-blur-sm">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-blink"></span>
                    <span class="text-xs font-medium text-emerald-400 tracking-wider uppercase">Established 2011</span>
                </div>
                <h1 class="font-['Space_Grotesk'] text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-white">
                    We Are <span class="text-emerald-500">Creative</span>
                    <span class="block text-3xl sm:text-4xl lg:text-5xl mt-2 text-gray-200">Digital Agency</span>
                </h1>
            </div>

            <!-- Right Column -->
            <div class="animate-fade-up animate-fade-up-delay-2 space-y-8">
                <p class="text-gray-300 leading-relaxed border-l-2 border-emerald-500 pl-5 max-w-md">
                    We are a creative agency with several services focused on quality and innovation for your business — turning bold ideas into digital realities.
                </p>
                <div class="flex flex-wrap gap-8 sm:gap-10">
                    <div class="stat-item" data-target="12">
                        <div class="stat-num text-3xl sm:text-4xl font-bold text-white">12<span class="text-emerald-500">+</span></div>
                        <div class="text-xs text-gray-400 uppercase tracking-wide">Years of<br>Experience</div>
                    </div>
                    <div class="stat-item" data-target="83" data-suffix="K">
                        <div class="stat-num text-3xl sm:text-4xl font-bold text-white">83K<span class="text-emerald-500">+</span></div>
                        <div class="text-xs text-gray-400 uppercase tracking-wide">Completed<br>Project</div>
                    </div>
                    <div class="stat-item" data-target="4.2" data-suffix="K" data-decimal="true">
                        <div class="stat-num text-3xl sm:text-4xl font-bold text-white">4.2K<span class="text-emerald-500">+</span></div>
                        <div class="text-xs text-gray-400 uppercase tracking-wide">Trusted<br>Companies</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section - FIXED VERSION WITH AUTO-PLAY -->
        <div class="mt-12 sm:mt-16 animate-fade-up animate-fade-up-delay-3">
            <div class="video-container-fixed border border-emerald-500/30 shadow-2xl">
                <div class="video-wrapper rounded-xl overflow-hidden">
                    <video id="heroVideo" preload="auto" autoplay muted loop playsinline>
                        <source src="home-page-video.mp4" type="video/mp4">
                        <source src="home-page-video.mp4" type="video/webm">
                        Your browser does not support the video tag.
                    </video>

                    <!-- Video Tint Overlay - Darker for dark theme -->
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/30 to-gray-900/20 pointer-events-none z-5"></div>

                    <!-- Progress Bar -->
                    <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-white/20 cursor-pointer z-20 group" id="videoProgress">
                        <div class="progress-fill h-full w-0 bg-emerald-500 rounded-r-sm relative" id="progressFill">
                            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-emerald-500 rounded-full opacity-0 group-hover:opacity-100 transition"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        (function() {
            const container = document.querySelector('.relative.overflow-hidden');

            // Video Controls
            const video = container.querySelector('#heroVideo');
            const overlay = container.querySelector('#videoOverlay');
            const playBtn = container.querySelector('#playBtn');
            const muteBtn = container.querySelector('#muteBtn');
            const progressBar = container.querySelector('#videoProgress');
            const fill = container.querySelector('#progressFill');
            const iconMuted = container.querySelector('#iconMuted');
            const iconUnmuted = container.querySelector('#iconUnmuted');

            if (video && overlay && playBtn) {
                let isPlaying = true; // Set to true because video autoplays

                // Ensure video starts playing
                const startVideo = () => {
                    video.play().then(() => {
                        isPlaying = true;
                        overlay.classList.add('faded', 'playing');
                        overlay.classList.remove('paused');
                    }).catch(e => {
                        console.log('Autoplay was prevented. User interaction needed:', e);
                        isPlaying = false;
                        overlay.classList.remove('faded', 'playing');
                        overlay.classList.add('paused');
                    });
                };

                // Start video automatically
                startVideo();

                function togglePlay() {
                    if (video.paused) {
                        video.play().catch(e => console.log('Video play failed:', e));
                        isPlaying = true;
                        overlay.classList.add('faded', 'playing');
                        overlay.classList.remove('paused');
                    } else {
                        video.pause();
                        isPlaying = false;
                        overlay.classList.remove('faded', 'playing');
                        overlay.classList.add('paused');
                    }
                }

                playBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    togglePlay();
                });
                overlay.addEventListener('click', togglePlay);

                if (muteBtn) {
                    muteBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        video.muted = !video.muted;
                        if (iconMuted && iconUnmuted) {
                            iconMuted.style.display = video.muted ? 'block' : 'none';
                            iconUnmuted.style.display = video.muted ? 'none' : 'block';
                        }
                    });
                }

                if (video && fill && progressBar) {
                    video.addEventListener('timeupdate', function() {
                        if (video.duration && !isNaN(video.duration)) {
                            const percent = (video.currentTime / video.duration) * 100;
                            fill.style.width = percent + '%';
                        }
                    });

                    progressBar.addEventListener('click', function(e) {
                        const rect = progressBar.getBoundingClientRect();
                        const clickPosition = (e.clientX - rect.left) / rect.width;
                        if (video.duration) {
                            video.currentTime = clickPosition * video.duration;
                        }
                    });
                }

                video.addEventListener('ended', function() {
                    isPlaying = false;
                    overlay.classList.remove('faded', 'playing', 'paused');
                    if (fill) fill.style.width = '0%';
                });
            }

            // Stats Counter Animation
            function animateCounter(el, target, isDecimal, isK) {
                let current = 0;
                const duration = 1500;
                const steps = 60;
                const increment = target / steps;
                let step = 0;

                const updateCounter = () => {
                    step++;
                    current += increment;
                    if (step < steps) {
                        const display = isDecimal ? current.toFixed(1) : Math.floor(current);
                        el.innerHTML = display + (isK ? 'K' : '') + '<span class="text-emerald-500">+</span>';
                        requestAnimationFrame(updateCounter);
                    } else {
                        el.innerHTML = (isDecimal ? target.toFixed(1) : Math.floor(target)) + (isK ? 'K' : '') + '<span class="text-emerald-500">+</span>';
                    }
                };
                requestAnimationFrame(updateCounter);
            }

            const statsContainer = document.querySelector('.flex.flex-wrap.gap-8');
            if (statsContainer) {
                const statItems = document.querySelectorAll('.stat-item');
                const obs = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            statItems.forEach(function(el) {
                                let target = parseFloat(el.getAttribute('data-target'));
                                const isDecimal = el.getAttribute('data-decimal') === 'true';
                                const isK = el.getAttribute('data-suffix') === 'K';
                                const numEl = el.querySelector('.stat-num');
                                if (numEl && target && !isNaN(target)) {
                                    animateCounter(numEl, target, isDecimal, isK);
                                }
                            });
                            obs.disconnect();
                        }
                    });
                }, {
                    threshold: 0.5
                });
                obs.observe(statsContainer);
            }
        })();
    </script>
</section>

    <!-- ===== ABOUT SECTION - Full Height ===== -->
    <section id="about" class="relative overflow-hidden bg-white min-h-screen-custom py-20 sm:py-28 md:py-32 px-5 sm:px-6 md:px-12 lg:px-20 flex items-center">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-300/30"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-emerald-300/30"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-emerald-300/30"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-300/30"></div>
            <div class="absolute left-16 top-28 w-px h-64 bg-gradient-to-b from-transparent via-emerald-400/30 to-transparent hidden xl:block"></div>
            <div class="absolute top-44 right-24 w-40 h-[3px] bg-emerald-400 rounded-full opacity-50 hidden xl:block"></div>
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 32px 32px;"></div>
        </div>

        <div class="max-w-7xl mx-auto w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12 md:gap-16 lg:gap-20">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop"
                                alt="Team at work" class="w-full h-auto object-cover rounded-2xl grayscale-[0.2] hover:grayscale-0 transition-all duration-500"
                                style="aspect-ratio: 4/5;">
                            <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-500/10 rounded-full blur-2xl"></div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-px bg-emerald-400"></div><span class="text-emerald-600 text-xs font-bold tracking-[0.25em] uppercase font-secondary">Since 2014</span>
                    </div>
                    <h2 class="font-primary font-bold leading-[1.2] tracking-[-0.02em] text-gray-900 text-3xl sm:text-4xl md:text-5xl">
                        Empowering businesses through<br>
                        <span class="bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">exceptional BPO solutions</span>
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed font-secondary">
                        Headquartered in Karachi, One Stop Solutions has been transforming customer experiences since 2014.
                        We specialize in delivering comprehensive BPO services — from inbound support and outbound sales to
                        lead generation and technical assistance — that help businesses scale efficiently while maintaining
                        exceptional service standards.
                    </p>
                    <div class="pt-4">
                        <a href="#contact" class="group inline-flex items-center gap-2 text-emerald-600 font-semibold hover:gap-3 transition-all font-secondary">
                            <span>Discover our approach</span>
                            <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Global Presence -->
            <div class="mt-16 sm:mt-20">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 mb-4"><i class="fas fa-globe-asia text-emerald-500 text-2xl"></i>
                        <h3 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-800 font-primary">Global Presence</h3>
                    </div>
                    <p class="text-sm text-gray-500 max-w-lg mx-auto font-secondary">Serving clients across 3 continents with round-the-clock support</p>
                    <div class="w-16 h-0.5 bg-gradient-to-r from-emerald-400 to-teal-400 mx-auto mt-4 rounded-full"></div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="group relative">
                        <div class="relative bg-white border-2 border-emerald-200 rounded-2xl p-6 text-center transition-all hover:border-emerald-400 hover:shadow-xl overflow-hidden">
                            <div class="absolute inset-0 pointer-events-none"><img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?q=80&w=2070&auto=format&fit=crop" alt="Karachi" class="w-full h-full object-cover opacity-20 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative z-10">
                                <div class="text-5xl mb-3">🇵🇰</div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1 font-primary">Pakistan</h4>
                                <p class="text-xs font-semibold text-emerald-600 mb-2 font-secondary">HEADQUARTERS</p>
                                <p class="text-sm text-gray-600 font-secondary">Est. 2014 · Karachi</p>
                                <div class="mt-3 flex justify-center gap-1 text-xs text-gray-400 font-secondary"><span>Financial Hub</span><span>•</span><span>Port City</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="relative bg-white border-2 border-emerald-200 rounded-2xl p-6 text-center transition-all hover:border-emerald-400 hover:shadow-xl overflow-hidden">
                            <div class="absolute inset-0 pointer-events-none"><img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?q=80&w=2070&auto=format&fit=crop" alt="USA" class="w-full h-full object-cover opacity-20 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative z-10">
                                <div class="text-5xl mb-3">🇺🇸</div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1 font-primary">United States</h4>
                                <p class="text-xs font-semibold text-emerald-600 mb-2 font-secondary">CLIENTS</p>
                                <p class="text-sm text-gray-600 font-secondary">Enterprise solutions · Since 2018</p>
                                <div class="mt-3 flex justify-center gap-1 text-xs text-gray-400 font-secondary"><span>New York</span><span>•</span><span>California</span><span>•</span><span>Texas</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="relative bg-white border-2 border-emerald-200 rounded-2xl p-6 text-center transition-all hover:border-emerald-400 hover:shadow-xl overflow-hidden">
                            <div class="absolute inset-0 pointer-events-none"><img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=2070&auto=format&fit=crop" alt="Canada" class="w-full h-full object-cover opacity-20 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative z-10">
                                <div class="text-5xl mb-3">🇨🇦</div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1 font-primary">Canada</h4>
                                <p class="text-xs font-semibold text-emerald-600 mb-2 font-secondary">PARTNERS</p>
                                <p class="text-sm text-gray-600 font-secondary">Business partnerships · Since 2020</p>
                                <div class="mt-3 flex justify-center gap-1 text-xs text-gray-400 font-secondary"><span>Toronto</span><span>•</span><span>Vancouver</span><span>•</span><span>Montreal</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden xl:block absolute bottom-10 right-10" aria-hidden="true">
            <div class="w-16 h-16 bg-emerald-400/20 rotate-12 rounded-2xl absolute -top-4 -right-4"></div>
            <div class="w-16 h-16 bg-gray-900/10 -rotate-6 rounded-2xl absolute top-0 right-0"></div>
        </div>
    </section>


    <!-- Core Capabilities & Services List (Two Column Layout) -->
        
    <!-- ===== SERVICES SECTION ===== -->
<section id="services" class="relative py-20 sm:py-28 md:py-32 px-5 sm:px-6 bg-white overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-300/40"></div>
        <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-teal-300/40"></div>
        <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-teal-300/40"></div>
        <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-300/40"></div>
        <div class="absolute top-1/3 right-12 w-px h-48 rotate-45 bg-gradient-to-b from-emerald-400/0 via-emerald-400/20 to-emerald-400/0"></div>
        <div class="absolute bottom-1/3 left-12 w-px h-48 -rotate-45 bg-gradient-to-b from-teal-400/0 via-teal-400/20 to-teal-400/0"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 sm:mb-20 md:mb-24">
    <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight">
        <span class="text-gray-800">OUR</span>
        <span class="bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">SERVICES</span>
    </h2>
</div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 mb-20">
            <!-- Left Column - Core Capabilities -->
            <div class="reveal-left">
                <span class="text-xs font-semibold tracking-[0.12em] uppercase text-[#2A7DE1]">Core Capabilities</span>
                <h2 class="font-['Space_Grotesk'] font-bold text-3xl md:text-4xl lg:text-5xl leading-tight tracking-[-0.02em] text-[#121217] mt-4">
                    Future-ready<br>outsourcing solutions
                </h2>
                <p class="text-base text-[#5a5a62] leading-relaxed mt-5 max-w-md">
                    We combine domain expertise, advanced automation, and a people-first culture to deliver measurable business impact.
                </p>
            </div>

            <!-- Right Column - Services List -->
            <div class="reveal-right">
                <div class="flex flex-col">
                    <!-- Service Items -->
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#2A7DE1] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#121217] transition-colors duration-250">Inbound call center</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Outbound calls</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Customer support</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Technical helpdesk</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Lead generation</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Web development</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">SEO & SEM</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="service-item group flex items-center gap-4 py-6 border-b border-black/10 cursor-none transition-all duration-250 hover:pl-2.5">
                        <div class="service-dot w-2 h-2 bg-[#ddd] rounded-full flex-shrink-0"></div>
                        <span class="service-name font-['Space_Grotesk'] text-xl md:text-2xl font-semibold text-[#bbb] transition-colors duration-250">Social Media</span>
                        <span class="service-arrow ml-auto text-[#ccc] text-lg opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-1">→</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 sm:mt-20 md:mt-24 text-center">
            <div class="max-w-md mx-auto">
                <a href="#contact" class="group inline-flex items-center gap-3 px-6 sm:px-8 py-3 sm:py-4 font-semibold rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white hover:shadow-xl hover:scale-[1.02] transition-all font-secondary">
                    <span>EXPLORE MORE</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                </a>
            
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom animations and overrides */
    .reveal-left, .reveal-right {
        opacity: 0;
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    
    .reveal-left {
        transform: translateX(-30px);
    }
    
    .reveal-right {
        transform: translateX(30px);
    }
    
    .reveal-left.visible, .reveal-right.visible {
        opacity: 1;
        transform: translateX(0);
    }
    
    .service-item {
        cursor: none;
        transition: padding-left 0.25s ease;
    }
    
    .service-arrow {
        transition: opacity 0.2s ease, transform 0.2s ease;
    }
    
    .service-name {
        transition: color 0.25s ease;
    }
</style>

<script>
    // Intersection Observer for reveal animations
    const revealElements = document.querySelectorAll('.reveal-left, .reveal-right');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    revealElements.forEach(el => observer.observe(el));
    
    // Service item active state management
    document.querySelectorAll('.service-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            document.querySelectorAll('.service-item').forEach(i => {
                i.classList.remove('active');
                const dot = i.querySelector('.service-dot');
                if (dot) dot.style.background = '#ddd';
            });
            this.classList.add('active');
            const activeDot = this.querySelector('.service-dot');
            if (activeDot) activeDot.style.background = '#2A7DE1';
        });
    });
</script>

    <section id="testimonials" class="relative min-h-screen-custom py-20 sm:py-28 md:py-32 px-5 sm:px-6 bg-white overflow-hidden flex items-center">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-300/40"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-teal-300/40"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-teal-300/40"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-300/40"></div>
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div class="absolute top-1/3 right-12 w-px h-48 rotate-45 bg-gradient-to-b from-emerald-400/0 via-emerald-400/20 to-emerald-400/0"></div>
            <div class="absolute bottom-1/3 left-12 w-px h-48 -rotate-45 bg-gradient-to-b from-teal-400/0 via-teal-400/20 to-teal-400/0"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <div class="text-center mb-16 sm:mb-20 md:mb-24">
                <div class="inline-flex items-center gap-2 mb-6">
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-600 font-secondary">CLIENT FEEDBACK</span>
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                </div>
                <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight">
                    <span class="text-gray-800">WHAT OUR</span>
                    <span class="block mt-2 bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">CLIENTS SAY</span>
                </h2>
                <p class="text-base sm:text-lg max-w-xl mx-auto leading-relaxed text-gray-500 mt-4 font-secondary">Don't just take our word for it - hear from businesses we've transformed</p>
            </div>

            <!-- Testimonials Carousel -->
            <div class="mt-16 sm:mt-20 md:mt-24 pt-8 sm:pt-12 border-t-2 border-emerald-200">
                <div class="text-center mb-10 sm:mb-12">
                    <div class="text-xs font-mono tracking-widest uppercase mb-3 text-emerald-500 font-secondary">MORE FEEDBACK</div>
                    <h3 class="text-xl sm:text-2xl font-bold tracking-wide text-emerald-600 font-primary">Additional Client Reviews</h3>
                </div>

                <div class="relative overflow-hidden w-full">
                    <div class="relative flex transition-all duration-500 ease-out" id="testimonial-slider">
                        <!-- Slide 1 -->
                        <div class="w-full min-w-full flex-shrink-0 flex-grow-0 carousel-slide">
                            <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 sm:p-8 h-full hover:border-emerald-400 transition-all">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-2 text-emerald-500 font-secondary">CLIENT 07</div>
                                        <h4 class="text-lg sm:text-xl font-bold mb-2 tracking-wide text-emerald-600 font-primary">Ahmed Raza</h4>
                                        <div class="text-xs sm:text-sm text-emerald-500/70 font-secondary">Customer Experience Lead, CommercePro</div>
                                    </div>
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 border-2 border-emerald-200 rounded-full flex items-center justify-center bg-emerald-50 flex-shrink-0">
                                        <span class="text-base sm:text-lg">⭐</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                    </div>
                                    <p class="leading-relaxed text-xs sm:text-sm italic text-gray-600 font-secondary">"Their call center team manages both our inbound customer support and outbound outreach flawlessly. From handling high call volumes and processing orders to booking appointments and generating leads, they helped us improve response times, customer satisfaction, and overall sales performance."</p>
                                    <div class="pt-4 border-t border-emerald-100 mt-6">
                                        <div class="text-xs tracking-widest uppercase text-emerald-500 font-secondary">CALL CENTER SERVICES</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="w-full min-w-full flex-shrink-0 flex-grow-0 carousel-slide">
                            <div class="bg-white border-2 border-teal-200 rounded-2xl p-6 sm:p-8 h-full hover:border-teal-400 transition-all">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-2 text-teal-500 font-secondary">CLIENT 03</div>
                                        <h4 class="text-lg sm:text-xl font-bold mb-2 tracking-wide text-teal-600 font-primary">Michael Rodriguez</h4>
                                        <div class="text-xs sm:text-sm text-teal-500/70 font-secondary">CTO, FinTech Innovations</div>
                                    </div>
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 border-2 border-teal-200 rounded-full flex items-center justify-center bg-teal-50 flex-shrink-0">
                                        <span class="text-base sm:text-lg">⭐</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                    </div>
                                    <p class="leading-relaxed text-xs sm:text-sm italic text-gray-600 font-secondary">"Their expertise in web solutions helped us expand our software development capacity, constantly delivering updates and saving on operational costs."</p>
                                    <div class="pt-4 border-t border-teal-100 mt-6">
                                        <div class="text-xs tracking-widest uppercase text-teal-500 font-secondary">WEB SOLUTIONS</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="w-full min-w-full flex-shrink-0 flex-grow-0 carousel-slide">
                            <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 sm:p-8 h-full hover:border-emerald-400 transition-all">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-2 text-emerald-500 font-secondary">CLIENT 04</div>
                                        <h4 class="text-lg sm:text-xl font-bold mb-2 tracking-wide text-emerald-600 font-primary">Emily Chen</h4>
                                        <div class="text-xs sm:text-sm text-emerald-500/70 font-secondary">Product Manager, HealthTech Inc</div>
                                    </div>
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 border-2 border-emerald-200 rounded-full flex items-center justify-center bg-emerald-50 flex-shrink-0">
                                        <span class="text-base sm:text-lg">⭐</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                    </div>
                                    <p class="leading-relaxed text-xs sm:text-sm italic text-gray-600 font-secondary">"The lead generation and customer integration strategies they implemented brought full transparency to our processes and significantly boosted our ROI."</p>
                                    <div class="pt-4 border-t border-emerald-100 mt-6">
                                        <div class="text-xs tracking-widest uppercase text-emerald-500 font-secondary">LEAD GENERATION</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="w-full min-w-full flex-shrink-0 flex-grow-0 carousel-slide">
                            <div class="bg-white border-2 border-teal-200 rounded-2xl p-6 sm:p-8 h-full hover:border-teal-400 transition-all">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-2 text-teal-500 font-secondary">CLIENT 06</div>
                                        <h4 class="text-lg sm:text-xl font-bold mb-2 tracking-wide text-teal-600 font-primary">Lisa Thompson</h4>
                                        <div class="text-xs sm:text-sm text-teal-500/70 font-secondary">Marketing Head, Retail Group</div>
                                    </div>
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 border-2 border-teal-200 rounded-full flex items-center justify-center bg-teal-50 flex-shrink-0">
                                        <span class="text-base sm:text-lg">⭐</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                                    </div>
                                    <p class="leading-relaxed text-xs sm:text-sm italic text-gray-600 font-secondary">"Their customer support professionals helped us navigate customer opinion and made a real impact on how we're perceived in the market."</p>
                                    <div class="pt-4 border-t border-teal-100 mt-6">
                                        <div class="text-xs tracking-widest uppercase text-teal-500 font-secondary">CUSTOMER SUPPORT</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="w-full min-w-full flex-shrink-0 flex-grow-0 carousel-slide">
                            <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 sm:p-8 h-full hover:border-emerald-400 transition-all">
                                <div class="flex items-start justify-between mb-6">
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-2 text-emerald-500 font-secondary">CLIENT 08</div>
                                        <h4 class="text-lg sm:text-xl font-bold mb-2 tracking-wide text-emerald-600 font-primary">Hassan Malik</h4>
                                        <div class="text-xs sm:text-sm text-emerald-500/70 font-secondary">Marketing Manager, UrbanCart</div>
                                    </div>
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 border-2 border-emerald-200 rounded-full flex items-center justify-center bg-emerald-50 flex-shrink-0">
                                        <span class="text-base sm:text-lg">⭐</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                    </div>
                                    <p class="leading-relaxed text-xs sm:text-sm italic text-gray-600 font-secondary">"Their digital marketing team completely transformed our online presence. From SEO improvements and social media management to targeted campaigns, we saw higher traffic, stronger engagement, and a clear increase in qualified conversions within months."</p>
                                    <div class="pt-4 border-t border-emerald-100 mt-6">
                                        <div class="text-xs tracking-widest uppercase text-emerald-500 font-secondary">DIGITAL MARKETING</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex items-center justify-center mt-8 mb-8 sm:mt-10 md:mt-12 gap-4 sm:gap-6">
                        <button id="prev-testimonial" class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 border-2 border-emerald-300 text-emerald-600 rounded-full flex items-center justify-center transition-all hover:bg-emerald-500 hover:text-white hover:border-emerald-500">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <div class="flex gap-2" id="testimonial-indicators">
                            <button class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all indicator-dot bg-emerald-500" data-index="0"></button>
                            <button class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all indicator-dot bg-gray-300" data-index="1"></button>
                            <button class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all indicator-dot bg-gray-300" data-index="2"></button>
                            <button class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all indicator-dot bg-gray-300" data-index="3"></button>
                            <button class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all indicator-dot bg-gray-300" data-index="4"></button>
                        </div>
                        <button id="next-testimonial" class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 border-2 border-emerald-300 text-emerald-600 rounded-full flex items-center justify-center transition-all hover:bg-emerald-500 hover:text-white hover:border-emerald-500">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="pt-12 border-t-2  border-emerald-200">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div>
                            <div class="text-xs font-mono tracking-widest mb-4 text-emerald-500 font-secondary">IMPACT</div>
                            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight tracking-wide text-emerald-600 font-primary">Translating technology into positive impact</h3>
                        </div>
                        <div class="space-y-6">
                            <p class="leading-relaxed text-sm text-gray-600 font-secondary">Our approach allows us to deliver exceptional experiences that drive growth and success for all stakeholders. Let's rise to new heights with the power of digital transformation.</p>
                            <a href="#contact" class="group inline-flex items-center gap-3 px-6 py-3 transition-all border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white rounded-lg font-secondary">
                                <span class="text-sm tracking-widest">LEARN MORE</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        <div class="group">
                            <div class="border-2 border-emerald-200 p-5 sm:p-6 text-center rounded-xl transition-all hover:border-emerald-400 hover:shadow-lg">
                                <div class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 text-emerald-600 font-primary stat-number" id="satisfactionStat" data-target="98" data-suffix="%">0%</div>
                                <div class="text-[10px] sm:text-xs tracking-widest uppercase text-emerald-500 font-secondary">CLIENT SATISFACTION</div>
                                <div class="mt-3 h-1 overflow-hidden bg-emerald-100 rounded-full">
                                    <div class="h-full bg-emerald-500 rounded-full progress-bar" style="width: 0%;" data-width="98"></div>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="border-2 border-teal-200 p-5 sm:p-6 text-center rounded-xl transition-all hover:border-teal-400 hover:shadow-lg">
                                <div class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 text-teal-600 font-primary stat-number" id="industriesStat" data-target="45" data-suffix="+">0+</div>
                                <div class="text-[10px] sm:text-xs tracking-widest uppercase text-teal-500 font-secondary">INDUSTRIES SERVED</div>
                                <div class="mt-3 h-1 overflow-hidden bg-teal-100 rounded-full">
                                    <div class="h-full bg-teal-500 rounded-full progress-bar" style="width: 0%;" data-width="90"></div>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="border-2 border-emerald-200 p-5 sm:p-6 text-center rounded-xl transition-all hover:border-emerald-400 hover:shadow-lg">
                                <div class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 text-emerald-600 font-primary stat-number" id="projectsStat" data-target="150" data-suffix="+">0+</div>
                                <div class="text-[10px] sm:text-xs tracking-widest uppercase text-emerald-500 font-secondary">PROJECTS DELIVERED</div>
                                <div class="mt-3 h-1 overflow-hidden bg-emerald-100 rounded-full">
                                    <div class="h-full bg-emerald-500 rounded-full progress-bar" style="width: 0%;" data-width="85"></div>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="border-2 border-teal-200 p-5 sm:p-6 text-center rounded-xl transition-all hover:border-teal-400 hover:shadow-lg">
                                <div class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 text-teal-600 font-primary">24/7</div>
                                <div class="text-[10px] sm:text-xs tracking-widest uppercase text-teal-500 font-secondary">SUPPORT AVAILABLE</div>
                                <div class="mt-3 h-1 overflow-hidden bg-teal-100 rounded-full">
                                    <div class="h-full bg-teal-500 rounded-full" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="relative overflow-hidden bg-white min-h-screen-custom py-20 sm:py-28 md:py-32 px-5 sm:px-6 md:px-12 lg:px-20 flex items-center">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-300/30"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-teal-300/30"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-teal-300/30"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-300/30"></div>
            <div class="absolute left-16 top-28 w-px h-64 bg-gradient-to-b from-transparent via-emerald-400/30 to-transparent hidden xl:block"></div>
            <div class="absolute top-44 right-24 w-40 h-[3px] bg-emerald-400 rounded-full opacity-50 hidden xl:block"></div>
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 32px 32px;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <div class="text-center mb-16 sm:mb-20 md:mb-24">
                <div class="inline-flex items-center gap-2 mb-6">
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-600">GET IN TOUCH</span>
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                </div>

                <h2 class="font-primary text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight">
                    <span class="text-gray-800">LET'S WORK</span>
                    <span class="block mt-2 bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">TOGETHER</span>
                </h2>

                <p class="text-base sm:text-lg max-w-xl mx-auto leading-relaxed text-gray-500 mt-4">
                    Ready to start your project? Contact us today for a free consultation
                </p>
                <div class="w-16 h-0.5 bg-gradient-to-r from-emerald-400 to-teal-400 mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Contact Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Left Column: Contact Cards -->
                <div class="space-y-6">
                    <!-- Email Card -->
                    <div class="group">
                        <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 sm:p-8 transition-all duration-300 hover:border-emerald-400 hover:shadow-xl">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 bg-emerald-50 rounded-xl flex items-center justify-center transition-all duration-300 group-hover:bg-emerald-500">
                                        <i class="fas fa-envelope text-2xl text-emerald-500 group-hover:text-white transition-all"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-1 text-emerald-500 font-secondary">01 / EMAIL</div>
                                        <h3 class="text-xl font-bold text-gray-800 font-primary">Email Us</h3>
                                    </div>
                                </div>
                                <div class="w-2 h-2 bg-emerald-400 rounded-full transition-transform duration-300 group-hover:scale-150"></div>
                            </div>

                            <div class="space-y-3">
                                <a href="mailto:info@onestopsolutions.com" class="block text-lg text-emerald-600 hover:text-emerald-700 transition-colors font-secondary">info@onestopsolutions.com</a>
                                <a href="mailto:hr@onestopsolutions.com" class="block text-lg text-emerald-600 hover:text-emerald-700 transition-colors font-secondary">hr@onestopsolutions.com</a>
                                <div class="pt-4 border-t border-emerald-100 mt-4">
                                    <div class="text-xs tracking-widest text-emerald-500 font-secondary">RESPONSE WITHIN 24 HOURS</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours Card -->
                    <div class="group">
                        <div class="bg-white border-2 border-teal-200 rounded-2xl p-6 sm:p-8 transition-all duration-300 hover:border-teal-400 hover:shadow-xl">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center transition-all duration-300 group-hover:bg-teal-500">
                                        <i class="fas fa-clock text-2xl text-teal-500 group-hover:text-white transition-all"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-1 text-teal-500 font-secondary">02 / HOURS</div>
                                        <h3 class="text-xl font-bold text-gray-800 font-primary">Business Hours</h3>
                                    </div>
                                </div>
                                <div class="w-2 h-2 bg-teal-400 rounded-full transition-transform duration-300 group-hover:scale-150"></div>
                            </div>

                            <div class="space-y-4">
                                <div class="text-center py-4">
                                    <div class="text-3xl font-bold text-teal-600 font-primary">24/7</div>
                                    <p class="text-sm text-gray-500 mt-2 font-secondary">Round-the-clock support available</p>
                                </div>
                                <div class="pt-4 border-t border-teal-100 mt-2">
                                    <div class="text-xs tracking-widest text-teal-500 font-secondary">GLOBAL SUPPORT</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="group">
                        <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 sm:p-8 transition-all duration-300 hover:border-emerald-400 hover:shadow-xl">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 bg-emerald-50 rounded-xl flex items-center justify-center transition-all duration-300 group-hover:bg-emerald-500">
                                        <i class="fas fa-map-marker-alt text-2xl text-emerald-500 group-hover:text-white transition-all"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-mono tracking-widest mb-1 text-emerald-500 font-secondary">03 / LOCATIONS</div>
                                        <h3 class="text-xl font-bold text-gray-800 font-primary">Our Office</h3>
                                    </div>
                                </div>
                                <div class="w-2 h-2 bg-emerald-400 rounded-full transition-transform duration-300 group-hover:scale-150"></div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <span class="text-xl">🇵🇰</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-800 font-primary">Pakistan HQ</div>
                                        <p class="text-sm text-gray-500 leading-relaxed font-secondary">Suite No 111, 1st Floor, Park Avenue, Block 6, PECHS, Sharah-e-Faisal, Karachi, Pakistan</p>
                                    </div>
                                </div>
                                <div class="pt-4 border-t border-emerald-100 mt-2">
                                    <div class="text-xs tracking-widest text-emerald-500 font-secondary">GLOBAL REACH</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="group">
                    <div class="bg-white border-2 border-teal-200 rounded-2xl p-6 sm:p-8 transition-all duration-300 hover:border-teal-400 hover:shadow-xl h-full">
                        <div class="flex items-start justify-between mb-8">
                            <div>
                                <div class="text-xs font-mono tracking-widest mb-1 text-teal-500 font-secondary">04 / FORM</div>
                                <h3 class="text-2xl font-bold text-gray-800 font-primary">Send a Message</h3>
                            </div>
                            <div class="w-8 h-8 bg-teal-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-paper-plane text-white text-sm"></i>
                            </div>
                        </div>

                        <form action="https://api.web3forms.com/submit" method="POST" class="space-y-5">
                            <input type="hidden" name="access_key" value="1f36ea7f-dfc5-4a71-8189-a7b6aa03d0c6">
                            <input type="hidden" name="to" value="info@onestopsolutions.com">
                            <input type="hidden" name="subject" value="New Contact Form Submission from Website">
                            <input type="hidden" name="redirect" value="https://contact.html">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-xs mb-2 tracking-wide uppercase text-teal-500 font-secondary">Your Name</label>
                                    <input type="text" name="name" id="name" required
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-400 focus:outline-none transition-all duration-300 font-secondary"
                                        placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="email" class="block text-xs mb-2 tracking-wide uppercase text-teal-500 font-secondary">Email Address</label>
                                    <input type="email" name="email" id="email" required
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-400 focus:outline-none transition-all duration-300 font-secondary"
                                        placeholder="john@example.com">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-xs mb-2 tracking-wide uppercase text-teal-500 font-secondary">Subject</label>
                                <input type="text" name="subject_field" id="subject" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-400 focus:outline-none transition-all duration-300 font-secondary"
                                    placeholder="Project Inquiry">
                            </div>

                            <div>
                                <label for="message" class="block text-xs mb-2 tracking-wide uppercase text-teal-500 font-secondary">Message</label>
                                <textarea name="message" id="message" rows="5" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-400 focus:outline-none transition-all duration-300 resize-none font-secondary"
                                    placeholder="Tell us about your project..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full py-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-xl flex items-center justify-center gap-3 transition-all duration-300 hover:shadow-lg hover:scale-[1.02] group">
                                <span class="font-secondary tracking-wide">SEND MESSAGE</span>
                                <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                            </button>
                        </form>

                        <div class="mt-6 pt-6 border-t border-teal-100">
                            <div class="text-xs tracking-widest uppercase text-teal-500 text-center font-secondary">WE RESPOND WITHIN 24 HOURS</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Contact Info -->
            <div class="pt-12 border-t-2 border-emerald-200 mt-12">
                <div class="text-center mb-10">
                    <div class="text-xs font-mono tracking-widest uppercase mb-3 text-emerald-500 font-secondary">ADDITIONAL METHODS</div>
                    <h3 class="text-2xl font-bold tracking-wide text-gray-800 font-primary">Other Ways to Connect</h3>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-emerald-400 to-teal-400 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-50 rounded-2xl mb-4 mx-auto transition-all duration-300 group-hover:bg-emerald-500">
                            <i class="fas fa-phone text-2xl text-emerald-500 group-hover:text-white transition-all"></i>
                        </div>
                        <div class="text-xs font-mono tracking-widest mb-2 text-emerald-500 font-secondary">PHONE</div>
                        <div class="text-lg font-medium mb-1 text-gray-800 font-primary">+92 21 34545003</div>
                        <div class="text-sm text-gray-500 font-secondary">Pakistan Office</div>
                    </div>

                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-teal-50 rounded-2xl mb-4 mx-auto transition-all duration-300 group-hover:bg-teal-500">
                            <i class="fab fa-linkedin-in text-2xl text-teal-500 group-hover:text-white transition-all"></i>
                        </div>
                        <div class="text-xs font-mono tracking-widest mb-2 text-teal-500 font-secondary">SOCIAL</div>
                        <div class="text-lg font-medium mb-1 text-gray-800 font-primary">@onestopsolutions</div>
                        <div class="text-sm text-gray-500 font-secondary">Follow us on LinkedIn & Facebook</div>
                    </div>

                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-50 rounded-2xl mb-4 mx-auto transition-all duration-300 group-hover:bg-emerald-500">
                            <i class="fab fa-whatsapp text-2xl text-emerald-500 group-hover:text-white transition-all"></i>
                        </div>
                        <div class="text-xs font-mono tracking-widest mb-2 text-emerald-500 font-secondary">WHATSAPP</div>
                        <div class="text-lg font-medium mb-1 text-gray-800 font-primary">+92 300 1234567</div>
                        <div class="text-sm text-gray-500 font-secondary">Quick support on WhatsApp</div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 text-center">
                <div class="max-w-lg mx-auto">
                    <h3 class="text-xl sm:text-2xl font-bold mb-3 text-gray-800 font-primary">Ready to transform your business?</h3>
                    <p class="text-sm text-gray-500 mb-6 font-secondary">Let's discuss how we can help you achieve your goals</p>
                    <a href="#contact" class="group inline-flex items-center gap-2 px-8 py-3.5 font-semibold rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white hover:shadow-lg hover:scale-[1.02] transition-all font-secondary">
                        <span>Start a conversation</span>
                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                    </a>
                </div>
            </div>

            <div class="hidden xl:block absolute bottom-10 right-10" aria-hidden="true">
                <div class="w-16 h-16 bg-emerald-400/20 rotate-12 rounded-2xl absolute -top-4 -right-4"></div>
                <div class="w-16 h-16 bg-gray-900/10 -rotate-6 rounded-2xl absolute top-0 right-0"></div>
            </div>
        </div>
    </section>

    <?php @include("footer.php") ?>

    <script>
        (function() {
            const phrases = ["Karachi's trusted BPO partner", "Outsourcing made simple", "Inbound & Outbound experts", "24/7 support always", "Trusted since 2014"];
            let index = 0,
                charIndex = 0,
                currentPhrase = phrases[0],
                isDeleting = false;
            const taglineElement = document.getElementById('dynamicTagline');
            if (!taglineElement) return;

            function typeEffect() {
                const fullText = phrases[index];
                if (isDeleting) {
                    currentPhrase = fullText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    currentPhrase = fullText.substring(0, charIndex + 1);
                    charIndex++;
                }
                taglineElement.textContent = currentPhrase;
                if (!isDeleting && charIndex === fullText.length) {
                    isDeleting = true;
                    setTimeout(typeEffect, 2000);
                    return;
                }
                if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    index = (index + 1) % phrases.length;
                    setTimeout(typeEffect, 500);
                    return;
                }
                setTimeout(typeEffect, isDeleting ? 50 : 100);
            }
            setTimeout(typeEffect, 500);
        })();

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        const slider = document.getElementById('testimonial-slider');
        const prevBtn = document.getElementById('prev-testimonial');
        const nextBtn = document.getElementById('next-testimonial');
        const indicators = document.querySelectorAll('.indicator-dot');
        let currentIndex = 0;
        const totalSlides = document.querySelectorAll('.carousel-slide').length;

        function updateCarousel() {
            if (slider) {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                slider.style.transition = 'transform 0.5s ease-in-out';
            }
            indicators.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('bg-emerald-500');
                    dot.classList.remove('bg-gray-300');
                } else {
                    dot.classList.remove('bg-emerald-500');
                    dot.classList.add('bg-gray-300');
                }
            });
        }

        if (nextBtn) nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        });
        if (prevBtn) prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });
        indicators.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = document.querySelectorAll('#satisfactionStat, #industriesStat, #projectsStat');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target') || counter.innerText);
                        const suffix = counter.innerText.includes('+') ? '+' : '%';
                        let current = 0;
                        const increment = target / 40;
                        const updateCounter = () => {
                            current += increment;
                            if (current < target) {
                                counter.innerText = Math.floor(current) + suffix;
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target + suffix;
                            }
                        };
                        updateCounter();
                    });
                    const progressBars = document.querySelectorAll('[data-width]');
                    progressBars.forEach(bar => {
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width + '%';
                    });
                    statObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.3
        });
        const statsSection = document.querySelector('#testimonials .border-t-2');
        if (statsSection) statObserver.observe(statsSection);
    </script>
</body>

</html>