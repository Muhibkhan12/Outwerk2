<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NexusBPO — Business Process Outsourcing Agency</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --black: #0A0A0F;
    --charcoal: #121217;
    --white: #FFFFFF;
    --accent: #2A7DE1;
    --accent-glow: rgba(42,125,225,0.15);
    --gray: #2A2A30;
    --muted: #6C6C72;
    --light: #F8F9FC;
    --border-light: rgba(255,255,255,0.08);
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'Inter', sans-serif;
    background: var(--white);
    color: var(--gray);
    overflow-x: hidden;
    cursor: none;
  }

  /* Custom Cursor */
  .cursor {
    width: 8px; height: 8px;
    background: var(--accent);
    border-radius: 50%;
    position: fixed;
    top: 0; left: 0;
    pointer-events: none;
    z-index: 9999;
    transition: transform 0.1s ease;
    mix-blend-mode: difference;
  }
  .cursor-follower {
    width: 32px; height: 32px;
    border: 1.5px solid rgba(42,125,225,0.4);
    border-radius: 50%;
    position: fixed;
    top: 0; left: 0;
    pointer-events: none;
    z-index: 9998;
    transition: transform 0.35s ease, width 0.25s ease, height 0.25s ease;
  }
  .cursor-follower.hovering {
    width: 54px; height: 54px;
    border-color: var(--accent);
    background: rgba(42,125,225,0.05);
  }

  /* Typography */
  h1, h2, h3, h4, .heading-font { font-family: 'Space Grotesk', sans-serif; font-weight: 600; letter-spacing: -0.02em; }

  .display-headline {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(3rem, 7vw, 6rem);
    line-height: 1;
    letter-spacing: -0.03em;
    color: var(--white);
  }

  .section-headline {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(2rem, 4vw, 3.2rem);
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--charcoal);
  }

  .eyebrow {
    font-family: 'Inter', sans-serif;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--accent);
  }

  /* Nav */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 20px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: background 0.4s ease, padding 0.3s ease;
  }
  nav.scrolled {
    background: rgba(10,10,15,0.96);
    backdrop-filter: blur(12px);
    padding: 14px 48px;
    border-bottom: 1px solid var(--border-light);
  }
  .nav-logo {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 1.3rem;
    color: var(--white);
    letter-spacing: -0.02em;
    text-decoration: none;
  }
  .nav-logo span { color: var(--accent); }
  .nav-links { display: flex; gap: 36px; align-items: center; }
  .nav-links a {
    font-size: 0.85rem;
    font-weight: 500;
    color: rgba(255,255,255,0.65);
    text-decoration: none;
    transition: color 0.2s;
    font-family: 'Inter', sans-serif;
  }
  .nav-links a:hover { color: var(--white); }
  .nav-cta {
    background: var(--accent);
    color: var(--white) !important;
    padding: 10px 24px;
    border-radius: 40px;
    font-weight: 600 !important;
    font-size: 0.8rem !important;
    text-transform: none;
    transition: background 0.2s, transform 0.2s !important;
  }
  .nav-cta:hover { background: #1a68c9; transform: translateY(-2px); }

  /* Hero */
  #hero {
    background: var(--charcoal);
    min-height: 100vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    padding: 120px 48px 80px;
    gap: 60px;
    position: relative;
    overflow: hidden;
  }
  #hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 80% 30%, rgba(42,125,225,0.08) 0%, transparent 60%);
    pointer-events: none;
  }
  .hero-left { position: relative; z-index: 2; }
  .hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(42,125,225,0.12);
    border: 1px solid rgba(42,125,225,0.25);
    padding: 6px 16px;
    border-radius: 40px;
    margin-bottom: 28px;
  }
  .hero-tag-dot { width: 6px; height: 6px; background: var(--accent); border-radius: 50%; animation: pulse 2s infinite; }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.6;transform:scale(1.2)} }

  .hero-subtitle {
    margin-top: 28px;
    color: rgba(255,255,255,0.6);
    font-size: 1rem;
    line-height: 1.6;
    max-width: 420px;
  }
  .hero-actions { display: flex; gap: 20px; margin-top: 40px; align-items: center; }
  .btn-primary {
    background: var(--accent);
    color: var(--white);
    padding: 14px 32px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 0.85rem;
    letter-spacing: 0.02em;
    border: none;
    border-radius: 40px;
    cursor: none;
    transition: background 0.2s, transform 0.2s;
    text-decoration: none;
    display: inline-block;
  }
  .btn-primary:hover { background: #1a68c9; transform: translateY(-2px); }
  .btn-ghost {
    color: rgba(255,255,255,0.7);
    font-size: 0.85rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    transition: color 0.2s;
  }
  .btn-ghost:hover { color: var(--white); }
  .btn-ghost-arrow { font-size: 1rem; transition: transform 0.2s; }
  .btn-ghost:hover .btn-ghost-arrow { transform: translateX(4px); }

  /* Hero Mosaic (Data/Global theme) */
  .hero-mosaic {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 200px 160px 180px;
    gap: 8px;
    position: relative;
    z-index: 2;
  }
  .mosaic-item {
    overflow: hidden;
    border-radius: 16px;
    position: relative;
    background: rgba(255,255,255,0.03);
    backdrop-filter: blur(2px);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    color: rgba(255,255,255,0.7);
    font-size: 0.8rem;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.05);
  }
  .mosaic-item span { z-index: 2; background: rgba(0,0,0,0.5); padding: 6px 12px; border-radius: 40px; font-size: 0.75rem; backdrop-filter: blur(4px); }
  .mosaic-item:nth-child(1) { grid-column: 1; grid-row: 1 / 3; background: linear-gradient(145deg, #0a2a4a, #0a1a2a); }
  .mosaic-item:nth-child(2) { grid-column: 2; grid-row: 1; background: linear-gradient(145deg, #1a3a5a, #0a2a4a); }
  .mosaic-item:nth-child(3) { grid-column: 3; grid-row: 1 / 2; background: linear-gradient(145deg, #0a2a3a, #0a1a3a); }
  .mosaic-item:nth-child(4) { grid-column: 2 / 4; grid-row: 2; background: linear-gradient(145deg, #2a4a6a, #1a3a5a); }
  .mosaic-item:nth-child(5) { grid-column: 1 / 3; grid-row: 3; background: linear-gradient(145deg, #1a3a4a, #0a2a4a); }
  .mosaic-item:nth-child(6) { grid-column: 3; grid-row: 2 / 4; background: linear-gradient(145deg, #0a2a5a, #0a1a3a); }

  /* Marquee */
  .marquee-wrap {
    background: var(--accent);
    padding: 14px 0;
    overflow: hidden;
    white-space: nowrap;
  }
  .marquee-track {
    display: inline-flex;
    animation: marquee 25s linear infinite;
  }
  .marquee-track span {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 0.8rem;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    color: var(--white);
    padding: 0 28px;
  }
  .marquee-track span.dot { padding: 0 12px; color: rgba(255,255,255,0.6); font-size: 0.9rem; }
  @keyframes marquee { 0%{transform:translateX(0)} 100%{transform:translateX(-50%)} }

  /* Sections */
  section { padding: 100px 48px; }

  .section-divider {
    height: 1px;
    background: rgba(0,0,0,0.08);
    margin: 0 48px;
  }

  /* Services (BPO Services) */
  #services {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
  }
  .services-intro {
    font-size: 1rem;
    color: #5a5a62;
    line-height: 1.7;
    margin-top: 20px;
    max-width: 400px;
  }
  .services-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 30px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    color: var(--accent);
    text-decoration: none;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 3px;
    transition: gap 0.2s;
  }
  .services-link:hover { gap: 12px; }

  .services-list { margin-top: 10px; }
  .service-item {
    padding: 24px 0;
    border-bottom: 1px solid rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    cursor: none;
    transition: padding-left 0.25s ease;
  }
  .service-item:hover { padding-left: 10px; }
  .service-dot {
    width: 8px; height: 8px;
    background: var(--accent);
    border-radius: 50%;
    flex-shrink: 0;
  }
  .service-name {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.4rem;
    font-weight: 600;
    color: #bbb;
    transition: color 0.25s;
  }
  .service-item:hover .service-name { color: var(--charcoal); }
  .service-item.active .service-name { color: var(--charcoal); }
  .service-arrow { margin-left: auto; color: #ccc; font-size: 1.2rem; opacity: 0; transition: opacity 0.2s, transform 0.2s; }
  .service-item:hover .service-arrow { opacity: 1; transform: translateX(4px); }

  /* Stats */
  #stats {
    background: var(--light);
    padding: 80px 48px;
  }
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 4px;
  }
  .stat-card {
    background: var(--white);
    padding: 40px 36px;
    position: relative;
    transition: transform 0.3s ease;
    border-radius: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.02);
  }
  .stat-card:hover { transform: translateY(-5px); }
  .stat-card.featured { background: var(--accent); }
  .stat-number {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(2.5rem, 4vw, 3.8rem);
    letter-spacing: -0.03em;
    color: var(--charcoal);
    line-height: 1;
  }
  .stat-card.featured .stat-number { color: var(--white); }
  .stat-label {
    font-size: 0.75rem;
    color: var(--muted);
    margin-top: 8px;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    font-weight: 600;
  }
  .stat-card.featured .stat-label { color: rgba(255,255,255,0.8); }
  .stat-badge {
    display: flex;
    gap: 8px;
    margin-top: 18px;
  }
  .badge {
    background: rgba(0,0,0,0.06);
    border-radius: 40px;
    padding: 4px 12px;
    font-size: 0.7rem;
    font-weight: 600;
  }

  /* Projects -> Case Studies */
  #projects { background: var(--white); }
  .projects-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 50px;
  }
  .view-all {
    font-size: 0.85rem;
    font-weight: 600;
    font-family: 'Space Grotesk', sans-serif;
    letter-spacing: 0.02em;
    color: var(--accent);
    text-decoration: none;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 2px;
  }

  .masonry-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }
  .masonry-col { display: flex; flex-direction: column; gap: 24px; }

  .project-card {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    cursor: none;
    background: var(--light);
    transition: transform 0.2s;
  }
  .project-img {
    width: 100%;
    display: block;
    transition: transform 0.5s ease;
  }
  .project-card:hover .project-img { transform: scale(1.02); }
  .project-info {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    padding: 24px;
    background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 100%);
    border-radius: 0 0 20px 20px;
  }
  .project-name {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    color: var(--white);
  }
  .project-cat {
    font-size: 0.7rem;
    color: var(--accent);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-top: 4px;
    font-weight: 500;
  }

  .ph-1 { height: 360px; background: linear-gradient(135deg, #0f2b3d, #1a3a4a); }
  .ph-2 { height: 280px; background: linear-gradient(135deg, #1a3a5a, #0f2b4a); }
  .ph-3 { height: 320px; background: linear-gradient(135deg, #0a2a4a, #1a3a6a); }
  .ph-4 { height: 400px; background: linear-gradient(135deg, #2a4a6e, #1a3a5e); }
  .ph-5 { height: 340px; background: linear-gradient(135deg, #1a4a6a, #0a3a5a); }
  .ph-6 { height: 300px; background: linear-gradient(135deg, #0a2a6a, #1a1a4a); }

  .play-btn {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%) scale(0.8);
    width: 48px; height: 48px;
    background: rgba(42,125,225,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s, transform 0.3s;
  }
  .play-btn::after {
    content: '▶';
    color: white;
    font-size: 14px;
    margin-left: 2px;
  }
  .project-card:hover .play-btn { opacity: 1; transform: translate(-50%, -50%) scale(1); }

  /* Process -> Operational Excellence */
  #process {
    background: var(--charcoal);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }
  .process-left .section-headline { color: var(--white); }
  .process-desc {
    color: rgba(255,255,255,0.5);
    line-height: 1.7;
    margin-top: 18px;
    font-size: 0.95rem;
  }
  .process-steps { margin-top: 30px; }
  .process-step {
    display: grid;
    grid-template-columns: 50px 1fr;
    gap: 20px;
    padding: 22px 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    cursor: none;
  }
  .process-step:hover { padding-left: 6px; }
  .step-num {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--accent);
    letter-spacing: 0.05em;
  }
  .step-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    color: var(--white);
    margin-bottom: 6px;
  }
  .step-desc { font-size: 0.85rem; color: rgba(255,255,255,0.45); line-height: 1.5; }

  .process-img-main {
    width: 100%;
    height: 480px;
    border-radius: 24px;
    background: linear-gradient(145deg, #1a2a3a, #0a1a2a);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 30px;
  }
  .process-img-card {
    background: var(--white);
    padding: 20px 28px;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  }
  .process-card-label { font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--accent); font-weight: 600; }
  .process-card-val {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 2rem;
    color: var(--charcoal);
  }
  .process-card-sub { font-size: 0.7rem; color: var(--muted); margin-top: 4px; }

  /* Team */
  .team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
    margin-top: 50px;
  }
  .team-card { cursor: none; }
  .team-photo {
    width: 100%;
    aspect-ratio: 1/1;
    object-fit: cover;
    border-radius: 24px;
    background: var(--light);
    transition: transform 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    color: var(--accent);
  }
  .team-card:hover .team-photo { transform: scale(1.02); }
  .team-name {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    margin-top: 16px;
  }
  .team-role { font-size: 0.75rem; color: var(--muted); margin-top: 4px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 500; }

  /* Clients & Testimonials */
  #clients { background: var(--light); }
  .clients-inner {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 80px;
  }
  .quote-mark {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 5rem;
    color: var(--accent);
    line-height: 0.8;
    font-weight: 600;
    margin-bottom: 20px;
    display: block;
  }
  .testimonial-text {
    font-size: 1rem;
    line-height: 1.7;
    color: #444;
    font-weight: 400;
  }
  .client-logos-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-top: 30px;
  }
  .client-logo {
    background: var(--white);
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    transition: all 0.2s;
    font-weight: 600;
    font-family: 'Space Grotesk', sans-serif;
    color: #2c2c32;
  }
  .client-logo.featured-logo { background: var(--accent); color: white; }
  .client-logo-text { font-weight: 600; letter-spacing: -0.01em; }

  /* Blog -> Insights */
  .blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    margin-top: 50px;
  }
  .blog-thumb {
    width: 100%;
    height: 220px;
    border-radius: 20px;
    overflow: hidden;
    background: linear-gradient(135deg, #1a2a3a, #0a1a2a);
  }
  .blog-cat {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--accent);
    font-weight: 600;
    margin-top: 18px;
    display: block;
  }
  .blog-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    line-height: 1.4;
    transition: color 0.2s;
  }

  /* CTA Footer */
  #cta {
    background: var(--charcoal);
    padding: 100px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
  }
  .cta-headline {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    color: var(--white);
    letter-spacing: -0.03em;
    line-height: 1;
  }
  .cta-headline em { color: var(--accent); font-style: normal; }
  .cta-contact { font-size: 0.75rem; color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px; }
  .cta-phone {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1.3rem;
    color: var(--white);
    text-decoration: none;
    display: block;
    margin-bottom: 20px;
  }
  .cta-phone:hover { color: var(--accent); }

  /* Footer */
  footer {
    background: var(--black);
    padding: 40px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid var(--border-light);
  }
  .footer-logo { font-family: 'Space Grotesk', sans-serif; font-weight: 700; color: white; }
  .footer-logo span { color: var(--accent); }
  .footer-links a { font-size: 0.75rem; color: rgba(255,255,255,0.4); text-decoration: none; margin: 0 14px; }
  .footer-copy { font-size: 0.7rem; color: rgba(255,255,255,0.3); }

  /* Scroll animations */
  .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }
  .reveal-left { opacity: 0; transform: translateX(-30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal-left.visible { opacity: 1; transform: translateX(0); }
  .reveal-right { opacity: 0; transform: translateX(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal-right.visible { opacity: 1; transform: translateX(0); }
  .stagger > * { opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease, transform 0.5s ease; }
  .stagger.visible > * { opacity: 1; transform: none; }
  .stagger.visible > *:nth-child(1) { transition-delay: 0s; }
  .stagger.visible > *:nth-child(2) { transition-delay: 0.08s; }
  .stagger.visible > *:nth-child(3) { transition-delay: 0.16s; }
  .stagger.visible > *:nth-child(4) { transition-delay: 0.24s; }

  @media (max-width: 900px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    #hero { grid-template-columns: 1fr; padding: 100px 24px 60px; }
    section { padding: 70px 24px; }
    #services { grid-template-columns: 1fr; gap: 50px; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .team-grid { grid-template-columns: 1fr 1fr; }
    .clients-inner { grid-template-columns: 1fr; gap: 40px; }
    .blog-grid { grid-template-columns: 1fr; }
    #process { grid-template-columns: 1fr; }
    .masonry-grid { grid-template-columns: 1fr; }
    .hero-mosaic { grid-template-rows: auto; grid-template-columns: 1fr 1fr; }
    .mosaic-item { grid-column: auto !important; grid-row: auto !important; height: 120px; }
    #cta { flex-direction: column; gap: 30px; text-align: left; align-items: flex-start; }
    footer { flex-direction: column; gap: 16px; text-align: center; }
  }
</style>
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-follower" id="cursorFollower"></div>

<nav id="navbar">
  <a href="#" class="nav-logo">nexus<span>BPO</span></a>
  <div class="nav-links">
    <a href="#services">Solutions</a>
    <a href="#projects">Case Studies</a>
    <a href="#team">Leadership</a>
    <a href="#blog">Insights</a>
    <a href="#cta" class="nav-cta">Scale With Us</a>
  </div>
</nav>

<section id="hero">
  <div class="hero-left">
    <div class="hero-tag">
      <div class="hero-tag-dot"></div>
      <span class="eyebrow" style="color:rgba(255,255,255,0.7)">Global BPO Partner</span>
    </div>
    <h1 class="display-headline">Scale smarter<br>with <em style="color:var(--accent);font-style:normal">nexusBPO</em></h1>
    <p class="hero-subtitle">End-to-end business process outsourcing — from customer support to data analytics. We empower enterprises to reduce costs, increase agility, and drive growth.</p>
    <div class="hero-actions">
      <a href="#services" class="btn-primary">Explore Solutions</a>
      <a href="#process" class="btn-ghost">Our Process <span class="btn-ghost-arrow">→</span></a>
    </div>
  </div>
  <div class="hero-mosaic">
    <!-- Inbound Call Center -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=800&fit=crop" alt="Inbound Call Center">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">BPO SERVICES</span>
        <h4>Inbound call center</h4>
      </div>
    </div>
    
    <!-- Outbound Calls -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?w=600&h=400&fit=crop" alt="Outbound Calls">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">BPO SERVICES</span>
        <h4>Outbound calls</h4>
      </div>
    </div>
    
    <!-- Customer Support -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&h=400&fit=crop" alt="Customer Support">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">BPO SERVICES</span>
        <h4>Customer support</h4>
      </div>
    </div>
    
    <!-- Technical Helpdesk -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=500&fit=crop" alt="Technical Helpdesk">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">BPO SERVICES</span>
        <h4>Technical helpdesk</h4>
      </div>
    </div>
    
    <!-- Sales & Lead Generation -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&h=500&fit=crop" alt="Lead Generation">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">SALES & LEAD GENERATION</span>
        <h4>Lead generation</h4>
      </div>
    </div>
    
    <!-- Web Solutions -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&h=800&fit=crop" alt="Web Solutions">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">WEB SOLUTIONS</span>
        <h4>Web development</h4>
      </div>
    </div>
    
    <!-- Digital Marketing - SEO & SEM -->
    <div class="mosaic-item">
      <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=600&h=400&fit=crop" alt="SEO & SEM">
      <div class="mosaic-overlay"></div>
      <div class="mosaic-content">
        <span class="mosaic-badge">DIGITAL MARKETING</span>
        <h4>SEO & SEM</h4>
      </div>
    </div>
  </div>
</section>

<style>
  /* Hero Mosaic with Services */
  .hero-mosaic {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 200px 160px 180px;
    gap: 12px;
    position: relative;
    z-index: 2;
  }
  
  .mosaic-item {
    overflow: hidden;
    border-radius: 20px;
    position: relative;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }
  
  .mosaic-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }
  
  .mosaic-item:hover img {
    transform: scale(1.08);
  }
  
  .mosaic-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.1) 100%);
    transition: all 0.4s ease;
    pointer-events: none;
  }
  
  .mosaic-item:hover .mosaic-overlay {
    background: linear-gradient(to top, rgba(42,125,225,0.85) 0%, rgba(42,125,225,0.4) 100%);
  }
  
  .mosaic-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px 18px;
    z-index: 2;
    transform: translateY(0);
    transition: transform 0.3s ease;
  }
  
  .mosaic-item:hover .mosaic-content {
    transform: translateY(-6px);
  }
  
  .mosaic-badge {
    display: inline-block;
    font-size: 0.6rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--accent);
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(8px);
    padding: 4px 12px;
    border-radius: 30px;
    margin-bottom: 10px;
    font-family: 'Inter', sans-serif;
  }
  
  .mosaic-item:hover .mosaic-badge {
    background: rgba(255,255,255,0.2);
    color: white;
  }
  
  .mosaic-content h4 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    color: white;
    margin: 0;
    line-height: 1.3;
    text-shadow: 0 1px 2px rgba(0,0,0,0.2);
  }
  
  /* Grid Layout Positions */
  .mosaic-item:nth-child(1) { 
    grid-column: 1; 
    grid-row: 1 / 3; 
  }
  .mosaic-item:nth-child(2) { 
    grid-column: 2; 
    grid-row: 1; 
  }
  .mosaic-item:nth-child(3) { 
    grid-column: 3; 
    grid-row: 1 / 2; 
  }
  .mosaic-item:nth-child(4) { 
    grid-column: 2 / 4; 
    grid-row: 2; 
  }
  .mosaic-item:nth-child(5) { 
    grid-column: 1 / 3; 
    grid-row: 3; 
  }
  .mosaic-item:nth-child(6) { 
    grid-column: 3; 
    grid-row: 2 / 4; 
  }
  .mosaic-item:nth-child(7) { 
    display: none; 
  }
  
  @media (max-width: 900px) {
    .hero-mosaic {
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto;
      gap: 10px;
    }
    .mosaic-item {
      grid-column: auto !important;
      grid-row: auto !important;
      height: 170px;
      border-radius: 16px;
    }
    .mosaic-item:nth-child(7) {
      display: block;
    }
    .mosaic-content {
      padding: 16px;
    }
    .mosaic-content h4 {
      font-size: 0.9rem;
    }
  }
</style>

<div class="marquee-wrap">
  <div class="marquee-track"><span>Customer Support</span><span class="dot">◆</span><span>Data Entry</span><span class="dot">◆</span><span>IT Outsourcing</span><span class="dot">◆</span><span>Back Office</span><span class="dot">◆</span><span>Finance & Accounting</span><span class="dot">◆</span><span>HR Solutions</span><span class="dot">◆</span><span>Omnichannel CX</span><span class="dot">◆</span><span>Customer Support</span><span class="dot">◆</span><span>Data Entry</span><span class="dot">◆</span><span>IT Outsourcing</span></div>
</div>

<section id="about">
  <div class="about-container">
    <div class="about-grid">
      <!-- LEFT COLUMN - Image -->
      <div class="about-image reveal-left">
        <div class="about-image-wrapper">
          <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop" alt="Team at work">
          <div class="about-image-accent"></div>
        </div>
      </div>

      <!-- RIGHT COLUMN - Content -->
      <div class="about-content reveal-right">
        <div class="about-tag">
          <div class="about-tag-dot"></div>
          <span class="eyebrow">Since 2014</span>
        </div>
        
        <h2 class="section-headline">Empowering businesses through<br><span class="accent-text">exceptional BPO solutions</span></h2>
        
        <p class="about-description">
          Headquartered in Karachi, One Stop Solutions has been transforming customer experiences since 2014. 
          We specialize in delivering comprehensive BPO services — from inbound support and outbound sales to 
          lead generation and technical assistance — that help businesses scale efficiently while maintaining 
          exceptional service standards.
        </p>
        
        <div class="about-link">
          <a href="#contact" class="about-cta-link">Discover our approach <span>→</span></a>
        </div>
      </div>
    </div>

    <!-- Global Presence Section -->
    <div class="global-presence reveal">
      <div class="global-header">
        <h3 class="global-title">Global Presence</h3>
        <p class="global-subtitle">Serving clients across 3 continents with round-the-clock support</p>
        <div class="global-divider"></div>
      </div>
      
      <div class="global-grid">
        <!-- Pakistan -->
        <div class="global-card">
          <div class="global-flag">🇵🇰</div>
          <h4>Pakistan</h4>
          <span class="global-badge">HEADQUARTERS</span>
          <p>Est. 2014 · Karachi</p>
          <div class="global-locations">
            <span>Financial Hub</span>
            <span>•</span>
            <span>Port City</span>
          </div>
        </div>
        
        <!-- United States -->
        <div class="global-card">
          <div class="global-flag">🇺🇸</div>
          <h4>United States</h4>
          <span class="global-badge">CLIENTS</span>
          <p>Enterprise solutions · Since 2018</p>
          <div class="global-locations">
            <span>New York</span>
            <span>•</span>
            <span>California</span>
            <span>•</span>
            <span>Texas</span>
          </div>
        </div>
        
        <!-- Canada -->
        <div class="global-card">
          <div class="global-flag">🇨🇦</div>
          <h4>Canada</h4>
          <span class="global-badge">PARTNERS</span>
          <p>Business partnerships · Since 2020</p>
          <div class="global-locations">
            <span>Toronto</span>
            <span>•</span>
            <span>Vancouver</span>
            <span>•</span>
            <span>Montreal</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  #about {
    background: var(--white);
    padding: 100px 48px;
    position: relative;
    overflow: hidden;
  }

  .about-container {
    max-width: 1400px;
    margin: 0 auto;
  }

  .about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    margin-bottom: 100px;
  }

  /* Image Styles */
  .about-image {
    position: relative;
  }

  .about-image-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  }

  .about-image-wrapper img {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease, filter 0.4s ease;
    filter: grayscale(0.1);
  }

  .about-image-wrapper:hover img {
    transform: scale(1.03);
    filter: grayscale(0);
  }

  .about-image-accent {
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, rgba(42,125,225,0.15), transparent);
    border-radius: 50%;
    pointer-events: none;
    z-index: -1;
  }

  /* Content Styles */
  .about-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 24px;
  }

  .about-tag-dot {
    width: 8px;
    height: 8px;
    background: var(--accent);
    border-radius: 50%;
  }

  .accent-text {
    color: var(--accent);
    display: inline-block;
  }

  .about-description {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--gray);
    margin: 24px 0 32px;
    max-width: 540px;
  }

  .about-link {
    margin-top: 8px;
  }

  .about-cta-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--accent);
    text-decoration: none;
    transition: gap 0.2s ease;
  }

  .about-cta-link:hover {
    gap: 12px;
  }

  .about-cta-link span {
    font-size: 1.1rem;
  }

  /* Global Presence Styles */
  .global-presence {
    background: var(--light);
    border-radius: 32px;
    padding: 60px 48px;
    margin-top: 20px;
  }

  .global-header {
    text-align: center;
    margin-bottom: 48px;
  }

  .global-icon {
    font-size: 2.5rem;
    display: inline-block;
    margin-bottom: 16px;
  }

  .global-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 2rem;
    font-weight: 700;
    color: var(--charcoal);
    margin-bottom: 12px;
  }

  .global-subtitle {
    font-size: 0.9rem;
    color: var(--muted);
    max-width: 500px;
    margin: 0 auto;
  }

  .global-divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--accent), #06D6A0);
    margin: 20px auto 0;
    border-radius: 3px;
  }

  .global-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
  }

  .global-card {
    background: var(--white);
    border-radius: 24px;
    padding: 32px 24px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
  }

  .global-card:hover {
    transform: translateY(-6px);
    border-color: var(--accent);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
  }

  .global-flag {
    font-size: 3rem;
    margin-bottom: 16px;
  }

  .global-card h4 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--charcoal);
    margin-bottom: 8px;
  }

  .global-badge {
    display: inline-block;
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--accent);
    background: rgba(42,125,225,0.1);
    padding: 4px 12px;
    border-radius: 30px;
    margin-bottom: 16px;
  }

  .global-card p {
    font-size: 0.85rem;
    color: var(--muted);
    margin-bottom: 12px;
  }

  .global-locations {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 6px;
    font-size: 0.7rem;
    color: var(--muted);
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
  }

  /* Responsive Styles */
  @media (max-width: 1024px) {
    #about {
      padding: 80px 32px;
    }
    
    .about-grid {
      gap: 60px;
    }
    
    .global-grid {
      gap: 24px;
    }
  }

  @media (max-width: 768px) {
    #about {
      padding: 60px 24px;
    }
    
    .about-grid {
      grid-template-columns: 1fr;
      gap: 40px;
      margin-bottom: 60px;
    }
    
    .about-image-wrapper {
      max-width: 500px;
      margin: 0 auto;
    }
    
    .about-description {
      max-width: 100%;
    }
    
    .global-presence {
      padding: 40px 24px;
    }
    
    .global-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    
    .global-title {
      font-size: 1.5rem;
    }
  }

  @media (max-width: 480px) {
    #about {
      padding: 48px 20px;
    }
    
    .global-presence {
      padding: 32px 20px;
    }
    
    .global-card {
      padding: 24px 20px;
    }
  }
</style>


<section id="services">
  <div class="services-left reveal-left">
    <span class="eyebrow">Core Capabilities</span>
    <h2 class="section-headline" style="margin-top:14px">Future-ready<br>outsourcing solutions</h2>
    <p class="services-intro">We combine domain expertise, advanced automation, and a people-first culture to deliver measurable business impact.</p>
    <a href="#projects" class="services-link">View Success Stories →</a>
  </div>
  <div class="services-list reveal-right">
    <div class="service-item active">
      <div class="service-dot"></div>
      <span class="service-name">Inbound call center</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Outbound calls</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Customer support</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Technical helpdesk</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Lead generation</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Web development</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">SEO & SEM</span>
      <span class="service-arrow">→</span>
    </div>
    <div class="service-item">
      <div class="service-dot"></div>
      <span class="service-name">Social Media</span>
      <span class="service-arrow">→</span>
    </div>
  </div>
</section>

<section id="process">
  <div class="process-left reveal-left">
    <span class="eyebrow" style="color:rgba(255,255,255,0.5)">Operational Excellence</span>
    <h2 class="section-headline">Scalable delivery<br>engine for BPO</h2>
    <p class="process-desc">Our four-phase framework ensures seamless transitions, SLA adherence, and continuous improvement.</p>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-num">01</div>
        <div>
          <div class="step-title">Discovery & Blueprint</div>
          <div class="step-desc">Deep-dive into your workflows, KPIs, and technology stack.</div>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">02</div>
        <div>
          <div class="step-title">Process Automation</div>
          <div class="step-desc">Integrate AI, RPA, and cloud tools for max efficiency.</div>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">03</div>
        <div>
          <div class="step-title">Pilot & Ramp-up</div>
          <div class="step-desc">Phased go-live with shadow support and quality checks.</div>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">04</div>
        <div>
          <div class="step-title">Continuous Evolution</div>
          <div class="step-desc">Monthly business reviews, optimization, and innovation.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="process-visual reveal-right">
    <div class="process-img-main">
      <!-- Added Image -->
      <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop" alt="Global Operations Team" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
      <div class="process-img-card" style="position: relative; z-index: 2;">
        <div class="process-card-label">Operational Uptime</div>
        <div class="process-card-val">99.98%</div>
        <div class="process-card-sub">Global delivery centers</div>
      </div>
    </div>
  </div>
</section>

<style>
  #process {
    background: var(--charcoal);
    padding: 100px 48px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    position: relative;
  }

  .process-left {
    position: relative;
    z-index: 2;
  }

  .process-visual {
    position: relative;
  }

  .process-img-main {
    background: linear-gradient(145deg, #1a2a3a, #0a1a2a);
    border-radius: 24px;
    height: 480px;
    display: flex;
    align-items: flex-end;
    padding: 30px;
    position: relative;
    overflow: hidden;
  }

  /* Image styling */
  .process-img-main img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
    z-index: 0;
  }

  .process-img-main:hover img {
    transform: scale(1.05);
  }

  /* Dark overlay to make text readable */
  .process-img-main::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.1) 100%);
    z-index: 1;
    pointer-events: none;
  }

  .process-img-card {
    background: white;
    border-radius: 20px;
    padding: 24px;
    position: relative;
    z-index: 2;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    backdrop-filter: blur(0px);
    transition: transform 0.3s ease;
  }

  .process-img-card:hover {
    transform: translateY(-4px);
  }

  .process-card-label {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--accent);
    font-weight: 600;
  }

  .process-card-val {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 2rem;
    color: var(--charcoal);
    margin: 8px 0 4px;
  }

  .process-card-sub {
    font-size: 0.7rem;
    color: var(--muted);
  }

  .process-steps {
    margin-top: 30px;
  }

  .process-step {
    display: grid;
    grid-template-columns: 50px 1fr;
    gap: 20px;
    padding: 22px 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    cursor: none;
    transition: padding-left 0.25s ease;
  }

  .process-step:hover {
    padding-left: 6px;
  }

  .step-num {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--accent);
    letter-spacing: 0.05em;
  }

  .step-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    color: var(--white);
    margin-bottom: 6px;
  }

  .step-desc {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.45);
    line-height: 1.5;
  }

  @media (max-width: 900px) {
    #process {
      grid-template-columns: 1fr;
      gap: 50px;
      padding: 70px 24px;
    }
    
    .process-img-main {
      height: 400px;
    }
  }
</style>

<div class="section-divider"></div>

<section id="stats">
  <div class="stats-grid stagger">
    <div class="stat-card"><div class="stat-number">15+</div><div class="stat-label">Years Global Ops</div></div>
    <div class="stat-card featured"><div class="stat-number">2.3K+</div><div class="stat-label">Enterprise Clients</div><div class="stat-badge"><span class="badge">ISO Certified</span><span class="badge">Top 50 BPO</span></div></div>
    <div class="stat-card"><div class="stat-number">98%</div><div class="stat-label">Client Retention</div></div>
    <div class="stat-card"><div class="stat-number">45+</div><div class="stat-label">Countries Served</div></div>
  </div>
</section>

<div class="section-divider"></div>

<section id="contact">
  <div class="contact-container">
    <div class="contact-header reveal">
      <span class="eyebrow">Get In Touch</span>
      <h2 class="section-headline">Let's work<br>together</h2>
      <p class="contact-intro">Ready to start your project? Contact us today for a free consultation.</p>
    </div>

    <div class="contact-grid">
      <!-- Left Column - Contact Info Cards -->
      <div class="contact-info reveal-left">
        <!-- Email Card -->
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <div class="contact-card-content">
            <span class="contact-card-badge">01 / EMAIL</span>
            <h3>Email Us</h3>
            <a href="mailto:info@nexusbpo.com" class="contact-email">info@nexusbpo.com</a>
            <a href="mailto:hr@nexusbpo.com" class="contact-email">hr@nexusbpo.com</a>
            <div class="contact-card-footer">
              <span>Response within 24 hours</span>
            </div>
          </div>
        </div>

        <!-- Hours Card -->
        <div class="contact-card alt">
          <div class="contact-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="contact-card-content">
            <span class="contact-card-badge">02 / HOURS</span>
            <h3>Business Hours</h3>
            <div class="contact-hours">24/7</div>
            <p>Round-the-clock support available</p>
            <div class="contact-card-footer">
              <span>Global Support</span>
            </div>
          </div>
        </div>

        <!-- Address Card -->
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
          <div class="contact-card-content">
            <span class="contact-card-badge">03 / LOCATIONS</span>
            <h3>Our Office</h3>
            <div class="contact-address">
              <div class="contact-flag">🇵🇰</div>
              <div>
                <strong>Pakistan HQ</strong>
                <p>Suite No 111, 1st Floor, Park Avenue, Block 6, PECHS, Sharah-e-Faisal, Karachi, Pakistan</p>
              </div>
            </div>
            <div class="contact-card-footer">
              <span>Global Reach</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Contact Form -->
      <div class="contact-form-wrapper reveal-right">
        <div class="contact-form-header">
          <span class="contact-form-badge">04 / FORM</span>
          <h3>Send a Message</h3>
        </div>
        
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-form">
          <input type="hidden" name="access_key" value="1f36ea7f-dfc5-4a71-8189-a7b6aa03d0c6">
          <input type="hidden" name="to" value="info@nexusbpo.com">
          <input type="hidden" name="subject" value="New Contact Form Submission">
          <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
          
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" name="name" id="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" name="email" id="email" required placeholder="john@example.com">
            </div>
          </div>
          
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject_field" id="subject" required placeholder="Project Inquiry">
          </div>
          
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="5" required placeholder="Tell us about your project..."></textarea>
          </div>
          
          <button type="submit" class="submit-btn">
            Send Message
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
            </svg>
          </button>
        </form>
        
        <div class="form-footer">
          <span>We respond within 24 hours</span>
        </div>
      </div>
    </div>

    <!-- Additional Contact Methods -->
    <div class="contact-methods reveal">
      <div class="methods-header">
        <span class="eyebrow">Additional Methods</span>
        <h3>Other Ways to Connect</h3>
        <div class="methods-divider"></div>
      </div>
      
      <div class="methods-grid">
        <div class="method-card">
          <div class="method-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
            </svg>
          </div>
          <div class="method-content">
            <span class="method-badge">PHONE</span>
            <a href="tel:+922134545003" class="method-value">+92 21 34545003</a>
            <p>Pakistan Office</p>
          </div>
        </div>
        
        <div class="method-card">
          <div class="method-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/>
              <rect x="2" y="9" width="4" height="12"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </div>
          <div class="method-content">
            <span class="method-badge">SOCIAL</span>
            <span class="method-value">@nexusbpo</span>
            <p>Follow us on LinkedIn & Facebook</p>
          </div>
        </div>
        
        <div class="method-card">
          <div class="method-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
            </svg>
          </div>
          <div class="method-content">
            <span class="method-badge">WHATSAPP</span>
            <a href="https://wa.me/923001234567" class="method-value">+92 300 1234567</a>
            <p>Quick support on WhatsApp</p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="contact-cta reveal">
      <h3>Ready to transform your business?</h3>
      <p>Let's discuss how we can help you achieve your goals</p>
      <a href="#contact" class="contact-cta-btn">
        Start a conversation
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>
  </div>
</section>

<style>
  #contact {
    background: var(--white);
    padding: 100px 48px;
    position: relative;
    overflow: hidden;
  }

  .contact-container {
    max-width: 1400px;
    margin: 0 auto;
  }

  .contact-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .contact-intro {
    font-size: 1rem;
    color: var(--muted);
    margin-top: 16px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    margin-bottom: 80px;
  }

  /* Contact Cards */
  .contact-info {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .contact-card {
    background: var(--white);
    border: 1px solid rgba(42,125,225,0.15);
    border-radius: 24px;
    padding: 28px;
    transition: all 0.3s ease;
    display: flex;
    gap: 20px;
  }

  .contact-card:hover {
    transform: translateY(-4px);
    border-color: var(--accent);
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
  }

  .contact-card.alt:hover {
    border-color: #06D6A0;
  }

  .contact-card-icon {
    width: 56px;
    height: 56px;
    background: rgba(42,125,225,0.1);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    flex-shrink: 0;
  }

  .contact-card.alt .contact-card-icon {
    background: rgba(6,214,160,0.1);
    color: #06D6A0;
  }

  .contact-card-content {
    flex: 1;
  }

  .contact-card-badge {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: var(--accent);
    text-transform: uppercase;
    display: block;
    margin-bottom: 8px;
  }

  .contact-card.alt .contact-card-badge {
    color: #06D6A0;
  }

  .contact-card-content h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--charcoal);
    margin-bottom: 12px;
  }

  .contact-email {
    display: block;
    font-size: 0.95rem;
    color: var(--accent);
    text-decoration: none;
    margin-bottom: 6px;
    transition: color 0.2s;
  }

  .contact-email:hover {
    color: #1a68c9;
  }

  .contact-hours {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: #06D6A0;
    margin-bottom: 6px;
  }

  .contact-card-content p {
    font-size: 0.85rem;
    color: var(--muted);
  }

  .contact-address {
    display: flex;
    gap: 12px;
    margin-bottom: 12px;
  }

  .contact-flag {
    font-size: 1.5rem;
  }

  .contact-address strong {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 0.9rem;
    color: var(--charcoal);
    display: block;
    margin-bottom: 4px;
  }

  .contact-address p {
    font-size: 0.8rem;
    line-height: 1.5;
  }

  .contact-card-footer {
    margin-top: 16px;
    padding-top: 12px;
    border-top: 1px solid rgba(0,0,0,0.05);
  }

  .contact-card-footer span {
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: var(--accent);
    text-transform: uppercase;
  }

  .contact-card.alt .contact-card-footer span {
    color: #06D6A0;
  }

  /* Contact Form */
  .contact-form-wrapper {
    background: var(--light);
    border-radius: 24px;
    padding: 36px;
    height: fit-content;
  }

  .contact-form-header {
    margin-bottom: 28px;
  }

  .contact-form-badge {
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: #06D6A0;
    text-transform: uppercase;
    display: block;
    margin-bottom: 8px;
  }

  .contact-form-header h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--charcoal);
  }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .form-group label {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--muted);
  }

  .form-group input,
  .form-group textarea {
    padding: 12px 16px;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 12px;
    font-family: 'Inter', sans-serif;
    font-size: 0.9rem;
    transition: all 0.2s ease;
    background: var(--white);
  }

  .form-group input:focus,
  .form-group textarea:focus {
    outline: none;
    border-color: #06D6A0;
    box-shadow: 0 0 0 3px rgba(6,214,160,0.1);
  }

  .submit-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: linear-gradient(135deg, var(--accent), #06D6A0);
    color: white;
    padding: 14px 28px;
    border-radius: 40px;
    font-weight: 600;
    font-size: 0.9rem;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 8px;
  }

  .submit-btn:hover {
    transform: translateY(-2px);
    gap: 16px;
    box-shadow: 0 10px 25px rgba(42,125,225,0.3);
  }

  .form-footer {
    margin-top: 20px;
    text-align: center;
    padding-top: 16px;
    border-top: 1px solid rgba(0,0,0,0.05);
  }

  .form-footer span {
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: var(--accent);
    text-transform: uppercase;
  }

  /* Additional Methods */
  .contact-methods {
    margin-bottom: 80px;
  }

  .methods-header {
    text-align: center;
    margin-bottom: 48px;
  }

  .methods-header h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--charcoal);
    margin-top: 12px;
    margin-bottom: 16px;
  }

  .methods-divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--accent), #06D6A0);
    margin: 0 auto;
    border-radius: 3px;
  }

  .methods-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
  }

  .method-card {
    text-align: center;
    padding: 32px 24px;
    background: var(--white);
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 24px;
    transition: all 0.3s ease;
  }

  .method-card:hover {
    transform: translateY(-4px);
    border-color: var(--accent);
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
  }

  .method-icon {
    width: 64px;
    height: 64px;
    background: rgba(42,125,225,0.1);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    margin: 0 auto 20px;
  }

  .method-badge {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: var(--accent);
    text-transform: uppercase;
    display: block;
    margin-bottom: 8px;
  }

  .method-value {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--charcoal);
    display: block;
    margin-bottom: 6px;
    text-decoration: none;
  }

  .method-card p {
    font-size: 0.8rem;
    color: var(--muted);
  }

  /* Contact CTA */
  .contact-cta {
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
  }

  .contact-cta h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--charcoal);
    margin-bottom: 12px;
  }

  .contact-cta p {
    color: var(--muted);
    margin-bottom: 28px;
  }

  .contact-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--accent);
    color: white;
    padding: 14px 32px;
    border-radius: 40px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .contact-cta-btn:hover {
    background: #1a68c9;
    transform: translateY(-2px);
    gap: 16px;
  }

  /* Responsive */
  @media (max-width: 1024px) {
    #contact {
      padding: 80px 32px;
    }
    
    .contact-grid {
      gap: 32px;
    }
    
    .methods-grid {
      gap: 20px;
    }
  }

  @media (max-width: 768px) {
    #contact {
      padding: 60px 24px;
    }
    
    .contact-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    
    .methods-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    
    .form-row {
      grid-template-columns: 1fr;
      gap: 16px;
    }
    
    .contact-card {
      flex-direction: column;
      text-align: center;
    }
    
    .contact-card-icon {
      margin: 0 auto;
    }
    
    .contact-address {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
  }
</style>

<div class="section-divider"></div>



<section id="testimonials">
  <div class="testimonials-container">
    <!-- Header -->
    <div class="testimonials-header reveal">
      <span class="eyebrow">Client Love</span>
      <h2 class="section-headline">What our<br>clients say</h2>
      <p class="testimonials-subtitle">Real results from real partnerships</p>
    </div>

    <div class="testimonials-grid">
      <!-- Left Side - Featured Testimonial -->
      <div class="featured-testimonial reveal-left">
        <div class="featured-card">
          <div class="featured-quote">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
              <path d="M10 11h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zM3 6h3M6 10h-3M18 11h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zM11 6h3M14 10h-3"/>
              <path d="M10 19h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zM3 14h3M6 18h-3M18 19h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zM11 14h3M14 18h-3"/>
            </svg>
            <span class="featured-badge">Featured Review</span>
          </div>
          
          <div class="featured-text">
            <p>NexusBPO didn't just handle our customer service — they reimagined it. 40% faster resolution and 20% cost savings in the first quarter. Their team became an extension of our own.</p>
          </div>
          
          <div class="featured-author">
            <div class="author-avatar-large">
              <div class="avatar-initials">RM</div>
            </div>
            <div class="author-info">
              <div class="author-name-large">Rahul Mehta</div>
              <div class="author-title">Chief Operating Officer</div>
              <div class="author-company-large">CloudRetail</div>
            </div>
            <div class="rating">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
            </div>
          </div>
        </div>

        <!-- Stats Row -->
        <div class="testimonial-stats">
          <div class="stat-item">
            <div class="stat-value">98%</div>
            <div class="stat-label">Client Satisfaction</div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-value">4.9/5</div>
            <div class="stat-label">Average Rating</div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-value">150+</div>
            <div class="stat-label">Happy Clients</div>
          </div>
        </div>
      </div>

      <!-- Right Side - Testimonial Carousel -->
      <div class="testimonial-carousel reveal-right">
        <div class="carousel-header">
          <span class="carousel-badge">More Stories</span>
          <div class="carousel-nav">
            <button class="carousel-prev" id="carouselPrev">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6"/>
              </svg>
            </button>
            <button class="carousel-next" id="carouselNext">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6"/>
              </svg>
            </button>
          </div>
        </div>

        <div class="carousel-track-container">
          <div class="carousel-track" id="carouselTrack">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
              <div class="card-rating">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <p class="testimonial-quote">"Their call center team manages both our inbound and outbound outreach flawlessly. They helped us improve response times and sales performance significantly."</p>
              <div class="testimonial-meta">
                <div class="meta-avatar">AR</div>
                <div>
                  <div class="meta-name">Ahmed Raza</div>
                  <div class="meta-role">Customer Experience Lead, CommercePro</div>
                </div>
              </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
              <div class="card-rating">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <p class="testimonial-quote">"Their expertise in web solutions helped us expand our software development capacity, constantly delivering updates and saving on operational costs."</p>
              <div class="testimonial-meta">
                <div class="meta-avatar">MR</div>
                <div>
                  <div class="meta-name">Michael Rodriguez</div>
                  <div class="meta-role">CTO, FinTech Innovations</div>
                </div>
              </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
              <div class="card-rating">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <p class="testimonial-quote">"Their digital marketing team transformed our online presence. From SEO to social media, we saw higher traffic and stronger engagement within months."</p>
              <div class="testimonial-meta">
                <div class="meta-avatar">HM</div>
                <div>
                  <div class="meta-name">Hassan Malik</div>
                  <div class="meta-role">Marketing Manager, UrbanCart</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-dots" id="carouselDots">
          <button class="dot active" data-index="0"></button>
          <button class="dot" data-index="1"></button>
          <button class="dot" data-index="2"></button>
        </div>
      </div>
    </div>

    <!-- Trusted Partners Logos -->
    <div class="trusted-partners reveal">
      <div class="partners-header">
        <span class="eyebrow">Trusted Partners</span>
        <h3>Join 150+ businesses that trust us</h3>
      </div>
      <div class="partners-grid">
        <div class="partner-logo">CloudRetail</div>
        <div class="partner-logo featured">FinScale</div>
        <div class="partner-logo">MediCare+</div>
        <div class="partner-logo">LogiTech</div>
        <div class="partner-logo">EduGlobal</div>
        <div class="partner-logo">InsureCore</div>
        <div class="partner-logo">CommercePro</div>
        <div class="partner-logo">HealthTech</div>
      </div>
    </div>
  </div>
</section>

<style>
  /* CSS Variables - Keeping your original color theme */
  :root {
    --white: #ffffff;
    --light: #f8fafc;
    --accent: #2a7de1;
    --charcoal: #1e293b;
    --gray: #475569;
    --muted: #64748b;
  }

  #testimonials {
    background: var(--white);
    padding: 100px 48px;
    position: relative;
    overflow: hidden;
  }

  .testimonials-container {
    max-width: 1400px;
    margin: 0 auto;
  }

  .testimonials-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .eyebrow {
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent);
    display: inline-block;
    margin-bottom: 16px;
  }

  .section-headline {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    color: var(--charcoal);
    margin: 0 0 8px 0;
    letter-spacing: -0.02em;
  }

  .testimonials-subtitle {
    font-size: 1.1rem;
    color: var(--muted);
    margin-top: 12px;
  }

  .testimonials-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    margin-bottom: 80px;
  }

  /* Featured Testimonial - Modern & Clean */
  .featured-testimonial {
    position: relative;
  }

  .featured-card {
    background: var(--white);
    border-radius: 28px;
    padding: 40px;
    border: 1px solid #e9eef3;
    transition: all 0.3s ease;
    margin-bottom: 32px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.02);
  }

  .featured-card:hover {
    transform: translateY(-2px);
    border-color: var(--accent);
    box-shadow: 0 12px 30px rgba(0,0,0,0.05);
  }

  .featured-quote {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
  }

  .featured-quote svg {
    color: var(--accent);
    opacity: 0.4;
  }

  .featured-badge {
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.05em;
    color: var(--accent);
    background: rgba(42,125,225,0.08);
    padding: 5px 14px;
    border-radius: 30px;
  }

  .featured-text {
    position: relative;
    margin-bottom: 32px;
  }

  .featured-text p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: var(--charcoal);
    margin: 0;
  }

  .featured-author {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
  }

  .author-avatar-large {
    width: 52px;
    height: 52px;
    background: linear-gradient(135deg, var(--accent), #3b82f6);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .avatar-initials {
    color: white;
    font-weight: 600;
    font-size: 1rem;
  }

  .author-info {
    flex: 1;
  }

  .author-name-large {
    font-size: 1rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 2px;
  }

  .author-title {
    font-size: 0.75rem;
    color: var(--muted);
  }

  .author-company-large {
    font-size: 0.8rem;
    font-weight: 500;
    color: var(--accent);
    margin-top: 2px;
  }

  .rating {
    display: flex;
    gap: 3px;
    color: #f59e0b;
  }

  /* Testimonial Stats */
  .testimonial-stats {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--light);
    padding: 20px 32px;
    border-radius: 20px;
  }

  .stat-item {
    text-align: center;
  }

  .stat-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--accent);
    margin-bottom: 4px;
  }

  .stat-label {
    font-size: 0.7rem;
    font-weight: 500;
    letter-spacing: 0.03em;
    color: var(--muted);
  }

  .stat-divider {
    width: 1px;
    height: 35px;
    background: #e2e8f0;
  }

  /* Carousel - Modern & Clean */
  .testimonial-carousel {
    background: var(--light);
    border-radius: 28px;
    padding: 32px;
  }

  .carousel-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
  }

  .carousel-badge {
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.05em;
    color: var(--accent);
    text-transform: uppercase;
  }

  .carousel-nav {
    display: flex;
    gap: 8px;
  }

  .carousel-prev,
  .carousel-next {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid #e2e8f0;
    background: var(--white);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    color: var(--charcoal);
  }

  .carousel-prev:hover,
  .carousel-next:hover {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
  }

  .carousel-track-container {
    overflow: hidden;
    margin-bottom: 24px;
  }

  .carousel-track {
    display: flex;
    transition: transform 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }

  .testimonial-card {
    flex: 0 0 100%;
    padding: 28px;
    background: var(--white);
    border-radius: 24px;
    margin-right: 24px;
    border: 1px solid #eef2f6;
    transition: all 0.2s ease;
  }

  .testimonial-card:hover {
    border-color: var(--accent);
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
  }

  .card-rating {
    display: flex;
    gap: 3px;
    color: #f59e0b;
    margin-bottom: 18px;
  }

  .testimonial-quote {
    font-size: 0.95rem;
    line-height: 1.6;
    color: var(--gray);
    margin-bottom: 24px;
  }

  .testimonial-meta {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .meta-avatar {
    width: 42px;
    height: 42px;
    background: rgba(42,125,225,0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--accent);
  }

  .meta-name {
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--charcoal);
    margin-bottom: 2px;
  }

  .meta-role {
    font-size: 0.7rem;
    color: var(--muted);
  }

  .carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
  }

  .carousel-dots .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #cbd5e1;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    padding: 0;
  }

  .carousel-dots .dot.active {
    background: var(--accent);
    width: 24px;
    border-radius: 4px;
  }

  /* Trusted Partners */
  .trusted-partners {
    text-align: center;
    padding-top: 48px;
    border-top: 1px solid #eef2f6;
  }

  .partners-header {
    margin-bottom: 32px;
  }

  .partners-header h3 {
    font-size: 1.25rem;
    font-weight: 500;
    color: var(--charcoal);
    margin-top: 12px;
  }

  .partners-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
  }

  .partner-logo {
    font-size: 0.9rem;
    font-weight: 500;
    color: #94a3b8;
    transition: color 0.2s ease;
    cursor: pointer;
  }

  .partner-logo:hover {
    color: var(--accent);
  }

  .partner-logo.featured {
    color: var(--accent);
  }

  /* Reveal Animations */
  .reveal, .reveal-left, .reveal-right {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease-out;
  }
  
  .reveal-left {
    transform: translateX(-20px);
  }
  
  .reveal-right {
    transform: translateX(20px);
  }
  
  .reveal.visible, .reveal-left.visible, .reveal-right.visible {
    opacity: 1;
    transform: translate(0, 0);
  }

  /* Responsive */
  @media (max-width: 1024px) {
    #testimonials {
      padding: 80px 32px;
    }
    
    .testimonials-grid {
      gap: 32px;
    }
    
    .section-headline {
      font-size: 2.8rem;
    }
  }

  @media (max-width: 768px) {
    #testimonials {
      padding: 60px 24px;
    }
    
    .testimonials-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    
    .featured-card {
      padding: 32px;
    }
    
    .section-headline {
      font-size: 2.2rem;
    }
    
    .featured-text p {
      font-size: 1.1rem;
    }
    
    .testimonial-stats {
      padding: 16px 24px;
    }
    
    .partners-grid {
      gap: 24px;
    }
    
    .partner-logo {
      font-size: 0.8rem;
    }
  }
</style>

<script>
  // Carousel functionality
  (function() {
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');
    const dots = document.querySelectorAll('.dot');
    const cards = document.querySelectorAll('.testimonial-card');
    let currentIndex = 0;
    const totalCards = cards.length;

    function updateCarousel() {
      const cardWidth = cards[0]?.offsetWidth + 24 || 0;
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
      dots.forEach((dot, i) => {
        if (i === currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalCards;
      updateCarousel();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      updateCarousel();
    }

    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    
    dots.forEach((dot, idx) => {
      dot.addEventListener('click', () => {
        currentIndex = idx;
        updateCarousel();
      });
    });

    window.addEventListener('resize', () => updateCarousel());
    setTimeout(updateCarousel, 100);

    // Intersection Observer for reveal animations
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    revealElements.forEach(el => observer.observe(el));
  })();
</script>

<script>
  // Carousel functionality
  const track = document.getElementById('carouselTrack');
  const prevBtn = document.getElementById('carouselPrev');
  const nextBtn = document.getElementById('carouselNext');
  const dots = document.querySelectorAll('.carousel-dots .dot');
  let currentIndex = 0;
  const totalSlides = document.querySelectorAll('.testimonial-card').length;

  function updateCarousel() {
    track.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
  }

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentIndex = index;
      updateCarousel();
    });
  });

  // Auto-rotate carousel
  let autoRotate = setInterval(nextSlide, 5000);

  const carouselContainer = document.querySelector('.testimonial-carousel');
  if (carouselContainer) {
    carouselContainer.addEventListener('mouseenter', () => clearInterval(autoRotate));
    carouselContainer.addEventListener('mouseleave', () => {
      autoRotate = setInterval(nextSlide, 5000);
    });
  }
</script>

<div class="section-divider"></div>

<section id="cta"><div><span class="eyebrow" style="color:rgba(255,255,255,0.4)">Let’s optimize together</span><h2 class="cta-headline">Scale your business<br>with <em>nexusBPO</em></h2></div><div class="cta-right"><div class="cta-contact">Talk to a specialist</div><a href="tel:+13460594935" class="cta-phone">+1 (346) 059-4935</a><a href="mailto:hello@nexusbpo.co" class="btn-primary">Start your journey →</a></div></section>

<footer><div class="footer-logo">nexus<span>BPO</span></div><div class="footer-links"><a href="#">Solutions</a><a href="#">Case Studies</a><a href="#">Leadership</a><a href="#">Insights</a><a href="#">Contact</a></div><div class="footer-copy">© 2025 NexusBPO. Future-proof outsourcing.</div></footer>

<script>
const cursor = document.getElementById('cursor'), follower = document.getElementById('cursorFollower');
let mouseX=0,mouseY=0,followerX=0,followerY=0;
document.addEventListener('mousemove',e=>{mouseX=e.clientX;mouseY=e.clientY;cursor.style.transform=`translate(${mouseX-4}px,${mouseY-4}px)`;});
function animateFollower(){followerX+=(mouseX-followerX-16)*0.12;followerY+=(mouseY-followerY-16)*0.12;follower.style.transform=`translate(${followerX}px,${followerY}px)`;requestAnimationFrame(animateFollower);}
animateFollower();
document.querySelectorAll('a, button, .project-card, .team-card, .service-item, .blog-card').forEach(el=>{el.addEventListener('mouseenter',()=>follower.classList.add('hovering'));el.addEventListener('mouseleave',()=>follower.classList.remove('hovering'));});
const navbar=document.getElementById('navbar');
window.addEventListener('scroll',()=>{navbar.classList.toggle('scrolled',window.scrollY>60);});
const observer=new IntersectionObserver((entries)=>{entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible');});},{threshold:0.12});
document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger').forEach(el=>observer.observe(el));
document.querySelectorAll('.service-item').forEach(item=>{item.addEventListener('mouseenter',function(){document.querySelectorAll('.service-item').forEach(i=>{i.classList.remove('active');i.querySelector('.service-dot').style.background='#ddd';});this.classList.add('active');this.querySelector('.service-dot').style.background='var(--accent)';});});
const heroLeft=document.querySelector('.hero-left'),heroMosaic=document.querySelector('.hero-mosaic');
if(heroLeft){heroLeft.style.opacity='0';heroLeft.style.transform='translateY(30px)';heroMosaic.style.opacity='0';setTimeout(()=>{heroLeft.style.transition='opacity 0.8s ease, transform 0.8s ease';heroLeft.style.opacity='1';heroLeft.style.transform='translateY(0)';},200);setTimeout(()=>{heroMosaic.style.transition='opacity 0.8s ease, transform 0.8s ease';heroMosaic.style.opacity='1';},400);}
function animateCounter(el,target,suffix){let start=0;const duration=1600,increment=target/(duration/16);const timer=setInterval(()=>{start+=increment;if(start>=target){start=target;clearInterval(timer);}el.textContent=Math.floor(start)+suffix;},16);}
const statsObserver=new IntersectionObserver((entries)=>{entries.forEach(entry=>{if(entry.isIntersecting){const nums=entry.target.querySelectorAll('.stat-number');const data=[['15','+'],['2.3','K+'],['98','%'],['45','+']];nums.forEach((num,i)=>{const val=parseFloat(data[i][0]);const suf=data[i][1];animateCounter(num,val,suf);});statsObserver.unobserve(entry.target);}});},{threshold:0.3});
const statsSection=document.querySelector('.stats-grid');if(statsSection)statsObserver.observe(statsSection);
</script>
</body>
</html>