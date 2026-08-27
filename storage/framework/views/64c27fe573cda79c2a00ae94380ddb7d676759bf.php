<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Download App'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Download App</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Download App</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- App Unavailable Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <div class="flex flex-col items-center">
                <img src="temp/custom/images/105536.png" alt="App Unavailable" class="w-32 h-auto mb-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">App not available in your current location</h2>
                <p class="text-lg text-gray-600">
                    We're working on expanding our app availability to more regions. Please check back later or use our web banking services in the meantime.
                </p>
            </div>
        </div>

        <div class="h-px w-full bg-gray-200 mb-16"></div>

        <!-- App Features Section -->
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                MOBILE BANKING
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Banking at Your Fingertips
            </h2>
            <p class="text-lg text-gray-600">
                Our mobile app provides secure and convenient access to your accounts anytime, anywhere.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="shield-check" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Secure Authentication</h3>
                <p class="text-gray-600">Protect your accounts with biometric login, two-factor authentication, and advanced encryption.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="credit-card" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Card Management</h3>
                <p class="text-gray-600">Lock/unlock your cards, set spending limits, and receive real-time transaction alerts.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="send" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Easy Transfers</h3>
                <p class="text-gray-600">Send money to friends and family, pay bills, and make international transfers with just a few taps.</p>
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
                <p class="text-gray-600">Download our app for iPhone and iPad from the App Store.</p>
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
                <p class="text-gray-600">Get our app for Android devices from Google Play Store.</p>
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
                <p class="text-gray-600">Enable our Alexa skill for voice banking on your Echo devices.</p>
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
                <p class="text-gray-600">Add our Slack integration to manage your accounts from your workspace.</p>
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
                <p class="text-gray-600">Use our Google Assistant integration for hands-free banking.</p>
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
                <p class="text-gray-600">Connect your accounts with our Facebook integration for easy access.</p>
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

<!-- App Notification Section -->
<section class="py-16 bg-primary-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Get Notified When Available</h3>
                        <p class="text-gray-600">
                            We'll let you know as soon as our app becomes available in your region.
                        </p>
                    </div>
                    <div class="w-full md:w-auto">
                        <form class="flex flex-col sm:flex-row gap-3">
                            <input 
                                type="email" 
                                placeholder="Your email address" 
                                class="px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                            >
                            <button 
                                type="submit" 
                                class="px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors"
                            >
                                Notify Me
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/home/app.blade.php ENDPATH**/ ?>