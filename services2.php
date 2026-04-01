<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Outwerk Solution — Premium BPO & Digital Services</title>
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

        /* Responsive overrides */
        @media (max-width: 640px) {
            .floating-card {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .section-px {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        @media (max-width: 768px) {
            .section-px {
                padding-left: 1.25rem !important;
                padding-right: 1.25rem !important;
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
    <nav id="navbar" class="section-px py-5 flex items-center justify-between">
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
    <section class="section-px min-h-screen flex flex-col justify-end pb-16 pt-32 overflow-hidden relative">
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
        <div class="marquee-track">
            <span class="mono text-xs text-white font-bold tracking-widest uppercase">
                Inbound Call Center &nbsp; ✦ &nbsp;
                Outbound Calls &nbsp; ✦ &nbsp;
                Customer Support &nbsp; ✦ &nbsp;
                Technical Helpdesk &nbsp; ✦ &nbsp;
                Lead Generation &nbsp; ✦ &nbsp;
                Web Development &nbsp; ✦ &nbsp;
                SEO & SEM &nbsp; ✦ &nbsp;
                Social Media &nbsp; ✦ &nbsp;
                Content Marketing &nbsp; ✦ &nbsp;
                Inbound Call Center &nbsp; ✦ &nbsp;
                Outbound Calls &nbsp; ✦ &nbsp;
                Customer Support &nbsp; ✦ &nbsp;
                Technical Helpdesk &nbsp; ✦ &nbsp;
                Lead Generation &nbsp; ✦ &nbsp;
                Web Development &nbsp; ✦ &nbsp;
                SEO & SEM &nbsp; ✦ &nbsp;
                Social Media &nbsp; ✦ &nbsp;
                Content Marketing &nbsp; ✦ &nbsp;
            </span>
        </div>
    </div>

    <!-- ─── SERVICES SECTION (EXPANDABLE ROWS WITH ORIGINAL CONTENT) ─── -->
    <section id="services" class="section-px py-20 relative">
        <div class="glow-dark-green" style="top:50%; left:-200px; opacity:0.6;"></div>

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12 fade-up">
            <h2 class="hero-text" style="font-size:clamp(30px,5vw,64px)">
                OUR <span class="gradient-green">SERVICES</span>
            </h2>
            <span class="mono text-xs text-green-600/60 tracking-widest uppercase">Core Expertise</span>
        </div>

        <div class="space-y-0 divide-y divide-green-900/20">

            <!-- Service 1: INBOUND CALLS -->
            <div class="service-row fade-up pt-4 cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 pb-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">01</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                INBOUND CALLS
                            </h3>
                            <span class="key-point">24/7 Support</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            24/7 customer support, order processing, helpdesk & troubleshooting.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Order Processing</span>
                                <span class="key-point">Helpdesk Support</span>
                                <span class="key-point">Customer Service</span>
                                <span class="key-point">Ticket Management</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Multi-channel support • Real-time assistance • Quality assurance certified • 24/7 coverage
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 2: OUTBOUND CALLS -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">02</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                OUTBOUND CALLS
                            </h3>
                            <span class="key-point">High Conversion</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Telemarketing, appointment setting, market research & lead qualification.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Telemarketing</span>
                                <span class="key-point">Appointment Setting</span>
                                <span class="key-point">Market Research</span>
                                <span class="key-point">Lead Qualification</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                B2B/B2C outreach • CRM integration • Data-driven campaigns • ROI-focused
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 3: CUSTOMER SUPPORT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">03</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                CUSTOMER SUPPORT
                            </h3>
                            <span class="key-point">Multi-Channel</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Multi-channel support, feedback analysis, CRM management, complaint resolution.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Email Support</span>
                                <span class="key-point">Live Chat</span>
                                <span class="key-point">Phone Support</span>
                                <span class="key-point">Social Media Support</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Feedback analysis • CRM management • Complaint resolution • CSAT improvement
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 4: LEAD GENERATION -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">04</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                LEAD GENERATION
                            </h3>
                            <span class="key-point">B2B Prospecting</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            B2B prospecting, cold calling, appointment setting, market research.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Cold Calling</span>
                                <span class="key-point">Email Outreach</span>
                                <span class="key-point">LinkedIn Prospecting</span>
                                <span class="key-point">Qualified Leads</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Account-based marketing • CRM integration • Sales pipeline growth • 3x ROI average
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 5: TECHNICAL HELPDESK -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">05</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                TECHNICAL HELPDESK
                            </h3>
                            <span class="key-point">IT Support</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Software support, network troubleshooting, remote assistance, IT infrastructure.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Remote Assistance</span>
                                <span class="key-point">Network Troubleshooting</span>
                                <span class="key-point">Software Support</span>
                                <span class="key-point">IT Infrastructure</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Level 1-3 support • Ticketing systems • Cloud infrastructure • Security monitoring
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 6: WEB DEVELOPMENT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">06</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                WEB DEVELOPMENT
                            </h3>
                            <span class="key-point">Custom Development</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Custom development, e-commerce, API integration, responsive design.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">React / Next.js</span>
                                <span class="key-point">E-commerce</span>
                                <span class="key-point">API Integration</span>
                                <span class="key-point">Responsive Design</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Custom CRM • Cloud hosting • Maintenance & support • Scalable solutions
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 7: SEO & SEM -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">07</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                SEO & SEM
                            </h3>
                            <span class="key-point">Results-Driven</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Keyword strategy, PPC campaigns, performance analytics, conversion optimization.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Keyword Strategy</span>
                                <span class="key-point">PPC Campaigns</span>
                                <span class="key-point">Analytics</span>
                                <span class="key-point">Conversion Optimization</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Organic search growth • Paid advertising • A/B testing • ROI tracking
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 8: SOCIAL MEDIA MANAGEMENT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">08</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                SOCIAL MEDIA
                            </h3>
                            <span class="key-point">Brand Amplification</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Multi-platform management, content planning, community engagement, analytics.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Content Planning</span>
                                <span class="key-point">Community Engagement</span>
                                <span class="key-point">Analytics Reporting</span>
                                <span class="key-point">Multi-Platform</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                Instagram • LinkedIn • Facebook • Twitter • Content calendar • Growth strategy
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>

            <!-- Service 9: CONTENT MARKETING -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1">
                        <span class="service-num">09</span>
                    </div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">
                                CONTENT MARKETING
                            </h3>
                            <span class="key-point">Storytelling</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">
                            Blog writing, video production, email newsletters, brand storytelling.
                        </p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Blog Writing</span>
                                <span class="key-point">Video Production</span>
                                <span class="key-point">Email Newsletters</span>
                                <span class="key-point">Brand Storytelling</span>
                            </div>
                            <p class="text-white text-xs mt-3">
                                SEO-optimized content • Thought leadership • Lead magnets • Content strategy
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2">
                        <span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center fade-up">
            <a href="#contact" class="inline-flex items-center gap-3 px-7 py-4 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300 text-sm">
                GET A FREE CONSULTATION →
            </a>
        </div>
    </section>

    <!-- ─── CONTACT CTA ─── -->
    <section id="contact" class="section-px py-28 relative overflow-hidden">
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

        <div class="grid md:grid-cols-3 gap-8 mt-16 md:mt-24 pt-10 md:pt-12 border-t border-green-900/30 fade-up">
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Email</div>
                <a href="mailto:hello@outwerk.com" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors break-all">hello@outwerk.com</a>
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

    <!-- ─── FOOTER ─── -->
    <footer class="section-px pt-14 pb-8 border-t border-green-900/30">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-10 mb-12">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <span class="dark-green-dot"></span>
                    <span class="mono text-sm tracking-widest text-white">Outwerk<span class="gradient-dark-green">.</span></span>
                </div>
                <p class="text-zinc-600 text-xs leading-relaxed">Premium BPO solutions for businesses that demand more.</p>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Services</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition-colors">BPO Services</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Sales & Lead Gen</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Web Solutions</a></li>
                    <li><a href="#" class="hover:text-green-400 transition-colors">Digital Marketing</a></li>
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
        <div class="flex flex-col md:flex-row justify-between items-center gap-3">
            <span class="mono text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span>
            <span class="mono text-xs text-green-700/40">Karachi, Pakistan — ISO 9001 Certified</span>
        </div>
    </footer>

    <script>
        // CUSTOM CURSOR
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

        // MOBILE MENU
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

        // NAVBAR SCROLL
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });

        // FADE UP
        const fadeObserver = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));

        // SCRIBBLE ANIMATION
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

        // SERVICE TOGGLE
        document.querySelectorAll('.service-row').forEach(row => {
            row.addEventListener('click', (e) => {
                const isOpen = row.classList.contains('open');
                document.querySelectorAll('.service-row').forEach(r => r.classList.remove('open'));
                if (!isOpen) row.classList.add('open');
            });
        });

        // STAT COUNTER
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

        // SMOOTH SCROLL
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