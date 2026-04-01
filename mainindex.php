<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Outwerk Solution — BPO Agency</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
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

        /* Only show custom cursor on non-touch devices */
        @media (hover: hover) and (pointer: fine) {
            body {
                cursor: none;
            }

            #cursor,
            #cursor-ring {
                display: block;
            }
        }

        @media (hover: none),
        (pointer: coarse) {

            #cursor,
            #cursor-ring {
                display: none !important;
            }

            body {
                cursor: auto;
            }

            a,
            button,
            .service-row {
                cursor: pointer;
            }
        }

        h1,
        h2,
        h3,
        .hero-text,
        .cta-text,
        .stat-num,
        .service-num {
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
            transition: transform 0.15s ease, background 0.2s;
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

        /* HERO FONT — fluid and responsive */
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

        /* SCRIBBLE */
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
            to {
                stroke-dashoffset: 0;
            }
        }

        /* SERVICE NUMBERS */
        .service-num {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(40px, 8vw, 100px);
            line-height: 1;
            color: rgba(46, 125, 50, 0.15);
            letter-spacing: -0.03em;
            font-weight: 700;
            transition: color 0.4s;
            user-select: none;
        }

        .service-row:hover .service-num {
            color: rgba(46, 125, 50, 0.35);
        }

        /* PILL BUTTON */
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
            font-family: 'Plus Jakarta Sans', sans-serif;
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

        /* CTA TEXT — fluid */
        .cta-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(38px, 8vw, 160px);
            line-height: 0.92;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        /* MARQUEE */
        .marquee-track {
            display: flex;
            gap: 60px;
            animation: marquee 22s linear infinite;
            white-space: nowrap;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* TILT */
        .tilt-img {
            transition: transform 0.5s cubic-bezier(.17, .67, .35, 1);
        }

        /* FADE UP */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* CHAT BUBBLE */
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

        /* NAVBAR */
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

        /* Mobile menu */
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

        #mobile-menu.open {
            display: flex;
        }

        #mobile-menu a {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(28px, 8vw, 48px);
            font-weight: 700;
            color: rgba(238, 245, 232, 0.8);
            text-decoration: none;
            letter-spacing: -0.01em;
            transition: color 0.2s;
        }

        #mobile-menu a:hover {
            color: #66bb6a;
        }

        /* Hamburger */
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

        .hamburger.open span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.open span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .desktop-nav {
                display: none;
            }

            .nav-get-in-touch {
                display: none;
            }
        }

        /* GRID TEXTURE */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(46, 125, 50, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(46, 125, 50, 0.04) 1px, transparent 1px);
            background-size: 80px 80px;
            pointer-events: none;
            z-index: 0;
        }

        /* STAT COUNTER */
        .stat-num {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(32px, 6vw, 88px);
            line-height: 1;
            font-weight: 700;
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* NAV LINKS */
        .nav-link {
            position: relative;
            font-size: 13px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(238, 245, 232, 0.7);
            transition: color 0.3s;
            font-family: 'Plus Jakarta Sans', sans-serif;
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

        .nav-link:hover {
            color: #66bb6a;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* SERVICE DETAIL EXPAND */
        .service-detail {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(.4, 0, .2, 1);
        }

        .service-row.open .service-detail {
            max-height: 320px;
        }

        .service-row .plus-icon {
            transition: transform 0.4s;
            color: #2e7d32;
            cursor: pointer;
        }

        .service-row.open .plus-icon {
            transform: rotate(45deg);
        }

        .dark-green-dot {
            width: 8px;
            height: 8px;
            background: #2e7d32;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px rgba(46, 125, 50, 0.6);
            flex-shrink: 0;
        }

        section {
            position: relative;
            z-index: 1;
        }

        .gradient-dark-green {
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gradient-green {
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
            white-space: nowrap;
        }

        .key-point:hover {
            background: rgba(46, 125, 50, 0.2);
            border-color: rgba(46, 125, 50, 0.6);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #030a05;
        }

        ::-webkit-scrollbar-thumb {
            background: #2e7d32;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #4caf50;
        }

        /* Contact Form Styles */
        .contact-form-card {
            backdrop-filter: blur(12px);
            background: rgba(3, 10, 5, 0.65);
            border: 1px solid rgba(46, 125, 50, 0.35);
            border-radius: 32px;
        }

        .form-input {
            background: rgba(20, 20, 20, 0.6);
            border: 1px solid rgba(46, 125, 50, 0.4);
            border-radius: 60px;
            padding: 12px 20px;
            width: 100%;
            color: #eef5e8;
            font-size: 14px;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 12px rgba(46, 125, 50, 0.3);
            background: rgba(10, 20, 8, 0.8);
        }

        .form-textarea {
            background: rgba(20, 20, 20, 0.6);
            border: 1px solid rgba(46, 125, 50, 0.4);
            border-radius: 28px;
            padding: 14px 20px;
            width: 100%;
            color: #eef5e8;
            font-size: 14px;
            transition: all 0.3s ease;
            outline: none;
            resize: vertical;
        }

        .form-textarea:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 12px rgba(46, 125, 50, 0.3);
        }

        .submit-btn {
            background: linear-gradient(135deg, #2e7d32, #1b5e20);
            border: none;
            border-radius: 60px;
            padding: 12px 28px;
            font-weight: 600;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .submit-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(46, 125, 50, 0.4);
            background: linear-gradient(135deg, #3c8c40, #2e7d32);
        }

        .toast-notify {
            position: fixed;
            bottom: 100px;
            right: 24px;
            background: #1e2a1c;
            backdrop-filter: blur(16px);
            border-left: 4px solid #2e7d32;
            padding: 12px 20px;
            border-radius: 60px;
            font-size: 13px;
            font-weight: 500;
            z-index: 1100;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transform: translateX(400px);
            transition: transform 0.3s ease;
            color: #e0f2e0;
        }

        .toast-notify.show {
            transform: translateX(0);
        }

        @media (max-width: 768px) {
            .contact-form-card {
                padding: 24px !important;
            }
        }
    </style>
</head>

<body>

    <!-- CUSTOM CURSOR -->
    <div id="cursor"></div>
    <div id="cursor-ring"></div>

    <!-- CHAT BUBBLE -->
    <div id="chat-bubble" title="Chat with us">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
        </svg>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu">
        <a href="#services" class="mobile-nav-link">Services</a>
        <a href="#about" class="mobile-nav-link">About</a>
        <a href="#work" class="mobile-nav-link">Work</a>
        <a href="#contact" class="mobile-nav-link">Contact</a>
        <a href="#contact" class="pill-btn text-white mt-4">Get in touch ↗</a>
    </div>

    <!-- ─── NAVBAR ─── -->
    <nav id="navbar" class="section-px px-8 md:px-16 py-5 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="dark-green-dot"></span>
            <span class="mono text-sm tracking-widest uppercase text-white">Outwerk<span class="gradient-dark-green">.</span></span>
        </div>
        <div class="desktop-nav hidden md:flex items-center gap-10">
            <a href="#services" class="nav-link">Services</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#work" class="nav-link">Work</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="#contact" class="nav-get-in-touch pill-btn text-white hidden md:inline-flex">
                Get in touch <span>↗</span>
            </a>
            <div class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

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

    <!-- ─── MARQUEE ─── -->
    <div class="overflow-hidden py-4 border-y border-green-900/30 relative z-10">
        <div class="marquee-track"><span class="mono text-xs text-white font-bold tracking-widest uppercase">Inbound Call Center &nbsp; ✦ &nbsp; Outbound Calls &nbsp; ✦ &nbsp; Customer Support &nbsp; ✦ &nbsp; Technical Helpdesk &nbsp; ✦ &nbsp; Lead Generation &nbsp; ✦ &nbsp; Web Development &nbsp; ✦ &nbsp; SEO & SEM &nbsp; ✦ &nbsp; Social Media &nbsp; ✦ &nbsp; Inbound Call Center &nbsp; ✦ &nbsp; Outbound Calls &nbsp; ✦ &nbsp; Customer Support &nbsp; ✦ &nbsp; Technical Helpdesk &nbsp; ✦ &nbsp; Lead Generation &nbsp; ✦ &nbsp; Web Development &nbsp; ✦ &nbsp; SEO & SEM &nbsp; ✦ &nbsp; Social Media &nbsp; ✦ &nbsp;</span></div>
    </div>

    <!-- SERVICES SECTION (unchanged but preserved) -->
    <section id="services" class="section-px section-py px-8 md:px-16 py-20 relative">
        <div class="glow-dark-green" style="top:50%; left:-200px; opacity:0.6;"></div>
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12 fade-up">
            <h2 class="hero-text" style="font-size:clamp(30px,5vw,64px)">OUR <span class="gradient-green">SERVICES</span></h2><span class="mono text-xs text-green-600/60 tracking-widest uppercase">Core Expertise</span>
        </div>
        <div class="space-y-0 divide-y divide-green-900/20">
            <div class="service-row fade-up pt-4 cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 pb-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">01</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">BPO SERVICES</h3><span class="key-point">Industry Leader</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">End-to-end business process outsourcing solutions designed to streamline operations, reduce costs, and enhance productivity.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2"><span class="key-point">24/7 Customer Support</span><span class="key-point">40% Cost Reduction</span><span class="key-point">Global Operations</span><span class="key-point">99.9% Uptime SLA</span></div>
                            <p class="text-white text-xs mt-3">Multi-channel support • Back-office automation • Quality assurance certified • Scalable teams</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">02</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">SALES & LEAD GEN</h3><span class="key-point">High Conversion</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Data-driven lead generation and sales development services that fill your pipeline with qualified prospects ready to convert.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2"><span class="key-point">Outbound Calling</span><span class="key-point">Email Campaigns</span><span class="key-point">LinkedIn Prospecting</span><span class="key-point">3x ROI Average</span></div>
                            <p class="text-white text-xs mt-3">B2B lead qualification • Appointment setting • Account-based marketing • CRM integration</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">03</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">WEB SOLUTIONS</h3><span class="key-point">Custom Development</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Modern, scalable web applications and platforms that drive business growth and deliver exceptional user experiences.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2"><span class="key-point">React / Next.js</span><span class="key-point">Laravel / PHP</span><span class="key-point">Cloud Hosting</span><span class="key-point">Responsive Design</span></div>
                            <p class="text-white text-xs mt-3">E-commerce platforms • Custom CRM • API development • Maintenance & support</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">04</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">DIGITAL MARKETING</h3><span class="key-point">Results-Driven</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Full-funnel digital marketing strategies that increase brand visibility, drive qualified traffic, and maximize conversion rates.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2"><span class="key-point">SEO / SEM</span><span class="key-point">Social Media Ads</span><span class="key-point">Email Marketing</span><span class="key-point">Analytics</span></div>
                            <p class="text-white text-xs mt-3">Content marketing • PPC campaigns • Social media management • Conversion rate optimization</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center fade-up"><a href="#contact" class="inline-flex items-center gap-3 px-7 py-4 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300 text-sm">GET A FREE CONSULTATION →</a></div>
    </section>

 <!-- ABOUT SECTION - With Working Images -->
<section id="about" class="section-px section-py px-8 md:px-16 py-24 relative overflow-hidden">
    <div class="glow-dark-green absolute top-20 left-0 w-[600px] h-[600px] opacity-30 pointer-events-none"></div>
    <div class="glow-forest absolute bottom-0 right-0 w-[500px] h-[500px] opacity-25 pointer-events-none"></div>
    
    <div class="about-grid grid md:grid-cols-2 gap-16 md:gap-20 items-center">
        <!-- Left Column - Content -->
        <div class="fade-up">
            <div class="flex items-center gap-3 mb-6">
                <span class="dark-green-dot"></span>
                <span class="mono text-xs text-green-500 tracking-widest uppercase">Who We Are</span>
                <div class="w-12 h-px bg-green-500/40"></div>
            </div>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight mb-8" style="letter-spacing:-0.02em; font-family:'Space Grotesk',sans-serif;">
                Built for businesses<br />that refuse to<br /><span class="gradient-dark-green">compromise.</span>
            </h2>
            <p class="text-zinc-400 leading-relaxed mb-5 max-w-lg text-sm md:text-base">
                Outwerk Solution is a premium BPO firm headquartered in Karachi. We partner with forward-thinking companies to deliver outsourcing solutions that don't just cut costs — they elevate performance.
            </p>
            <p class="text-zinc-500 leading-relaxed mb-8 text-sm max-w-lg">
                Our teams are trained, certified, and embedded in your workflows. We don't believe in generic call centers. We build specialized units that operate as true extensions of your brand.
            </p>
            <div class="flex flex-wrap items-center gap-4">
                <a href="#contact" class="pill-btn text-white">Work with us ↗</a>
                <span class="mono text-xs text-green-700/60 tracking-widest">ISO 9001 Certified</span>
            </div>
            <div class="grid grid-cols-3 gap-4 md:gap-6 mt-12">
                <div>
                    <div class="text-xl md:text-2xl font-bold gradient-dark-green">250+</div>
                    <div class="mono text-[10px] text-zinc-500 mt-1 tracking-wider">Clients</div>
                </div>
                <div>
                    <div class="text-xl md:text-2xl font-bold gradient-dark-green">12</div>
                    <div class="mono text-[10px] text-zinc-500 mt-1 tracking-wider">Countries</div>
                </div>
                <div>
                    <div class="text-xl md:text-2xl font-bold gradient-dark-green">98%</div>
                    <div class="mono text-[10px] text-zinc-500 mt-1 tracking-wider">Retention</div>
                </div>
            </div>
        </div>
        
        <!-- Right Column - Image Grid with Reliable Images -->
        <div class="fade-up relative" style="transition-delay:0.15s">
            <div class="grid grid-cols-2 grid-rows-2 gap-4 rounded-none overflow-hidden border border-green-800/30 bg-black/30 backdrop-blur-sm p-3">
                <!-- Image 1: Team working (Placeholder with gradient) -->
                <div class="relative overflow-hidden aspect-square bg-gradient-to-br from-green-900/40 to-emerald-900/30 flex items-center justify-center border border-green-800/30 group hover:border-green-600/50 transition-all duration-300">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-green-500/50 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="text-green-400/70 text-xs font-mono">Team Collaboration</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <!-- Image 2: Call Center -->
                <div class="relative overflow-hidden aspect-square bg-gradient-to-br from-green-900/40 to-emerald-900/30 flex items-center justify-center border border-green-800/30 group hover:border-green-600/50 transition-all duration-300">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-green-500/50 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-green-400/70 text-xs font-mono">24/7 Support</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <!-- Image 3: Workflow -->
                <div class="relative overflow-hidden aspect-square bg-gradient-to-br from-green-900/40 to-emerald-900/30 flex items-center justify-center border border-green-800/30 group hover:border-green-600/50 transition-all duration-300">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-green-500/50 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9h14M5 15h14M12 3v18m-7-8h2m10 0h2M7 5h10M7 19h10"></path>
                        </svg>
                        <span class="text-green-400/70 text-xs font-mono">Agile Workflow</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <!-- Image 4: Branding with Text -->
                <div class="relative overflow-hidden flex flex-col justify-center items-center bg-gradient-to-br from-green-900/50 to-emerald-900/40 border border-green-800/30 group hover:border-green-600/50 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-green-900/40"></div>
                    <div class="relative z-10 text-center p-4">
                        <div class="text-2xl md:text-3xl font-bold text-white/90 mb-2" style="font-family:'Space Grotesk';">OUTWERK</div>
                        <div class="mono text-[10px] tracking-widest text-green-400">KARACHI, PAKISTAN</div>
                        <div class="w-8 h-px bg-green-500/60 mx-auto my-2"></div>
                        <div class="mono text-[9px] tracking-widest text-green-400/70">EST. 2019</div>
                    </div>
                </div>
            </div>
            
            <!-- Floating Cards -->
            <div class="floating-card absolute -bottom-6 -left-6 p-4 rounded-none blur-card border border-green-800/30 bg-black/60 backdrop-blur-md w-36">
                <div class="text-xl font-bold text-green-400">24/7</div>
                <div class="mono text-[10px] text-zinc-400 mt-1 tracking-wider">Support Coverage</div>
            </div>
            <div class="floating-card absolute -top-6 -right-6 p-4 rounded-none blur-card border border-green-800/30 bg-black/60 backdrop-blur-md w-40">
                <div class="text-xl font-bold text-green-400">40%</div>
                <div class="mono text-[10px] text-zinc-400 mt-1 tracking-wider">Cost Reduction</div>
            </div>
        </div>
    </div>
</section>

    <!-- PROCESS SECTION -->
    <section id="work" class="section-px section-py px-8 md:px-16 py-20 border-t border-green-900/30">
        <div class="glow-dark-green" style="bottom:-100px; right:-100px; opacity:0.5;"></div>
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-14 fade-up">
            <h2 class="hero-text" style="font-size:clamp(30px,5vw,64px)">HOW WE WORK</h2>
            <div class="mono text-xs text-green-700/60 tracking-widest">Our Process</div>
        </div>
        <div class="process-grid grid md:grid-cols-3 gap-px bg-green-900/20">
            <div class="process-card bg-black/30 backdrop-blur-sm p-8 md:p-10 fade-up hover:bg-black/50 transition-all duration-300 border border-green-800/30 rounded-t-xl md:rounded-l-xl md:rounded-tr-none">
                <div class="mono text-xs text-green-500 tracking-widest mb-5">01 / DISCOVER</div>
                <h3 class="text-xl md:text-2xl font-semibold mb-3 tracking-tight">Deep Audit</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">We map your existing workflows, identify friction points, and assess where outsourcing creates maximum leverage.</p>
            </div>
            <div class="process-card bg-black/30 backdrop-blur-sm p-8 md:p-10 fade-up hover:bg-black/50 transition-all duration-300 border border-green-800/30" style="transition-delay:0.1s">
                <div class="mono text-xs text-green-500 tracking-widest mb-5">02 / BUILD</div>
                <h3 class="text-xl md:text-2xl font-semibold mb-3 tracking-tight">Custom Teams</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">We handpick and train professionals who align with your brand standards, workflows, and KPIs. No templates.</p>
            </div>
            <div class="process-card bg-black/30 backdrop-blur-sm p-8 md:p-10 fade-up hover:bg-black/50 transition-all duration-300 border border-green-800/30 rounded-b-xl md:rounded-r-xl md:rounded-bl-none" style="transition-delay:0.2s">
                <div class="mono text-xs text-green-500 tracking-widest mb-5">03 / SCALE</div>
                <h3 class="text-xl md:text-2xl font-semibold mb-3 tracking-tight">Continuous Growth</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">We measure, iterate, and expand with you. Monthly reporting, QA review, and growth roadmaps built into every engagement.</p>
            </div>
        </div>
    </section>

    <!-- ─── TESTIMONIALS SECTION (ENHANCED SLIDER VERSION) ─── -->
    <section id="testimonials" class="section-px section-py px-8 md:px-16 py-20 relative overflow-hidden">
        <div class="glow-dark-green" style="top:40%; right:-100px; opacity:0.4;"></div>
        <div class="glow-forest" style="bottom:20%; left:-120px; opacity:0.5;"></div>

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12 fade-up">
            <h2 class="hero-text" style="font-size:clamp(30px,5vw,64px)">
                CLIENT <span class="gradient-green">VOICES</span>
            </h2>
            <span class="mono text-xs text-green-600/60 tracking-widest uppercase">Trusted by industry leaders</span>
        </div>

        <!-- Slider Container -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Main Testimonial Slider -->
            <div class="overflow-hidden" id="testimonialSlider">
                <div class="flex transition-transform duration-500 ease-out" id="testimonialTrack">

                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="blur-card rounded-3xl p-8 md:p-10 border border-green-800/30 hover:border-green-700/50 transition-all duration-300 group">
                            <!-- Quote Icon -->
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-green-500/30 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 17h3l2-4V7h-6v6h3l-2 4zm-8 0h3l2-4V7H5v6h3l-2 4z" />
                                </svg>
                            </div>

                            <p class="text-white text-lg md:text-2xl leading-relaxed mb-8 font-medium">
                                "Outwerk transformed our customer support operations. Within 3 months, response times dropped by 62% and CSAT scores hit 94%. Their team feels like an extension of ours — seamless integration, exceptional quality, and genuine partnership."
                            </p>

                            <div class="flex items-center gap-4 pt-4 border-t border-green-900/30">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    SJ
                                </div>
                                <div>
                                    <div class="text-white text-lg font-semibold">Sarah Johnson</div>
                                    <div class="mono text-xs text-green-500/70 tracking-wider">COO, TechScale Global</div>
                                    <div class="flex gap-1 mt-2">
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="blur-card rounded-3xl p-8 md:p-10 border border-green-800/30 hover:border-green-700/50 transition-all duration-300 group">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-green-500/30 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 17h3l2-4V7h-6v6h3l-2 4zm-8 0h3l2-4V7H5v6h3l-2 4z" />
                                </svg>
                            </div>
                            <p class="text-white text-lg md:text-2xl leading-relaxed mb-8 font-medium">
                                "The lead generation team at Outwerk exceeded every KPI. They delivered 3x more qualified leads than our previous agency, with a 40% lower cost per acquisition. Their data-driven approach is truly unmatched in the industry."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-green-900/30">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    MR
                                </div>
                                <div>
                                    <div class="text-white text-lg font-semibold">Michael Rodriguez</div>
                                    <div class="mono text-xs text-green-500/70 tracking-wider">VP Sales, NexGen Solutions</div>
                                    <div class="flex gap-1 mt-2">
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="blur-card rounded-3xl p-8 md:p-10 border border-green-800/30 hover:border-green-700/50 transition-all duration-300 group">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-green-500/30 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 17h3l2-4V7h-6v6h3l-2 4zm-8 0h3l2-4V7H5v6h3l-2 4z" />
                                </svg>
                            </div>
                            <p class="text-white text-lg md:text-2xl leading-relaxed mb-8 font-medium">
                                "Outwerk built our entire customer service infrastructure from scratch. 18 months later, we're operating at 40% lower cost with 99% SLA adherence. Absolute game-changer for our scalability and customer satisfaction."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-green-900/30">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    LC
                                </div>
                                <div>
                                    <div class="text-white text-lg font-semibold">Lisa Chen</div>
                                    <div class="mono text-xs text-green-500/70 tracking-wider">CEO, Bloom Retail Group</div>
                                    <div class="flex gap-1 mt-2">
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="blur-card rounded-3xl p-8 md:p-10 border border-green-800/30 hover:border-green-700/50 transition-all duration-300 group">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-green-500/30 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 17h3l2-4V7h-6v6h3l-2 4zm-8 0h3l2-4V7H5v6h3l-2 4z" />
                                </svg>
                            </div>
                            <p class="text-white text-lg md:text-2xl leading-relaxed mb-8 font-medium">
                                "Their web development team delivered a complex e-commerce platform ahead of schedule. The attention to detail, security standards, and post-launch support has been exceptional. They're now our go-to technical partner."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-green-900/30">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    DP
                                </div>
                                <div>
                                    <div class="text-white text-lg font-semibold">David Park</div>
                                    <div class="mono text-xs text-green-500/70 tracking-wider">CTO, ModaStyle</div>
                                    <div class="flex gap-1 mt-2">
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="blur-card rounded-3xl p-8 md:p-10 border border-green-800/30 hover:border-green-700/50 transition-all duration-300 group">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-green-500/30 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 17h3l2-4V7h-6v6h3l-2 4zm-8 0h3l2-4V7H5v6h3l-2 4z" />
                                </svg>
                            </div>
                            <p class="text-white text-lg md:text-2xl leading-relaxed mb-8 font-medium">
                                "Outwerk's SEO and content marketing strategy increased our organic traffic by 215% in 6 months. Their team truly understands the intersection of data, creativity, and conversion optimization. Remarkable results."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-green-900/30">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    EW
                                </div>
                                <div>
                                    <div class="text-white text-lg font-semibold">Emma Watson</div>
                                    <div class="mono text-xs text-green-500/70 tracking-wider">Marketing Director, Elevate Brands</div>
                                    <div class="flex gap-1 mt-2">
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-green-500 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-6 w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-900/40 backdrop-blur-md border border-green-500/30 hover:bg-green-700/60 hover:border-green-500 transition-all duration-300 flex items-center justify-center group z-10">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-green-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-6 w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-900/40 backdrop-blur-md border border-green-500/30 hover:bg-green-700/60 hover:border-green-500 transition-all duration-300 flex items-center justify-center group z-10">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-green-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Dots Indicator -->
            <div class="flex justify-center gap-2 mt-8 pt-4" id="dotsContainer"></div>

        </div>

    </section>

    <!-- ─── CONTACT + FORM SECTION (Enhanced) ─── -->
    <section id="contact" class="section-px section-py-contact px-8 md:px-16 py-28 relative overflow-hidden">
        <div class="glow-dark-green" style="top:0; left:50%; transform:translateX(-50%); width:min(800px, 100vw); opacity:0.4;"></div>
        <div class="glow-forest" style="bottom:0; right:0; opacity:0.6;"></div>
        <div class="thin-line mb-14 md:mb-20 fade-up"></div>
        <div class="fade-up">
            <div class="mono text-xs text-green-500 tracking-widest uppercase mb-8">— Ready to grow?</div>
            <div class="cta-text">
                <div>LET'S BUILD</div>
                <div>SOMETHING</div>
                <div class="flex flex-wrap items-baseline gap-x-4 md:gap-x-6">
                    <span>GREAT</span>
                    <span class="scribble-wrap" id="together-wrap">
                        <span class="gradient-dark-green">TOGETHER</span>
                        <svg viewBox="0 0 320 60" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="160" cy="30" rx="150" ry="25" class="scribble-path" id="scribble-el2" />
                        </svg>
                    </span>
                    <span class="text-white">↗</span>
                </div>
            </div>
        </div>



        <!-- Original contact grid info (optional but kept for completeness) -->
        <div class="contact-grid grid md:grid-cols-3 gap-8 mt-16 pt-8 border-t border-green-900/30 fade-up">
    <div>
        <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Email</div>
        <a href="mailto:hr@outwerksolution.com" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors break-all">hr@outwerksolution.com</a>
    </div>
    <div>
        <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Phone</div>
        <a href="tel:+922112345678" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors">+92 21 1234 5678</a>
    </div>
    <div>
        <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Location</div>
        <p class="text-white text-base md:text-lg font-medium">Karachi, Pakistan</p>
    </div>
</div>
    </section>



    <script>
        // Testimonial Slider Functionality
        (function() {
            const track = document.getElementById('testimonialTrack');
            const slides = Array.from(track.children);
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsContainer = document.getElementById('dotsContainer');
            const slideCounter = document.getElementById('slideCounter');
            const autoplayToggle = document.getElementById('autoplayToggle');
            const autoplayIcon = document.getElementById('autoplayIcon');

            let currentIndex = 0;
            let autoplayInterval = null;
            let isAutoplaying = true;
            const slideCount = slides.length;

            // Create dots
            function createDots() {
                dotsContainer.innerHTML = '';
                for (let i = 0; i < slideCount; i++) {
                    const dot = document.createElement('button');
                    dot.className = `w-2 h-2 rounded-full transition-all duration-300 ${i === currentIndex ? 'bg-green-500 w-6' : 'bg-green-700/50 hover:bg-green-600/70'}`;
                    dot.setAttribute('data-index', i);
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }
            }

            // Update dots and counter
            function updateDots() {
                const dots = dotsContainer.children;
                for (let i = 0; i < dots.length; i++) {
                    dots[i].className = `transition-all duration-300 rounded-full ${i === currentIndex ? 'bg-green-500 w-6' : 'bg-green-700/50 hover:bg-green-600/70 w-2'}`;
                }
                if (slideCounter) {
                    slideCounter.textContent = `${currentIndex + 1} / ${slideCount}`;
                }
            }

            // Move to specific slide
            function goToSlide(index) {
                if (index < 0) index = 0;
                if (index >= slideCount) index = 0;
                currentIndex = index;
                const offset = -currentIndex * 100;
                track.style.transform = `translateX(${offset}%)`;
                updateDots();
                resetAutoplay();
            }

            // Next slide
            function nextSlide() {
                goToSlide(currentIndex + 1);
            }

            // Previous slide
            function prevSlide() {
                goToSlide(currentIndex - 1);
            }

            // Reset autoplay timer
            function resetAutoplay() {
                if (autoplayInterval) {
                    clearInterval(autoplayInterval);
                    if (isAutoplaying) {
                        startAutoplay();
                    }
                } else if (isAutoplaying) {
                    startAutoplay();
                }
            }

            // Start autoplay
            function startAutoplay() {
                if (autoplayInterval) clearInterval(autoplayInterval);
                autoplayInterval = setInterval(() => {
                    nextSlide();
                }, 5000);
            }

            // Stop autoplay
            function stopAutoplay() {
                if (autoplayInterval) {
                    clearInterval(autoplayInterval);
                    autoplayInterval = null;
                }
            }

            // Toggle autoplay
            function toggleAutoplay() {
                isAutoplaying = !isAutoplaying;
                if (isAutoplaying) {
                    startAutoplay();
                    autoplayIcon.innerHTML = '<path d="M8 5v14l11-7z"></path>';
                } else {
                    stopAutoplay();
                    autoplayIcon.innerHTML = '<path d="M10 6v12M18 6v12"></path>';
                }
            }

            // Event listeners
            nextBtn.addEventListener('click', () => {
                nextSlide();
                if (!isAutoplaying) {
                    // If manual navigation while paused, stay paused
                }
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                if (!isAutoplaying) {
                    // stay paused
                }
            });

            autoplayToggle.addEventListener('click', toggleAutoplay);

            // Pause autoplay on hover
            const sliderContainer = document.getElementById('testimonialSlider');
            sliderContainer.addEventListener('mouseenter', () => {
                if (isAutoplaying) stopAutoplay();
            });

            sliderContainer.addEventListener('mouseleave', () => {
                if (isAutoplaying) startAutoplay();
            });

            // Initialize
            createDots();
            if (isAutoplaying) startAutoplay();

            // Add touch/swipe support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            sliderContainer.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            sliderContainer.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                if (touchEndX < touchStartX - 50) nextSlide();
                if (touchEndX > touchStartX + 50) prevSlide();
            });

            // Optional: Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });
        })();
    </script>

    <!-- FOOTER -->
    <footer class="section-px px-8 md:px-16 pt-14 pb-8 border-t border-green-900/30">
        <div class="footer-grid grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-10 mb-12">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-4"><span class="dark-green-dot"></span><span class="mono text-sm tracking-widest text-white">Outwerk<span class="gradient-dark-green">.</span></span></div>
                <p class="text-zinc-600 text-xs leading-relaxed">Premium BPO solutions for businesses that demand more.</p>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Services</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition-colors">Customer Support</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Finance & Accounting</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">IT Support</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">HR Outsourcing</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Company</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Case Studies</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Blog</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Connect</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition-colors">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Twitter / X</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="thin-line mb-6"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-3"><span class="mono text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span><span class="mono text-xs text-green-700/40">Karachi, Pakistan — ISO 9001 Certified</span></div>
    </footer>

    <script>
        // Cursor logic (preserved)
        const cursor = document.getElementById('cursor');
        const ring = document.getElementById('cursor-ring');
        const isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
        if (isPointer) {
            cursor.style.display = 'block';
            ring.style.display = 'block';
            let mx = -100,
                my = -100,
                rx = -100,
                ry = -100;
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
            document.querySelectorAll('a, button, .service-row, #chat-bubble').forEach(el => {
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
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        if (hamburger) {
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
        }
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });
        const fadeObserver = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));
        const scribbleObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.querySelectorAll('.scribble-path').forEach(p => p.classList.add('animated'));
                    }, 400);
                    scribbleObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });
        document.querySelectorAll('.scribble-wrap').forEach(el => scribbleObserver.observe(el));
        document.querySelectorAll('.service-row').forEach(row => {
            row.addEventListener('click', () => {
                const isOpen = row.classList.contains('open');
                document.querySelectorAll('.service-row').forEach(r => r.classList.remove('open'));
                if (!isOpen) row.classList.add('open');
            });
        });

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
        }, {
            threshold: 0.5
        });
        document.querySelectorAll('.stat-num[data-target]').forEach(el => statObserver.observe(el));
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Contact form toast & submission handling (FormSubmit will handle email)
        const contactForm = document.getElementById('contactForm');
        const toastDiv = document.createElement('div');
        toastDiv.className = 'toast-notify';
        toastDiv.innerHTML = '✓ Message sent! We’ll reply shortly.';
        document.body.appendChild(toastDiv);
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                setTimeout(() => {
                    toastDiv.classList.add('show');
                    setTimeout(() => {
                        toastDiv.classList.remove('show');
                    }, 4000);
                }, 100);
            });
        }
    </script>
</body>

</html>