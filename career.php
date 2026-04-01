<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Careers at One Stop Solutions | Join Our Team</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        /* Base Styles - Only for main content, not affecting header */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }
        
        /* Ensure proper spacing when header is included */
        main {
            padding-top: 80px; /* Space for fixed header */
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', monospace;
        }
        
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes textGlow {
            0%, 100% { text-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
            50% { text-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
        }
        
        @keyframes rotateSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 14px rgba(34, 197, 94, 0.2), 0 0 0 28px rgba(34, 197, 94, 0.1); }
            50% { box-shadow: 0 0 0 20px rgba(34, 197, 94, 0.25), 0 0 0 38px rgba(34, 197, 94, 0.12); }
        }
        
        .animate-fade-up {
            animation: fadeUp 0.8s ease both;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #14b8a6 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .career-glow {
            animation: textGlow 3s ease-in-out infinite;
        }
        
        .rotate-slow {
            animation: rotateSlow 20s linear infinite;
        }
        
        .pulse-soft {
            animation: pulse 2.8s ease infinite;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }
        
        /* Card Hover Effects */
        .value-card {
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.15);
        }
        
        .job-card {
            transition: all 0.3s ease;
        }
        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.1);
        }
        
        /* Service Card Flip Styles */
        .service-front, .service-back {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .service-card-wrapper:hover .service-front {
            opacity: 0;
            transform: translateY(-20px);
        }
        .service-card-wrapper:hover .service-back {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Form Styles */
        input, select, textarea {
            transition: all 0.3s ease;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }
        
        /* Ensure header doesn't conflict with page content */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            transition: all 0.3s ease;
        }
        
        /* Prevent header styles from affecting main content */
        #navbar * {
            box-sizing: border-box;
        }
        
        /* Hero section should start after header */
        .hero-section {
            margin-top: 0;
            padding-top: 0;
        }
        
        /* Fix for any overlapping issues */
        section {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

<?php @include("header.php"); ?>

<!-- Main content wrapper to handle spacing -->
<main style="padding-top: 80px;">
    <!-- Hero Section - Career Focus -->
    <section class="hero-section">
        <div class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
            <!-- Subtle pattern overlay -->
            <div class="absolute inset-0 pointer-events-none opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2310b981" fill-opacity="0.3"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-repeat: repeat;"></div>
            
            <!-- Background Glow Orbs - Dark theme -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute w-[600px] h-[500px] -top-48 -left-32 rounded-full bg-emerald-500/20 blur-[100px]"></div>
                <div class="absolute w-[450px] h-[400px] -bottom-24 -right-32 rounded-full bg-teal-500/15 blur-[100px]"></div>
                <div class="absolute w-[350px] h-[350px] top-2/5 left-2/5 rounded-full bg-emerald-400/10 blur-[100px]"></div>
            </div>
            
            <!-- Dark overlay for depth -->
            <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Left Column - Heading -->
                    <div class="animate-fade-up">
                        <h1 class="font-['Space_Grotesk'] text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight">
                            <span class="text-emerald-500">Career</span>
                        </h1>
                    </div>

                    <!-- Right Column - Description -->
                    <div class="animate-fade-up space-y-8">
                        <div class="relative">
                            <div class="absolute -left-4 top-0 w-1 h-full bg-gradient-to-b from-emerald-500 to-teal-500 rounded-full"></div>
                            <p class="font-['Space_Grotesk'] text-gray-300 leading-relaxed pl-6 max-w-md text-base sm:text-lg">
                                We're a creative team driven by innovation, collaboration, and growth — building meaningful digital experiences while empowering our people to do their best work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values We Value Section -->
    <section id="values" class="py-20 sm:py-24 md:py-28 lg:py-32 relative bg-white overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-emerald-200/40"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-teal-200/40"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-teal-200/40"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-emerald-200/40"></div>
            <div class="absolute top-1/3 -left-32 w-80 h-80 bg-emerald-100/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/3 -right-32 w-80 h-80 bg-teal-50/40 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.02]">
                <div class="w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 1px); background-size: 32px 32px;"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <div class="inline-flex items-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                    <span class="text-xs sm:text-sm font-medium tracking-[0.2em] uppercase text-emerald-600">OUR CULTURE DNA</span>
                    <div class="w-2 h-2 bg-emerald-500 rotate-45"></div>
                </div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-4">
                    Talent We <span class="gradient-text">Value</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-400 to-teal-500 mx-auto my-6 rounded-full"></div>
                <p class="text-gray-500 text-base sm:text-lg leading-relaxed">
                    We've built a workplace where <span class="font-semibold text-emerald-600">collaboration</span>,
                    <span class="font-semibold text-emerald-600">growth</span>, and
                    <span class="font-semibold text-emerald-600">balance</span> create exceptional results.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Value Card 1 -->
                <div class="value-card bg-white border-2 border-emerald-200 rounded-2xl p-6 hover:border-emerald-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-lightbulb text-emerald-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Energetic Innovators</h3>
                    <p class="text-gray-500 leading-relaxed">Creative minds who solve complex problems with fresh perspectives and bold ideas.</p>
                </div>
                
                <!-- Value Card 2 -->
                <div class="value-card bg-white border-2 border-teal-200 rounded-2xl p-6 hover:border-teal-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-user-graduate text-teal-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Seasoned Experts</h3>
                    <p class="text-gray-500 leading-relaxed">Deep industry expertise and practical knowledge from years of experience.</p>
                </div>
                
                <!-- Value Card 3 -->
                <div class="value-card bg-white border-2 border-emerald-200 rounded-2xl p-6 hover:border-emerald-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-graduation-cap text-emerald-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Educated Specialists</h3>
                    <p class="text-gray-500 leading-relaxed">Academic excellence meets practical application in every project.</p>
                </div>
                
                <!-- Value Card 4 -->
                <div class="value-card bg-white border-2 border-teal-200 rounded-2xl p-6 hover:border-teal-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-chart-line text-teal-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Growth Champions</h3>
                    <p class="text-gray-500 leading-relaxed">Committed to continuous learning and helping others develop.</p>
                </div>
                
                <!-- Value Card 5 -->
                <div class="value-card bg-white border-2 border-emerald-200 rounded-2xl p-6 hover:border-emerald-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-globe text-emerald-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Global Thinkers</h3>
                    <p class="text-gray-500 leading-relaxed">International outlook and cultural intelligence for global markets.</p>
                </div>
                
                <!-- Value Card 6 -->
                <div class="value-card bg-white border-2 border-teal-200 rounded-2xl p-6 hover:border-teal-400 transition-all duration-300">
                    <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <i class="fas fa-handshake text-teal-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Collaborative Leaders</h3>
                    <p class="text-gray-500 leading-relaxed">Team players who elevate everyone around them.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Workplace Culture Section -->
    <section id="culture" class="py-24 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-emerald-400 rotate-45"></div>
                        <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-400">OUR CULTURE</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold mt-3 mb-6">Where <span class="text-emerald-400">Innovation</span> Meets Collaboration</h2>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">We've built an environment where creativity flourishes and every voice matters.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-emerald-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Teamwork Excellence</h3>
                                <p class="text-gray-400">Together we achieve more. Our supportive environment creates highly productive collaboration across all teams.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-line text-emerald-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Continuous Development</h3>
                                <p class="text-gray-400">We shape brighter futures through continuous learning and advancement opportunities.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-heart text-emerald-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Work-Life Balance</h3>
                                <p class="text-gray-400">Human connections drive our success. We provide a safe, welcoming environment that respects well-being.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-star text-emerald-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Unwavering Commitment</h3>
                                <p class="text-gray-400">Delivering world-class services with utmost client satisfaction is our core mission.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=400&h=300&fit=crop" alt="Office" class="w-full h-48 object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-xl mt-8">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Team" class="w-full h-48 object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=300&fit=crop" alt="Meeting" class="w-full h-48 object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-xl mt-8">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Collaboration" class="w-full h-48 object-cover">
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4">
                        <div class="text-2xl font-bold text-emerald-500">Join Us</div>
                        <div class="text-sm text-gray-600">Be part of something exceptional</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Now Section -->
    <section id="apply" class="py-24 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-emerald-400 rotate-45"></div>
                    <span class="text-xs font-medium tracking-[0.2em] uppercase text-emerald-400">START YOUR JOURNEY</span>
                    <div class="w-2 h-2 bg-emerald-400 rotate-45"></div>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">Apply <span class="gradient-text">Now</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-400 to-teal-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">Take the first step toward an exciting career. Submit your application today and let's build the future together.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Application Form -->
                <div class="bg-white/5 backdrop-blur-sm border-2 border-emerald-500/30 rounded-2xl p-8 hover:border-emerald-400 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-emerald-400 mb-6">Application Form</h3>
                    <form action="https://api.web3forms.com/submit" method="POST" class="space-y-5">
                        <input type="hidden" name="access_key" value="1f36ea7f-dfc5-4a71-8189-a7b6aa03d0c6">
                        <input type="hidden" name="to" value="hr@onestopsolutions.com">
                        <input type="hidden" name="subject" value="New Career Application">
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm text-white/70 mb-2">First Name <span class="text-emerald-400">*</span></label>
                                <input type="text" name="first_name" required class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white">
                            </div>
                            <div>
                                <label class="block text-sm text-white/70 mb-2">Last Name <span class="text-emerald-400">*</span></label>
                                <input type="text" name="last_name" required class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Email Address <span class="text-emerald-400">*</span></label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white">
                        </div>
                        
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white">
                        </div>
                        
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Position Applying For <span class="text-emerald-400">*</span></label>
                            <select name="position" required class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white">
                                <option value="" class="bg-gray-800">Select a position</option>
                                <option value="Senior BPO Operations Manager">Senior BPO Operations Manager</option>
                                <option value="Customer Support Specialist">Customer Support Specialist</option>
                                <option value="Lead Generation Executive">Lead Generation Executive</option>
                                <option value="IT Support Specialist">IT Support Specialist</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Cover Letter <span class="text-emerald-400">*</span></label>
                            <textarea name="cover_letter" rows="5" required class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white resize-none" placeholder="Tell us about your experience and why you want to join us..."></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Resume/CV Link (Google Drive, Dropbox)</label>
                            <input type="url" name="resume_link" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-emerald-500/30 focus:border-emerald-400 focus:outline-none text-white" placeholder="https://drive.google.com/...">
                            <p class="text-xs text-white/50 mt-1">Please upload your resume to Google Drive or Dropbox and paste the shareable link here.</p>
                        </div>
                        
                        <button type="submit" class="w-full py-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-xl flex items-center justify-center gap-3 transition-all duration-300 hover:shadow-lg hover:scale-[1.02]">
                            <span>SUBMIT APPLICATION</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        
                        <p class="text-xs text-center text-white/50">By submitting, you agree to our <a href="#" class="text-emerald-400">Privacy Policy</a></p>
                    </form>
                </div>
                
                <!-- Hiring Process & Benefits -->
                <div class="space-y-8">
                    <div class="bg-white/5 backdrop-blur-sm border-2 border-teal-500/30 rounded-2xl p-8 hover:border-teal-400 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-teal-500/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-chart-line text-teal-400 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-teal-400">Our Hiring Process</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-8 h-8 border-2 border-teal-400 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-teal-400 font-bold">1</span></div>
                                <div><h4 class="font-bold text-white">Application Review</h4><p class="text-sm text-gray-400">We review each application for passion, skills, and cultural fit.</p></div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-8 h-8 border-2 border-emerald-400 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-emerald-400 font-bold">2</span></div>
                                <div><h4 class="font-bold text-white">Initial Screening</h4><p class="text-sm text-gray-400">Brief call to discuss expectations and mutual fit.</p></div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-8 h-8 border-2 border-teal-400 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-teal-400 font-bold">3</span></div>
                                <div><h4 class="font-bold text-white">Skills Assessment</h4><p class="text-sm text-gray-400">Role-specific evaluation of practical skills.</p></div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-8 h-8 border-2 border-emerald-400 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-emerald-400 font-bold">4</span></div>
                                <div><h4 class="font-bold text-white">Final Interview & Offer</h4><p class="text-sm text-gray-400">Meet leadership and receive your offer.</p></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-sm border-2 border-emerald-500/30 rounded-2xl p-8 hover:border-emerald-400 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-gift text-emerald-400 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-emerald-400">Why Join Us</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex gap-3"><i class="fas fa-dollar-sign text-emerald-400 mt-1"></i><div><h4 class="font-bold text-white">Competitive Compensation</h4><p class="text-sm text-gray-400">Industry-leading salary with performance bonuses</p></div></div>
                            <div class="flex gap-3"><i class="fas fa-chart-line text-teal-400 mt-1"></i><div><h4 class="font-bold text-white">Growth Opportunities</h4><p class="text-sm text-gray-400">Training, conferences, and clear career progression</p></div></div>
                            <div class="flex gap-3"><i class="fas fa-laptop-code text-emerald-400 mt-1"></i><div><h4 class="font-bold text-white">Modern Workspace</h4><p class="text-sm text-gray-400">State-of-the-art facilities with cutting-edge technology</p></div></div>
                            <div class="flex gap-3"><i class="fas fa-balance-scale text-teal-400 mt-1"></i><div><h4 class="font-bold text-white">Work-Life Balance</h4><p class="text-sm text-gray-400">Flexible hours, remote options, and generous leave policies</p></div></div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-emerald-500/20">
                            <div class="grid grid-cols-3 text-center">
                                <div><div class="text-2xl font-bold text-emerald-400">97%</div><div class="text-xs text-gray-400">HAPPINESS</div></div>
                                <div><div class="text-2xl font-bold text-teal-400">24/7</div><div class="text-xs text-gray-400">SUPPORT</div></div>
                                <div><div class="text-2xl font-bold text-emerald-400">100+</div><div class="text-xs text-gray-400">MEMBERS</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold">O</span>
                        </div>
                        <span class="font-bold text-white text-lg">One Stop Solutions</span>
                    </div>
                    <p class="text-sm">Transforming customer experiences since 2014.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Careers</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">Resources</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Portfolio</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Testimonials</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">Connect</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-emerald-500 transition"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-emerald-500 transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-emerald-500 transition"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>&copy; 2024 One Stop Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init({ duration: 800, once: true, offset: 100 });
    
    // Smooth scroll for anchor links - Account for header height
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const navbar = document.getElementById('navbar');
                const navbarHeight = navbar ? navbar.offsetHeight : 80;
                window.scrollTo({ 
                    top: target.offsetTop - navbarHeight, 
                    behavior: 'smooth' 
                });
            }
        });
    });
</script>
</body>
</html>