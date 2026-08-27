<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Credit Cards'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 overflow-hidden pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Credit Cards</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Credit Cards</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Credit Cards Intro Section -->
<section class="py-16 md:py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?>

            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                We Invite You to See if You're Pre-Approved for a Credit Card from <?php echo e($settings->site_name); ?>

            </h2>
        </div>

        <!-- Card Types Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <div class="flex items-center mb-4">
                    <i data-lucide="credit-card" class="h-6 w-6 text-primary-600 mr-2"></i>
                    <h3 class="text-xl font-bold text-gray-900">CARD DETAILS</h3>
                </div>
                <div class="h-px w-full bg-gray-200 mb-8"></div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- VISA -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/349221.png" alt="VISA" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">VISA</span>
                    </div>
                    
                    <!-- MAESTRO -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/147258.png" alt="MAESTRO" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">MAESTRO</span>
                    </div>
                    
                    <!-- AMEX -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/349228.png" alt="AMEX" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">AMEX</span>
                    </div>
                    
                    <!-- DISCOVER -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/349230.png" alt="DISCOVER" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">DISCOVER</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Apply for Credit Cards Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="flex justify-center">
                        <img src="temp/custom/images/1086741.png" alt="Credit Card" class="w-48 md:w-64 h-auto">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Apply For Credit Cards</h3>
                        <p class="text-gray-600 mb-6">
                            Welcome to <?php echo e($settings->site_name); ?>, Apply For Credit Cards to be delivered to your doorstep today.
                        </p>
                        <a href="login" class="inline-flex items-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors">
                            Apply Now
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Credit Card Features -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="shield" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Fraud Protection</h3>
                <p class="text-gray-600">Our cards come with advanced fraud monitoring and zero liability protection for unauthorized charges.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="gift" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Rewards Program</h3>
                <p class="text-gray-600">Earn points on every purchase that can be redeemed for travel, merchandise, or cash back.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="lock" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Card Lock/Unlock</h3>
                <p class="text-gray-600">Instantly lock your card if lost or stolen, and unlock it just as quickly if found, all from our mobile app.</p>
            </div>
        </div>

        <!-- Platform Integration Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Apple iOS -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="apple" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="send-money" class="hover:text-primary-600 transition-colors">Apple iOS</a>
                    </h3>
                </div>
                <p class="text-gray-600">Manage your credit cards on iPhone and iPad with our secure mobile app.</p>
            </div>
            
            <!-- Google Android -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="smartphone" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="chart" class="hover:text-primary-600 transition-colors">Google Android</a>
                    </h3>
                </div>
                <p class="text-gray-600">Access your credit card accounts anytime, anywhere on your Android device.</p>
            </div>
            
            <!-- Alexa -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="speaker" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="alerts" class="hover:text-primary-600 transition-colors">Alexa</a>
                    </h3>
                </div>
                <p class="text-gray-600">Check your credit card balance and recent transactions with simple voice commands.</p>
            </div>
            
            <!-- Slack -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="message-square" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-primary-600 transition-colors">Slack</a>
                    </h3>
                </div>
                <p class="text-gray-600">Receive credit card notifications and updates directly in your Slack workspace.</p>
            </div>
            
            <!-- Google Assistant -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="mic" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-primary-600 transition-colors">Google Assistant</a>
                    </h3>
                </div>
                <p class="text-gray-600">Manage your credit cards hands-free with Google Assistant integration.</p>
            </div>
            
            <!-- Facebook -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="facebook" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-primary-600 transition-colors">Facebook</a>
                    </h3>
                </div>
                <p class="text-gray-600">Connect your credit card accounts with Facebook for convenient access and notifications.</p>
            </div>
        </div>
    </div>
</section>

<!-- App Download Section -->
<section class="py-16 md:py-24 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- App Image -->
            <div class="relative" data-aos="fade-up" data-aos-duration="1000">
                <div class="absolute -top-10 -left-10 w-64 h-64 bg-primary-100 rounded-full opacity-30 blur-xl"></div>
                <div class="relative z-10">
                    <img src="temp/custom/assets/img/shape-4.png" alt="Shape" class="absolute -top-8 -right-8 w-20 h-20 animate-bounce">
                    <img src="temp/custom/assets/img/app-screen.png" alt="App Screen" class="mx-auto md:ml-0 max-w-full h-auto rounded-xl shadow-xl">
                </div>
            </div>
            
            <!-- App Content -->
            <div class="space-y-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                        OUR CARDS
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Protect Your Card From Anywhere</h2>
                    <p class="text-lg text-gray-600">
                        Leave your card at the restaurant or drop it at the concert? Instantly lock your card with a few taps. And if you find it, unlock it just as fast.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-xl font-semibold text-gray-900 mb-4">Over 2 million credit card users</h5>
                    <div class="flex flex-wrap gap-4">
                        <a href="app" class="transition-transform hover:scale-105">
                            <img src="temp/custom/assets/img/about/play-store.png" alt="Google Play" class="h-12">
                        </a>
                        <a href="app" class="transition-transform hover:scale-105">
                            <img src="temp/custom/assets/img/about/app-store.png" alt="App Store" class="h-12">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credit Card Comparison Section -->
<section class="py-16 md:py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                COMPARE CARDS
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Find The Right Card For Your Needs
            </h2>
            <p class="text-lg text-gray-600">
                Compare our credit card options to find the perfect fit for your lifestyle and spending habits.
            </p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-500">Card Type</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-500">Annual Fee</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-500">Rewards</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-500">APR</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Card 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center mr-3">
                                    <i data-lucide="credit-card" class="h-5 w-5 text-primary-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Cash Rewards</p>
                                    <p class="text-sm text-gray-500">For everyday spending</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-medium">$0</td>
                        <td class="px-6 py-4">3% cash back on all purchases</td>
                        <td class="px-6 py-4">14.99% - 24.99%</td>
                        <td class="px-6 py-4">
                            <a href="login" class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                Apply Now
                            </a>
                        </td>
                    </tr>
                    
                    <!-- Card 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-secondary-100 flex items-center justify-center mr-3">
                                    <i data-lucide="plane" class="h-5 w-5 text-secondary-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Travel Rewards</p>
                                    <p class="text-sm text-gray-500">For frequent travelers</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-medium">$95</td>
                        <td class="px-6 py-4">5x points on travel, 2x on dining</td>
                        <td class="px-6 py-4">16.99% - 26.99%</td>
                        <td class="px-6 py-4">
                            <a href="login" class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                Apply Now
                            </a>
                        </td>
                    </tr>
                    
                    <!-- Card 3 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-accent-100 flex items-center justify-center mr-3">
                                    <i data-lucide="percent" class="h-5 w-5 text-accent-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Low Interest</p>
                                    <p class="text-sm text-gray-500">For balance transfers</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-medium">$0</td>
                        <td class="px-6 py-4">1% cash back on all purchases</td>
                        <td class="px-6 py-4">9.99% - 19.99%</td>
                        <td class="px-6 py-4">
                            <a href="login" class="inline-flex items-center px-4 py-2 rounded-lg bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
                                Apply Now
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/home/cards.blade.php ENDPATH**/ ?>