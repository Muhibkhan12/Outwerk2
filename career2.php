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
            .job-card,
            .perk-card {
                cursor: pointer;
            }
        }

        h1,
        h2,
        h3,
        .hero-text,
        .cta-text,
        .stat-num {
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
            to {
                stroke-dashoffset: 0;
            }
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

        .nav-link:hover {
            color: #66bb6a;
        }

        .nav-link:hover::after {
            width: 100%;
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

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.4);
            }

            50% {
                box-shadow: 0 0 0 15px rgba(46, 125, 50, 0);
            }
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

    <!-- AGENDA / TIMELINE SECTION -->
    <section class="section-px py-24 relative overflow-hidden">

        <!-- Glow accents (matching your existing pattern) -->
        <div class="glow-forest absolute top-10 left-0 opacity-20 pointer-events-none"></div>
        <div class="glow-forest absolute bottom-0 right-0 opacity-10 pointer-events-none"></div>

        <style>
            /* ── Radial Hub ── */
            .radial-hub {
                position: relative;
                width: 420px;
                height: 420px;
                flex-shrink: 0;
            }

            .ag-ring {
                position: absolute;
                border-radius: 50%;
                border: 1px solid rgba(34, 197, 94, 0.15);
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation: ag-pulse 6s ease-in-out infinite;
            }

            .ag-ring:nth-child(1) {
                width: 100%;
                height: 100%;
                animation-delay: 0s;
            }

            .ag-ring:nth-child(2) {
                width: 78%;
                height: 78%;
                animation-delay: 0.8s;
                opacity: 0.7;
            }

            .ag-ring:nth-child(3) {
                width: 58%;
                height: 58%;
                animation-delay: 1.6s;
                opacity: 0.5;
            }

            .ag-ring:nth-child(4) {
                width: 38%;
                height: 38%;
                animation-delay: 2.4s;
                opacity: 0.3;
            }

            @keyframes ag-pulse {

                0%,
                100% {
                    transform: translate(-50%, -50%) scale(1);
                    opacity: var(--rop, 1);
                }

                50% {
                    transform: translate(-50%, -50%) scale(1.015);
                    opacity: calc(var(--rop, 1) * 0.5);
                }
            }

            /* Core circle — using blur-card style from your existing page */
            .ag-core {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 148px;
                height: 148px;
                transform: translate(-50%, -50%);
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid rgba(34, 197, 94, 0.35);
                box-shadow:
                    0 0 0 6px rgba(15, 23, 15, 0.9),
                    0 0 0 7px rgba(34, 197, 94, 0.25),
                    0 0 40px rgba(34, 197, 94, 0.12) inset;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 3px;
                z-index: 2;
            }

            .ag-core-label {
                font-size: 9px;
                letter-spacing: 0.28em;
                color: #22c55e;
                text-transform: uppercase;
                font-family: 'JetBrains Mono', 'Courier New', monospace;
            }

            .ag-core-title {
                font-size: 30px;
                font-weight: 700;
                color: #fff;
                letter-spacing: 0.04em;
                line-height: 1;
            }

            /* Floating geo markers */
            .ag-geo {
                position: absolute;
                animation: ag-float 8s ease-in-out infinite;
            }

            .ag-geo.dot {
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background: #22c55e;
            }

            .ag-geo.sq {
                width: 7px;
                height: 7px;
                border-radius: 2px;
                background: transparent;
                border: 1px solid rgba(34, 197, 94, 0.6);
            }

            .ag-geo.tick {
                width: 1px;
                height: 12px;
                background: rgba(34, 197, 94, 0.3);
            }

            @keyframes ag-float {

                0%,
                100% {
                    transform: translateY(0) rotate(0deg);
                }

                33% {
                    transform: translateY(-6px) rotate(5deg);
                }

                66% {
                    transform: translateY(4px) rotate(-3deg);
                }
            }

            /* SVG connector */
            #ag-connector {
                position: absolute;
                top: 0;
                left: 0;
                pointer-events: none;
                overflow: visible;
            }

            #ag-flow-path {
                stroke-dasharray: 1200;
                stroke-dashoffset: 1200;
                animation: ag-draw 2.4s 0.5s cubic-bezier(.4, 0, .2, 1) forwards;
            }

            @keyframes ag-draw {
                to {
                    stroke-dashoffset: 0;
                }
            }

            @keyframes ag-dot-pulse {
                from {
                    r: 3;
                    opacity: 0.9;
                }

                to {
                    r: 5;
                    opacity: 0.2;
                }
            }

            /* ── Timeline Steps ── */
            .ag-timeline {
                display: flex;
                flex-direction: column;
                position: relative;
            }

            .ag-step {
                display: flex;
                align-items: flex-start;
                gap: 18px;
                padding: 20px 0;
                cursor: pointer;
                opacity: 0;
                transform: translateX(20px);
                animation: ag-step-in 0.55s cubic-bezier(.4, 0, .2, 1) forwards;
                position: relative;
            }

            .ag-step:nth-child(1) {
                animation-delay: 0.9s;
            }

            .ag-step:nth-child(2) {
                animation-delay: 1.1s;
            }

            .ag-step:nth-child(3) {
                animation-delay: 1.3s;
            }

            .ag-step:nth-child(4) {
                animation-delay: 1.5s;
            }

            @keyframes ag-step-in {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .ag-vline {
                position: absolute;
                left: 18px;
                top: 0;
                bottom: 0;
                width: 1px;
                background: linear-gradient(to bottom, rgba(34, 197, 94, 0.25), rgba(34, 197, 94, 0.05));
                z-index: 0;
            }

            .ag-step:last-child .ag-vline {
                display: none;
            }

            /* Step icon — matches your w-14 h-14 rounded-full bg-green-500/20 pattern */
            .ag-icon {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: rgba(34, 197, 94, 0.08);
                border: 1px solid rgba(34, 197, 94, 0.3);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                position: relative;
                z-index: 1;
                transition: background 0.3s, border-color 0.3s, box-shadow 0.3s;
            }

            .ag-icon-dot {
                width: 9px;
                height: 9px;
                border-radius: 50%;
                background: #22c55e;
                opacity: 0.8;
                transition: transform 0.3s, opacity 0.3s;
            }

            .ag-step:hover .ag-icon {
                background: rgba(34, 197, 94, 0.18);
                border-color: rgba(34, 197, 94, 0.7);
                box-shadow: 0 0 16px rgba(34, 197, 94, 0.2);
            }

            .ag-step:hover .ag-icon-dot {
                transform: scale(1.5);
                opacity: 1;
            }

            .ag-part {
                font-size: 9px;
                letter-spacing: 0.28em;
                color: #22c55e;
                text-transform: uppercase;
                margin-bottom: 4px;
                font-family: 'JetBrains Mono', 'Courier New', monospace;
            }

            .ag-title {
                font-size: 20px;
                font-weight: 700;
                letter-spacing: 0.01em;
                color: #fff;
                line-height: 1.15;
                margin-bottom: 5px;
                transition: color 0.3s;
            }

            .ag-step:hover .ag-title {
                color: #86efac;
            }

            .ag-desc {
                font-size: 13px;
                line-height: 1.65;
                color: rgba(156, 163, 175, 1);
                /* text-gray-400 */
                max-width: 260px;
            }

            /* REMOVED: Left accent bar on hover - completely removed */

            /* Wrapper fade-up */
            .ag-wrapper {
                opacity: 0;
                animation: ag-fade-up 0.7s 0.1s ease forwards;
            }

            @keyframes ag-fade-up {
                from {
                    opacity: 0;
                    transform: translateY(14px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Section header dots — reuse your dark-green-dot style */
            .ag-header-dot {
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: #22c55e;
                box-shadow: 0 0 8px #22c55e;
                display: inline-block;
            }
        </style>

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="ag-header-dot"></span>
                <span class="mono text-xs text-green-500 tracking-widest uppercase">Our Process</span>
                <span class="ag-header-dot"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                How We <span class="gradient-dark-green">Work</span>
            </h2>
            <p class="text-gray-400">A clear, collaborative flow — from first conversation to final delivery. Every step intentional.</p>
        </div>

        <!-- Radial + Timeline Layout -->
        <div class="ag-wrapper flex items-center justify-center max-w-5xl mx-auto">

            <!-- ══ LEFT: RADIAL HUB ══ -->
            <div class="radial-hub hidden lg:block" style="margin-right:-24px; z-index:2; flex-shrink:0;">

                <!-- Concentric rings -->
                <div class="ag-ring" style="--rop:1"></div>
                <div class="ag-ring" style="--rop:0.7"></div>
                <div class="ag-ring" style="--rop:0.5"></div>
                <div class="ag-ring" style="--rop:0.3"></div>

                <!-- Floating geometry -->
                <div class="ag-geo dot" style="top:6%;   left:52%; animation-delay:0s;"></div>
                <div class="ag-geo sq" style="top:13%;  left:68%; animation-delay:1.2s;"></div>
                <div class="ag-geo tick" style="top:19%;  left:30%; animation-delay:0.6s;"></div>
                <div class="ag-geo dot" style="top:42%;  right:4%; animation-delay:2s;"></div>
                <div class="ag-geo sq" style="top:31%;  right:10%;animation-delay:0.9s;"></div>
                <div class="ag-geo dot" style="bottom:8%;left:40%; animation-delay:1.6s;"></div>
                <div class="ag-geo sq" style="bottom:16%;left:22%;animation-delay:0.3s;"></div>
                <div class="ag-geo tick" style="bottom:22%;left:60%;animation-delay:1s;"></div>
                <div class="ag-geo dot" style="top:50%; left:4%;  animation-delay:2.4s;"></div>
                <div class="ag-geo sq" style="top:65%; left:10%; animation-delay:1.8s;"></div>

                <!-- Core hub -->
                <div class="ag-core">
                    <span class="ag-core-label">Process</span>
                    <span class="ag-core-title">Flow</span>
                </div>

                <!-- SVG connector paths -->
                <svg id="ag-connector" width="420" height="420" viewBox="0 0 420 420" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <!-- Dashed orbit ring -->
                    <circle cx="210" cy="210" r="185"
                        stroke="#22c55e" stroke-width="0.5"
                        stroke-dasharray="5 9" opacity="0.2" />

                    <!--
                    Timeline is vertically centered with the hub (hub height = 420px, center = y=210).
                    Each step is ~80px tall with 20px top padding.
                    Step icon centers relative to hub's top:
                      Step 1: 210 - (80*1.5) + 20 = ~110  → y=90
                      Step 2: 210 - (80*0.5) + 20 = ~190  → y=170
                      Step 3: 210 + (80*0.5) + 20 = ~270  → y=250
                      Step 4: 210 + (80*1.5) + 20 = ~350  → y=330
                    Origin: right edge of hub circle x≈280, center y=210
                -->

                    <!-- Step 1 path (curves UP to top step) -->
                    <path id="ag-flow-path"
                        d="M 280 210 C 360 210, 390 100, 510 -80"
                        stroke="#22c55e" stroke-width="1.5"
                        fill="none" opacity="0.85" />

                    <!-- Step 2 path -->
                    <path d="M 280 210 C 350 210, 390 170, 510 90"
                        stroke="#22c55e" stroke-width="0.8" fill="none"
                        stroke-dasharray="" />

                    <!-- Step 3 path (nearly horizontal) -->
                    <path d="M 280 210 C 350 210, 390 250, 510 260"
                        stroke="#22c55e" stroke-width="0.8" fill="none"
                        stroke-dasharray="" />

                    <!-- Step 4 path (curves DOWN to bottom step) -->
                    <path d="M 280 210 C 360 210, 390 330, 510 430"
                        stroke="#22c55e" stroke-width="0.6" fill="none" opacity=""
                        stroke-dasharray="" />
                </svg>
            </div>

            <!-- ══ RIGHT: TIMELINE ══ -->
            <div class="ag-timeline pl-4 lg:pl-20 pr-4" style="min-width:300px; max-width:380px;">

                <div class="ag-step">
                    <div class="ag-accent"></div>
                    <div class="ag-vline"></div>
                    <div class="ag-icon">
                        <div class="ag-icon-dot"></div>
                    </div>
                    <div class="flex-1">
                        <div class="ag-part">Part 01</div>
                        <div class="ag-title">Discovery Call</div>
                        <p class="ag-desc">We listen first. Understanding your goals, challenges, and vision before a single line of work begins.</p>
                    </div>
                </div>

                <div class="ag-step">
                    <div class="ag-accent"></div>
                    <div class="ag-vline"></div>
                    <div class="ag-icon">
                        <div class="ag-icon-dot"></div>
                    </div>
                    <div class="flex-1">
                        <div class="ag-part">Part 02</div>
                        <div class="ag-title">Strategy & Design</div>
                        <p class="ag-desc">A tailored roadmap — architecture, timelines, and design direction aligned to your brand and outcomes.</p>
                    </div>
                </div>

                <div class="ag-step">
                    <div class="ag-accent"></div>
                    <div class="ag-vline"></div>
                    <div class="ag-icon">
                        <div class="ag-icon-dot"></div>
                    </div>
                    <div class="flex-1">
                        <div class="ag-part">Part 03</div>
                        <div class="ag-title">Build & Iterate</div>
                        <p class="ag-desc">Hands-on execution with regular check-ins. We build fast, test often, and refine with your feedback.</p>
                    </div>
                </div>

                <div class="ag-step">
                    <div class="ag-accent"></div>
                    <div class="ag-icon">
                        <div class="ag-icon-dot"></div>
                    </div>
                    <div class="flex-1">
                        <div class="ag-part">Part 04</div>
                        <div class="ag-title">Launch & Grow</div>
                        <p class="ag-desc">Delivery is just the start. We stay close post-launch — optimizing, scaling, and evolving with you.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- WORKPLACE EXCELLENCE SECTION - REDESIGNED -->
    <section class="section-px py-24 relative overflow-hidden">
        <!-- Dynamic Background -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top,rgba(46,125,50,0.08),transparent_50%)]"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-500/5 rounded-full blur-3xl"></div>
        </div>

        <!-- Section Header with Unique Design -->
        <div class="text-center max-w-4xl mx-auto mb-20 fade-up">
            <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/30 px-4 py-2 mb-6">
                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                <span class="mono text-[10px] text-green-400 tracking-widest uppercase">Behind the Scenes</span>
                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
            </div>
            <h2 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-[1.1]">
                Where <span class="gradient-dark-green">Talent</span><br>
                Becomes <span class="gradient-dark-green">Family</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Not just a workplace — a launchpad for dreams, a community of innovators, and a place where you truly belong.
            </p>
        </div>

        <!-- Core Values Journey (Interactive Timeline Style) -->
        <div class="max-w-6xl mx-auto mb-24">
            <div class="grid md:grid-cols-3 gap-0 border border-green-800/30">
                <!-- Value 1 -->
                <div class="relative p-8 text-center group border-b md:border-b-0 md:border-r border-green-800/30 hover:bg-green-500/5 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-green-500/0 via-green-500/0 to-green-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-handshake text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Trust & Transparency</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Radical honesty, open communication, and decisions made with integrity.</p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="relative p-8 text-center group border-b md:border-b-0 md:border-r border-green-800/30 hover:bg-green-500/5 transition-all duration-500">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-rocket text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Bold Innovation</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Fearless experimentation, embracing failure as growth, and pushing boundaries.</p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="relative p-8 text-center group hover:bg-green-500/5 transition-all duration-500">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-heart text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Unwavering Support</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Mentorship, mental wellness, and a culture that celebrates every individual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Immersive Experience Grid -->
        <div class="max-w-7xl mx-auto mb-24">
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Left Column: Experience Highlights -->
                <div class="space-y-6 fade-up">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <div class="w-8 h-px bg-green-500/60"></div>
                        <span class="mono text-xs text-green-500 tracking-widest">The Outwerk Experience</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">More Than Just<br>A 9-to-5</h3>

                    <div class="space-y-4">
                        <div class="flex gap-4 p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-champagne-glasses text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Monthly Celebrations</h4>
                                <p class="text-gray-500 text-sm">Birthdays, milestones, and wins — we celebrate every moment together.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-brain text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Learning Fridays</h4>
                                <p class="text-gray-500 text-sm">Weekly workshops, guest speakers, and skill-building sessions.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-tree text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Offsite Retreats</h4>
                                <p class="text-gray-500 text-sm">Annual retreats to recharge, reconnect, and rediscover inspiration.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Stats Cards -->
                <div class="grid grid-cols-2 gap-4 fade-up">
                    <div class="blur-card p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-4xl font-bold gradient-dark-green mb-2">87%</div>
                        <div class="text-gray-400 text-sm mb-3">Would Recommend<br>Working Here</div>
                        <div class="h-px w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-4xl font-bold gradient-dark-green mb-2">2.5x</div>
                        <div class="text-gray-400 text-sm mb-3">Faster Career<br>Growth</div>
                        <div class="h-px w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-4xl font-bold gradient-dark-green mb-2">32hrs</div>
                        <div class="text-gray-400 text-sm mb-3">Annual Learning<br>Per Employee</div>
                        <div class="h-px w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-4xl font-bold gradient-dark-green mb-2">15+</div>
                        <div class="text-gray-400 text-sm mb-3">Nationalities<br>Represented</div>
                        <div class="h-px w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Voices (Minimalist) -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="relative">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 bg-green-500/5 rounded-full blur-3xl"></div>
                </div>
                <div class="relative grid md:grid-cols-2 gap-6">
                    <div class="blur-card p-6 border-l-2 border-l-green-500">
                        <i class="fas fa-quote-left text-green-500/30 text-2xl mb-3 block"></i>
                        <p class="text-gray-300 text-sm leading-relaxed mb-4">"The freedom to innovate, the support to grow, and the trust to lead — that's what Outwerk gave me in my first year."</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">RJ</span>
                            </div>
                            <div>
                                <div class="text-white text-sm font-semibold">Rayan Javed</div>
                                <div class="mono text-[9px] text-green-500/70">Tech Lead</div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-card p-6 border-l-2 border-l-green-500">
                        <i class="fas fa-quote-left text-green-500/30 text-2xl mb-3 block"></i>
                        <p class="text-gray-300 text-sm leading-relaxed mb-4">"Coming from a corporate background, I was amazed by the culture here. Everyone truly cares about your success."</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">SN</span>
                            </div>
                            <div>
                                <div class="text-white text-sm font-semibold">Sara Naeem</div>
                                <div class="mono text-[9px] text-green-500/70">Operations Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action with Visual -->
        <div class="max-w-4xl mx-auto text-center fade-up">
            <div class="relative overflow-hidden rounded-none border border-green-800/30 p-10 md:p-12">
                <div class="absolute top-0 right-0 w-64 h-64 bg-green-500/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-500/5 rounded-full blur-3xl"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 bg-green-500/10 px-4 py-2 mb-6">
                        <i class="fas fa-star text-xs text-green-500"></i>
                        <span class="mono text-[10px] text-green-400 tracking-wider">Join the movement</span>
                        <i class="fas fa-star text-xs text-green-500"></i>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Write Your Story?</h3>
                    <p class="text-gray-400 mb-8 max-w-md mx-auto">We're building something extraordinary. Come be part of it.</p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="#openings" class="inline-flex items-center gap-2 px-8 py-3 bg-green-700 text-white font-semibold hover:bg-green-600 transition-all duration-300 group">
                            View Open Positions
                            <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#apply" class="inline-flex items-center gap-2 px-8 py-3 border border-green-500/40 text-green-400 hover:bg-green-500/10 transition-all duration-300">
                            <i class="fas fa-envelope"></i>
                            Send Application
                        </a>
                    </div>
                </div>
            </div>
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
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, {
            threshold: 0.1
        });
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
        }, {
            threshold: 0.5
        });
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
        }, {
            threshold: 0.5
        });
        document.querySelectorAll('.stat-num[data-target]').forEach(el => statObserver.observe(el));

        // Smooth scroll
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
    </script>
</body>

</html>