<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Grants'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Grants</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Grants</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Grants Intro Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                <?php echo e(strtoupper($settings->site_name)); ?> GRANTS
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Empowering individuals and businesses with financial support through our comprehensive grant programs.
            </h2>
        </div>

        <!-- Grant Types Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="p-6 md:p-8">
                <div class="flex items-center mb-4">
                    <i data-lucide="award" class="h-6 w-6 text-gray-100 mr-2"></i>
                    <h3 class="text-xl font-bold text-gray-900">GRANT PROGRAMS</h3>
                </div>
                <div class="h-px w-full bg-gray-200 mb-8"></div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- INDIVIDUAL GRANTS -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <i data-lucide="user" class="h-8 w-8 text-gray-100"></i>
                        </div>
                        <span class="text-gray-700 font-medium">INDIVIDUAL GRANTS</span>
                    </div>
                    
                    <!-- BUSINESS GRANTS -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <i data-lucide="briefcase" class="h-8 w-8 text-gray-100"></i>
                        </div>
                        <span class="text-gray-700 font-medium">BUSINESS GRANTS</span>
                    </div>
                    
                    <!-- RESEARCH GRANTS -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <i data-lucide="microscope" class="h-8 w-8 text-gray-100"></i>
                        </div>
                        <span class="text-gray-700 font-medium">RESEARCH GRANTS</span>
                    </div>
                    
                    <!-- COMMUNITY GRANTS -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mb-3">
                            <i data-lucide="users" class="h-8 w-8 text-gray-100"></i>
                        </div>
                        <span class="text-gray-700 font-medium">COMMUNITY GRANTS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apply for Grants Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Apply for a Grant Today</h3>
                        <p class="text-gray-600 mb-6">
                            Our grant application process is simple and straightforward. We offer grants for individuals, businesses, research projects, and community initiatives. Our team is dedicated to helping you secure the funding you need.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mt-0.5 mr-2"></i>
                                <span class="text-gray-700">No repayment required - grants are not loans</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mt-0.5 mr-2"></i>
                                <span class="text-gray-700">Transparent application process</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mt-0.5 mr-2"></i>
                                <span class="text-gray-700">Dedicated support throughout the process</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mt-0.5 mr-2"></i>
                                <span class="text-gray-700">Fast approval and disbursement</span>
                            </li>
                        </ul>
                        <a href="login" class="inline-flex items-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors">
                            Apply Now
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                    <div class="relative hidden md:block">
                        <div class="bg-gray-50 rounded-lg p-8 relative overflow-hidden">
                            <!-- SVG Illustration -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 400" class="w-full h-auto">
                                <!-- Background Elements -->
                                <circle cx="400" cy="100" r="50" fill="#e0f2fe" opacity="0.6"/>
                                <circle cx="100" cy="300" r="70" fill="#e0f2fe" opacity="0.6"/>
                                
                                <!-- Document -->
                                <rect x="150" y="100" width="200" height="250" rx="10" fill="white" stroke="#94a3b8" stroke-width="2"/>
                                <rect x="170" y="130" width="160" height="20" rx="4" fill="#e2e8f0"/>
                                <rect x="170" y="160" width="160" height="20" rx="4" fill="#e2e8f0"/>
                                <rect x="170" y="190" width="160" height="20" rx="4" fill="#e2e8f0"/>
                                <rect x="170" y="220" width="100" height="20" rx="4" fill="#e2e8f0"/>
                                
                                <!-- Checkmark/Approved Symbol -->
                                <circle cx="300" cy="280" r="30" fill="var(--primary-color)" opacity="0.8"/>
                                <path d="M285,280 L295,290 L315,270" stroke="white" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <!-- Money/Grant Symbol -->
                                <circle cx="120" cy="150" r="40" fill="var(--primary-color)" opacity="0.2"/>
                                <text x="120" y="160" font-family="Arial" font-size="30" font-weight="bold" fill="var(--primary-color)" text-anchor="middle">$</text>
                                
                                <!-- Person Icon -->
                                <circle cx="380" cy="200" r="25" fill="#94a3b8"/>
                                <circle cx="380" cy="180" r="12" fill="#64748b"/>
                                <path d="M355,220 Q380,250 405,220" fill="#64748b"/>
                            </svg>
                            
                            <div class="absolute -bottom-4 -right-4 bg-primary-600 text-white rounded-lg px-6 py-3 shadow-lg">
                                <span class="font-bold">No Credit Check Required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grant Features Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Why Choose Our Grant Programs?
            </h2>
            <p class="text-gray-600">
                Our grants are designed to provide financial support without the burden of repayment, helping you focus on what matters most.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="calendar-check" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Simple Application</h3>
                <p class="text-gray-600">Our streamlined application process makes it easy to apply for grants with minimal paperwork and hassle.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="hourglass" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Quick Approval</h3>
                <p class="text-gray-600">Get a decision on your grant application within days, not weeks or months like traditional funding sources.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-lg bg-primary-100 flex items-center justify-center text-gray-100 mb-6">
                    <i data-lucide="wallet" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Direct Disbursement</h3>
                <p class="text-gray-600">Approved funds are disbursed directly to your account, allowing you to access your grant money quickly.</p>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/grants.blade.php ENDPATH**/ ?>