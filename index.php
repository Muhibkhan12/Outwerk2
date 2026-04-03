<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Outwerk Solution — BPO Agency</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <style>
        :root {
            --dark-purple-glow: rgba(88, 28, 135, 0.45);
            --forest-purple: rgba(107, 33, 168, 0.35);
            --accent-purple: #4c1d95;
            --bright-accent: #7c3aed;
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
            background: #7c3aed;
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
            border: 1px solid rgba(124, 58, 237, 0.6);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.35s cubic-bezier(.17, .67, .35, 1), width 0.3s, height 0.3s;
            display: none;
        }

        /* GLOWS - responsive */
        .glow-dark-green {
            position: absolute;
            width: clamp(200px, 50vw, 600px);
            height: clamp(200px, 50vw, 600px);
            background: radial-gradient(circle, rgba(88, 28, 135, 0.5) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(40px);
        }

        .glow-forest {
            position: absolute;
            width: clamp(150px, 35vw, 400px);
            height: clamp(150px, 35vw, 400px);
            background: radial-gradient(circle, rgba(107, 33, 168, 0.4) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
        }

        /* HERO FONT — fluid and responsive */
        .hero-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(32px, 8vw, 148px);
            line-height: 0.92;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        .thin-line {
            height: 1px;
            background: rgba(124, 58, 237, 0.3);
            width: 100%;
        }

        /* SCRIBBLE - responsive */
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

        @media (max-width: 768px) {
            .scribble-wrap svg {
                width: 120%;
                height: 180%;
            }
        }

        .scribble-path {
            stroke: #7c3aed;
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
            font-size: clamp(30px, 8vw, 100px);
            line-height: 1;
            color: rgba(124, 58, 237, 0.15);
            letter-spacing: -0.03em;
            font-weight: 700;
            transition: color 0.4s;
            user-select: none;
        }

        .service-row:hover .service-num {
            color: rgba(124, 58, 237, 0.35);
        }

        /* PILL BUTTON - responsive */
        .pill-btn {
            border: 1px solid rgba(124, 58, 237, 0.5);
            border-radius: 999px;
            padding: 8px 18px;
            font-size: 11px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: rgba(88, 28, 135, 0.2);
            backdrop-filter: blur(8px);
            white-space: nowrap;
        }

        @media (min-width: 768px) {
            .pill-btn {
                padding: 10px 24px;
                font-size: 12px;
            }
        }

        .pill-btn:hover {
            background: #7c3aed;
            color: #030a05;
            border-color: #7c3aed;
            transform: translateY(-2px);
        }

        /* CTA TEXT — fluid */
        .cta-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(32px, 8vw, 160px);
            line-height: 0.92;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        /* MARQUEE - responsive */
        .marquee-track {
            display: flex;
            gap: 30px;
            animation: marquee 22s linear infinite;
            white-space: nowrap;
        }

        @media (min-width: 768px) {
            .marquee-track {
                gap: 60px;
            }
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

        /* CHAT BUBBLE - responsive */
        #chat-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 48px;
            height: 48px;
            background: #7c3aed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 0 0 rgba(124, 58, 237, 0.5);
        }

        @media (min-width: 768px) {
            #chat-bubble {
                bottom: 24px;
                right: 24px;
                width: 52px;
                height: 52px;
            }
        }

        #chat-bubble:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px rgba(124, 58, 237, 0.6);
        }

        #chat-bubble svg {
            width: 20px;
            height: 20px;
            fill: #030a05;
        }

        @media (min-width: 768px) {
            #chat-bubble svg {
                width: 22px;
                height: 22px;
            }
        }

        /* NAVBAR - responsive */
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
            border-bottom: 1px solid rgba(124, 58, 237, 0.3);
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
            font-size: clamp(24px, 8vw, 48px);
            font-weight: 700;
            color: rgba(238, 245, 232, 0.8);
            text-decoration: none;
            letter-spacing: -0.01em;
            transition: color 0.2s;
        }

        #mobile-menu a:hover {
            color: #a78bfa;
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
                linear-gradient(rgba(124, 58, 237, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(124, 58, 237, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
        }

        @media (min-width: 768px) {
            body::before {
                background-size: 80px 80px;
            }
        }

        /* STAT COUNTER */
        .stat-num {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(28px, 6vw, 88px);
            line-height: 1;
            font-weight: 700;
            background: linear-gradient(135deg, #7c3aed, #a78bfa, #c084fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* NAV LINKS */
        .nav-link {
            position: relative;
            font-size: 12px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(238, 245, 232, 0.7);
            transition: color 0.3s;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 500;
            text-decoration: none;
        }

        @media (min-width: 1024px) {
            .nav-link {
                font-size: 13px;
            }
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: #7c3aed;
            transition: width 0.3s;
        }

        .nav-link:hover {
            color: #a78bfa;
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
            max-height: 400px;
        }

        @media (min-width: 768px) {
            .service-row.open .service-detail {
                max-height: 320px;
            }
        }

        .service-row .plus-icon {
            transition: transform 0.4s;
            color: #7c3aed;
            cursor: pointer;
        }

        .service-row.open .plus-icon {
            transform: rotate(45deg);
        }

        .dark-green-dot {
            width: 8px;
            height: 8px;
            background: #7c3aed;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px rgba(124, 58, 237, 0.6);
            flex-shrink: 0;
        }

        section {
            position: relative;
            z-index: 1;
        }

        .gradient-dark-green {
            background: linear-gradient(135deg, #7c3aed, #a78bfa, #c084fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gradient-green {
            background: linear-gradient(135deg, #7c3aed, #a78bfa, #c084fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .blur-card {
            backdrop-filter: blur(12px);
            background: rgba(3, 10, 5, 0.5);
            border: 1px solid rgba(124, 58, 237, 0.25);
        }

        .key-point {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(124, 58, 237, 0.1);
            padding: 4px 10px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 500;
            color: #c084fc;
            border: 1px solid rgba(124, 58, 237, 0.3);
            backdrop-filter: blur(4px);
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        @media (min-width: 768px) {
            .key-point {
                padding: 5px 12px;
                font-size: 11px;
            }
        }

        .key-point:hover {
            background: rgba(124, 58, 237, 0.2);
            border-color: rgba(124, 58, 237, 0.6);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 4px;
        }

        @media (min-width: 768px) {
            ::-webkit-scrollbar {
                width: 6px;
            }
        }

        ::-webkit-scrollbar-track {
            background: #030a05;
        }

        ::-webkit-scrollbar-thumb {
            background: #7c3aed;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a78bfa;
        }

        /* Toast notification - responsive */
        .toast-notify {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background: #1e1a2a;
            backdrop-filter: blur(16px);
            border-left: 4px solid #7c3aed;
            padding: 10px 16px;
            border-radius: 60px;
            font-size: 12px;
            font-weight: 500;
            z-index: 1100;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transform: translateX(400px);
            transition: transform 0.3s ease;
            color: #e0e0f0;
        }

        @media (min-width: 768px) {
            .toast-notify {
                bottom: 100px;
                right: 24px;
                padding: 12px 20px;
                font-size: 13px;
            }
        }

        .toast-notify.show {
            transform: translateX(0);
        }

        /* Responsive spacing utilities */
        .section-py {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        @media (min-width: 768px) {
            .section-py {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
        }

        /* Floating cards hide on mobile */
        .floating-card {
            display: none;
        }

        @media (min-width: 1024px) {
            .floating-card {
                display: block;
            }
        }
    </style>
</head>
<?php
@include("header.php")?>

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

    <!-- ─── HERO ─── -->
    <section class="min-h-screen flex flex-col justify-end pb-12 pt-28 px-5 md:px-8 lg:px-16 overflow-hidden">
        <div class="glow-dark-green" style="top:-100px; right:-100px;"></div>
        <div class="glow-forest" style="bottom:100px; left:-80px;"></div>
        
        <div class="flex flex-wrap items-center gap-3 mb-6 fade-up">
            <span class="mono text-[10px] md:text-xs tracking-widest text-purple-500 uppercase">— Est. 2019</span>
            <div class="thin-line w-12 md:w-16"></div>
            <span class="mono text-[10px] md:text-xs tracking-widest text-zinc-500 uppercase">BPO Solutions</span>
        </div>
        
        <div class="hero-text text-white leading-none mb-6">
            <div class="fade-up" style="transition-delay:0.05s">WE ARE THE TEAM</div>
            <div class="fade-up flex flex-wrap" style="transition-delay:0.1s">
                OF&nbsp;<span class="scribble-wrap" id="scribble-word">
                    BUSINESS
                    <svg viewBox="0 0 220 60">
                        <ellipse cx="110" cy="30" rx="105" ry="26" class="scribble-path" id="scribble-el" />
                    </svg>
                </span>
            </div>
            <div class="fade-up" style="transition-delay:0.15s">PROCESS</div>
            <div class="fade-up flex flex-wrap items-baseline gap-x-3 md:gap-x-4" style="transition-delay:0.2s">
                <span>OUTSOURCING</span>
                <span class="gradient-dark-green">EXPERTS</span>
            </div>
        </div>
        
        <div class="hero-sub-row flex flex-col md:flex-row md:items-end justify-between gap-6 mt-6 fade-up" style="transition-delay:0.25s">
            <p class="text-zinc-400 text-xs md:text-sm lg:text-base max-w-xs md:max-w-sm leading-relaxed">
                Streamlining operations. Amplifying growth. We handle your back-office so you can focus on what matters.
            </p>
            <a href="#contact" class="pill-btn text-white self-start md:self-auto">
                Start a project ↗
            </a>
        </div>
        
        <div class="thin-line mt-10 md:mt-12 fade-up" style="transition-delay:0.3s"></div>
        
        <div class="stats-grid grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 pt-6 md:pt-8 fade-up" style="transition-delay:0.35s">
            <div><div class="stat-num" data-target="250">0</div><div class="mono text-[9px] md:text-xs text-zinc-500 mt-1 tracking-widest">CLIENTS SERVED</div></div>
            <div><div class="stat-num" data-target="12">0</div><div class="mono text-[9px] md:text-xs text-zinc-500 mt-1 tracking-widest">COUNTRIES</div></div>
            <div><div class="stat-num" data-target="98">0</div><div class="mono text-[9px] md:text-xs text-zinc-500 mt-1 tracking-widest">% RETENTION</div></div>
            <div><div class="stat-num" data-target="6">0</div><div class="mono text-[9px] md:text-xs text-zinc-500 mt-1 tracking-widest">YEARS</div></div>
        </div>
    </section>

    <!-- ─── MARQUEE ─── -->
    <div class="overflow-hidden py-3 md:py-4 border-y border-purple-900/30 relative z-10">
        <div class="marquee-track"><span class="mono text-[10px] md:text-xs text-white font-bold tracking-widest uppercase">Inbound Call Center &nbsp; ✦ &nbsp; Outbound Calls &nbsp; ✦ &nbsp; Customer Support &nbsp; ✦ &nbsp; Technical Helpdesk &nbsp; ✦ &nbsp; Lead Generation &nbsp; ✦ &nbsp; Web Development &nbsp; ✦ &nbsp; SEO & SEM &nbsp; ✦ &nbsp; Social Media &nbsp; ✦ &nbsp; Inbound Call Center &nbsp; ✦ &nbsp; Outbound Calls &nbsp; ✦ &nbsp; Customer Support &nbsp; ✦ &nbsp; Technical Helpdesk &nbsp; ✦ &nbsp; Lead Generation &nbsp; ✦ &nbsp; Web Development &nbsp; ✦ &nbsp; SEO & SEM &nbsp; ✦ &nbsp; Social Media &nbsp; ✦ &nbsp;</span></div>
    </div>

    <!-- SERVICES SECTION -->
    <section id="services" class="px-5 md:px-8 lg:px-16 py-12 md:py-20 relative">
        <div class="glow-dark-green" style="top:50%; left:-200px; opacity:0.6;"></div>
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 md:mb-12 fade-up">
            <h2 class="hero-text text-3xl sm:text-5xl md:text-6xl lg:text-7xl">OUR <span class="gradient-green">SERVICES</span></h2>
            <span class="mono text-[10px] md:text-xs text-purple-600/60 tracking-widest uppercase">Core Expertise</span>
        </div>
        
        <div class="space-y-0 divide-y divide-purple-900/20">
            <div class="service-row fade-up pt-3 md:pt-4 cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 pb-3 md:pb-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">01</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 mb-1"><h3 class="text-lg md:text-2xl lg:text-4xl font-semibold tracking-tight uppercase text-white">BPO SERVICES</h3><span class="key-point">Industry Leader</span></div>
                        <p class="text-white text-xs md:text-sm service-detail pt-2 leading-relaxed">End-to-end business process outsourcing solutions designed to streamline operations, reduce costs, and enhance productivity.</p>
                        <div class="service-detail pt-3"><div class="flex flex-wrap gap-1 md:gap-2 mt-2"><span class="key-point">24/7 Support</span><span class="key-point">40% Cost Reduction</span><span class="key-point">Global Ops</span><span class="key-point hidden sm:inline-flex">99.9% SLA</span></div><p class="text-white text-[10px] md:text-xs mt-3">Multi-channel support • Back-office automation • Quality assured</p></div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-purple-500 text-xl md:text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 py-3 md:py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">02</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8"><div class="flex flex-wrap items-center gap-2 mb-1"><h3 class="text-lg md:text-2xl lg:text-4xl font-semibold tracking-tight uppercase text-white">SALES & LEAD GEN</h3><span class="key-point">High Conversion</span></div>
                    <p class="text-white text-xs md:text-sm service-detail pt-2 leading-relaxed">Data-driven lead generation and sales development services that fill your pipeline with qualified prospects.</p>
                    <div class="service-detail pt-3"><div class="flex flex-wrap gap-1 md:gap-2 mt-2"><span class="key-point">Outbound Calling</span><span class="key-point">Email Campaigns</span><span class="key-point">3x ROI</span></div><p class="text-white text-[10px] md:text-xs mt-3">B2B lead qualification • Appointment setting • CRM integration</p></div>
                    </div><div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-purple-500 text-xl md:text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 py-3 md:py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">03</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8"><div class="flex flex-wrap items-center gap-2 mb-1"><h3 class="text-lg md:text-2xl lg:text-4xl font-semibold tracking-tight uppercase text-white">WEB SOLUTIONS</h3><span class="key-point">Custom Dev</span></div>
                    <p class="text-white text-xs md:text-sm service-detail pt-2 leading-relaxed">Modern, scalable web applications and platforms that drive business growth and deliver exceptional user experiences.</p>
                    <div class="service-detail pt-3"><div class="flex flex-wrap gap-1 md:gap-2 mt-2"><span class="key-point">React/Next.js</span><span class="key-point">Laravel/PHP</span><span class="key-point">Cloud</span></div><p class="text-white text-[10px] md:text-xs mt-3">E-commerce • Custom CRM • API development</p></div>
                    </div><div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-purple-500 text-xl md:text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 py-3 md:py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">04</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8"><div class="flex flex-wrap items-center gap-2 mb-1"><h3 class="text-lg md:text-2xl lg:text-4xl font-semibold tracking-tight uppercase text-white">DIGITAL MARKETING</h3><span class="key-point">Results-Driven</span></div>
                    <p class="text-white text-xs md:text-sm service-detail pt-2 leading-relaxed">Full-funnel digital marketing strategies that increase brand visibility and drive qualified traffic.</p>
                    <div class="service-detail pt-3"><div class="flex flex-wrap gap-1 md:gap-2 mt-2"><span class="key-point">SEO/SEM</span><span class="key-point">Social Ads</span><span class="key-point">Email</span></div><p class="text-white text-[10px] md:text-xs mt-3">Content marketing • PPC campaigns • CRO</p></div>
                    </div><div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-purple-500 text-xl md:text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
        </div>
        <div class="mt-8 md:mt-12 text-center fade-up"><a href="services.php" class="inline-flex items-center gap-2 md:gap-3 px-5 py-3 md:px-7 md:py-4 bg-gradient-to-r from-purple-700 to-purple-600 text-white font-semibold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300 text-xs md:text-sm">EXPLORE MORE →</a></div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="px-5 md:px-8 lg:px-16 py-12 md:py-24 relative overflow-hidden">
        <div class="about-grid grid md:grid-cols-2 gap-10 md:gap-16 lg:gap-20 items-center">
            <div class="fade-up">
                <div class="flex items-center gap-3 mb-6"><span class="dark-green-dot"></span><span class="mono text-[10px] md:text-xs text-purple-500 tracking-widest uppercase">Who We Are</span><div class="w-8 md:w-12 h-px bg-purple-500/40"></div></div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold leading-tight mb-6 md:mb-8" style="letter-spacing:-0.02em">Built for businesses<br />that refuse to<br /><span class="gradient-dark-green">compromise.</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-4 md:mb-5 text-xs md:text-sm lg:text-base">Outwerk Solution is a premium BPO firm headquartered in Karachi. We partner with forward-thinking companies to deliver outsourcing solutions that don't just cut costs — they elevate performance.</p>
                <div class="flex flex-wrap items-center gap-3 md:gap-4"><a href="#contact" class="pill-btn text-white">Work with us ↗</a><span class="mono text-[9px] md:text-xs text-purple-700/60 tracking-widest">ISO 9001 Certified</span></div>
            </div>
            <div class="fade-up relative">
                <div class="grid grid-cols-2 gap-3 md:gap-4 overflow-hidden border border-purple-800/30 bg-black/30 backdrop-blur-sm p-2 md:p-3 rounded-xl">
                    <div class="relative overflow-hidden aspect-square rounded-lg"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=400&fit=crop" alt="Team" class="w-full h-full object-cover"></div>
                    <div class="relative overflow-hidden aspect-square rounded-lg"><img src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?w=400&h=400&fit=crop" alt="Support" class="w-full h-full object-cover"></div>
                    <div class="relative overflow-hidden aspect-square rounded-lg"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=400&fit=crop" alt="Agile" class="w-full h-full object-cover"></div>
                    <div class="relative overflow-hidden aspect-square rounded-lg flex items-center justify-center bg-gradient-to-br from-purple-900/50 to-purple-800/40"><div class="text-center z-10"><div class="text-lg md:text-2xl font-bold text-white/90">OUTWERK</div><div class="mono text-[8px] md:text-[10px] tracking-widest text-purple-300">KARACHI</div></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="px-5 md:px-8 lg:px-16 py-16 md:py-28 relative overflow-hidden">
        <div class="thin-line mb-10 md:mb-14 fade-up"></div>
        <div class="fade-up"><div class="mono text-[10px] md:text-xs text-purple-500 tracking-widest uppercase mb-6 md:mb-8">— Ready to grow?</div>
        <div class="cta-text"><div>LET'S BUILD</div><div>SOMETHING</div><div class="flex flex-wrap items-baseline gap-x-3 md:gap-x-6"><span>GREAT</span><span class="scribble-wrap"><span class="gradient-dark-green">TOGETHER</span><svg viewBox="0 0 320 60"><ellipse cx="160" cy="30" rx="150" ry="25" class="scribble-path" id="scribble-el2" /></svg></span><span class="text-white">↗</span></div></div></div>
        <div class="contact-grid grid md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16 pt-6 md:pt-8 border-t border-purple-900/30 fade-up">
            <div><div class="mono text-[10px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-2 md:mb-3">Email</div><a href="mailto:hr@outwerksolution.com" class="text-white text-sm md:text-base lg:text-lg font-medium hover:text-purple-400 transition-colors break-all">hr@outwerksolution.com</a><br><a href="mailto:info@outwerksolution.com" class="text-white text-sm md:text-base lg:text-lg font-medium hover:text-purple-400 transition-colors break-all">info@outwerksolution.com</a></div>
            <div><div class="mono text-[10px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-2 md:mb-3">Phone</div><a href="tel:(021) 34324522" class="text-white text-sm md:text-base lg:text-lg font-medium hover:text-purple-400 transition-colors">(021) 34324522</a></div>
            <div><div class="mono text-[10px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-2 md:mb-3">Location</div><p class="text-white text-sm md:text-base lg:text-lg font-medium">Karachi, Pakistan</p></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="px-5 md:px-8 lg:px-16 pt-10 md:pt-14 pb-6 md:pb-8 border-t border-purple-900/30">
        <div class="footer-grid grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 mb-8 md:mb-12">
            <div class="col-span-2 md:col-span-1"><div class="flex items-center gap-2 mb-3 md:mb-4"><span class="dark-green-dot"></span><span class="mono text-xs md:text-sm tracking-widest text-white">Outwerk<span class="gradient-dark-green">.</span></span></div><p class="text-zinc-600 text-[10px] md:text-xs leading-relaxed">Premium BPO solutions for businesses that demand more.</p></div>
            <div><div class="mono text-[9px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-3 md:mb-4">Services</div><ul class="space-y-1 md:space-y-2 text-[10px] md:text-xs text-zinc-500"><li><a href="#" class="hover:text-purple-400 transition-colors">Customer Support</a></li><li><a href="#" class="hover:text-purple-400 transition-colors">IT Support</a></li></ul></div>
            <div><div class="mono text-[9px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-3 md:mb-4">Company</div><ul class="space-y-1 md:space-y-2 text-[10px] md:text-xs text-zinc-500"><li><a href="#" class="hover:text-purple-400 transition-colors">About Us</a></li><li><a href="#" class="hover:text-purple-400 transition-colors">Careers</a></li></ul></div>
            <div><div class="mono text-[9px] md:text-xs text-purple-600/60 tracking-widest uppercase mb-3 md:mb-4">Connect</div><ul class="space-y-1 md:space-y-2 text-[10px] md:text-xs text-zinc-500"><li><a href="#" class="hover:text-purple-400 transition-colors">LinkedIn</a></li><li><a href="#" class="hover:text-purple-400 transition-colors">Twitter</a></li></ul></div>
        </div>
        <div class="thin-line mb-4 md:mb-6"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-3"><span class="mono text-[9px] md:text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span><span class="mono text-[9px] md:text-xs text-purple-700/40">Karachi, Pakistan — ISO 9001 Certified</span></div>
    </footer>

    <div class="toast-notify" id="toastMsg">✓ Message sent! We'll reply shortly.</div>

    <script>
        // Mobile menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        if (hamburger) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('open');
                mobileMenu.classList.toggle('open');
                document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
            });
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    hamburger.classList.remove('open');
                    mobileMenu.classList.remove('open');
                    document.body.style.overflow = '';
                });
            });
        }
        
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
                    setTimeout(() => { entry.target.querySelectorAll('.scribble-path').forEach(p => p.classList.add('animated')); }, 400);
                    scribbleObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.scribble-wrap').forEach(el => scribbleObserver.observe(el));
        
        // Service rows expand
        document.querySelectorAll('.service-row').forEach(row => {
            row.addEventListener('click', () => {
                const isOpen = row.classList.contains('open');
                document.querySelectorAll('.service-row').forEach(r => r.classList.remove('open'));
                if (!isOpen) row.classList.add('open');
            });
        });
        
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
        
        // Chat bubble toast
        document.getElementById('chat-bubble')?.addEventListener('click', () => {
            const toast = document.getElementById('toastMsg');
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3500);
        });
        
        // Cursor logic (preserved)
        const cursor = document.getElementById('cursor');
        const ring = document.getElementById('cursor-ring');
        const isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
        if (isPointer && cursor && ring) {
            cursor.style.display = 'block';
            ring.style.display = 'block';
            let mx = -100, my = -100, rx = -100, ry = -100;
            document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cursor.style.left = (mx - 5) + 'px'; cursor.style.top = (my - 5) + 'px'; });
            function animateRing() { rx += (mx - rx - 18) * 0.12; ry += (my - ry - 18) * 0.12; ring.style.left = rx + 'px'; ring.style.top = ry + 'px'; requestAnimationFrame(animateRing); }
            animateRing();
        }
    </script>
</body>

</html>