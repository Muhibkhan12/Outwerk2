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
        /* ===== GLOBAL RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #030a05;
            color: #eef5e8;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        /* ===== PAGE-SPECIFIC STYLES (No conflicts with header) ===== */
        
        /* GLOWS - responsive */
        .glow-dark-green {
            position: absolute;
            width: clamp(200px, 50vw, 600px);
            height: clamp(200px, 50vw, 600px);
            background: radial-gradient(circle, rgba(20, 83, 45, 0.5) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(40px);
        }

        .glow-forest {
            position: absolute;
            width: clamp(150px, 35vw, 400px);
            height: clamp(150px, 35vw, 400px);
            background: radial-gradient(circle, rgba(21, 94, 60, 0.4) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
        }

        .hero-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(32px, 8vw, 148px);
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

        @media (max-width: 768px) {
            .scribble-wrap svg {
                width: 120%;
                height: 180%;
            }
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
            padding: 8px 18px;
            font-size: 10px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: rgba(20, 83, 45, 0.2);
            backdrop-filter: blur(8px);
            white-space: nowrap;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .pill-btn {
                padding: 10px 24px;
                font-size: 12px;
                gap: 8px;
            }
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

        /* Animation keyframes */
        @keyframes draw-scribble {
            to { stroke-dashoffset: 0; }
        }

        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0.3; }
            50% { transform: translateY(-20px) translateX(10px); opacity: 0.8; }
        }

        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0.2; }
            50% { transform: translateY(-15px) translateX(-8px); opacity: 0.6; }
        }

        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.4); }
            50% { box-shadow: 0 0 0 15px rgba(46, 125, 50, 0); }
        }

        .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
        .animate-float-medium { animation: float-medium 10s ease-in-out infinite; }
        .animate-pulse-glow { animation: pulse-glow 2s infinite; }

        /* Page-specific grid overlay */
        .page-grid-overlay {
            position: fixed;
            inset: 0;
            background-image: linear-gradient(rgba(46, 125, 50, 0.04) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(46, 125, 50, 0.04) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
        }

        @media (min-width: 768px) {
            .page-grid-overlay {
                background-size: 80px 80px;
            }
        }

        .main-content {
            position: relative;
            z-index: 1;
        }

        /* Responsive Core Values */
        @media (max-width: 768px) {
            .core-values-grid {
                border: none;
            }
            .core-value-card {
                border-bottom: 1px solid rgba(46, 125, 50, 0.3);
                border-right: none;
            }
            .core-value-card:last-child {
                border-bottom: none;
            }
        }
        
        /* Responsive Stats Cards */
        @media (max-width: 640px) {
            .stats-cards {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
        }
        
        /* Responsive CTA Buttons */
        @media (max-width: 640px) {
            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }
            .cta-buttons a {
                width: 100%;
                justify-content: center;
            }
        }
        
        /* Responsive Footer */
        @media (max-width: 768px) {
            .footer-grid {
                gap: 2rem;
            }
        }
        
        /* Chat bubble responsive */
        #chat-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 48px;
            height: 48px;
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
            box-shadow: 0 0 30px rgba(46, 125, 50, 0.6);
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
    </style>
</head>

<?php

@include("header.php")?>

<body>

<!-- Page-specific grid overlay -->
<div class="page-grid-overlay"></div>

<div class="main-content">
    <!-- CHAT BUBBLE -->
    <div id="chat-bubble" title="Chat with us">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
        </svg>
    </div>

    <!-- HERO SECTION - Fully Responsive -->
    <section class="relative overflow-hidden min-h-[60vh] md:min-h-[70vh] flex items-center">
        <div class="glow-dark-green absolute top-0 left-0 w-[600px] h-[600px] opacity-40 pointer-events-none"></div>
        <div class="glow-forest absolute bottom-0 right-0 w-[500px] h-[500px] opacity-30 pointer-events-none"></div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute top-20 left-[10%] w-1 h-1 bg-green-500/30 rounded-full animate-float-slow"></div>
            <div class="absolute top-40 right-[15%] w-2 h-2 bg-emerald-500/20 rounded-full animate-float-medium" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-[20%] w-1.5 h-1.5 bg-green-400/20 rounded-full animate-float-slow" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-[25%] w-1 h-1 bg-emerald-500/25 rounded-full animate-float-medium" style="animation-delay: 3s;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-16 py-16 md:py-28 w-full">
            <div class="flex flex-wrap items-center gap-2 mb-6 md:mb-8 fade-up">
                <span class="text-[10px] md:text-xs tracking-widest text-green-500 uppercase font-mono font-semibold">Careers</span>
                <div class="thin-line w-8 md:w-12"></div>
                <span class="text-[10px] md:text-xs tracking-widest text-zinc-500 uppercase font-mono font-semibold">Join Our Team</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center">
                <div class="fade-up">
                    <h1 class="hero-text text-white leading-tight">
                        <span class="block">START YOUR</span>
                        <span class="gradient-dark-green inline-flex items-center gap-2 flex-wrap">
                            CAREER
                            <span class="scribble-wrap inline-block relative">
                                <svg viewBox="0 0 140 45" xmlns="http://www.w3.org/2000/svg" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[115%] h-[150%] pointer-events-none">
                                    <ellipse cx="70" cy="22" rx="65" ry="18" class="scribble-path" stroke="#2e7d32" stroke-width="2.5" fill="none" stroke-dasharray="500" stroke-dashoffset="500" />
                                </svg>
                            </span>
                        </span>
                    </h1>
                </div>

                <div class="fade-up" style="transition-delay: 0.1s">
                    <div class="relative">
                        <div class="absolute -left-4 md:-left-6 top-0 bottom-0 w-px bg-gradient-to-b from-green-500 via-emerald-600 to-transparent"></div>
                        <div class="space-y-4 md:space-y-6 pl-4 md:pl-6">
                            <p class="text-gray-300 leading-relaxed text-sm md:text-base lg:text-lg font-light">
                                Join a team of innovators, problem-solvers, and growth enthusiasts. We're looking for passionate individuals ready to make an impact — where your ideas matter and your career accelerates.
                            </p>
                        </div>
                    </div>
                </div>
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

    <!-- WORKPLACE EXCELLENCE SECTION - Fully Responsive -->
    <section class="px-5 sm:px-8 md:px-16 py-16 md:py-24 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top,rgba(46,125,50,0.08),transparent_50%)]"></div>
        </div>

        <div class="text-center max-w-4xl mx-auto mb-12 md:mb-20 fade-up">
            <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/30 px-3 py-1.5 md:px-4 md:py-2 mb-4 md:mb-6">
                <span class="w-1 h-1 md:w-1.5 md:h-1.5 bg-green-500 rounded-full"></span>
                <span class="text-[9px] md:text-[10px] text-green-400 tracking-widest uppercase font-mono font-semibold">Behind the Scenes</span>
                <span class="w-1 h-1 md:w-1.5 md:h-1.5 bg-green-500 rounded-full"></span>
            </div>
            <h2 class="text-3xl md:text-5xl lg:text-7xl font-bold text-white mb-4 md:mb-6 leading-[1.1]">
                Where <span class="gradient-dark-green">Talent</span><br>
                Becomes <span class="gradient-dark-green">Family</span>
            </h2>
            <p class="text-gray-400 text-sm md:text-lg max-w-2xl mx-auto px-4">
                Not just a workplace — a launchpad for dreams, a community of innovators, and a place where you truly belong.
            </p>
        </div>

        <!-- Core Values - Responsive Grid -->
        <div class="max-w-6xl mx-auto mb-16 md:mb-24">
            <div class="grid md:grid-cols-3 gap-0 border border-green-800/30 core-values-grid">
                <div class="relative p-6 md:p-8 text-center group border-b md:border-b-0 md:border-r border-green-800/30 hover:bg-green-500/5 transition-all duration-500 core-value-card">
                    <div class="relative z-10">
                        <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 md:mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-handshake text-2xl md:text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-2 md:mb-3">Trust & Transparency</h3>
                        <p class="text-gray-400 text-xs md:text-sm leading-relaxed px-2">Radical honesty, open communication, and decisions made with integrity.</p>
                    </div>
                </div>

                <div class="relative p-6 md:p-8 text-center group border-b md:border-b-0 md:border-r border-green-800/30 hover:bg-green-500/5 transition-all duration-500 core-value-card">
                    <div class="relative z-10">
                        <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 md:mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-rocket text-2xl md:text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-2 md:mb-3">Bold Innovation</h3>
                        <p class="text-gray-400 text-xs md:text-sm leading-relaxed px-2">Fearless experimentation, embracing failure as growth, and pushing boundaries.</p>
                    </div>
                </div>

                <div class="relative p-6 md:p-8 text-center group hover:bg-green-500/5 transition-all duration-500 core-value-card">
                    <div class="relative z-10">
                        <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 md:mb-5 relative">
                            <div class="absolute inset-0 bg-green-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                            <i class="fas fa-heart text-2xl md:text-3xl text-green-500 relative z-10"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-2 md:mb-3">Unwavering Support</h3>
                        <p class="text-gray-400 text-xs md:text-sm leading-relaxed px-2">Mentorship, mental wellness, and a culture that celebrates every individual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Experience Grid - Fully Responsive -->
        <div class="max-w-7xl mx-auto mb-16 md:mb-24">
            <div class="grid lg:grid-cols-2 gap-8 md:gap-12">
                <div class="space-y-4 md:space-y-6 fade-up">
                    <div class="inline-flex items-center gap-2 mb-2 md:mb-4">
                        <div class="w-6 md:w-8 h-px bg-green-500/60"></div>
                        <span class="text-[9px] md:text-[10px] text-green-500 tracking-widest uppercase font-mono font-semibold">The Outwerk Experience</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4 md:mb-6">More Than Just<br>A 9-to-5</h3>

                    <div class="space-y-3 md:space-y-4">
                        <div class="flex gap-3 md:gap-4 p-3 md:p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-champagne-glasses text-green-500 text-base md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm md:text-base mb-0.5 md:mb-1">Monthly Celebrations</h4>
                                <p class="text-gray-500 text-xs md:text-sm">Birthdays, milestones, and wins — we celebrate every moment together.</p>
                            </div>
                        </div>

                        <div class="flex gap-3 md:gap-4 p-3 md:p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-brain text-green-500 text-base md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm md:text-base mb-0.5 md:mb-1">Learning Fridays</h4>
                                <p class="text-gray-500 text-xs md:text-sm">Weekly workshops, guest speakers, and skill-building sessions.</p>
                            </div>
                        </div>

                        <div class="flex gap-3 md:gap-4 p-3 md:p-4 border-l-2 border-green-500/40 hover:border-green-500 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                <i class="fas fa-tree text-green-500 text-base md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm md:text-base mb-0.5 md:mb-1">Offsite Retreats</h4>
                                <p class="text-gray-500 text-xs md:text-sm">Annual retreats to recharge, reconnect, and rediscover inspiration.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards - Responsive Grid -->
                <div class="grid grid-cols-2 gap-3 md:gap-4 fade-up stats-cards">
                    <div class="blur-card p-4 md:p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-2xl md:text-4xl font-bold gradient-dark-green mb-1 md:mb-2">87%</div>
                        <div class="text-gray-400 text-xs md:text-sm mb-2 md:mb-3">Would Recommend<br>Working Here</div>
                        <div class="h-px w-8 md:w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-4 md:p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-2xl md:text-4xl font-bold gradient-dark-green mb-1 md:mb-2">2.5x</div>
                        <div class="text-gray-400 text-xs md:text-sm mb-2 md:mb-3">Faster Career<br>Growth</div>
                        <div class="h-px w-8 md:w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-4 md:p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-2xl md:text-4xl font-bold gradient-dark-green mb-1 md:mb-2">32hrs</div>
                        <div class="text-gray-400 text-xs md:text-sm mb-2 md:mb-3">Annual Learning<br>Per Employee</div>
                        <div class="h-px w-8 md:w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                    <div class="blur-card p-4 md:p-6 text-center group hover:transform hover:-translate-y-2 transition-all duration-500">
                        <div class="text-2xl md:text-4xl font-bold gradient-dark-green mb-1 md:mb-2">15+</div>
                        <div class="text-gray-400 text-xs md:text-sm mb-2 md:mb-3">Nationalities<br>Represented</div>
                        <div class="h-px w-8 md:w-12 bg-green-500/30 mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Voices - Responsive -->
        <div class="max-w-5xl mx-auto mb-16 md:mb-20">
            <div class="relative">
                <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                    <div class="blur-card p-5 md:p-6 border-l-2 border-l-green-500">
                        <i class="fas fa-quote-left text-green-500/30 text-xl md:text-2xl mb-2 md:mb-3 block"></i>
                        <p class="text-gray-300 text-xs md:text-sm leading-relaxed mb-3 md:mb-4">"The freedom to innovate, the support to grow, and the trust to lead — that's what Outwerk gave me in my first year."</p>
                        <div class="flex items-center gap-2 md:gap-3">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                                <span class="text-white text-[10px] md:text-xs font-bold">RJ</span>
                            </div>
                            <div>
                                <div class="text-white text-xs md:text-sm font-semibold">Rayan Javed</div>
                                <div class="text-[8px] md:text-[9px] text-green-500/70 font-mono">Tech Lead</div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-card p-5 md:p-6 border-l-2 border-l-green-500">
                        <i class="fas fa-quote-left text-green-500/30 text-xl md:text-2xl mb-2 md:mb-3 block"></i>
                        <p class="text-gray-300 text-xs md:text-sm leading-relaxed mb-3 md:mb-4">"Coming from a corporate background, I was amazed by the culture here. Everyone truly cares about your success."</p>
                        <div class="flex items-center gap-2 md:gap-3">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                                <span class="text-white text-[10px] md:text-xs font-bold">SN</span>
                            </div>
                            <div>
                                <div class="text-white text-xs md:text-sm font-semibold">Sara Naeem</div>
                                <div class="text-[8px] md:text-[9px] text-green-500/70 font-mono">Operations Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action - Responsive -->
        <div class="max-w-4xl mx-auto text-center fade-up">
            <div class="relative overflow-hidden border border-green-800/30 p-6 md:p-10 lg:p-12">
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 bg-green-500/10 px-3 py-1.5 md:px-4 md:py-2 mb-4 md:mb-6">
                        <i class="fas fa-star text-[10px] md:text-xs text-green-500"></i>
                        <span class="text-[9px] md:text-[10px] text-green-400 tracking-wider font-mono">Join the movement</span>
                        <i class="fas fa-star text-[10px] md:text-xs text-green-500"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3 md:mb-4">Ready to Write Your Story?</h3>
                    <p class="text-gray-400 text-sm md:text-base mb-6 md:mb-8 max-w-md mx-auto">We're building something extraordinary. Come be part of it.</p>
                    <div class="flex flex-wrap gap-3 md:gap-4 justify-center cta-buttons">
                        <a href="#apply" class="inline-flex items-center justify-center gap-2 px-6 py-2.5 md:px-8 md:py-3 bg-green-700 text-white font-semibold hover:bg-green-600 transition-all duration-300 group text-sm md:text-base">
                            Send Application
                            <i class="fas fa-arrow-right text-xs md:text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATION CTA - Responsive -->
    <section id="apply" class="px-5 sm:px-8 md:px-16 py-16 md:py-20 relative">
        <div class="glow-dark-green absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-30"></div>

        <div class="max-w-4xl mx-auto text-center fade-up">
            <div class="blur-card p-6 md:p-8 lg:p-12 border border-green-900/40">
                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-4 md:mb-6 animate-pulse-glow">
                    <i class="fas fa-paper-plane text-xl md:text-2xl text-green-500"></i>
                </div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3 md:mb-4">Ready to Make an Impact?</h2>
                <p class="text-gray-400 text-sm md:text-base mb-6 md:mb-8 max-w-2xl mx-auto">Submit your application and let's start a conversation about your future at Outwerk.</p>
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center cta-buttons">
                    <a href="mailto:careers@outwerk.com?subject=Job Application" class="inline-flex items-center justify-center gap-2 md:gap-3 px-6 py-3 md:px-8 md:py-4 bg-gradient-to-r from-green-700 to-emerald-600 text-white font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300 text-sm md:text-base">
                        <i class="fas fa-envelope text-xs md:text-sm"></i>
                        careers@outwerk.com
                    </a>
                </div>
                <p class="text-[10px] md:text-xs text-gray-600 mt-4 md:mt-6">Attach your resume and portfolio. We'll get back to you within 5 business days.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION - Responsive -->
    <section id="contact" class="px-5 sm:px-8 md:px-16 py-12 md:py-20 border-t border-green-900/30">
        <div class="thin-line mb-8 md:mb-12 fade-up"></div>
        <div class="grid md:grid-cols-3 gap-6 md:gap-8 fade-up">
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-2 md:mb-3 font-mono">Email</div>
                <a href="mailto:careers@outwerk.com" class="text-white text-sm md:text-base lg:text-lg font-medium hover:text-green-400 transition-colors break-all">careers@outwerk.com</a>
            </div>
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-2 md:mb-3 font-mono">Phone</div>
                <a href="tel:+922112345678" class="text-white text-sm md:text-base lg:text-lg font-medium hover:text-green-400 transition-colors">+92 21 1234 5678</a>
            </div>
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-2 md:mb-3 font-mono">Location</div>
                <p class="text-white text-sm md:text-base lg:text-lg font-medium">Karachi, Lahore, Islamabad, Remote</p>
            </div>
        </div>
    </section>

    <!-- FOOTER - Responsive -->
    <footer class="px-5 sm:px-8 md:px-16 pt-10 md:pt-14 pb-6 md:pb-8 border-t border-green-900/30">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 lg:gap-10 mb-8 md:mb-12 footer-grid">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-3 md:mb-4">
                    <span class="dark-green-dot"></span>
                    <span class="text-xs md:text-sm tracking-widest text-white font-mono font-semibold">Outwerk<span class="gradient-dark-green">.</span></span>
                </div>
                <p class="text-zinc-600 text-[10px] md:text-xs leading-relaxed">Premium BPO solutions where talent meets opportunity.</p>
            </div>
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-3 md:mb-4 font-mono">Company</div>
                <ul class="space-y-1.5 md:space-y-2 text-[10px] md:text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Careers</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Culture</a></li>
                </ul>
            </div>
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-3 md:mb-4 font-mono">Resources</div>
                <ul class="space-y-1.5 md:space-y-2 text-[10px] md:text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">Blog</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Support</a></li>
                </ul>
            </div>
            <div>
                <div class="text-[9px] md:text-[10px] text-green-600/60 tracking-widest uppercase mb-3 md:mb-4 font-mono">Connect</div>
                <ul class="space-y-1.5 md:space-y-2 text-[10px] md:text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Twitter</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="thin-line mb-4 md:mb-6"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-3">
            <span class="text-[9px] md:text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span>
            <span class="text-[9px] md:text-xs text-green-700/40">Karachi, Pakistan — ISO 9001 Certified</span>
        </div>
    </footer>
</div>

<script>
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
    
    // Chat bubble toast
    const toastDiv = document.createElement('div');
    toastDiv.className = 'toast-notify';
    toastDiv.innerHTML = '✓ Message sent! We’ll reply shortly.';
    toastDiv.style.cssText = 'position:fixed;bottom:80px;right:20px;background:#1e2a1c;backdrop-filter:blur(16px);border-left:4px solid #2e7d32;padding:10px 16px;border-radius:60px;font-size:12px;z-index:1100;transform:translateX(400px);transition:transform 0.3s ease;color:#e0f2e0;';
    document.body.appendChild(toastDiv);
    
    document.getElementById('chat-bubble')?.addEventListener('click', () => {
        toastDiv.classList.add('show');
        toastDiv.style.transform = 'translateX(0)';
        setTimeout(() => {
            toastDiv.classList.remove('show');
            toastDiv.style.transform = 'translateX(400px)';
        }, 3500);
    });
    
    // Smooth scroll for anchor links
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