<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Personal Banking'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Personal Banking</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Personal Banking</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Personal Banking Intro Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?>

            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Personal Checking, Savings, Credit Cards, Loans That Works For You.
            </h2>
        </div>

        <!-- Personal Banking Description -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Personal Banking</h3>
                <p class="text-gray-600 mb-6">
                    We offer personal banking products that typically include savings and transaction facilities such as a bank transaction account, debit cards/EFT, an interest bearing floating account (savings account) and a fixed interest deposit account for a specific agreed period (certificates of deposit / term deposit) which can vary according to the bank.
                </p>
                
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">To meet your banking needs, you'll need a combination of current and savings accounts.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">Complementary accounts that work together to meet the demands of each individual's cash portfolio.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">Instant access to cash, free day-to-day transactions, and fee-free currency conversion are just a few of the benefits – visit individual account sites for more information.</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                        <span class="text-gray-700">Except for the Cash Hub Account, which can only have two joint account holders, other personal accounts can have up to four joint account holders.</span>
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
                        <a href="register" class="hover:text-gray-100 transition-colors">Apple iOS</a>
                    </h3>
                </div>
                <p class="text-gray-600">Manage your personal finances on iPhone and iPad with our intuitive app.</p>
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
                <p class="text-gray-600">Access your accounts anytime, anywhere on your Android device.</p>
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
                <p class="text-gray-600">Check your balance and recent transactions with simple voice commands.</p>
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
                <p class="text-gray-600">Receive account notifications and updates directly in your Slack workspace.</p>
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
                <p class="text-gray-600">Manage your accounts hands-free with Google Assistant integration.</p>
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
                <p class="text-gray-600">Connect your accounts with Facebook for convenient access and notifications.</p>
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

<!-- Personal Banking Features Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                PERSONAL BANKING FEATURES
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Banking Solutions Designed For Your Lifestyle
            </h2>
            <p class="text-lg text-gray-600">
                Discover our range of personal banking products and services tailored to meet your financial needs.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1: Checking Accounts -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="credit-card" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Checking Accounts</h3>
                <p class="text-gray-600 mb-4">Flexible checking accounts with no minimum balance requirements and free online banking access.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Feature 2: Savings Accounts -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="piggy-bank" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Savings Accounts</h3>
                <p class="text-gray-600 mb-4">High-yield savings accounts to help you reach your financial goals faster with competitive interest rates.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Feature 3: Credit Cards -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="credit-card" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Credit Cards</h3>
                <p class="text-gray-600 mb-4">Reward yourself with our range of credit cards offering cashback, travel rewards, and low interest rates.</p>
                <a href="cards" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Feature 4: Personal Loans -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="landmark" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Personal Loans</h3>
                <p class="text-gray-600 mb-4">Flexible personal loans with competitive rates for debt consolidation, home improvements, and more.</p>
                <a href="loans" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Feature 5: Mortgages -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="home" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Mortgages</h3>
                <p class="text-gray-600 mb-4">Find the right mortgage solution with competitive rates and flexible terms to suit your needs.</p>
                <a href="loans" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
            
            <!-- Feature 6: Investment Services -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="trending-up" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Investment Services</h3>
                <p class="text-gray-600 mb-4">Grow your wealth with our range of investment options and expert financial advice.</p>
                <a href="login" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                    Learn More
                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/personal.blade.php ENDPATH**/ ?>