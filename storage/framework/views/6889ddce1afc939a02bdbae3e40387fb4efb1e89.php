<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo e($settings->site_name); ?> was launched to make online banking easy and fast.">
    <meta name="keywords" content="Bank,<?php echo e($settings->site_name); ?>, Internet Banking"/>
    <meta property="og:description" content="<?php echo e($settings->site_name); ?> was launched to make online banking easy and fast.">
    <link rel="canonical" href="/">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="<?php echo e($settings->site_name); ?>">
    <title><?php echo e($settings->site_name); ?> - Dedicated to innovating, simplifying, and humanizing digital banking.</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('storage/app/public/'.$settings->favicon)); ?>">
    
    <!-- Initial theme colors setup (before anything else loads) -->
    <script>
        // Set CSS theme variables - these match our Tailwind theme
        document.documentElement.style.setProperty('--primary-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color : "#0ea5e9"); ?>');
        document.documentElement.style.setProperty('--primary-color-dark', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_dark : "#0369a1"); ?>');
        document.documentElement.style.setProperty('--primary-color-light', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#38bdf8"); ?>');
        document.documentElement.style.setProperty('--primary-color-lightest', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#bae6fd"); ?>');
        document.documentElement.style.setProperty('--secondary-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color : "#14b8a6"); ?>');
        document.documentElement.style.setProperty('--secondary-color-dark', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_dark : "#0f766e"); ?>');
        document.documentElement.style.setProperty('--secondary-color-light', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#2dd4bf"); ?>');
        document.documentElement.style.setProperty('--accent-color', '#ec4899');
        document.documentElement.style.setProperty('--text-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->text_color : "#111827"); ?>');
        document.documentElement.style.setProperty('--bg-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->bg_color : "#f9fafb"); ?>');
        document.documentElement.style.setProperty('--sidebar-bg-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->sidebar_bg_color : "#1e293b"); ?>');
        document.documentElement.style.setProperty('--sidebar-text-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->sidebar_text_color : "#ffffff"); ?>');
        document.documentElement.style.setProperty('--card-bg-color', '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->card_bg_color : "#ffffff"); ?>');
    </script>
    
    <!-- Tailwind CSS with custom color variables -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#f0f9ff"); ?>',
                            100: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#e0f2fe"); ?>',
                            200: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#bae6fd"); ?>',
                            300: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#7dd3fc"); ?>',
                            400: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_light : "#38bdf8"); ?>',
                            500: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color : "#0ea5e9"); ?>',
                            600: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color : "#0284c7"); ?>',
                            700: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_dark : "#0369a1"); ?>',
                            800: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_dark : "#075985"); ?>',
                            900: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->primary_color_dark : "#0c4a6e"); ?>',
                        },
                        secondary: {
                            50: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#f0fdfa"); ?>',
                            100: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#ccfbf1"); ?>',
                            200: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#99f6e4"); ?>',
                            300: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#5eead4"); ?>',
                            400: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_light : "#2dd4bf"); ?>',
                            500: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color : "#14b8a6"); ?>',
                            600: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color : "#0d9488"); ?>',
                            700: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_dark : "#0f766e"); ?>',
                            800: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_dark : "#115e59"); ?>',
                            900: '<?php echo e(isset($appearanceSettings) ? $appearanceSettings->secondary_color_dark : "#134e4a"); ?>',
                        },
                        accent: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843',
                        }
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Custom styles */
        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }
        
        .gradient-bg {
            background-image: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }
        
        .gradient-border {
            border-image: linear-gradient(to right, var(--primary-color), var(--secondary-color)) 1;
        }
        
        /* Preloader animation */
        @keyframes  spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }
        
        .preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid var(--primary-color-lightest);
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color-light);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        
        /* Mobile menu transitions */
        .mobile-menu {
            transition: opacity 0.3s ease-out, transform 0.3s ease-out;
            opacity: 0;
            transform: scale(0.95);
            display: none;
        }
        
        .mobile-menu.show {
            opacity: 1;
            transform: scale(1);
            display: block;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="sticky top-0 z-50 glass-effect border-b border-gray-200 shadow-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="/" class="flex items-center">
                            <img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" alt="<?php echo e($settings->site_name); ?>" class="h-10 w-auto">
                        </a>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-1">
                        <a href="/" class="px-3 py-2 rounded-md text-sm font-medium text-primary-700 hover:bg-primary-50 transition-colors">
                            Home
                        </a>
                        <a href="business" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-100 hover:bg-primary-50 transition-colors">
                            Business
                        </a>
                        <a href="personal" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-100 hover:bg-primary-50 transition-colors">
                            Personal
                        </a>
                        <a href="cards" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-100 hover:bg-primary-50 transition-colors">
                            Credit Cards
                        </a>
                        <a href="loans" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-100 hover:bg-primary-50 transition-colors">
                            Loans
                        </a>
                        <a href="contact" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-100 hover:bg-primary-50 transition-colors">
                            Support
                        </a>
                    </nav>
                    
                    <!-- Desktop User Menu & Login Button -->
                  <div class="hidden md:flex items-center space-x-4">
    <?php if(auth()->guard()->check()): ?>
        <!-- Show when user is logged in -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" @click.away="open = false" class="flex items-center text-gray-700 hover:text-primary-600 transition-colors">
                <i data-lucide="user" class="h-5 w-5 mr-1"></i>
                <span class="text-sm font-medium">My Account</span>
                <i data-lucide="chevron-down" class="h-4 w-4 ml-1"></i>
            </button>
            
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-100" 
                 x-transition:enter-start="transform opacity-0 scale-95" 
                 x-transition:enter-end="transform opacity-100 scale-100" 
                 x-transition:leave="transition ease-in duration-75" 
                 x-transition:leave-start="transform opacity-100 scale-100" 
                 x-transition:leave-end="transform opacity-0 scale-95" 
                 class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1"
                 style="display: none;">
                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-700">Dashboard</a>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-700">Log Out</button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <!-- Show when user is not logged in -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" @click.away="open = false" class="flex items-center text-gray-700 hover:text-primary-600 transition-colors">
                <i data-lucide="user" class="h-5 w-5 mr-1"></i>
                <span class="text-sm font-medium">Account</span>
                <i data-lucide="chevron-down" class="h-4 w-4 ml-1"></i>
            </button>
            
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-100" 
                 x-transition:enter-start="transform opacity-0 scale-95" 
                 x-transition:enter-end="transform opacity-100 scale-100" 
                 x-transition:leave="transition ease-in duration-75" 
                 x-transition:leave-start="transform opacity-100 scale-100" 
                 x-transition:leave-end="transform opacity-0 scale-95" 
                 class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1"
                 style="display: none;">
                <a href="login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-700">Sign In</a>
                <a href="register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-700">Sign Up</a>
            </div>
        </div>
    <?php endif; ?>
    
    <a href="<?php echo e(auth()->check() ? '/dashboard' : 'login'); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
        ONLINE BANKING
        <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
    </a>
</div>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-primary-600 hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                            <span class="sr-only">Open main menu</span>
                            <i data-lucide="menu" id="menu-icon" class="h-6 w-6"></i>
                            <i data-lucide="x" id="close-icon" class="h-6 w-6" style="display: none;"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile menu -->
                <div id="mobile-menu" class="md:hidden mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-primary-700 hover:bg-primary-50">
                            Home
                        </a>
                        <a href="business" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
                            Business
                        </a>
                        <a href="personal" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
                            Personal
                        </a>
                        <a href="cards" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
                            Credit Cards
                        </a>
                        <a href="loans" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
                            Loans
                        </a>
                        <a href="contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
                            Support
                        </a>
                    </div>
                    
                    <div class="pt-4 pb-3 border-t border-gray-200">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <i data-lucide="user" class="h-10 w-10 rounded-full bg-primary-100 p-2 text-gray-100"></i>
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium text-gray-800">Account</div>
                                <div class="text-sm font-medium text-gray-500">Manage your account</div>
                            </div>
                        </div>
                        <div class="mt-3 px-2 space-y-1">
    <?php if(auth()->guard()->check()): ?>
        <!-- Show when user is logged in (mobile) -->
        <a href="/dashboard" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
            Dashboard
        </a>
        <a href="/dashboard" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary-600 hover:bg-primary-700 mt-2">
            ONLINE BANKING
        </a>
    <?php else: ?>
        <!-- Show when user is not logged in (mobile) -->
        <a href="login" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
            Sign In
        </a>
        <a href="register" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-700 hover:bg-primary-50">
            Sign Up
        </a>
        <a href="login" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary-600 hover:bg-primary-700 mt-2">
            ONLINE BANKING
        </a>
    <?php endif; ?>
</div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white pt-16 pb-6">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                    <!-- Column 1: About -->
                    <div class="lg:col-span-2">
                        <a href="/" class="inline-block mb-6">
                            <img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" alt="<?php echo e($settings->site_name); ?>" class="h-10 w-auto">
                        </a>
                        <p class="text-gray-300 mb-6 max-w-md">
                            We are now one of the largest digital banking providers, dedicated to innovating, simplifying, and humanizing banking.
                        </p>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                                <i data-lucide="facebook" class="h-5 w-5"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                                <i data-lucide="twitter" class="h-5 w-5"></i>
                            </a>
                            <a href="https://instagram.com/" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                                <i data-lucide="instagram" class="h-5 w-5"></i>
                            </a>
                            <a href="https://linkedin.com/" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                                <i data-lucide="linkedin" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Column 2: Company -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 text-white">Company</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="about" class="text-gray-300 hover:text-white transition-colors">About Us</a>
                            </li>
                            <li>
                                <a href="business" class="text-gray-300 hover:text-white transition-colors">Business Banking</a>
                            </li>
                            <li>
                                <a href="personal" class="text-gray-300 hover:text-white transition-colors">Personal Banking</a>
                            </li>
                            <li>
                                <a href="cards" class="text-gray-300 hover:text-white transition-colors">Credit Cards</a>
                            </li>
                            <li>
                                <a href="loans" class="text-gray-300 hover:text-white transition-colors">Loans</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Column 3: Resources -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 text-white">Resources</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="contact" class="text-gray-300 hover:text-white transition-colors">Contact Us</a>
                            </li>
                            <li>
                                <a href="faq" class="text-gray-300 hover:text-white transition-colors">FAQ's</a>
                            </li>
                            <li>
                                <a href="apps" class="text-gray-300 hover:text-white transition-colors">Download App</a>
                            </li>
                            <li>
                                <a href="terms-of-service" class="text-gray-300 hover:text-white transition-colors">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-of-service" class="text-gray-300 hover:text-white transition-colors">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Column 4: Contact -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 text-white">Contact Us</h3>
                        <ul class="space-y-4">
                            <li class="flex">
                                <i data-lucide="map-pin" class="h-5 w-5 text-primary-400 mr-3 flex-shrink-0"></i>
                                <span class="text-gray-300"><?php echo e($settings->address); ?></span>
                            </li>
                            <li class="flex">
                                <i data-lucide="mail" class="h-5 w-5 text-primary-400 mr-3 flex-shrink-0"></i>
                                <span class="text-gray-300"><?php echo e($settings->contact_email); ?></span>
                            </li>
                            <li class="flex">
                                <i data-lucide="phone" class="h-5 w-5 text-primary-400 mr-3 flex-shrink-0"></i>
                                <span class="text-gray-300">VIP ONLY</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="border-t border-gray-800 pt-6 mt-6">
                    <p class="text-center text-gray-400 text-sm">
                        &copy; <?php echo e(date('Y')); ?> <?php echo e($settings->site_name); ?>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </footer>
        
        <!-- Back to top button -->
        <button id="back-to-top" class="fixed bottom-6 right-6 p-2 rounded-full bg-primary-600 text-white shadow-lg hidden hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 transition-colors">
            <i data-lucide="chevron-up" class="h-6 w-6"></i>
        </button>
    </div>

    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element_mobile');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();
            
            // Preloader
            setTimeout(function() {
                const preloader = document.getElementById('preloader');
                preloader.classList.add('hidden');
            }, 500);
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            mobileMenuButton.addEventListener('click', function() {
                if (mobileMenu.classList.contains('show')) {
                    // Close menu
                    mobileMenu.classList.remove('show');
                    menuIcon.style.display = 'block';
                    closeIcon.style.display = 'none';
                    
                    // Add a small delay before hiding the menu completely
                    setTimeout(function() {
                        if (!mobileMenu.classList.contains('show')) {
                            mobileMenu.style.display = 'none';
                        }
                    }, 300);
                } else {
                    // Open menu
                    mobileMenu.style.display = 'block';
                    
                    // Force a reflow to ensure the display change takes effect before adding the class
                    void mobileMenu.offsetWidth;
                    
                    mobileMenu.classList.add('show');
                    menuIcon.style.display = 'none';
                    closeIcon.style.display = 'block';
                }
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnMenuButton = mobileMenuButton.contains(event.target);
                
                if (!isClickInsideMenu && !isClickOnMenuButton && mobileMenu.classList.contains('show')) {
                    mobileMenu.classList.remove('show');
                    menuIcon.style.display = 'block';
                    closeIcon.style.display = 'none';
                    
                    setTimeout(function() {
                        if (!mobileMenu.classList.contains('show')) {
                            mobileMenu.style.display = 'none';
                        }
                    }, 300);
                }
            });
            
            // Back to top button
            const backToTopButton = document.getElementById('back-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('hidden');
                } else {
                    backToTopButton.classList.add('hidden');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html><?php /**PATH /home/atlantictruist/public_html/resources/views/layouts/base.blade.php ENDPATH**/ ?>