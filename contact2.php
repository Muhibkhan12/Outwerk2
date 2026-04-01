<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Contact — Outwerk Solution | Get in Touch</title>
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
            .contact-card,
            .location-card {
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

        .contact-card,
        .location-card {
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .contact-card:hover,
        .location-card:hover {
            transform: translateY(-5px);
            border-color: rgba(46, 125, 50, 0.8);
            box-shadow: 0 20px 35px -15px rgba(46, 125, 50, 0.3);
        }

        .form-input,
        .form-textarea {
            background: rgba(3, 10, 5, 0.6);
            border: 1px solid rgba(46, 125, 50, 0.3);
            transition: all 0.3s ease;
            color: #eef5e8;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #2e7d32;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
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

        .map-placeholder {
            background: linear-gradient(135deg, #0a1508 0%, #051002 100%);
            position: relative;
            overflow: hidden;
        }

        .map-placeholder::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 30% 40%, rgba(46, 125, 50, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            pointer-events: none;
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
        <a href="contact.html" class="mobile-nav-link">Contact</a>
        <a href="#contact-form" class="pill-btn text-white mt-4">Message Us ↗</a>
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
            <a href="contact.html" class="nav-link">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="#contact-form" class="nav-get-in-touch pill-btn text-white hidden md:inline-flex">
                Get in Touch <span>↗</span>
            </a>
            <div class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Contact Page (Matching Outwerk Design) -->
    <section class="relative overflow-hidden min-h-[70vh] flex items-center">
        <!-- Background Glow Effects -->
        <div class="glow-dark-green absolute top-0 left-0 w-[600px] h-[600px] opacity-40 pointer-events-none"></div>
        <div class="glow-forest absolute bottom-0 right-0 w-[500px] h-[500px] opacity-30 pointer-events-none"></div>

        <!-- Grid Texture Overlay -->
        <div class="absolute inset-0 pointer-events-none opacity-20" style="background-image: linear-gradient(rgba(46, 125, 50, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(46, 125, 50, 0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-16 py-20 md:py-28 w-full">
            <!-- Breadcrumb / Navigation Hint -->
            <div class="flex items-center gap-2 mb-8 fade-up">
                <span class="mono text-xs tracking-widest text-green-500 uppercase">Contact</span>
                <div class="thin-line w-12"></div>
                <span class="mono text-xs tracking-widest text-zinc-500 uppercase">Get in Touch</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Column - Heading with Scribble Effect -->
                <div class="fade-up">
                    <h1 class="hero-text text-white leading-tight">
                        <span class="block">Contact</span>
                        <span class="gradient-dark-green inline-flex items-center gap-2">
                            Us
                            <span class="scribble-wrap inline-block relative">
                                <svg viewBox="0 0 100 40" xmlns="http://www.w3.org/2000/svg" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[110%] h-[150%] pointer-events-none">
                                    <ellipse cx="50" cy="20" rx="45" ry="16" class="scribble-path" stroke="#2e7d32" stroke-width="2.5" fill="none" stroke-dasharray="500" stroke-dashoffset="500" />
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
                                Have a question or ready to start your project? We're here to help. Reach out and let's create something extraordinary together.
                            </p>

                            <!-- CTA Button -->
                            <div class="pt-4">
                                <a href="#contact-form" class="pill-btn text-white inline-flex items-center gap-2 group">
                                    Send Message
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

    <!-- CONTACT CARDS - QUICK CONTACT -->
    <section class="section-px py-12 relative">
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="contact-card blur-card rounded-2xl p-8 text-center fade-up" style="transition-delay:0.05s">
                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-envelope text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Email Us</h3>
                <p class="text-gray-400 text-sm mb-4">Get a response within 24 hours</p>
                <a href="mailto:hello@outwerk.com" class="text-green-400 hover:text-green-300 transition text-sm break-all">hello@outwerk.com</a>
                <a href="mailto:support@outwerk.com" class="text-green-400/70 hover:text-green-300 transition text-sm block mt-1">support@outwerk.com</a>
            </div>

            <div class="contact-card blur-card rounded-2xl p-8 text-center fade-up" style="transition-delay:0.1s">
                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-phone-alt text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Call Us</h3>
                <p class="text-gray-400 text-sm mb-4">Mon-Fri, 9am-6pm PKT</p>
                <a href="tel:+922112345678" class="text-green-400 hover:text-green-300 transition text-sm block">+92 21 1234 5678</a>
                <a href="tel:+923001234567" class="text-green-400/70 hover:text-green-300 transition text-sm block mt-1">+92 300 1234567</a>
            </div>

            <div class="contact-card blur-card rounded-2xl p-8 text-center fade-up" style="transition-delay:0.15s">
                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-comments text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Live Chat</h3>
                <p class="text-gray-400 text-sm mb-4">Chat with our team instantly</p>
                <button onclick="alert('Live chat would open here')" class="inline-flex items-center gap-2 px-6 py-2.5 border border-green-500/40 rounded-full text-sm text-green-400 hover:bg-green-500 hover:text-black transition-all">
                    <i class="fas fa-comment-dots"></i>
                    Start Chat
                </button>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM + MAP SECTION -->
    <section id="contact-form" class="section-px py-16 relative">
        <div class="glow-dark-green absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-20"></div>

        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12 fade-up">
                <div class="inline-flex items-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-green-500 rotate-45"></div>
                    <span class="mono text-xs text-green-500 tracking-widest uppercase">Send a Message</span>
                    <div class="w-2 h-2 bg-green-500 rotate-45"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Let's Talk <span class="gradient-dark-green">Business</span></h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Fill out the form below and we'll get back to you within 24 hours.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="blur-card rounded-2xl p-6 md:p-8 fade-up" style="transition-delay:0.05s">
                    <form id="contactForm" action="#" method="POST">
                        <div class="grid md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Full Name *</label>
                                <input type="text" name="name" required class="form-input w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Email Address *</label>
                                <input type="email" name="email" required class="form-input w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Phone Number</label>
                                <input type="tel" name="phone" class="form-input w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Company</label>
                                <input type="text" name="company" class="form-input w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Service Interest</label>
                            <select name="service" class="form-input w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white">
                                <option value="">Select a service</option>
                                <option value="bpo">BPO Services</option>
                                <option value="inbound">Inbound Calls</option>
                                <option value="outbound">Outbound Calls</option>
                                <option value="leadgen">Lead Generation</option>
                                <option value="tech">Technical Helpdesk</option>
                                <option value="web">Web Development</option>
                                <option value="seo">SEO & SEM</option>
                                <option value="social">Social Media</option>
                                <option value="content">Content Marketing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-xs text-gray-400 mb-2 uppercase tracking-wider">Your Message *</label>
                            <textarea name="message" rows="5" required class="form-textarea w-full px-4 py-3 rounded-xl bg-black/40 border border-green-900/40 focus:border-green-500 transition text-white"></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-gradient-to-r from-green-700 to-emerald-600 text-white font-semibold rounded-xl hover:shadow-xl hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2 group">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane text-sm group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <p class="text-xs text-gray-600 text-center mt-4">We respect your privacy. Your information is secure.</p>
                    </form>
                </div>

                <!-- Map & Office Info -->
                <div class="space-y-6 fade-up" style="transition-delay:0.1s">
                    <!-- Interactive Map Placeholder -->
                    <div class="map-placeholder rounded-2xl overflow-hidden border border-green-900/40 h-64 relative">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231118.86804129908!2d66.87690483030454!3d24.860734165271778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3152c1e5e8e2f%3A0x2e5c8c5a5e5e5e5e!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                    </div>

                    <!-- Office Locations -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="location-card blur-card rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-building text-green-500 text-xl"></i>
                                <h4 class="font-bold text-white">Karachi (HQ)</h4>
                            </div>
                            <p class="text-gray-400 text-xs leading-relaxed">Plot 123, Main Shahrah-e-Faisal,<br>Karachi, Pakistan</p>
                        </div>
                        <div class="location-card blur-card rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-building text-green-500 text-xl"></i>
                                <h4 class="font-bold text-white">Lahore Office</h4>
                            </div>
                            <p class="text-gray-400 text-xs leading-relaxed">34-Gulberg III, MM Alam Road,<br>Lahore, Pakistan</p>
                        </div>
                        <div class="location-card blur-card rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-building text-green-500 text-xl"></i>
                                <h4 class="font-bold text-white">Islamabad</h4>
                            </div>
                            <p class="text-gray-400 text-xs leading-relaxed">Suite 7, Blue Area,<br>Islamabad, Pakistan</p>
                        </div>
                        <div class="location-card blur-card rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-globe text-green-500 text-xl"></i>
                                <h4 class="font-bold text-white">Remote Support</h4>
                            </div>
                            <p class="text-gray-400 text-xs leading-relaxed">Global coverage with<br>24/7 support teams</p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="blur-card rounded-xl p-5">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-clock text-green-500 text-xl"></i>
                            <h4 class="font-bold text-white">Business Hours</h4>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-400">Monday - Friday</span>
                                <span class="text-white">9:00 AM - 6:00 PM PKT</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-400">Saturday - Sunday</span>
                                <span class="text-white">Support Only (24/7)</span>
                            </div>
                            <div class="flex justify-between pt-2 border-t border-green-900/30 mt-2">
                                <span class="text-gray-400">Emergency Support</span>
                                <span class="text-green-400">Available 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION - QUICK ANSWERS -->
    <section class="section-px py-16 relative">
        <div class="glow-forest absolute bottom-0 right-0 opacity-20"></div>

        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 fade-up">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="dark-green-dot"></span>
                    <span class="mono text-xs text-green-500 tracking-widest uppercase">Quick Answers</span>
                    <span class="dark-green-dot"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Frequently Asked <span class="gradient-dark-green">Questions</span></h2>
                <p class="text-gray-400">Find quick answers to common questions about our services.</p>
            </div>

            <div class="space-y-4 fade-up">
                <details class="blur-card rounded-xl p-5 group open:border-green-500/50 transition-all">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <span class="font-semibold text-white">How quickly can I expect a response?</span>
                        <i class="fas fa-chevron-down text-green-500 group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="text-gray-400 text-sm mt-3 pt-3 border-t border-green-900/30">We typically respond within 24 hours during business days. For urgent inquiries, please call our support line.</p>
                </details>
                <details class="blur-card rounded-xl p-5 group open:border-green-500/50 transition-all">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <span class="font-semibold text-white">Do you offer free consultations?</span>
                        <i class="fas fa-chevron-down text-green-500 group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="text-gray-400 text-sm mt-3 pt-3 border-t border-green-900/30">Yes! We offer a free 30-minute consultation to understand your needs and explore how we can help your business grow.</p>
                </details>
                <details class="blur-card rounded-xl p-5 group open:border-green-500/50 transition-all">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <span class="font-semibold text-white">What industries do you serve?</span>
                        <i class="fas fa-chevron-down text-green-500 group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="text-gray-400 text-sm mt-3 pt-3 border-t border-green-900/30">We serve e-commerce, healthcare, finance, technology, real estate, education, and many more industries with tailored BPO solutions.</p>
                </details>
                <details class="blur-card rounded-xl p-5 group open:border-green-500/50 transition-all">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <span class="font-semibold text-white">Can I request a custom quote?</span>
                        <i class="fas fa-chevron-down text-green-500 group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="text-gray-400 text-sm mt-3 pt-3 border-t border-green-900/30">Absolutely! Fill out the contact form with your requirements, and our team will prepare a personalized quote for your specific needs.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- SOCIAL CONNECT SECTION -->
    <section class="section-px py-16 border-t border-green-900/30">
        <div class="max-w-4xl mx-auto text-center fade-up">
            <div class="flex items-center justify-center gap-3 mb-6">
                <i class="fab fa-linkedin text-2xl text-green-500/50 hover:text-green-400 transition cursor-pointer"></i>
                <i class="fab fa-twitter text-2xl text-green-500/50 hover:text-green-400 transition cursor-pointer"></i>
                <i class="fab fa-instagram text-2xl text-green-500/50 hover:text-green-400 transition cursor-pointer"></i>
                <i class="fab fa-facebook text-2xl text-green-500/50 hover:text-green-400 transition cursor-pointer"></i>
            </div>
            <p class="text-gray-500 text-sm">Follow us for updates, insights, and industry news</p>
            <div class="thin-line w-24 mx-auto mt-6"></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="section-px pt-14 pb-8 border-t border-green-900/30">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <span class="dark-green-dot"></span>
                    <span class="mono text-sm tracking-widest text-white">Outwerk<span class="gradient-dark-green">.</span></span>
                </div>
                <p class="text-zinc-600 text-xs">Premium BPO solutions for businesses that demand more.</p>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Quick Links</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="index.html" class="hover:text-green-400 transition">Home</a></li>
                    <li><a href="services.html" class="hover:text-green-400 transition">Services</a></li>
                    <li><a href="careers.html" class="hover:text-green-400 transition">Careers</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Support</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="#" class="hover:text-green-400 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-green-400 transition">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <div class="mono text-xs text-green-600/60 tracking-widest uppercase mb-4">Connect</div>
                <ul class="space-y-2 text-xs text-zinc-500">
                    <li><a href="mailto:hello@outwerk.com" class="hover:text-green-400 transition">hello@outwerk.com</a></li>
                    <li><a href="tel:+922112345678" class="hover:text-green-400 transition">+92 21 1234 5678</a></li>
                </ul>
            </div>
        </div>
        <div class="thin-line mb-6"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-3">
            <span class="mono text-xs text-zinc-700">© 2025 Outwerk Solution. All rights reserved.</span>
            <span class="mono text-xs text-green-700/40">Karachi, Pakistan — Global Reach</span>
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
            document.querySelectorAll('a, button, .contact-card, .location-card, details, #chat-bubble').forEach(el => {
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

        // Form submission handling
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Thank you for reaching out! Our team will get back to you within 24 hours.');
                contactForm.reset();
            });
        }

        // Smooth scroll for anchor links
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