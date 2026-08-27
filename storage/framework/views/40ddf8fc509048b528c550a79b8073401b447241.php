<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Loans'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Loans</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Loans</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Loans Intro Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?>

            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                We've got you covered whether you're looking to pre-qualify for vehicle financing, refinancing your current auto loan, or have been pre-approved for an exclusive financing offer. Let's get started on your financial journey.
            </h2>
        </div>

        <!-- Loan Types Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <div class="flex items-center mb-4">
                    <i data-lucide="landmark" class="h-6 w-6 text-primary-600 mr-2"></i>
                    <h3 class="text-xl font-bold text-gray-900">LOAN DETAILS</h3>
                </div>
                <div class="h-px w-full bg-gray-200 mb-8"></div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- CAR LOAN -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/5207009.png" alt="CAR LOAN" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">CAR LOAN</span>
                    </div>
                    
                    <!-- HOME LOAN -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/4221696.png" alt="HOME LOAN" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">HOME LOAN</span>
                    </div>
                    
                    <!-- BUSINESS LOAN -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/3130571.png" alt="BUSINESS LOAN" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">BUSINESS LOAN</span>
                    </div>
                    
                    <!-- MEDICAL LOAN -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <img src="temp/custom/images/2780256.png" alt="MEDICAL LOAN" class="w-10 h-auto">
                        </div>
                        <span class="text-gray-700 font-medium">MEDICAL LOAN</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Apply for Loans Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="flex justify-center">
                        <img src="temp/custom/images/1907675.png" alt="Loan Application" class="w-48 md:w-64 h-auto">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Apply For Loans</h3>
                        <p class="text-gray-600 mb-6">
                            Welcome to <?php echo e($settings->site_name); ?>, Apply For loans to be delivered to your doorstep today.
                        </p>
                        <a href="loans" class="inline-flex items-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors">
                            Apply Now
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loan Features -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="percent" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Competitive Rates</h3>
                <p class="text-gray-600">Our loan products offer some of the most competitive interest rates in the market, helping you save money.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="clock" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Quick Approval</h3>
                <p class="text-gray-600">Get pre-qualified in minutes with no impact on your credit score and receive funds as soon as the next business day.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="sliders" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Flexible Terms</h3>
                <p class="text-gray-600">Choose from a variety of repayment terms to find the option that best fits your financial situation.</p>
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
                <p class="text-gray-600">Manage your loans on iPhone and iPad with our secure mobile app.</p>
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
                <p class="text-gray-600">Access your loan accounts anytime, anywhere on your Android device.</p>
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
                <p class="text-gray-600">Check your loan balance and payment due dates with simple voice commands.</p>
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
                <p class="text-gray-600">Receive loan payment reminders and updates directly in your Slack workspace.</p>
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
                <p class="text-gray-600">Manage your loans hands-free with Google Assistant integration.</p>
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
                <p class="text-gray-600">Connect your loan accounts with Facebook for convenient access and notifications.</p>
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
                        OUR LOANS
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Finance your next car</h2>
                    <p class="text-lg text-gray-600">
                        Are you looking for a car loan for a new or used vehicle? In minutes, find out if you're pre-qualified for financing with no influence on your credit score. Also, before visiting a participating dealer, make sure you understand your loan terms.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-xl font-semibold text-gray-900 mb-4">Over 700K+ approved loans</h5>
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

<!-- Loan Calculator Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                LOAN CALCULATOR
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Calculate Your Monthly Payments
            </h2>
            <p class="text-lg text-gray-600">
                Use our loan calculator to estimate your monthly payments and see how different loan amounts, terms, and interest rates affect your payments.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden" x-data="{
            loanAmount: 10000,
            interestRate: 5,
            loanTerm: 36,
            calculatePayment() {
                const principal = parseFloat(this.loanAmount);
                const calculatedInterest = parseFloat(this.interestRate) / 100 / 12;
                const calculatedPayments = parseFloat(this.loanTerm);
                
                const x = Math.pow(1 + calculatedInterest, calculatedPayments);
                const monthly = (principal * x * calculatedInterest) / (x - 1);
                
                return isFinite(monthly) ? monthly.toFixed(2) : '0.00';
            }
        }">
            <div class="p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Calculator Inputs -->
                    <div class="space-y-6">
                        <div>
                            <label for="loan-amount" class="block text-sm font-medium text-gray-700 mb-1">Loan Amount ($)</label>
                            <input 
                                type="range" 
                                id="loan-amount" 
                                x-model="loanAmount" 
                                min="1000" 
                                max="100000" 
                                step="1000" 
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                            >
                            <div class="flex justify-between mt-2">
                                <span class="text-sm text-gray-500">$1,000</span>
                                <span class="text-sm font-medium text-gray-900" x-text="'$' + loanAmount.toLocaleString()"></span>
                                <span class="text-sm text-gray-500">$100,000</span>
                            </div>
                        </div>
                        
                        <div>
                            <label for="interest-rate" class="block text-sm font-medium text-gray-700 mb-1">Interest Rate (%)</label>
                            <input 
                                type="range" 
                                id="interest-rate" 
                                x-model="interestRate" 
                                min="1" 
                                max="20" 
                                step="0.1" 
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                            >
                            <div class="flex justify-between mt-2">
                                <span class="text-sm text-gray-500">1%</span>
                                <span class="text-sm font-medium text-gray-900" x-text="interestRate + '%'"></span>
                                <span class="text-sm text-gray-500">20%</span>
                            </div>
                        </div>
                        
                        <div>
                            <label for="loan-term" class="block text-sm font-medium text-gray-700 mb-1">Loan Term (months)</label>
                            <input 
                                type="range" 
                                id="loan-term" 
                                x-model="loanTerm" 
                                min="12" 
                                max="84" 
                                step="12" 
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                            >
                            <div class="flex justify-between mt-2">
                                <span class="text-sm text-gray-500">12 months</span>
                                <span class="text-sm font-medium text-gray-900" x-text="loanTerm + ' months'"></span>
                                <span class="text-sm text-gray-500">84 months</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Calculator Results -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6">Estimated Monthly Payment</h3>
                        
                        <div class="text-center mb-6">
                            <div class="text-4xl font-bold text-primary-600" x-text="'$' + calculatePayment()"></div>
                            <p class="text-sm text-gray-500 mt-2">Based on your inputs</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Loan Amount:</span>
                                <span class="font-medium text-gray-900" x-text="'$' + loanAmount.toLocaleString()"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Interest Rate:</span>
                                <span class="font-medium text-gray-900" x-text="interestRate + '%'"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Loan Term:</span>
                                <span class="font-medium text-gray-900" x-text="loanTerm + ' months'"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Interest:</span>
                                <span class="font-medium text-gray-900" x-text="'$' + ((calculatePayment() * loanTerm) - loanAmount).toFixed(2)"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Payment:</span>
                                <span class="font-medium text-gray-900" x-text="'$' + (calculatePayment() * loanTerm).toFixed(2)"></span>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <a href="login" class="block w-full text-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors">
                                Apply for This Loan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/loans.blade.php ENDPATH**/ ?>