<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Outwerk Solution — Premium BPO & Digital Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <style>
        /* ===== PAGE-SPECIFIC STYLES (No conflicts with header) ===== */
        
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

        /* HERO FONT */
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

        /* CTA TEXT */
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
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
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

        /* Page-specific container padding */
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

        /* Development journey section styles */
        .dev-journey-section {
            position: relative;
            z-index: 1;
        }
        
        .dev-journey-section .step-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 5rem 0;
            border-bottom: 1px solid rgba(46, 125, 50, 0.15);
            gap: 4rem;
            opacity: 0;
            transform: translateY(48px);
            transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1);
        }
        
        .dev-journey-section .step-row.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .dev-journey-section .step-row.odd .text-col { order: 1; }
        .dev-journey-section .step-row.odd .num-col { order: 2; }
        .dev-journey-section .step-row.even .num-col { order: 1; }
        .dev-journey-section .step-row.even .text-col { order: 2; }
        
        .dev-journey-section .step-index {
            font-size: 0.7rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #2e7d32;
            font-weight: 600;
        }
        
        .dev-journey-section .step-heading {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(2.4rem, 4.5vw, 3.8rem);
            line-height: 1;
            letter-spacing: -0.02em;
            color: #eef5e8;
            font-weight: 700;
        }
        
        .dev-journey-section .step-heading .gradient {
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .dev-journey-section .step-desc {
            font-size: 1rem;
            line-height: 1.7;
            color: #9ca3af;
            max-width: 400px;
        }
        
        .dev-journey-section .step-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 0.25rem;
        }
        
        .dev-journey-section .pill-timeline {
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            background: rgba(46, 125, 50, 0.15);
            padding: 0.25rem 1rem;
            border-radius: 40px;
            color: #4caf50;
            text-transform: uppercase;
        }
        
        .dev-journey-section .duration {
            font-family: monospace;
            font-size: 0.85rem;
            font-weight: 500;
            color: #9ca3af;
        }
        
        .dev-journey-section .key-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-top: 0.75rem;
        }
        
        .dev-journey-section .key-tag {
            font-size: 0.7rem;
            letter-spacing: 0.02em;
            background: rgba(46, 125, 50, 0.1);
            border: 1px solid rgba(46, 125, 50, 0.3);
            padding: 0.2rem 0.8rem;
            border-radius: 30px;
            color: #7bcb7f;
            transition: all 0.2s;
        }
        
        .dev-journey-section .num-col {
            position: relative;
            aspect-ratio: 4/3;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0a140c;
            border-radius: 24px;
            overflow: hidden;
        }
        
        .dev-journey-section .num-mask-container {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .dev-journey-section .num-mask-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        .dev-journey-section .mask-01 { clip-path: url(#numberShape01); }
        .dev-journey-section .mask-02 { clip-path: url(#numberShape02); }
        .dev-journey-section .mask-03 { clip-path: url(#numberShape03); }
        .dev-journey-section .mask-04 { clip-path: url(#numberShape04); }
        
        .dev-journey-section .num-outline-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            pointer-events: none;
        }
        
        .dev-journey-section .num-outline-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(8rem, 20vw, 16rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 2px rgba(46, 125, 50, 0.6);
            line-height: 1;
            user-select: none;
            letter-spacing: -0.02em;
        }
        
        .dev-journey-section .num-col:hover .num-mask-image {
            transform: scale(1.08);
        }
        
        .dev-journey-section .num-tag {
            position: absolute;
            bottom: 1.25rem;
            left: 1.25rem;
            background: #2e7d32;
            color: #030a05;
            font-size: 0.65rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            padding: 0.35rem 0.9rem;
            font-weight: 700;
            z-index: 3;
            border-radius: 30px;
            pointer-events: none;
        }
        
        .dev-journey-section .step-row.even .num-tag {
            left: auto;
            right: 1.25rem;
        }
        
        .dev-journey-section .stats-mini-bar {
            background: rgba(3, 10, 5, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(46, 125, 50, 0.25);
            margin-top: 5rem;
            padding: 2.5rem 2rem;
            border-radius: 24px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .dev-journey-section .stat-item {
            text-align: center;
            flex: 1;
        }
        
        .dev-journey-section .stat-number-lg {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 2.8rem;
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
            font-weight: 700;
        }
        
        .dev-journey-section .stat-label {
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(238, 245, 232, 0.6);
        }
        
        .dev-journey-section .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .dev-journey-section .section-label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(46, 125, 50, 0.15);
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            margin-bottom: 1.5rem;
        }
        
        .dev-journey-section .section-label .dot {
            width: 6px;
            height: 6px;
            background: #4caf50;
            border-radius: 50%;
            animation: pulse 1.5s infinite;
        }
        
        .dev-journey-section .section-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        
        .dev-journey-section .section-subtitle {
            color: #9ca3af;
            max-width: 600px;
            margin: 1rem auto 0;
        }
        
        .dev-journey-section .step-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.75rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #eef5e8;
            font-weight: 600;
            margin-top: 0.5rem;
            position: relative;
            width: fit-content;
            transition: color 0.2s;
            text-decoration: none;
        }
        
        .dev-journey-section .step-btn::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: #2e7d32;
            transition: width 0.35s ease;
        }
        
        .dev-journey-section .step-btn:hover::after {
            width: 100%;
        }
        
        .dev-journey-section .step-btn:hover {
            color: #4caf50;
        }
        
        .dev-journey-section .journey-cta {
            text-align: center;
            margin-top: 4rem;
            margin-bottom: 2rem;
        }
        
        .dev-journey-section .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            background: linear-gradient(135deg, #1a4a2a, #0d2a18);
            color: #eef5e8;
            padding: 0.9rem 2.2rem;
            border-radius: 40px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.85rem;
            transition: all 0.3s;
            border: 1px solid rgba(46, 125, 50, 0.4);
            text-decoration: none;
        }
        
        .dev-journey-section .cta-button:hover {
            background: linear-gradient(135deg, #2e7d32, #1a4a2a);
            transform: translateY(-3px);
            gap: 1rem;
            border-color: #4caf50;
        }
        
        .steps-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 5vw;
            position: relative;
            z-index: 2;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.4; }
            50% { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .dev-journey-section .step-row { 
                grid-template-columns: 1fr; 
                gap: 2rem; 
                padding: 3rem 0; 
            }
            .dev-journey-section .step-row.even .num-col,
            .dev-journey-section .step-row.even .text-col,
            .dev-journey-section .step-row.odd .text-col,
            .dev-journey-section .step-row.odd .num-col { order: unset; }
            .dev-journey-section .step-row.even .num-col { order: 1; }
            .dev-journey-section .step-row.even .text-col { order: 2; }
            .dev-journey-section .stats-mini-bar { flex-direction: column; align-items: center; text-align: center; }
        }
        
        /* Grid texture overlay for this page only */
        .page-grid-overlay {
            position: fixed;
            inset: 0;
            background-image: linear-gradient(rgba(46, 125, 50, 0.04) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(46, 125, 50, 0.04) 1px, transparent 1px);
            background-size: 80px 80px;
            pointer-events: none;
            z-index: 0;
        }
        
        .main-content {
            position: relative;
            z-index: 1;
        }
        
        body {
            background: #030a05;
        }
    </style>
</head>
<?php
@include("header.php")?>

<body>



<!-- Page-specific grid overlay -->
<div class="page-grid-overlay"></div>

<!-- SVG Defs for clip-path masks -->
<svg style="position: absolute; width: 0; height: 0; pointer-events: none;" aria-hidden="true">
    <defs>
        <clipPath id="numberShape01" clipPathUnits="objectBoundingBox">
            <path d="M0.38,0.08 L0.52,0.08 L0.52,0.38 L0.68,0.38 L0.68,0.52 L0.52,0.52 L0.52,0.92 L0.38,0.92 L0.38,0.52 L0.22,0.52 L0.22,0.38 L0.38,0.38 Z" />
        </clipPath>
        <clipPath id="numberShape02" clipPathUnits="objectBoundingBox">
            <path d="M0.22,0.18 Q0.22,0.08 0.42,0.08 Q0.62,0.08 0.62,0.18 Q0.62,0.28 0.47,0.38 L0.22,0.58 L0.22,0.92 L0.78,0.92 L0.78,0.78 L0.42,0.78 L0.42,0.68 L0.67,0.5 Q0.82,0.4 0.82,0.22 Q0.82,0.08 0.58,0.08 Q0.32,0.08 0.22,0.18 Z" />
        </clipPath>
        <clipPath id="numberShape03" clipPathUnits="objectBoundingBox">
            <path d="M0.78,0.22 Q0.78,0.08 0.58,0.08 Q0.35,0.08 0.22,0.22 L0.38,0.32 Q0.42,0.2 0.58,0.2 Q0.7,0.2 0.7,0.32 Q0.7,0.44 0.58,0.44 L0.38,0.44 L0.38,0.58 L0.58,0.58 Q0.7,0.58 0.7,0.7 Q0.7,0.82 0.58,0.82 Q0.42,0.82 0.38,0.7 L0.22,0.8 Q0.32,0.94 0.58,0.94 Q0.78,0.94 0.78,0.8 Q0.78,0.7 0.68,0.62 Q0.78,0.54 0.78,0.45 Q0.78,0.35 0.68,0.28 Q0.78,0.22 0.78,0.22 Z" />
        </clipPath>
        <clipPath id="numberShape04" clipPathUnits="objectBoundingBox">
            <path d="M0.68,0.08 L0.68,0.48 L0.85,0.48 L0.85,0.62 L0.68,0.62 L0.68,0.92 L0.52,0.92 L0.52,0.62 L0.18,0.62 L0.18,0.48 L0.52,0.48 L0.52,0.08 Z" />
        </clipPath>
    </defs>
</svg>

<div class="main-content">
    <!-- CHAT BUBBLE -->
    <div id="chat-bubble" title="Chat with us">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
        </svg>
    </div>

    <!-- Hero Section - Services Page -->
    <section class="relative overflow-hidden min-h-[70vh] flex items-center">
        <div class="glow-dark-green absolute top-0 left-0 w-[600px] h-[600px] opacity-40 pointer-events-none"></div>
        <div class="glow-forest absolute bottom-0 right-0 w-[500px] h-[500px] opacity-30 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-16 py-20 md:py-28 w-full">
            <div class="flex items-center gap-2 mb-8 fade-up">
                <span class="mono text-xs tracking-widest text-green-500 uppercase">Services</span>
                <div class="thin-line w-12"></div>
                <span class="mono text-xs tracking-widest text-zinc-500 uppercase">What We Deliver</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
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

                <div class="fade-up" style="transition-delay: 0.1s">
                    <div class="relative">
                        <div class="absolute -left-6 top-0 bottom-0 w-px bg-gradient-to-b from-green-500 via-emerald-600 to-transparent"></div>
                        <div class="space-y-6 pl-6">
                            <p class="text-gray-300 leading-relaxed text-base md:text-lg font-light">
                                We are a creative agency with several services focused on quality and innovation for your business — turning bold ideas into digital realities.
                            </p>
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
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="overflow-hidden py-4 border-y border-green-900/30 relative z-10">
        <div class="marquee-track">
            <span class="mono text-xs text-white font-bold tracking-widest uppercase">
                Inbound Call Center &nbsp; ✦ &nbsp; Outbound Calls &nbsp; ✦ &nbsp; Customer Support &nbsp; ✦ &nbsp;
                IT SUPPORT &nbsp; ✦ &nbsp; Lead Generation &nbsp; ✦ &nbsp; Web Development &nbsp; ✦ &nbsp;
                SEO & SEM &nbsp; ✦ &nbsp; Social Media &nbsp; ✦ &nbsp; Content Marketing &nbsp; ✦ &nbsp;
            </span>
        </div>
    </div>

    <!-- SERVICES SECTION (EXPANDABLE ROWS) -->
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
                    <div class="col-span-2 md:col-span-1"><span class="service-num">01</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">INBOUND CALLS</h3>
                            <span class="key-point">24/7 Support</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">24/7 customer support, order processing, helpdesk & troubleshooting.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Order Processing</span>
                                <span class="key-point">Helpdesk Support</span>
                                <span class="key-point">Customer Service</span>
                                <span class="key-point">Ticket Management</span>
                            </div>
                            <p class="text-white text-xs mt-3">Multi-channel support • Real-time assistance • Quality assurance certified • 24/7 coverage</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 2: OUTBOUND CALLS -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">02</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">OUTBOUND CALLS</h3>
                            <span class="key-point">High Conversion</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Telemarketing, appointment setting, market research & lead qualification.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Telemarketing</span>
                                <span class="key-point">Appointment Setting</span>
                                <span class="key-point">Market Research</span>
                                <span class="key-point">Lead Qualification</span>
                            </div>
                            <p class="text-white text-xs mt-3">B2B/B2C outreach • CRM integration • Data-driven campaigns • ROI-focused</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 3: CUSTOMER SUPPORT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">03</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">CUSTOMER SUPPORT</h3>
                            <span class="key-point">Multi-Channel</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Multi-channel support, feedback analysis, CRM management, complaint resolution.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Email Support</span>
                                <span class="key-point">Live Chat</span>
                                <span class="key-point">Phone Support</span>
                                <span class="key-point">Social Media Support</span>
                            </div>
                            <p class="text-white text-xs mt-3">Feedback analysis • CRM management • Complaint resolution • CSAT improvement</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 4: LEAD GENERATION -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">04</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">LEAD GENERATION</h3>
                            <span class="key-point">B2B Prospecting</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">B2B prospecting, cold calling, appointment setting, market research.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Cold Calling</span>
                                <span class="key-point">Email Outreach</span>
                                <span class="key-point">LinkedIn Prospecting</span>
                                <span class="key-point">Qualified Leads</span>
                            </div>
                            <p class="text-white text-xs mt-3">Account-based marketing • CRM integration • Sales pipeline growth • 3x ROI average</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 5: IT SUPPORT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">05</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">IT SUPPORT</h3>
                            <span class="key-point">IT Support</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Software support, network troubleshooting, remote assistance, IT infrastructure.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Remote Assistance</span>
                                <span class="key-point">Network Troubleshooting</span>
                                <span class="key-point">Software Support</span>
                                <span class="key-point">IT Infrastructure</span>
                            </div>
                            <p class="text-white text-xs mt-3">Level 1-3 support • Ticketing systems • Cloud infrastructure • Security monitoring</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 6: WEB DEVELOPMENT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">06</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">WEB DEVELOPMENT</h3>
                            <span class="key-point">Custom Development</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Custom development, e-commerce, API integration, responsive design.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">React / Next.js</span>
                                <span class="key-point">E-commerce</span>
                                <span class="key-point">API Integration</span>
                                <span class="key-point">Responsive Design</span>
                            </div>
                            <p class="text-white text-xs mt-3">Custom CRM • Cloud hosting • Maintenance & support • Scalable solutions</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 7: SEO & SEM -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">07</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">SEO & SEM</h3>
                            <span class="key-point">Results-Driven</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Keyword strategy, PPC campaigns, performance analytics, conversion optimization.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Keyword Strategy</span>
                                <span class="key-point">PPC Campaigns</span>
                                <span class="key-point">Analytics</span>
                                <span class="key-point">Conversion Optimization</span>
                            </div>
                            <p class="text-white text-xs mt-3">Organic search growth • Paid advertising • A/B testing • ROI tracking</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 8: SOCIAL MEDIA MANAGEMENT -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">08</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">SOCIAL MEDIA</h3>
                            <span class="key-point">Brand Amplification</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Multi-platform management, content planning, community engagement, analytics.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Content Planning</span>
                                <span class="key-point">Community Engagement</span>
                                <span class="key-point">Analytics Reporting</span>
                                <span class="key-point">Multi-Platform</span>
                            </div>
                            <p class="text-white text-xs mt-3">Instagram • LinkedIn • Facebook • Twitter • Content calendar • Growth strategy</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>

            <!-- Service 9: CONTENT MARKETING -->
            <div class="service-row fade-up cursor-pointer">
                <div class="grid grid-cols-12 items-start gap-2 md:gap-4 py-4">
                    <div class="col-span-2 md:col-span-1"><span class="service-num">09</span></div>
                    <div class="col-span-8 md:col-span-9 pl-1 md:pl-8">
                        <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-1">
                            <h3 class="text-xl md:text-4xl font-semibold tracking-tight uppercase text-white">CONTENT MARKETING</h3>
                            <span class="key-point">Storytelling</span>
                        </div>
                        <p class="text-white text-sm service-detail pt-2 leading-relaxed">Blog writing, video production, email newsletters, brand storytelling.</p>
                        <div class="service-detail pt-3">
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="key-point">Blog Writing</span>
                                <span class="key-point">Video Production</span>
                                <span class="key-point">Email Newsletters</span>
                                <span class="key-point">Brand Storytelling</span>
                            </div>
                            <p class="text-white text-xs mt-3">SEO-optimized content • Thought leadership • Lead magnets • Content strategy</p>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-start pt-2"><span class="plus-icon text-green-500 text-2xl leading-none select-none">+</span></div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center fade-up">
            <a href="#contact" class="inline-flex items-center gap-3 px-7 py-4 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300 text-sm">
                GET A FREE CONSULTATION →
            </a>
        </div>
    </section>

    <!-- DEVELOPMENT JOURNEY SECTION (RESTORED) -->
    <div class="dev-journey-section">
        <div class="steps-container">
            <div class="section-header fade-up">
                <div class="section-label">
                    <span class="dot"></span>
                    <span class="text-xs tracking-widest uppercase text-green-500">Our Workflow</span>
                    <span class="dot"></span>
                </div>
                <h2 class="section-title text-white">
                    DEVELOPMENT <span class="text-green-500">JOURNEY</span>
                </h2>
                <p class="section-subtitle text-sm">
                    A streamlined workflow that transforms ideas into exceptional solutions through a structured, transparent process.
                </p>
                <div class="w-20 h-px bg-gradient-to-r from-transparent via-green-500 to-transparent mx-auto mt-6"></div>
            </div>
        </div>

        <div class="steps-container">
            <!-- STEP 01 — Discovery & Planning -->
            <div class="step-row odd" data-step>
                <div class="text-col">
                    <span class="step-index">PHASE 01</span>
                    <h2 class="step-heading">Discovery & <span class="gradient">Planning</span></h2>
                    <div class="step-meta">
                        <span class="pill-timeline">Timeline</span>
                        <span class="duration">2-3 weeks</span>
                    </div>
                    <p class="step-desc">Deep discovery, stakeholder workshops, and strategic blueprint — we map every requirement before writing a single line of code.</p>
                    <div class="key-tags">
                        <span class="key-tag">Requirement Analysis</span>
                        <span class="key-tag">Strategy Formulation</span>
                        <span class="key-tag">Roadmap Creation</span>
                    </div>
                    <a href="#" class="step-btn">
                        Explore phase
                        <svg width="16" height="16" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="num-col">
                    <div class="num-mask-container">
                        <img class="num-mask-image mask-01" src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1000&q=80" alt="Discovery meeting" />
                    </div>
                    <div class="num-outline-overlay">
                        <span class="num-outline-text">01</span>
                    </div>
                    <span class="num-tag">Discovery</span>
                </div>
            </div>

            <!-- STEP 02 — Design & Development -->
            <div class="step-row even" data-step>
                <div class="num-col">
                    <div class="num-mask-container">
                        <img class="num-mask-image mask-02" src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=1000&q=80" alt="Design & development" />
                    </div>
                    <div class="num-outline-overlay">
                        <span class="num-outline-text">02</span>
                    </div>
                    <span class="num-tag">Creation</span>
                </div>
                <div class="text-col">
                    <span class="step-index">PHASE 02</span>
                    <h2 class="step-heading">Design & <span class="gradient">Development</span></h2>
                    <div class="step-meta">
                        <span class="pill-timeline">Timeline</span>
                        <span class="duration">3-4 weeks</span>
                    </div>
                    <p class="step-desc">Agile sprints, iterative UI/UX, and clean code architecture — we transform concepts into high-performance digital experiences.</p>
                    <div class="key-tags">
                        <span class="key-tag">UI/UX Design</span>
                        <span class="key-tag">Agile Development</span>
                        <span class="key-tag">Code Implementation</span>
                    </div>
                    <a href="#" class="step-btn">
                        Explore phase
                        <svg width="16" height="16" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- STEP 03 — Testing & Implementation -->
            <div class="step-row odd" data-step>
                <div class="text-col">
                    <span class="step-index">PHASE 03</span>
                    <h2 class="step-heading">Testing & <span class="gradient">Implementation</span></h2>
                    <div class="step-meta">
                        <span class="pill-timeline">Timeline</span>
                        <span class="duration">1-2 weeks</span>
                    </div>
                    <p class="step-desc">Rigorous QA, performance benchmarking, and zero-downtime deployment strategies that ensure bulletproof launches.</p>
                    <div class="key-tags">
                        <span class="key-tag">Quality Assurance</span>
                        <span class="key-tag">Performance Testing</span>
                        <span class="key-tag">Seamless Deployment</span>
                    </div>
                    <a href="#" class="step-btn">
                        Explore phase
                        <svg width="16" height="16" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="num-col">
                    <div class="num-mask-container">
                        <img class="num-mask-image mask-03" src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=1000&q=80" alt="Testing automation" />
                    </div>
                    <div class="num-outline-overlay">
                        <span class="num-outline-text">03</span>
                    </div>
                    <span class="num-tag">Validation</span>
                </div>
            </div>

            <!-- STEP 04 — Support & Optimization -->
            <div class="step-row even" data-step>
                <div class="num-col">
                    <div class="num-mask-container">
                        <img class="num-mask-image mask-04" src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1000&q=80" alt="Ongoing support" />
                    </div>
                    <div class="num-outline-overlay">
                        <span class="num-outline-text">04</span>
                    </div>
                    <span class="num-tag">Evolution</span>
                </div>
                <div class="text-col">
                    <span class="step-index">PHASE 04</span>
                    <h2 class="step-heading">Support & <span class="gradient">Optimization</span></h2>
                    <div class="step-meta">
                        <span class="pill-timeline">Timeline</span>
                        <span class="duration relative">Ongoing</span>
                    </div>
                    <p class="step-desc">Continuous monitoring, performance tuning, and iterative enhancements — we stay as your long-term partner for growth.</p>
                    <div class="key-tags">
                        <span class="key-tag">Ongoing Support</span>
                        <span class="key-tag">Performance Optimization</span>
                        <span class="key-tag">Continuous Updates</span>
                    </div>
                    <a href="#" class="step-btn">
                        Explore phase
                        <svg width="16" height="16" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="steps-container">
            <div class="stats-mini-bar">
                <div class="stat-item">
                    <div class="stat-number-lg"><span class="counter-num" data-target="98">0</span>%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number-lg"><span class="counter-num" data-target="250">0</span>+</div>
                    <div class="stat-label">Projects Delivered</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number-lg">24/<span class="counter-num" data-target="7">0</span></div>
                    <div class="stat-label">Support Coverage</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number-lg"><span class="counter-num" data-target="100">0</span>%</div>
                    <div class="stat-label">Client Satisfaction</div>
                </div>
            </div>

            <div class="journey-cta">
                <a href="#" class="cta-button">
                    Start your journey today
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3 9h12M11 5l4 4-4 4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <p class="text-xs text-gray-500 mt-4 tracking-wide">No obligation · free consultation to explore your vision</p>
            </div>
        </div>
    </div>

    <!-- CONTACT CTA SECTION -->
    <section id="contact" class="section-px py-28 relative overflow-hidden">
        <div class="glow-dark-green" style="top:0; left:50%; transform:translateX(-50%); width:min(800px, 100vw); opacity:0.4;"></div>
        <div class="glow-forest" style="bottom:0; right:0; opacity:0.6;"></div>

        <div class="thin-line mb-14 md:mb-20 fade-up"></div>

        <div class="fade-up">
            <div class="mono text-xs text-green-500 tracking-widest uppercase mb-8">— Ready to grow?</div>
            <div class="cta-text">
                <div class="text-white">LET'S BUILD</div>
                <div class="text-white">SOMETHING</div>
                <div class="flex flex-wrap items-baseline gap-x-4 md:gap-x-6">
                    <span class="text-white">GREAT</span>
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
                <a href="mailto:hello@outwerk.com" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors break-all">hr@outwerksolutions.com</a>
                <br>
                <a href="mailto:hello@outwerk.com" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors break-all">info@outwerksolutions.com</a>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Phone</div>
                <a href="tel:+922112345678" class="text-white text-base md:text-lg font-medium hover:text-green-400 transition-colors">(021) 34324522
</a>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-3">Location</div>
                <p class="text-white text-base md:text-lg font-medium">Karachi, Pakistan</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
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
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // FADE UP OBSERVER
        const fadeObserver = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));

        // DEVELOPMENT JOURNEY STEP OBSERVER
        const stepRows = document.querySelectorAll('.dev-journey-section .step-row[data-step]');
        const stepObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, idx) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, idx * 100);
                    stepObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2, rootMargin: "0px 0px -30px 0px" });
        stepRows.forEach(r => stepObserver.observe(r));

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

        // COUNTER ANIMATION FOR STATS
        const counters = document.querySelectorAll('.dev-journey-section .counter-num');
        let counted = false;
        const statsSection = document.querySelector('.dev-journey-section .stats-mini-bar');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !counted) {
                    counted = true;
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'), 10);
                        if (isNaN(target)) return;
                        let current = 0;
                        const increment = target / 55;
                        const interval = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                counter.textContent = target;
                                clearInterval(interval);
                            } else {
                                counter.textContent = Math.floor(current);
                            }
                        }, 30);
                    });
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        if (statsSection) counterObserver.observe(statsSection);

        // CHAT BUBBLE
        const chatBubble = document.getElementById('chat-bubble');
        if (chatBubble) {
            chatBubble.addEventListener('click', () => {
                alert('Chat support coming soon! Please email us at hello@outwerk.com');
            });
        }

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
        
        // Hero section scribble animation
        const heroScribble = document.querySelector('.hero-text .scribble-path');
        if (heroScribble) {
            setTimeout(() => heroScribble.classList.add('animated'), 500);
        }
    });
</script>

</body>
</html>