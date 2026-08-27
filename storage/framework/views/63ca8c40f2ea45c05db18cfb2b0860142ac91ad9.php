<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Business Banking'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Business Banking</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Business Banking</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Bonus Offer Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?>

            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                You can get a $300 bonus if you have a business checking account and take certain tasks.
            </h2>
        </div>

        <!-- Business Banking Description -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Business Banking</h3>
                <p class="text-gray-600 mb-6">
                    A variety of services given by a bank to a business or corporation is known as business banking. Our Business banking services include loans, credit, savings accounts, and checking accounts, all of which are tailored to the needs of the company.
                </p>
                
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">A mix of current and savings accounts to cover your banking needs.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">Accounts that complement each other, combining to suit the needs of each individual's cash portfolio.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">A range of benefits including instant access to funds, free day-to-day transactions and fee-free currency conversion – see account pages for individual details.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">All personal accounts can have up to four joint account holders, apart from the Cash Hub Account which can have two.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">A mix of current and savings accounts to cover your banking needs.</span>
                    </li>
                </ul>
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
                        <a href="login" class="hover:text-gray-100 transition-colors">Apple iOS</a>
                    </h3>
                </div>
                <p class="text-gray-600">Access your business accounts seamlessly on your iPhone or iPad.</p>
            </div>
            
            <!-- Google Android -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="smartphone" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="chart" class="hover:text-gray-100 transition-colors">Google Android</a>
                    </h3>
                </div>
                <p class="text-gray-600">Manage your business finances on any Android device with our app.</p>
            </div>
            
            <!-- Alexa -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="speaker" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="alerts" class="hover:text-gray-100 transition-colors">Alexa</a>
                    </h3>
                </div>
                <p class="text-gray-600">Check balances and transactions with simple voice commands.</p>
            </div>
            
            <!-- Slack -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="message-square" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-gray-100 transition-colors">Slack</a>
                    </h3>
                </div>
                <p class="text-gray-600">Integrate banking notifications directly into your team's workflow.</p>
            </div>
            
            <!-- Google Assistant -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="mic" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-gray-100 transition-colors">Google Assistant</a>
                    </h3>
                </div>
                <p class="text-gray-600">Voice-activated banking services through Google Assistant.</p>
            </div>
            
            <!-- Facebook -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 group-hover:bg-primary-600 group-hover:text-white transition-colors">
                        <i data-lucide="facebook" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-4">
                        <a href="register" class="hover:text-gray-100 transition-colors">Facebook</a>
                    </h3>
                </div>
                <p class="text-gray-600">Connect your business accounts with Facebook for seamless integration.</p>
            </div>
        </div>
    </div>
</section>

<!-- App Download Section -->
<section class="py-16 md:py-24 bg-gray-50">
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
                        OUR APP
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Let's Answer Some Of Your Questions Or Download Our App</h2>
                    <p class="text-lg text-gray-600">
                        Our digital banking platform is up to date and completely trustworthy.
                        You can use your mobile to perform transactions, loan requests, and credit card transactions.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-xl font-semibold text-gray-900 mb-4">Over 9.2 million Downloads Worldwide</h5>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/business.blade.php ENDPATH**/ ?>