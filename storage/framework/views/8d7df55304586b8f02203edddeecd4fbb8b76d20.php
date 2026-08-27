
<?php $__env->startSection('title', 'Home'); ?>
 
<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-b from-primary-50 to-white py-16 md:py-24">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-200 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-100 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute -bottom-10 right-1/4 w-72 h-72 bg-secondary-100 rounded-full opacity-20 blur-3xl"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,rgba(255,255,255,0.5),rgba(255,255,255,0.2))]" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 32 32\' width=\'32\' height=\'32\' fill=\'none\' stroke=\'%23E2E8F0\'%3E%3Cpath d=\'M0 .5H31.5V32\'/%3E%3C/svg%3E')"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium">
                    <i data-lucide="sparkles" class="h-4 w-4 mr-2"></i>
                    <span>SIMPLE, QUICK, SECURED</span>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
                    Transfer Money Across The World In Real Time
                </h1>

                <p class="text-lg text-gray-600 max-w-lg">
                    <?php echo e($settings->site_name); ?> transformed the digital banking industry using data and technology more than ten years ago. We are now one of the largest digital banking providers, dedicated to innovating, simplifying, and humanizing banking.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="login" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-lg shadow-primary-100 hover:bg-primary-700 transition-colors">
                        ONLINE BANKING
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=oDDbVC3Hekc" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-gray-700 font-medium border border-gray-200 hover:bg-gray-50 transition-colors">
                        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-gray-100 mr-2">
                            <i data-lucide="play" class="h-4 w-4"></i>
                        </span>
                        Watch Video
                    </a>
                </div>

                <div class="flex items-center pt-4">
                    <div class="flex -space-x-2 mr-4">
                        <img src="temp/custom/assets/img/testimonials/client-1.jpg" alt="Client" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="temp/custom/assets/img/testimonials/client-2.jpg" alt="Client" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="temp/custom/assets/img/testimonials/client-3.jpg" alt="Client" class="w-10 h-10 rounded-full border-2 border-white">
                    </div>
                    <p class="text-sm text-gray-600">
                        Need Help? Contact our <a href="contact" class="text-primary-600 font-medium hover:underline">digital support</a> & tell us about your query.
                    </p>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="absolute -top-10 -right-10 bg-primary-50 w-full h-full rounded-3xl transform rotate-3"></div>
                
                <!-- Active Users Badge -->
                <div class="absolute -top-5 -left-5 flex items-center space-x-2 bg-white px-4 py-2 rounded-full shadow-lg z-10 animate-pulse-slow">
                    <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-gray-100">
                        <i data-lucide="users" class="h-4 w-4"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Active Users</p>
                        <p class="text-sm font-bold">18.5M+</p>
                    </div>
                </div>
                
                <div class="relative bg-white p-4 rounded-3xl shadow-xl overflow-hidden">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-2xl overflow-hidden h-64">
                            <img src="temp/custom/assets/img/hero/hero-img-2.jpg" alt="Banking" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-64">
                            <img src="temp/custom/assets/img/hero/hero-img-3.jpg" alt="Banking" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="py-12 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16" x-data="{}" x-init="
            setTimeout(() => {
                const logos = $el.querySelectorAll('.partner-logo');
                setInterval(() => {
                    logos.forEach(logo => {
                        logo.classList.add('opacity-40', 'hover:opacity-100', 'transition-opacity', 'duration-300');
                    });
                }, 100);
            }, 1000)
        ">
            <img src="temp/custom/assets/img/partner/partner-1.png" alt="Partner" class="h-8 md:h-10 partner-logo">
            <img src="temp/custom/assets/img/partner/partner-2.png" alt="Partner" class="h-8 md:h-10 partner-logo">
            <img src="temp/custom/assets/img/partner/partner-3.png" alt="Partner" class="h-8 md:h-10 partner-logo">
            <img src="temp/custom/assets/img/partner/partner-4.png" alt="Partner" class="h-8 md:h-10 partner-logo">
            <img src="temp/custom/assets/img/partner/partner-5.png" alt="Partner" class="h-8 md:h-10 partner-logo">
            <img src="temp/custom/assets/img/partner/partner-6.png" alt="Partner" class="h-8 md:h-10 partner-logo">
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- About Images -->
            <div class="relative" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <div class="absolute -top-6 -left-6 w-64 h-64 bg-primary-100 rounded-full opacity-30 blur-xl"></div>
                
                <div class="relative grid grid-cols-2 gap-4">
                    <div class="rounded-2xl overflow-hidden h-80 col-span-2">
                        <img src="temp/custom/assets/img/about/about-img-5.jpg" alt="About" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-48">
                        <img src="temp/custom/assets/img/about/about-img-6.jpg" alt="About" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-48 bg-primary-600 flex items-center justify-center text-white p-6">
                        <div class="text-center">
                            <p class="text-3xl font-bold">10+</p>
                            <p class="text-sm">Years of Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- About Content -->
            <div class="space-y-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                        ABOUT US
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">We revolutionized Digital Banking</h2>
                    <p class="text-lg text-gray-600">We've grown to become one of the largest digital banking providers, committed to inventing, simplifying, and humanizing the banking experience.</p>
                </div>
                
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100">
                            <i data-lucide="smartphone" class="h-6 w-6"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Powerful Mobile & Online App</h3>
                            <p class="text-gray-600">Our mobile app service is quick and easy to use, and you can get it from your app store.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100">
                            <i data-lucide="bar-chart-2" class="h-6 w-6"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Brings More Transparency & Speed</h3>
                            <p class="text-gray-600">Our digital banking services are transparent and quick, and we're building a reliable network.</p>
                        </div>
                    </div>
                </div>
                
                <a href="about" class="inline-flex items-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors">
                    READ MORE
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Currency Tools Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                POPULAR CURRENCY TOOLS
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Set Up & Exchange Money From Your Cards In A Minute</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Tool 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="send" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Money Transfer</h3>
                <p class="text-gray-600 mb-4">With our digital platform, you may send money to relatives and friends all around the world.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    SEND MONEY
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Tool 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="pie-chart" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Currency Charts</h3>
                <p class="text-gray-600 mb-4">You can always watch the market's movement and make trading decisions with our currency charts.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    VIEW CHART
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Tool 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="bell" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Rate Alerts</h3>
                <p class="text-gray-600 mb-4">To enable our clients to convert, we at <?php echo e($settings->site_name); ?> provide the finest currency rates in the market.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    CREATE ALERT
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Tool 4 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="user-plus" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Create Account</h3>
                <p class="text-gray-600 mb-4">Create a free digital bank account with us today to send money around the world.</p>
                <a href="register" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    GET STARTED
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8 order-2 md:order-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                        WHY CHOOSE US
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">We are innovative and digital</h2>
                    <p class="text-lg text-gray-600"><?php echo e($settings->site_name); ?> transformed the credit card business using data and technology more than ten years ago. We are now one of the largest digital banking providers, dedicated to innovating, simplifying, and humanizing banking.</p>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i data-lucide="check" class="h-5 w-5"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Historical Currency Rates</h3>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i data-lucide="check" class="h-5 w-5"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Travel Expense Calculator</h3>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i data-lucide="check" class="h-5 w-5"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Currency Email Updates</h3>
                    </div>
                </div>
            </div>
            
            <!-- Images -->
            <div class="relative order-1 md:order-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="absolute -top-6 -right-6 w-64 h-64 bg-primary-100 rounded-full opacity-30 blur-xl"></div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="rounded-2xl overflow-hidden h-48">
                            <img src="temp/custom/assets/img/why-choose-us/wh-img-4.jpg" alt="Why Choose Us" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-48">
                            <img src="temp/custom/assets/img/why-choose-us/wh-img-5.jpg" alt="Why Choose Us" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="rounded-2xl overflow-hidden h-full">
                        <img src="temp/custom/assets/img/why-choose-us/wh-img-6.jpg" alt="Why Choose Us" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Exchange Rates Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                LIVE EXCHANGE RATES
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Exchange Money Across The World In Real Time With Lowest Fees</h2>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden" x-data="{ inverse: false }">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 text-left">
                            <th class="px-6 py-4 text-sm font-medium text-gray-500">
                                <div class="flex items-center gap-2">
                                    <span>Inverse</span>
                                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                        <input type="checkbox" id="toggle" x-model="inverse" class="sr-only">
                                        <label for="toggle" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                            <span :class="inverse ? 'translate-x-4 bg-primary-600' : 'translate-x-0 bg-white'" class="absolute block w-4 h-4 rounded-full bg-white border-2 border-gray-300 transform transition-transform duration-200 ease-in top-1 left-1"></span>
                                        </label>
                                    </div>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-500">Amount</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-500">Change(24h)</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-500">Chart(24h)</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-500">
                                <span class="flex items-center text-gray-100">
                                    <i data-lucide="edit" class="h-4 w-4 mr-1"></i>
                                    Edit
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Currency Row 1 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/usa.png" alt="USA" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">US Dollar</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">120.54</td>
                            <td class="px-6 py-4 text-green-600 font-medium">+0.50%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-1.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Currency Row 2 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/japan.png" alt="Japan" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">Japanese Yen</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">134.76</td>
                            <td class="px-6 py-4 text-green-600 font-medium">+0.24%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-2.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Currency Row 3 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/uk.png" alt="UK" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">British Pound</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">245.10</td>
                            <td class="px-6 py-4 text-red-600 font-medium">-0.30%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-3.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Currency Row 4 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/newzland.png" alt="New Zealand" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">New Zealand Dollar</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">0.7564</td>
                            <td class="px-6 py-4 text-red-600 font-medium">-0.063%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-4.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Currency Row 5 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/canada.png" alt="Canada" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">Canadian Dollar</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">1.2741</td>
                            <td class="px-6 py-4 text-red-600 font-medium">-0.76%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-5.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Currency Row 6 -->
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="temp/custom/assets/img/flag/france.png" alt="France" class="w-8 h-6 object-cover rounded">
                                    <span class="font-medium text-gray-900">Swiss Franc</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">15.063</td>
                            <td class="px-6 py-4 text-green-600 font-medium">+0.26%</td>
                            <td class="px-6 py-4">
                                <img src="temp/custom/assets/img/chart-img/chart-6.png" alt="Chart" class="h-8">
                            </td>
                            <td class="px-6 py-4">
                                <button class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                    <i data-lucide="send" class="h-4 w-4 mr-1"></i>
                                    Send
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-center px-6 py-4 border-t border-gray-200">
                <button class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 mb-4 sm:mb-0">
                    <i data-lucide="plus-circle" class="h-5 w-5 mr-2"></i>
                    Add Currency
                </button>
                <p class="text-sm text-gray-500">Last Updated Jan 20, 2022</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                YOUR BENEFITS
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Your one-stop digital banking platform</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="globe" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Global Coverage</h3>
                <p class="text-gray-600">Access your money and banking services from anywhere in the world with our comprehensive global coverage.</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="wallet" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Easy Transfer Method</h3>
                <p class="text-gray-600">Send and receive money with just a few clicks using our intuitive and user-friendly transfer system.</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="headphones" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Global 24/7 Support</h3>
                <p class="text-gray-600">Our dedicated support team is available around the clock to assist you with any banking needs.</p>
            </div>
            
            <!-- Benefit 4 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="percent" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Lowest Fee</h3>
                <p class="text-gray-600">Enjoy competitive rates and minimal fees on all your transactions and banking services.</p>
            </div>
            
            <!-- Benefit 5 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="zap" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Instant Processing</h3>
                <p class="text-gray-600">Experience lightning-fast transaction processing with our advanced banking infrastructure.</p>
            </div>
            
            <!-- Benefit 6 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="shield" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Bank Level Security</h3>
                <p class="text-gray-600">Rest easy knowing your money and data are protected by industry-leading security protocols.</p>
            </div>
        </div>
    </div>
</section>

<!-- Currency Profile Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                CURRENCY PROFILE
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get These Local Account Details Just Like Pay A Local</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Currency 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/usa.png" alt="USA" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">USD - US Dollar</h3>
                    <p class="text-gray-600">The world's primary reserve currency</p>
                </div>
            </div>
            
            <!-- Currency 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/eu.png" alt="EU" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">EUR - Euro</h3>
                    <p class="text-gray-600">The official currency of the Eurozone</p>
                </div>
            </div>
            
            <!-- Currency 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/uk.png" alt="UK" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">GBP - British Pound</h3>
                    <p class="text-gray-600">The official currency of the United Kingdom</p>
                </div>
            </div>
            
            <!-- Currency 4 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/canada.png" alt="Canada" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">CAD - Canadian Dollar</h3>
                    <p class="text-gray-600">The official currency of Canada</p>
                </div>
            </div>
            
            <!-- Currency 5 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/images/197582.png" alt="South Korea" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">KRW - South Korean won</h3>
                    <p class="text-gray-600">The official currency of South Korea</p>
                </div>
            </div>
            
            <!-- Currency 6 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/japan.png" alt="Japan" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">JPY - Japanese Yen</h3>
                    <p class="text-gray-600">The official currency of Japan</p>
                </div>
            </div>
            
            <!-- Currency 7 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/images/197375.png" alt="China" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">CNY - Chinese Yuan</h3>
                    <p class="text-gray-600">The official currency of China</p>
                </div>
            </div>
            
            <!-- Currency 8 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/newzland.png" alt="New Zealand" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">NZD - NZ Dollar</h3>
                    <p class="text-gray-600">The official currency of New Zealand</p>
                </div>
            </div>
            
            <!-- Currency 9 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex items-center gap-4">
                <img src="temp/custom/assets/img/flag/france.png" alt="Switzerland" class="w-12 h-12 object-cover rounded-full">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">CHF - Swiss Franc</h3>
                    <p class="text-gray-600">The official currency of Switzerland</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                OUR REVIEWS
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">More Than 18M+ Happy Customers Trust Our Services</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" x-data="{ activeSlide: 0 }">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 min-h-[300px] flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <img src="temp/custom/assets/img/testimonials/client-3.jpg" alt="Jim Morison" class="w-12 h-12 object-cover rounded-full">
                        <div>
                            <h3 class="font-semibold text-gray-900">Jim Morison</h3>
                            <p class="text-sm text-gray-500">Director, BAT</p>
                        </div>
                    </div>
                    <div class="text-primary-500">
                        <i data-lucide="quote" class="h-8 w-8"></i>
                    </div>
                </div>
                <p class="text-gray-600 flex-grow">I opened a checking and savings account at <?php echo e($settings->site_name); ?> on McHenry in Modesto, California. The teller who helped me was a pleasure to work with. She was very knowledgeable and through setting up my accounts. She made my day a pleasant day. Thank you for the terrific customer service.</p>
                <div class="flex mt-4">
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 min-h-[300px] flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <img src="temp/custom/assets/img/testimonials/client-4.jpg" alt="Alex Cruis" class="w-12 h-12 object-cover rounded-full">
                        <div>
                            <h3 class="font-semibold text-gray-900">Alex Cruis</h3>
                            <p class="text-sm text-gray-500">CEO, IBAC</p>
                        </div>
                    </div>
                    <div class="text-primary-500">
                        <i data-lucide="quote" class="h-8 w-8"></i>
                    </div>
                </div>
                <p class="text-gray-600 flex-grow">I opened a checking and savings account at <?php echo e($settings->site_name); ?> on McHenry in Modesto, California. The teller who helped me was a pleasure to work with. She was very knowledgeable and through setting up my accounts. She made my day a pleasant day. Thank you for the terrific customer service.</p>
                <div class="flex mt-4">
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 min-h-[300px] flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <img src="temp/custom/assets/img/testimonials/client-5.jpg" alt="Tom Haris" class="w-12 h-12 object-cover rounded-full">
                        <div>
                            <h3 class="font-semibold text-gray-900">Tom Haris</h3>
                            <p class="text-sm text-gray-500">Engineer, Olleo</p>
                        </div>
                    </div>
                    <div class="text-primary-500">
                        <i data-lucide="quote" class="h-8 w-8"></i>
                    </div>
                </div>
                <p class="text-gray-600 flex-grow">I've been with <?php echo e($settings->site_name); ?> for four years. I went through a loan modification with them, as well as a six-month forbearance. I also have a credit card with them, which they have cancelled after every late payment, as well as a cash account with withdrawal fees. They are always there to help me.</p>
                <div class="flex mt-4">
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="h-5 w-5 text-yellow-400 fill-current"></i>
                </div>
            </div>
        </div>
        
        <!-- Testimonial Navigation -->
        <div class="flex justify-center mt-8">
            <div class="flex space-x-2">
                <button class="w-3 h-3 rounded-full bg-primary-600"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary-400 transition-colors"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary-400 transition-colors"></button>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                OUR BLOG
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Keep Up To Date With Global Content From Our Trusted Team</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="relative">
                    <img src="temp/custom/assets/img/blog/blog-1.jpg" alt="Blog" class="w-full h-48 object-cover">
                    <span class="absolute top-4 right-4 bg-primary-600 text-white text-xs font-medium px-2 py-1 rounded">Corporate</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <div class="flex items-center mr-4">
                            <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                            <span>May 22, 2022</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="message-circle" class="h-4 w-4 mr-1"></i>
                            <span>10+ Comments</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        <a href="https://www.cnbc.com/2020/02/27/5-things-every-new-business-owner-needs-to-know-before-starting.html" target="_blank" class="hover:text-gray-100 transition-colors">5 Things You Need To Know Before Starting Business</a>
                    </h3>
                    <a href="https://www.cnbc.com/2020/02/27/5-things-every-new-business-owner-needs-to-know-before-starting.html" target="_blank" class="inline-flex items-center text-gray-100 font-medium hover:text-primary-700 transition-colors">
                        Read More
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                    </a>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="relative">
                    <img src="temp/custom/assets/img/blog/blog-2.jpg" alt="Blog" class="w-full h-48 object-cover">
                    <span class="absolute top-4 right-4 bg-secondary-600 text-white text-xs font-medium px-2 py-1 rounded">Consumer</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <div class="flex items-center mr-4">
                            <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                            <span>May 13, 2022</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="message-circle" class="h-4 w-4 mr-1"></i>
                            <span>10+ Comments</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        <a href="https://www.investopedia.com/articles/insights/122016/9-common-effects-inflation.asp" target="_blank" class="hover:text-gray-100 transition-colors">Effect Of Inflation On Our Daily Expenditure</a>
                    </h3>
                    <a href="https://www.investopedia.com/articles/insights/122016/9-common-effects-inflation.asp" target="_blank" class="inline-flex items-center text-gray-100 font-medium hover:text-primary-700 transition-colors">
                        Read More
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                    </a>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative">
                    <img src="temp/custom/assets/img/blog/blog-3.jpg" alt="Blog" class="w-full h-48 object-cover">
                    <span class="absolute top-4 right-4 bg-accent-600 text-white text-xs font-medium px-2 py-1 rounded">Finance</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <div class="flex items-center mr-4">
                            <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                            <span>Apr 15, 2022</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="message-circle" class="h-4 w-4 mr-1"></i>
                            <span>10+ Comments</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        <a href="https://www.airtreks.com/go/foreign-currency/" target="_blank" class="hover:text-gray-100 transition-colors">7 Tips To Get Best Exchange Rate In Currency</a>
                    </h3>
                    <a href="https://www.airtreks.com/go/foreign-currency/" target="_blank" class="inline-flex items-center text-gray-100 font-medium hover:text-primary-700 transition-colors">
                        Read More
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/index.blade.php ENDPATH**/ ?>