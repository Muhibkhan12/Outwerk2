<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Careers — Outwerk Solution | Join Our Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        :root {
            --dark-green-glow: rgba(20, 83, 45, 0.45);
            --forest-glow: rgba(21, 94, 60, 0.35);
            --accent-green: #14532d;
            --bright-accent: #2e7d32;
            --muted: #6b7280;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #030a05;
            color: #eef5e8;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        /* Custom cursor on non-touch devices */
        @media (hover: hover) and (pointer: fine) {
            body {
                cursor: none;
            }
            #cursor, #cursor-ring { display: block; }
        }
        @media (hover: none), (pointer: coarse) {
            #cursor, #cursor-ring { display: none !important; }
            body { cursor: auto; }
            a, button, .job-card, .perk-card { cursor: pointer; }
        }

        h1, h2, h3, .hero-text, .cta-text, .stat-num {
            font-family: 'Space Grotesk', sans-serif;
        }

        .mono {
            font-family: 'Plus Jakarta Sans', monospace;
            font-weight: 500;
            letter-spacing: 0.08em;
        }

        /* CURSOR */
        #cursor {
            width: 10px;
            height: 10px;
            background: #2e7d32;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s ease;
            mix-blend-mode: difference;
            display: none;
        }
        #cursor-ring {
            width: 36px;
            height: 36px;
            border: 1px solid rgba(46, 125, 50, 0.6);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.35s cubic-bezier(.17, .67, .35, 1), width 0.3s, height 0.3s;
            display: none;
        }

        /* GLOWS */
        .glow-dark-green {
            position: absolute;
            width: clamp(300px, 50vw, 600px);
            height: clamp(300px, 50vw, 600px);
            background: radial-gradient(circle, rgba(20, 83, 45, 0.5) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(40px);
        }
        .glow-forest {
            position: absolute;
            width: clamp(200px, 35vw, 400px);
            height: clamp(200px, 35vw, 400px);
            background: radial-gradient(circle, rgba(21, 94, 60, 0.4) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
        }

        .hero-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(36px, 8vw, 148px);
            line-height: 0.92;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        .thin-line {
            height: 1px;
            background: rgba(46, 125, 50, 0.3);
            width: 100%;
        }

        .scribble-wrap {
            position: relative;
            display: inline-block;
        }
        .scribble-wrap svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 110%;
            height: 160%;
            pointer-events: none;
        }
        .scribble-path {
            stroke: #2e7d32;
            stroke-width: 2.5;
            fill: none;
            stroke-dasharray: 900;
            stroke-dashoffset: 900;
            stroke-linecap: round;
        }
        .scribble-path.animated {
            animation: draw-scribble 1.2s cubic-bezier(.4, 0, .2, 1) forwards;
        }
        @keyframes draw-scribble {
            to { stroke-dashoffset: 0; }
        }

        .pill-btn {
            border: 1px solid rgba(46, 125, 50, 0.5);
            border-radius: 999px;
            padding: 10px 24px;
            font-size: 12px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(20, 83, 45, 0.2);
            backdrop-filter: blur(8px);
            white-space: nowrap;
        }
        .pill-btn:hover {
            background: #2e7d32;
            color: #030a05;
            border-color: #2e7d32;
            transform: translateY(-2px);
        }

        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        #chat-bubble {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 52px;
            height: 52px;
            background: #2e7d32;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.5);
        }
        #chat-bubble:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px rgba(46, 125, 50, 0.6);
        }
        #chat-bubble svg {
            width: 22px;
            height: 22px;
            fill: #030a05;
        }

        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            transition: background 0.4s, border-color 0.4s;
            backdrop-filter: blur(12px);
            background: rgba(3, 10, 5, 0.6);
        }
        #navbar.scrolled {
            background: rgba(3, 10, 5, 0.92);
            border-bottom: 1px solid rgba(46, 125, 50, 0.3);
        }

        #mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(3, 10, 5, 0.97);
            z-index: 99;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 32px;
            backdrop-filter: blur(20px);
        }
        #mobile-menu.open { display: flex; }
        #mobile-menu a {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(28px, 8vw, 48px);
            font-weight: 700;
            color: rgba(238, 245, 232, 0.8);
            text-decoration: none;
            letter-spacing: -0.01em;
            transition: color 0.2s;
        }
        #mobile-menu a:hover { color: #66bb6a; }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 4px;
            z-index: 101;
        }
        .hamburger span {
            display: block;
            width: 22px;
            height: 2px;
            background: #eef5e8;
            border-radius: 2px;
            transition: all 0.3s;
        }
        .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }
        @media (max-width: 768px) {
            .hamburger { display: flex; }
            .desktop-nav { display: none; }
            .nav-get-in-touch { display: none; }
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: linear-gradient(rgba(46, 125, 50, 0.04) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(46, 125, 50, 0.04) 1px, transparent 1px);
            background-size: 80px 80px;
            pointer-events: none;
            z-index: 0;
        }

        .stat-num {
            font-size: clamp(32px, 6vw, 88px);
            line-height: 1;
            font-weight: 700;
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .nav-link {
            position: relative;
            font-size: 13px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(238, 245, 232, 0.7);
            transition: color 0.3s;
            font-weight: 500;
            text-decoration: none;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: #2e7d32;
            transition: width 0.3s;
        }
        .nav-link:hover { color: #66bb6a; }
        .nav-link:hover::after { width: 100%; }

        .dark-green-dot {
            width: 8px;
            height: 8px;
            background: #2e7d32;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px rgba(46, 125, 50, 0.6);
            flex-shrink: 0;
        }

        .gradient-dark-green {
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .blur-card {
            backdrop-filter: blur(12px);
            background: rgba(3, 10, 5, 0.5);
            border: 1px solid rgba(46, 125, 50, 0.25);
        }

        .key-point {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(46, 125, 50, 0.1);
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 500;
            color: #7bcb7f;
            border: 1px solid rgba(46, 125, 50, 0.3);
            backdrop-filter: blur(4px);
            transition: all 0.2s ease;
        }
        .key-point:hover {
            background: rgba(46, 125, 50, 0.2);
            border-color: rgba(46, 125, 50, 0.6);
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #030a05; }
        ::-webkit-scrollbar-thumb { background: #2e7d32; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #4caf50; }

        .section-px { padding-left: 2rem; padding-right: 2rem; }
        @media (max-width: 768px) { .section-px { padding-left: 1.25rem !important; padding-right: 1.25rem !important; } }

        /* Job Card Styles */
        .job-card {
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .job-card:hover {
            transform: translateY(-8px);
            border-color: rgba(46, 125, 50, 0.8);
            box-shadow: 0 20px 35px -15px rgba(46, 125, 50, 0.3);
        }
        .perk-card {
            transition: all 0.3s ease;
        }
        .perk-card:hover {
            transform: translateY(-5px);
            background: rgba(46, 125, 50, 0.15);
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.4); }
            50% { box-shadow: 0 0 0 15px rgba(46, 125, 50, 0); }
        }
        .animate-pulse-glow {
            animation: pulse-glow 2s infinite;
        }
    </style>
</head>

<body>

    <div id="cursor"></div>
    <div id="cursor-ring"></div>

    <div id="chat-bubble" title="Chat with us">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
        </svg>
    </div>

    <div id="mobile-menu">
        <a href="index.html" class="mobile-nav-link">Home</a>
        <a href="services.html" class="mobile-nav-link">Services</a>
        <a href="careers.html" class="mobile-nav-link">Careers</a>
        <a href="#contact" class="mobile-nav-link">Contact</a>
        <a href="#openings" class="pill-btn text-white mt-4">View Openings ↗</a>
    </div>

    <nav id="navbar" class="section-px py-5 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="dark-green-dot"></span>
            <span class="mono text-sm tracking-widest uppercase text-white">Outwerk<span class="gradient-dark-green">.</span></span>
        </div>
        <div class="desktop-nav hidden md:flex items-center gap-10">
            <a href="index.html" class="nav-link">Home</a>
            <a href="services.html" class="nav-link">Services</a>
            <a href="careers.html" class="nav-link">Careers</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="#openings" class="nav-get-in-touch pill-btn text-white hidden md:inline-flex">
                Join Us <span>↗</span>
            </a>
            <div class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

<!-- HERO SECTION -->
<section class="section-px min-h-[85vh] flex flex-col justify-center pt-32 pb-16 overflow-hidden relative">
    <div class="glow-dark-green" style="top:-100px; right:-100px;"></div>
    <div class="glow-forest" style="bottom:100px; left:-80px;"></div>

    <div class="flex items-center gap-4 mb-6 fade-up">
        <span class="mono text-xs tracking-widest text-green-500 uppercase">— Join the movement</span>
        <div class="thin-line" style="width:60px;"></div>
        <span class="mono text-xs tracking-widest text-zinc-500 uppercase">We're Hiring</span>
    </div>

    <div class="hero-text text-white leading-none mb-6">
        <div class="fade-up" style="transition-delay:0.05s">START YOUR</div>
        <div class="fade-up" style="transition-delay:0.1s">
            <span class="scribble-wrap">
                CAREER
                <svg viewBox="0 0 200 50" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="100" cy="25" rx="95" ry="20" class="scribble-path" />
                </svg>
            </span>
        </div>
    </div>

    <div class="hero-sub-row flex flex-col md:flex-row md:items-end justify-between gap-6 mt-6 fade-up" style="transition-delay:0.2s">
        <p class="text-zinc-400 text-sm md:text-base max-w-md leading-relaxed">
            Join a team of innovators, problem-solvers, and growth enthusiasts. We're looking for passionate individuals ready to make an impact.
        </p>
        <a href="#openings" class="pill-btn text-white self-start">
            Explore Opportunities ↗
        </a>
    </div>

    <div class="thin-line mt-12 fade-up" style="transition-delay:0.25s"></div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 fade-up" style="transition-delay:0.3s">
        <div>
            <div class="stat-num" data-target="150">0</div>
            <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">TEAM MEMBERS</div>
        </div>
        <div>
            <div class="stat-num" data-target="12">0</div>
            <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">NATIONALITIES</div>
        </div>
        <div>
            <div class="stat-num" data-target="95">0</div>
            <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">EMPLOYEE SATISFACTION</div>
        </div>
        <div>
            <div class="stat-num" data-target="40">0</div>
            <div class="mono text-xs text-zinc-500 mt-1 tracking-widest">OPEN POSITIONS</div>
        </div>
    </div>
</section>

    <!-- WHY JOIN US - PERKS SECTION -->
    <section class="section-px py-20 relative">
        <div class="glow-forest absolute top-20 right-0 opacity-30"></div>
        
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="dark-green-dot"></span>
                <span class="mono text-xs text-green-500 tracking-widest uppercase">Why Outwerk</span>
                <span class="dark-green-dot"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Life at <span class="gradient-dark-green">Outwerk</span></h2>
            <p class="text-gray-400">We believe in creating an environment where creativity meets opportunity, and every voice matters.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            <div class="perk-card blur-card rounded-2xl p-6 text-center fade-up" style="transition-delay:0.05s">
                <div class="w-14 h-14 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Growth Mindset</h3>
                <p class="text-gray-400 text-sm">Continuous learning opportunities, mentorship programs, and clear career paths.</p>
            </div>
            <div class="perk-card blur-card rounded-2xl p-6 text-center fade-up" style="transition-delay:0.1s">
                <div class="w-14 h-14 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Global Exposure</h3>
                <p class="text-gray-400 text-sm">Work with international clients and collaborate with diverse, cross-cultural teams.</p>
            </div>
            <div class="perk-card blur-card rounded-2xl p-6 text-center fade-up" style="transition-delay:0.15s">
                <div class="w-14 h-14 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-home text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Flexible Work</h3>
                <p class="text-gray-400 text-sm">Remote-friendly culture, flexible hours, and work-life balance prioritized.</p>
            </div>
            <div class="perk-card blur-card rounded-2xl p-6 text-center fade-up" style="transition-delay:0.2s">
                <div class="w-14 h-14 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Wellness First</h3>
                <p class="text-gray-400 text-sm">Health benefits, wellness programs, and a supportive, inclusive culture.</p>
            </div>
        </div>
    </section>

    <!-- OPEN POSITIONS SECTION -->
    <section id="openings" class="section-px py-20 relative">
        <div class="glow-dark-green absolute top-1/2 left-1/4 opacity-20"></div>
        
        <div class="text-center max-w-3xl mx-auto mb-12 fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="w-2 h-2 bg-green-500 rotate-45"></div>
                <span class="mono text-xs text-green-500 tracking-widest uppercase">Current Openings</span>
                <div class="w-2 h-2 bg-green-500 rotate-45"></div>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Join Our <span class="gradient-dark-green">Team</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Find your perfect role and take the next step in your career journey.</p>
        </div>

        <div class="max-w-5xl mx-auto space-y-4">
            <!-- Job 1 -->
            <div class="job-card bg-black/30 border border-green-900/40 rounded-2xl p-6 hover:border-green-500/60 transition-all cursor-pointer fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h3 class="text-xl font-bold text-white">Senior BPO Operations Manager</h3>
                            <span class="key-point text-xs">Full-time</span>
                            <span class="key-point text-xs">On-site</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">Lead and optimize our BPO operations, manage teams, and drive operational excellence for global clients.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs text-green-400/70"><i class="fas fa-map-marker-alt mr-1"></i> Karachi, Pakistan</span>
                            <span class="text-xs text-green-400/70"><i class="fas fa-briefcase mr-1"></i> 5+ years experience</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#apply" class="inline-flex items-center gap-2 px-5 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all group">
                            Apply Now
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job 2 -->
            <div class="job-card bg-black/30 border border-green-900/40 rounded-2xl p-6 hover:border-green-500/60 transition-all cursor-pointer fade-up" style="transition-delay:0.05s">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h3 class="text-xl font-bold text-white">Full Stack Developer (React + Node)</h3>
                            <span class="key-point text-xs">Full-time</span>
                            <span class="key-point text-xs">Remote/Hybrid</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">Build cutting-edge web applications, collaborate with design teams, and deliver high-quality code for enterprise clients.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs text-green-400/70"><i class="fas fa-map-marker-alt mr-1"></i> Remote (Pakistan)</span>
                            <span class="text-xs text-green-400/70"><i class="fas fa-code mr-1"></i> React, Node.js, TypeScript</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#apply" class="inline-flex items-center gap-2 px-5 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all group">
                            Apply Now
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job 3 -->
            <div class="job-card bg-black/30 border border-green-900/40 rounded-2xl p-6 hover:border-green-500/60 transition-all cursor-pointer fade-up" style="transition-delay:0.1s">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h3 class="text-xl font-bold text-white">Lead Generation Specialist</h3>
                            <span class="key-point text-xs">Full-time</span>
                            <span class="key-point text-xs">On-site</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">Drive B2B lead generation campaigns, qualify prospects, and support our sales team with high-quality leads.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs text-green-400/70"><i class="fas fa-map-marker-alt mr-1"></i> Lahore, Pakistan</span>
                            <span class="text-xs text-green-400/70"><i class="fas fa-chart-line mr-1"></i> 2-4 years experience</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#apply" class="inline-flex items-center gap-2 px-5 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all group">
                            Apply Now
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job 4 -->
            <div class="job-card bg-black/30 border border-green-900/40 rounded-2xl p-6 hover:border-green-500/60 transition-all cursor-pointer fade-up" style="transition-delay:0.15s">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h3 class="text-xl font-bold text-white">Customer Support Team Lead</h3>
                            <span class="key-point text-xs">Full-time</span>
                            <span class="key-point text-xs">On-site</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">Lead a team of support specialists, ensure exceptional service delivery, and optimize support processes.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs text-green-400/70"><i class="fas fa-map-marker-alt mr-1"></i> Islamabad, Pakistan</span>
                            <span class="text-xs text-green-400/70"><i class="fas fa-headset mr-1"></i> 3+ years leadership</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#apply" class="inline-flex items-center gap-2 px-5 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all group">
                            Apply Now
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job 5 -->
            <div class="job-card bg-black/30 border border-green-900/40 rounded-2xl p-6 hover:border-green-500/60 transition-all cursor-pointer fade-up" style="transition-delay:0.2s">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h3 class="text-xl font-bold text-white">SEO & Content Strategist</h3>
                            <span class="key-point text-xs">Full-time</span>
                            <span class="key-point text-xs">Remote</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">Develop SEO strategies, create content roadmaps, and drive organic growth for client websites.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs text-green-400/70"><i class="fas fa-map-marker-alt mr-1"></i> Remote (Worldwide)</span>
                            <span class="text-xs text-green-400/70"><i class="fab fa-searchengin mr-1"></i> SEO, Content Strategy</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#apply" class="inline-flex items-center gap-2 px-5 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all group">
                            Apply Now
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 fade-up">
            <p class="text-gray-500 text-sm mb-4">Can't find what you're looking for?</p>
            <a href="#contact" class="inline-flex items-center gap-2 text-green-400 hover:text-green-300 transition">
                <span>Send us your resume anyway</span>
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </section>

    <!-- APPLICATION CTA -->
    <section id="apply" class="section-px py-20 relative">
        <div class="glow-dark-green absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-30"></div>
        
        <div class="max-w-4xl mx-auto text-center fade-up">
            <div class="blur-card rounded-3xl p-8 md:p-12 border border-green-900/40">
                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-6 animate-pulse-glow">
                    <i class="fas fa-paper-plane text-2xl text-green-500"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Make an Impact?</h2>
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto">Submit your application and let's start a conversation about your future at Outwerk.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:careers@outwerk.com?subject=Job Application" class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-green-700 to-emerald-600 text-white font-semibold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <i class="fas fa-envelope"></i>
                        careers@outwerk.com
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-3 px-8 py-4 border border-green-500/40 rounded-full text-green-400 hover:bg-green-500/10 transition-all">
                        <i class="fab fa-linkedin"></i>
                        Apply via LinkedIn
                    </a>
                </div>
                <p class="text-xs text-gray-600 mt-6">Attach your resume and portfolio. We'll get back to you within 5 business days.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section-px py-20 border-t border-green-900/30">
        <div class="thin-line mb-12 fade-up"></div>
        <div class="grid md:grid-cols-3 gap-8 fade-up">
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Email</div>
                <a href="mailto:careers@outwerk.com" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors">careers@outwerk.com</a>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Phone</div>
                <a href="tel:+922112345678" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors">+92 21 1234 5678</a>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Location</div>
                <p class="text-white text-base md:text-lg font-medium">Karachi, Lahore, Islamabad, Remote</p>
            </div>
        </div>
    </section>

    <footer class="section-px pt-14 pb-8 border-t border-green-900/30">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <span class="dark-green-dot"></span>
                    <span class="mono text-sm tracking-widest text-white">Outwerk<span class="gradient-dark-green">.</span></span>
                </div>
                <p class="text-zinc-600 text-xs">Premium BPO solutions where talent meets opportunity.</p>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Company</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">About Us</a></li>
                    <li><a href="careers.html" class="hover:text-green-400 transition">Careers</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Culture</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Resources</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">Employee Handbook</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Benefits Guide</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Learning Portal</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Connect</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Instagram</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Glassdoor</a></li>
                </ul>
            </div>
        </div>
        <div class="thin-line mb-6"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-3">
            <span class="mono text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span>
            <span class="mono text-xs text-green-700/40">Equal Opportunity Employer</span>
        </div>
    </footer>

    <script>
        // Custom cursor
        const cursor = document.getElementById('cursor');
        const ring = document.getElementById('cursor-ring');
        const isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
        if (isPointer) {
            cursor.style.display = 'block';
            ring.style.display = 'block';
            let mx = -100, my = -100, rx = -100, ry = -100;
            document.addEventListener('mousemove', e => {
                mx = e.clientX;
                my = e.clientY;
                cursor.style.left = (mx - 5) + 'px';
                cursor.style.top = (my - 5) + 'px';
            });
            function animateRing() {
                rx += (mx - rx - 18) * 0.12;
                ry += (my - ry - 18) * 0.12;
                ring.style.left = rx + 'px';
                ring.style.top = ry + 'px';
                requestAnimationFrame(animateRing);
            }
            animateRing();
            document.querySelectorAll('a, button, .job-card, .perk-card, #chat-bubble').forEach(el => {
                el.addEventListener('mouseenter', () => {
                    ring.style.width = '56px';
                    ring.style.height = '56px';
                    ring.style.borderColor = 'rgba(46,125,50,0.8)';
                });
                el.addEventListener('mouseleave', () => {
                    ring.style.width = '36px';
                    ring.style.height = '36px';
                    ring.style.borderColor = 'rgba(46,125,50,0.6)';
                });
            });
        }

        // Mobile menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
        });
        document.querySelectorAll('.mobile-nav-link, #mobile-menu .pill-btn').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });

        // Navbar scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });

        // Fade up observer
        const fadeObserver = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));

        // Scribble animation
        const scribbleObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.querySelectorAll('.scribble-path').forEach(p => p.classList.add('animated'));
                    }, 400);
                    scribbleObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.scribble-wrap').forEach(el => scribbleObserver.observe(el));

        // Stat counters
        function animateCount(el, target, duration = 1800) {
            let start = null;
            function step(ts) {
                if (!start) start = ts;
                const progress = Math.min((ts - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(eased * target);
                if (progress < 1) requestAnimationFrame(step);
                else el.textContent = target;
            }
            requestAnimationFrame(step);
        }
        const statObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCount(entry.target, parseInt(entry.target.dataset.target));
                    statObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.stat-num[data-target]').forEach(el => statObserver.observe(el));

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>

</html>