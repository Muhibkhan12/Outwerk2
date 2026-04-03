<?php
/**
 * header.php - Outwerk Solution Navigation Header
 * 
 * This header is designed to be included in any page without causing conflicts.
 * It uses defensive coding to prevent duplicate elements and event listeners.
 * All styles are scoped to the header components only.
 */

// Prevent direct access
if (!defined('ABSPATH') && !defined('OUTWERK_LOADED')) {
    // Allow direct inclusion - this is a header file
}
?>

<!-- Outwerk Header Styles - Scoped to prevent conflicts -->
<style>
    /* Header-specific styles - all prefixed with .outwerk-header or high specificity */
    .outwerk-header * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Custom cursor for non-touch devices - only if not already defined */
    @media (hover: hover) and (pointer: fine) {
        body.outwerk-cursor-enabled { cursor: none; }
        .outwerk-cursor, .outwerk-cursor-ring { display: block; }
    }

    .outwerk-cursor {
        width: 6px;
        height: 6px;
        background: #4ade80;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        display: none;
    }
    
    .outwerk-cursor-ring {
        width: 32px;
        height: 32px;
        border: 1px solid rgba(74, 222, 128, 0.5);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9998;
        transition: width 0.3s, height 0.3s;
        display: none;
    }

    /* Modern Navbar - Clean Design */
    .outwerk-navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        transition: all 0.3s ease;
        background: rgba(3, 10, 5, 0.9);
        backdrop-filter: blur(16px);
        border-bottom: 1px solid rgba(74, 222, 128, 0.15);
    }
    
    .outwerk-navbar.scrolled {
        background: rgba(3, 10, 5, 0.96);
        border-bottom-color: rgba(74, 222, 128, 0.25);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
    }
    
    .outwerk-navbar.hide {
        transform: translateY(-100%);
    }

    /* Modern Container */
    .outwerk-nav-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 32px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    @media (max-width: 768px) {
        .outwerk-nav-container {
            padding: 0 20px;
            height: 70px;
        }
    }

    /* Logo Styles - Increased Height */
    .outwerk-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: opacity 0.2s;
        flex-shrink: 0;
    }
    
    .outwerk-logo:hover {
        opacity: 0.85;
    }
    
    /* Logo Image - Larger Size */
    .outwerk-logo-img {
        height: 48px;
        width: auto;
        display: block;
        transition: all 0.3s ease;
        object-fit: contain;
    }
    
    @media (min-width: 768px) {
        .outwerk-logo-img {
            height: 55px;
        }
    }
    
    @media (min-width: 1024px) {
        .outwerk-logo-img {
            height: 60px;
        }
    }
    
    @media (max-width: 480px) {
        .outwerk-logo-img {
            height: 42px;
        }
    }

    /* Desktop Navigation Links - Clean Design */
    .outwerk-desktop-nav {
        display: flex;
        align-items: center;
        gap: 48px;
    }
    
    .outwerk-nav-link {
        position: relative;
        font-size: 15px;
        font-weight: 500;
        color: rgba(238, 245, 232, 0.85);
        text-decoration: none;
        transition: color 0.25s ease;
        padding: 8px 0;
        letter-spacing: 0.01em;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
    .outwerk-nav-link:hover {
        color: #4ade80;
    }
    
    .outwerk-nav-link.active-page {
        color: #4ade80;
    }
    
    .outwerk-nav-link.active-page::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: #4ade80;
        transform: scaleX(1);
        border-radius: 2px;
    }
    
    .outwerk-nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: #4ade80;
        transform: scaleX(0);
        transition: transform 0.25s ease;
        border-radius: 2px;
    }
    
    .outwerk-nav-link:hover::after {
        transform: scaleX(1);
    }

    /* CTA Button - Clean Design */
    .outwerk-nav-btn {
        padding: 10px 28px;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: transparent;
        border: 1.5px solid rgba(74, 222, 128, 0.4);
        color: #eef5e8;
        text-decoration: none;
        border-radius: 100px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        letter-spacing: 0.02em;
    }
    
    .outwerk-nav-btn:hover {
        background: #4ade80;
        border-color: #4ade80;
        color: #030a05;
        transform: translateY(-2px);
    }

    /* Hamburger Menu - Clean Design */
    .outwerk-hamburger {
        display: none;
        flex-direction: column;
        gap: 6px;
        cursor: pointer;
        padding: 8px;
        background: transparent;
        border: none;
    }
    
    .outwerk-hamburger span {
        display: block;
        width: 25px;
        height: 2px;
        background: #eef5e8;
        transition: all 0.3s ease;
        border-radius: 2px;
    }
    
    .outwerk-hamburger.open span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }
    
    .outwerk-hamburger.open span:nth-child(2) {
        opacity: 0;
        transform: translateX(-8px);
    }
    
    .outwerk-hamburger.open span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    @media (max-width: 768px) {
        .outwerk-desktop-nav {
            display: none;
        }
        .outwerk-desktop-cta {
            display: none;
        }
        .outwerk-hamburger {
            display: flex;
        }
    }

    /* Mobile Menu - Clean Design */
    .outwerk-mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(3, 10, 5, 0.98);
        backdrop-filter: blur(24px);
        z-index: 999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 40px;
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        visibility: hidden;
    }
    
    .outwerk-mobile-menu.open {
        transform: translateX(0);
        visibility: visible;
    }
    
    .outwerk-mobile-menu a {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 32px;
        font-weight: 500;
        color: rgba(238, 245, 232, 0.9);
        text-decoration: none;
        letter-spacing: -0.01em;
        transition: all 0.2s;
        padding: 12px 0;
    }
    
    .outwerk-mobile-menu a:hover {
        color: #4ade80;
        transform: translateX(8px);
    }
    
    .outwerk-mobile-menu a.active-page {
        color: #4ade80;
    }
    
    .outwerk-mobile-cta {
        margin-top: 20px;
        font-size: 18px !important;
        padding: 12px 32px !important;
    }
    
    @media (max-width: 480px) {
        .outwerk-mobile-menu a {
            font-size: 28px;
        }
    }
    
    body.outwerk-menu-open {
        overflow: hidden;
    }
</style>

<!-- Header HTML - All elements have unique class names to prevent conflicts -->
<div class="outwerk-header">
    <!-- Custom Cursor Elements -->
    <div class="outwerk-cursor" id="outwerkCursor"></div>
    <div class="outwerk-cursor-ring" id="outwerkCursorRing"></div>

    <!-- Mobile Menu -->
    <div class="outwerk-mobile-menu" id="outwerkMobileMenu">
        <a href="index.php" class="outwerk-mobile-nav-link" data-page="home">Home</a>
        <a href="services.php" class="outwerk-mobile-nav-link" data-page="services">Services</a>
        <a href="careers.php" class="outwerk-mobile-nav-link" data-page="careers">Careers</a>
        <a href="contact.php" class="outwerk-mobile-nav-link" data-page="contact">Contact</a>
        <a href="contact.php" class="outwerk-nav-btn outwerk-mobile-cta" style="margin-top: 20px;">
            Get in touch →
        </a>
    </div>

    <!-- Navigation Header -->
    <nav class="outwerk-navbar" id="outwerkNavbar">
        <div class="outwerk-nav-container">
            <!-- Logo - Image Logo with Increased Height -->
            <a href="index.php" class="outwerk-logo">
                <img src="images/logo-main.webp" alt="Outwerk Solution" class="outwerk-logo-img">
            </a>

            <!-- Desktop Navigation Links -->
            <div class="outwerk-desktop-nav">
                <a href="index.php" class="outwerk-nav-link" data-page="home">Home</a>
                <a href="services.php" class="outwerk-nav-link" data-page="services">Services</a>
                <a href="careers.php" class="outwerk-nav-link" data-page="careers">Careers</a>
                <a href="contact.php" class="outwerk-nav-link" data-page="contact">Contact</a>
            </div>

            <!-- CTA Button + Hamburger -->
            <div style="display: flex; align-items: center; gap: 16px;">
                <a href="contact.php" class="outwerk-nav-btn outwerk-desktop-cta">
                    Get in touch →
                </a>
                <button class="outwerk-hamburger" id="outwerkHamburger" aria-label="Menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </nav>
</div>

<script>
/**
 * Outwerk Header Initialization
 * All functions and variables are namespaced to prevent conflicts with page scripts.
 * Uses defensive checks to ensure no duplicate event listeners are added.
 */
(function() {
    'use strict';
    
    // Flag to prevent double initialization
    if (window.outwerkHeaderInitialized) return;
    window.outwerkHeaderInitialized = true;
    
    // ========== CUSTOM CURSOR ==========
    const cursor = document.getElementById('outwerkCursor');
    const ring = document.getElementById('outwerkCursorRing');
    const isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    
    if (isPointer && cursor && ring) {
        cursor.style.display = 'block';
        ring.style.display = 'block';
        document.body.classList.add('outwerk-cursor-enabled');
        
        let mx = -100, my = -100, rx = -100, ry = -100;
        let animationId = null;
        
        const mouseMoveHandler = function(e) {
            mx = e.clientX;
            my = e.clientY;
            if (cursor) {
                cursor.style.left = (mx - 3) + 'px';
                cursor.style.top = (my - 3) + 'px';
            }
        };
        
        document.addEventListener('mousemove', mouseMoveHandler);
        
        function animateRing() {
            rx += (mx - rx - 16) * 0.12;
            ry += (my - ry - 16) * 0.12;
            if (ring) {
                ring.style.left = rx + 'px';
                ring.style.top = ry + 'px';
            }
            animationId = requestAnimationFrame(animateRing);
        }
        animateRing();
        
        window.addEventListener('beforeunload', function() {
            if (animationId) cancelAnimationFrame(animationId);
        });
        
        const interactiveElements = document.querySelectorAll('a, button, .outwerk-hamburger, .outwerk-nav-btn, .outwerk-nav-link');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                if (ring) {
                    ring.style.width = '48px';
                    ring.style.height = '48px';
                    ring.style.borderColor = 'rgba(74, 222, 128, 0.7)';
                }
            });
            el.addEventListener('mouseleave', () => {
                if (ring) {
                    ring.style.width = '32px';
                    ring.style.height = '32px';
                    ring.style.borderColor = 'rgba(74, 222, 128, 0.5)';
                }
            });
        });
    }

    // ========== MOBILE MENU ==========
    const hamburger = document.getElementById('outwerkHamburger');
    const mobileMenu = document.getElementById('outwerkMobileMenu');
    const body = document.body;
    
    function toggleMobileMenu() {
        if (!hamburger || !mobileMenu) return;
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        body.classList.toggle('outwerk-menu-open');
    }
    
    if (hamburger && mobileMenu) {
        const newHamburger = hamburger.cloneNode(true);
        hamburger.parentNode.replaceChild(newHamburger, hamburger);
        const freshHamburger = document.getElementById('outwerkHamburger');
        
        if (freshHamburger) {
            freshHamburger.addEventListener('click', toggleMobileMenu);
        }
        
        const mobileLinks = document.querySelectorAll('.outwerk-mobile-nav-link, .outwerk-mobile-cta');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (mobileMenu.classList.contains('open')) {
                    toggleMobileMenu();
                }
            });
        });
    }

    // ========== NAVBAR SCROLL HIDE / SHOW ==========
    const navbar = document.getElementById('outwerkNavbar');
    let lastScrollTop = 0;
    let scrollTimer = null;
    
    if (navbar) {
        const scrollHandler = function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            if (scrollTop > lastScrollTop && scrollTop > 80) {
                navbar.classList.add('hide');
            } else if (scrollTop < lastScrollTop || scrollTop < 50) {
                navbar.classList.remove('hide');
            }
            
            lastScrollTop = scrollTop;
            
            if (scrollTimer) clearTimeout(scrollTimer);
            scrollTimer = setTimeout(function() {
                if (window.pageYOffset > 50 && mobileMenu && !mobileMenu.classList.contains('open')) {
                    navbar.classList.remove('hide');
                }
            }, 2000);
        };
        
        window.addEventListener('scroll', scrollHandler);
    }

    // ========== ACTIVE PAGE HIGHLIGHTING ==========
    function setActivePage(pageId) {
        document.querySelectorAll('.outwerk-desktop-nav .outwerk-nav-link').forEach(link => {
            link.classList.remove('active-page');
        });
        document.querySelectorAll('.outwerk-mobile-nav-link').forEach(link => {
            link.classList.remove('active-page');
        });
        
        const desktopLink = document.querySelector('.outwerk-desktop-nav .outwerk-nav-link[data-page="' + pageId + '"]');
        if (desktopLink) desktopLink.classList.add('active-page');
        
        const mobileLink = document.querySelector('.outwerk-mobile-nav-link[data-page="' + pageId + '"]');
        if (mobileLink) mobileLink.classList.add('active-page');
    }
    
    function detectCurrentPage() {
        const path = window.location.pathname;
        let page = path.split('/').pop().split('.')[0] || 'index';
        
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
    
    detectCurrentPage();

    // ========== SMOOTH SCROLL FOR ANCHOR LINKS ==========
    const anchorLinks = document.querySelectorAll('.outwerk-header a[href^="#"]');
    anchorLinks.forEach(function(a) {
        a.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    
    // ========== CLICK OUTSIDE MOBILE MENU TO CLOSE ==========
    if (mobileMenu && hamburger) {
        const outsideClickHandler = function(e) {
            if (mobileMenu.classList.contains('open')) {
                const isClickInsideMenu = mobileMenu.contains(e.target);
                const isClickOnHamburger = hamburger.contains(e.target);
                if (!isClickInsideMenu && !isClickOnHamburger) {
                    toggleMobileMenu();
                }
            }
        };
        document.addEventListener('click', outsideClickHandler);
    }
    
    // ========== RESET HAMBURGER ON RESIZE ==========
    let resizeTimer = null;
    const resizeHandler = function() {
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 768 && mobileMenu && mobileMenu.classList.contains('open')) {
                toggleMobileMenu();
            }
        }, 250);
    };
    window.addEventListener('resize', resizeHandler);
    
})();
</script>

<?php
// Add a body class to help with styling coordination
if (!isset($GLOBALS['outwerk_header_loaded'])) {
    $GLOBALS['outwerk_header_loaded'] = true;
    ob_start();
}
?>