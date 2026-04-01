<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Outwerk — Navigation Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #030a05;
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
        }

        /* Custom cursor for non-touch devices */
        @media (hover: hover) and (pointer: fine) {
            body { cursor: none; }
            #cursor, #cursor-ring { display: block; }
        }
        @media (hover: none), (pointer: coarse) {
            #cursor, #cursor-ring { display: none !important; }
            body { cursor: auto; }
        }

        #cursor {
            width: 10px;
            height: 10px;
            background: #2e7d32;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
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
            transition: width 0.3s, height 0.3s;
            display: none;
        }

        .dark-green-dot {
            width: 12px;
            height: 12px;
            background: #2e7d32;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px rgba(46, 125, 50, 0.6);
            transition: all 0.3s ease;
        }

        .gradient-dark-green {
            background: linear-gradient(135deg, #2e7d32, #4caf50, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .mono {
            font-family: 'Plus Jakarta Sans', monospace;
            font-weight: 500;
            letter-spacing: 0.08em;
        }

        .pill-btn {
            border: 1px solid rgba(46, 125, 50, 0.5);
            border-radius: 0px;
            padding: 12px 28px;
            font-size: 13px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(20, 83, 45, 0.2);
            backdrop-filter: blur(8px);
            white-space: nowrap;
        }
        .pill-btn:hover {
            background: #2e7d32;
            color: #030a05;
            border-color: #2e7d32;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(46, 125, 50, 0.4);
        }

        #navbar {
            position: fixed;
            top: 24px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 48px);
            max-width: 1600px;
            z-index: 100;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(16px);
            background: rgba(3, 10, 5, 0.85);
            border: 1px solid rgba(46, 125, 50, 0.4);
            padding: 0 32px;
            opacity: 1;
            visibility: visible;
            height: 80px;
        }
        
        /* Navbar hide on scroll down, show on scroll up */
        #navbar.hide {
            transform: translateX(-50%) translateY(-120%);
            opacity: 0;
            visibility: hidden;
        }
        
        #navbar.scrolled {
            top: 0;
            background: rgba(3, 10, 5, 0.95);
            border-color: rgba(46, 125, 50, 0.5);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            height: 70px;
        }

        #mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(3, 10, 5, 0.98);
            z-index: 99;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 32px;
            backdrop-filter: blur(24px);
        }
        #mobile-menu.open { display: flex; }
        #mobile-menu a {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(32px, 8vw, 56px);
            font-weight: 700;
            color: rgba(238, 245, 232, 0.85);
            text-decoration: none;
            letter-spacing: -0.01em;
            transition: all 0.2s;
            position: relative;
        }
        #mobile-menu a:hover { 
            color: #66bb6a;
            transform: translateX(8px);
        }
        #mobile-menu a::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #2e7d32, #66bb6a);
            transition: width 0.3s;
        }
        #mobile-menu a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            padding: 10px;
            z-index: 101;
            background: rgba(46, 125, 50, 0.1);
            width: 52px;
            height: 52px;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            border: 1px solid rgba(46, 125, 50, 0.3);
        }
        .hamburger:hover {
            background: rgba(46, 125, 50, 0.2);
            border-color: rgba(46, 125, 50, 0.6);
        }
        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: #eef5e8;
            border-radius: 0px;
            transition: all 0.3s;
        }
        .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(7px, 7px); width: 28px; }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: translateX(-10px); }
        .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(7px, -7px); width: 28px; }

        @media (max-width: 768px) {
            .hamburger { display: flex; }
            .desktop-nav { display: none; }
            .nav-get-in-touch { display: none; }
            #navbar {
                top: 16px;
                width: calc(100% - 32px);
                padding: 0 20px;
                height: 70px;
            }
            #navbar.scrolled {
                height: 64px;
            }
            .pill-btn {
                padding: 10px 24px;
                font-size: 12px;
            }
        }

        .nav-link {
            position: relative;
            font-size: 14px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(238, 245, 232, 0.8);
            transition: color 0.3s;
            font-weight: 500;
            text-decoration: none;
            padding: 10px 0;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #2e7d32, #66bb6a);
            transition: width 0.3s ease;
        }
        .nav-link:hover { color: #eef5e8; }
        .nav-link:hover::after { width: 100%; }

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

        /* Demo content styling */
        .demo-content {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 120px 20px 60px;
        }
        .demo-content h1 {
            font-size: clamp(48px, 10vw, 100px);
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            background: linear-gradient(135deg, #2e7d32, #66bb6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.02em;
        }
        .demo-content p {
            color: #9ca3af;
            margin-top: 1rem;
            max-width: 500px;
            line-height: 1.6;
        }
        .active-page {
            color: #66bb6a !important;
        }
        .active-page::after {
            width: 100% !important;
        }
        
        /* Logo hover effect */
        .logo-wrapper {
            transition: all 0.3s ease;
        }
        .logo-wrapper:hover .dark-green-dot {
            transform: scale(1.5);
            box-shadow: 0 0 12px rgba(46, 125, 50, 0.8);
        }
        
        /* Enhanced logo text */
        .logo-text {
            font-size: 18px;
            letter-spacing: 0.12em;
        }
        
        .logo-est {
            font-size: 9px;
            letter-spacing: 0.1em;
        }
        
        /* Sharp edges - no border radius */
        #navbar, .pill-btn, .hamburger, .hamburger span {
            border-radius: 0px;
        }
        
        /* Desktop nav link spacing */
        @media (min-width: 1024px) {
            .desktop-nav {
                gap: 48px;
            }
        }
    </style>
</head>
<body>

    <!-- Custom Cursor -->
    <div id="cursor"></div>
    <div id="cursor-ring"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu">
        <a href="index.html" class="mobile-nav-link" data-page="home">Home</a>
        <a href="services.html" class="mobile-nav-link" data-page="services">Services</a>
        <a href="careers.html" class="mobile-nav-link" data-page="careers">Careers</a>
        <a href="contact.html" class="mobile-nav-link" data-page="contact">Contact</a>
        <a href="contact.html" class="pill-btn text-white mt-6">Get in touch <span>↗</span></a>
    </div>

    <!-- Navigation Header - Enhanced Size -->
    <nav id="navbar" class="flex items-center justify-between">
        <!-- Logo Section - Enhanced -->
        <a href="index.html" class="logo-wrapper flex items-center gap-4 group cursor-pointer">
            <span class="dark-green-dot"></span>
            <div class="flex flex-col">
                <span class="mono logo-text tracking-widest uppercase text-white leading-tight font-semibold">Outwerk<span class="gradient-dark-green">.</span></span>
                <span class="logo-est text-green-600/60 tracking-wider hidden sm:block">est. 2019</span>
            </div>
        </a>

        <!-- Desktop Navigation Links - Enhanced Spacing -->
        <div class="desktop-nav hidden md:flex items-center gap-10 lg:gap-12">
            <a href="index.html" class="nav-link" data-page="home">Home</a>
            <a href="services.html" class="nav-link" data-page="services">Services</a>
            <a href="careers.html" class="nav-link" data-page="careers">Careers</a>
            <a href="contact.html" class="nav-link" data-page="contact">Contact</a>
        </div>

        <!-- CTA Button + Hamburger - Enhanced -->
        <div class="flex items-center gap-4">
            <a href="contact.html" class="nav-get-in-touch pill-btn text-white hidden md:inline-flex">
                Get in touch <span>↗</span>
            </a>
            <div class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <script>
        // ========== CUSTOM CURSOR ==========
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
            
            document.querySelectorAll('a, button, .hamburger').forEach(el => {
                el.addEventListener('mouseenter', () => {
                    ring.style.width = '60px';
                    ring.style.height = '60px';
                    ring.style.borderColor = 'rgba(46,125,50,0.8)';
                });
                el.addEventListener('mouseleave', () => {
                    ring.style.width = '40px';
                    ring.style.height = '40px';
                    ring.style.borderColor = 'rgba(46,125,50,0.6)';
                });
            });
        }

        // ========== MOBILE MENU ==========
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

        // ========== NAVBAR SCROLL HIDE / SHOW ==========
        const navbar = document.getElementById('navbar');
        let lastScrollTop = 0;
        let scrollTimeout;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Add scrolled class for styling
            if (scrollTop > 60) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Hide navbar on scroll down, show on scroll up
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down - hide navbar
                navbar.classList.add('hide');
            } else if (scrollTop < lastScrollTop) {
                // Scrolling up - show navbar
                navbar.classList.remove('hide');
            }
            
            // Also show navbar if at the top
            if (scrollTop === 0) {
                navbar.classList.remove('hide');
            }
            
            lastScrollTop = scrollTop;
            
            // Clear previous timeout
            if (scrollTimeout) clearTimeout(scrollTimeout);
            
            // Optional: Show navbar after scrolling stops
            scrollTimeout = setTimeout(() => {
                if (scrollTop > 100) {
                    navbar.classList.remove('hide');
                    setTimeout(() => {
                        if (window.pageYOffset === scrollTop) {
                            navbar.classList.add('hide');
                        }
                    }, 2000);
                }
            }, 3000);
        });

        // ========== ACTIVE PAGE HIGHLIGHTING ==========
        function setActivePage(pageId) {
            document.querySelectorAll('.desktop-nav .nav-link').forEach(link => {
                link.classList.remove('active-page');
            });
            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.classList.remove('active-page');
            });
            
            const desktopLink = document.querySelector(`.desktop-nav .nav-link[data-page="${pageId}"]`);
            if (desktopLink) desktopLink.classList.add('active-page');
            
            const mobileLink = document.querySelector(`.mobile-nav-link[data-page="${pageId}"]`);
            if (mobileLink) mobileLink.classList.add('active-page');
        }
        
        function detectCurrentPage() {
            const path = window.location.pathname;
            const page = path.split('/').pop().split('.')[0] || 'index';
            
            if (page === 'index' || page === '') {
                setActivePage('home');
            } else if (page === 'services') {
                setActivePage('services');
            } else if (page === 'careers') {
                setActivePage('careers');
            } else if (page === 'contact') {
                setActivePage('contact');
            } else {
                setActivePage('home');
            }
        }
        
        const demoHome = document.getElementById('demo-home');
        const demoServices = document.getElementById('demo-services');
        const demoCareers = document.getElementById('demo-careers');
        const demoContact = document.getElementById('demo-contact');
        const demoContent = document.getElementById('page-content');
        
        if (demoHome) {
            demoHome.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('home');
                demoContent.innerHTML = `<h1>Home Page</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Welcome to Outwerk — Premium BPO & Digital Services</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
        }
        
        if (demoServices) {
            demoServices.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('services');
                demoContent.innerHTML = `<h1>Our Services</h1><p class="text-gray-500 max-w-md mx-auto mt-4">BPO, Call Center, Web Development, Digital Marketing & More</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
        }
        
        if (demoCareers) {
            demoCareers.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('careers');
                demoContent.innerHTML = `<h1>Careers at Outwerk</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Join our team — Where talent thrives</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
        }
        
        if (demoContact) {
            demoContact.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('contact');
                demoContent.innerHTML = `<h1>Contact Us</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Get in touch — Let's start a conversation</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
        }
        
        function reattachDemoListeners() {
            document.getElementById('demo-home')?.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('home');
                document.getElementById('page-content').innerHTML = `<h1>Home Page</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Welcome to Outwerk — Premium BPO & Digital Services</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
            document.getElementById('demo-services')?.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('services');
                document.getElementById('page-content').innerHTML = `<h1>Our Services</h1><p class="text-gray-500 max-w-md mx-auto mt-4">BPO, Call Center, Web Development, Digital Marketing & More</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
            document.getElementById('demo-careers')?.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('careers');
                document.getElementById('page-content').innerHTML = `<h1>Careers at Outwerk</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Join our team — Where talent thrives</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
            document.getElementById('demo-contact')?.addEventListener('click', (e) => {
                e.preventDefault();
                setActivePage('contact');
                document.getElementById('page-content').innerHTML = `<h1>Contact Us</h1><p class="text-gray-500 max-w-md mx-auto mt-4">Get in touch — Let's start a conversation</p><div class="flex gap-4 mt-8 flex-wrap justify-center"><a href="#" class="pill-btn text-white" id="demo-home">Home</a><a href="#" class="pill-btn text-white" id="demo-services">Services</a><a href="#" class="pill-btn text-white" id="demo-careers">Careers</a><a href="#" class="pill-btn text-white" id="demo-contact">Contact</a></div><p class="text-xs text-gray-600 mt-8">Click any button to see active page state in header</p>`;
                reattachDemoListeners();
            });
        }
        
        detectCurrentPage();
        
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