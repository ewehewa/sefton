<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $__env->startSection('title', 'Terms Of Data'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Terms Of Data</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Terms Of Data</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Terms Introduction Section -->
<section class="py-16 md:py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?> POLICY
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Learn more about how <?php echo e($settings->site_name); ?> protects and uses your personal information.
            </h2>
        </div>

        <!-- Terms Content -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Terms Of Data</h3>
                
                <div class="prose prose-lg max-w-none text-gray-600 space-y-6">
                    <p>
                        We are <?php echo e($settings->site_name); ?> Private Bank, the data controller. You can 
                        contact our Data Protection Officer (DPO) at Salisbury Road, South West 
                        London, Hounslow, TW4 if you have any questions.
                    </p>

                    <p>
                        This is our Privacy Statement which explains how we obtain, use and keep 
                        your personal data safe in relation to the <?php echo e($settings->site_name); ?> website 
                        (gateleyprivate.com).
                    </p>

                    <p>
                        Your personal data is data which by itself or with other data available 
                        to us can be used to identify you.
                    </p>

                    <p>
                        We're committed to keeping your personal information safe in accordance 
                        with applicable data protection laws.
                    </p>

                    <h4 class="text-xl font-semibold text-gray-900 mt-8 mb-4">The types of personal data we collect and use</h4>

                    <p>
                        The types of personal data we capture and use will depend on what you 
                        are doing on the website. We'll use your personal data for some or all 
                        of the reasons set out in this Privacy Statement. If you become a 
                        customer we'll also use it to manage the account, policy or service 
                        you've applied for and we'll provide you with a separate data protection 
                        statement specifically in relation to that as part of the application 
                        process. Some of the information relevant to that is included in this 
                        Privacy Statement for consistency. Examples of the personal data we use 
                        in relation to our websites may include:
                    </p>

                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            Full name and personal details including contact information (e.g. home 
                            address and address history, email address, home and mobile telephone 
                            numbers);
                        </li>
                        <li>
                            Date of birth and/or age (e.g. to make sure that you are eligible to 
                            apply for a product or service);
                        </li>
                        <li>
                            Financial details (e.g. salary and details of other income, and details 
                            of accounts held with other providers if you apply for a product or 
                            service with us);
                        </li>
                        <li>
                            Records of products and services you've obtained or applied for, how you 
                            use them and the relevant technology used to access or manage them (e.g. 
                            mobile phone location data, IP address, MAC address);
                        </li>
                        <li>
                            Biometric data (e.g. fingerprints and voice recordings for Touch ID and 
                            voice recognition);
                        </li>
                        <li>
                            Information from credit reference or fraud prevention agencies, 
                            electoral roll, court records of debt judgement and bankruptcies and 
                            other publicly available sources as well as information on any financial 
                            associates you may have if you apply for a product or service with us;
                        </li>
                        <li>
                            Family, lifestyle or social circumstances if relevant to the product or 
                            service you apply for (e.g. the number of dependants you have);
                        </li>
                        <li>
                            Education and employment details/employment status for credit and fraud 
                            prevention purposes if you apply for a product or service with us; and
                        </li>
                        <li>
                            Personal data about other named individuals as required. Where you 
                            provide the personal data of others you must have their authority to 
                            provide their personal data to us and share this Privacy Statement and 
                            any related data protection statement with them beforehand together with 
                            details of what you've agreed on their behalf.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Protection Principles -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Data Protection Principles</h3>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Principle 1 -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center flex-shrink-0 mr-4">
                                <i data-lucide="shield" class="h-5 w-5 text-gray-100"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900">Security First</h4>
                        </div>
                        <p class="text-gray-600">
                            We implement robust security measures to protect your personal data from unauthorized access, alteration, disclosure, or destruction.
                        </p>
                    </div>
                    
                    <!-- Principle 2 -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center flex-shrink-0 mr-4">
                                <i data-lucide="eye" class="h-5 w-5 text-gray-100"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900">Transparency</h4>
                        </div>
                        <p class="text-gray-600">
                            We are clear about what data we collect and how we use it, ensuring you're always informed about our data practices.
                        </p>
                    </div>
                    
                    <!-- Principle 3 -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center flex-shrink-0 mr-4">
                                <i data-lucide="check-circle" class="h-5 w-5 text-gray-100"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900">Purpose Limitation</h4>
                        </div>
                        <p class="text-gray-600">
                            We only collect and process data for specified, explicit, and legitimate purposes, and don't process it in ways incompatible with those purposes.
                        </p>
                    </div>
                    
                    <!-- Principle 4 -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center flex-shrink-0 mr-4">
                                <i data-lucide="user" class="h-5 w-5 text-gray-100"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900">Individual Rights</h4>
                        </div>
                        <p class="text-gray-600">
                            We respect your rights to access, correct, delete, and port your personal data, and to object to or restrict its processing.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Platform Integration Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
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
                <p class="text-gray-600">Access our services securely on your iPhone and iPad devices.</p>
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
                <p class="text-gray-600">Manage your accounts on Android devices with our secure app.</p>
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
                <p class="text-gray-600">Use voice commands to check balances and perform basic banking tasks.</p>
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
                <p class="text-gray-600">Receive account notifications and updates in your Slack workspace.</p>
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
                <p class="text-gray-600">Manage your accounts with voice commands through Google Assistant.</p>
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
                <p class="text-gray-600">Connect your accounts with Facebook for convenient access and notifications.</p>
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
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-primary-800 text-sm font-medium mb-4">
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
                        <a href="apps" class="transition-transform hover:scale-105">
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

<!-- Cookie Policy Section -->
<section class="py-16 md:py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                COOKIE POLICY
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                How We Use Cookies
            </h2>
            <p class="text-lg text-gray-600">
                We use cookies to enhance your browsing experience, analyze site traffic, and personalize content.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h4 class="text-xl font-semibold text-gray-900 mb-4">What are cookies?</h4>
                    <p>
                        Cookies are small text files that are placed on your device when you visit a website. They are widely used to make websites work more efficiently and provide information to the website owners.
                    </p>
                    
                    <h4 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Types of cookies we use</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                            <div>
                                <span class="font-medium text-gray-900">Essential Cookies:</span>
                                <p class="mt-1">These cookies are necessary for the website to function properly and cannot be switched off in our systems.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                            <div>
                                <span class="font-medium text-gray-900">Performance Cookies:</span>
                                <p class="mt-1">These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                            <div>
                                <span class="font-medium text-gray-900">Functional Cookies:</span>
                                <p class="mt-1">These cookies enable the website to provide enhanced functionality and personalization.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-3 mt-0.5 flex-shrink-0"></i>
                            <div>
                                <span class="font-medium text-gray-900">Targeting Cookies:</span>
                                <p class="mt-1">These cookies may be set through our site by our advertising partners to build a profile of your interests.</p>
                            </div>
                        </li>
                    </ul>
                    
                    <h4 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Managing cookies</h4>
                    <p>
                        You can set your browser to block or alert you about these cookies, but some parts of the site will not work if you do. To learn more about cookies and how to manage them, visit <a href="https://www.allaboutcookies.org/" class="text-primary-600 hover:text-primary-700" target="_blank" rel="noopener noreferrer">www.allaboutcookies.org</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/terms.blade.php ENDPATH**/ ?>