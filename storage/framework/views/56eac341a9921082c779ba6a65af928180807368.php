<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Breadcrumbs -->
<section class="relative bg-gradient-to-b from-primary-600 to-primary-700 pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute left-1/4 top-1/3 w-80 h-80 bg-primary-400 rounded-full opacity-10 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">Contact Us</h1>
            <nav class="flex justify-center">
                <ol class="flex items-center space-x-2 text-sm text-primary-100">
                    <li>
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <i data-lucide="chevron-right" class="h-4 w-4 mx-1"></i>
                    </li>
                    <li class="text-white font-medium">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                GET IN TOUCH
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                We're Here to Help You
            </h2>
            <p class="text-lg text-gray-600">
                Have questions or need assistance? Our team is ready to provide you with the support you need.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Location Card -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-full bg-primary-100 flex items-center justify-center text-gray-100 mb-6 mx-auto">
                    <i data-lucide="map-pin" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Our Location</h3>
                <p class="text-gray-600 text-center"><?php echo e($settings->address); ?></p>
            </div>
            
            <!-- Email Card -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-full bg-primary-100 flex items-center justify-center text-gray-100 mb-6 mx-auto">
                    <i data-lucide="mail" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Email Us</h3>
                <p class="text-gray-600 text-center">
                    <?php echo e($settings->contact_email); ?>

                </p>
            </div>
            
            <!-- Phone Card -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100">
                <div class="w-14 h-14 rounded-full bg-primary-100 flex items-center justify-center text-gray-100 mb-6 mx-auto">
                    <i data-lucide="phone" class="h-7 w-7"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Phone</h3>
                <p class="text-gray-600 text-center">
                    <span class="block">VIP ONLY</span>
                </p>
            </div>
        </div>

        <!-- Contact Form and Map Section -->
        <div class="grid lg:grid-cols-7 gap-8 items-start">
            <!-- Contact Form -->
            <div class="lg:col-span-4 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
                    
                    <?php if(Session::has('success')): ?>
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
                        <div class="flex items-center">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2"></i>
                            <span><?php echo e(Session::get('success')); ?></span>
                        </div>
                        <button type="button" class="absolute top-0 right-0 p-2" onclick="this.parentElement.remove()">
                            <i data-lucide="x" class="h-4 w-4"></i>
                        </button>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo e(route('homesendcontact')); ?>" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name*</label>
                                <input 
                                    type="text" 
                                    name="fullname" 
                                    id="name" 
                                    placeholder="Your name" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors" 
                                    required
                                >
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address*</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    placeholder="Your email" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors" 
                                    required
                                >
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input 
                                type="text" 
                                name="phone" 
                                id="phone_number" 
                                placeholder="Your phone number" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors" 
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message*</label>
                            <textarea 
                                name="message" 
                                id="message" 
                                placeholder="How can we help you?" 
                                rows="5" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors" 
                                required
                            ></textarea>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input 
                                    type="checkbox" 
                                    name="gridCheck" 
                                    id="gridCheck" 
                                    value="I agree to the terms and privacy policy." 
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" 
                                    required
                                >
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="gridCheck" class="font-medium text-gray-700">
                                    I agree to the <a href="terms" class="text-primary-600 hover:text-primary-700">Terms & Conditions</a> and <a href="privacy" class="text-primary-600 hover:text-primary-700">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                        
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        
                        <button 
                            type="submit" 
                            name="submitbtn" 
                            class="inline-flex items-center px-6 py-3 rounded-lg bg-primary-600 text-white font-medium shadow-md hover:bg-primary-700 transition-colors"
                        >
                            SEND MESSAGE
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Support Image -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 md:p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Customer Support</h3>
                        <div class="rounded-lg overflow-hidden">
                            <img src="temp/custom/images/support.gif" alt="Customer Support" class="w-full h-auto">
                        </div>
                    </div>
                </div>
                
                <!-- Business Hours Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden mt-8">
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <i data-lucide="clock" class="h-5 w-5 text-primary-600 mr-2"></i>
                            Business Hours
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex justify-between">
                                <span class="text-gray-600">Monday - Friday:</span>
                                <span class="font-medium">9:00 AM - 6:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-600">Saturday:</span>
                                <span class="font-medium">10:00 AM - 4:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-600">Sunday:</span>
                                <span class="font-medium">Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                OUR LOCATION
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Visit Our Office
            </h2>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1619528477729!5m2!1sen!2s" 
                    class="w-full h-full" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-100 text-gray-100 text-sm font-medium mb-4">
                FREQUENTLY ASKED QUESTIONS
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                Common Questions
            </h2>
            <p class="text-lg text-gray-600">
                Find answers to the most frequently asked questions about our services.
            </p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="space-y-4" x-data="{selected:null}">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <button 
                        class="flex items-center justify-between w-full px-6 py-4 text-left" 
                        @click="selected !== 1 ? selected = 1 : selected = null"
                    >
                        <span class="text-lg font-medium text-gray-900">What are your banking hours?</span>
                        <i 
                            data-lucide="chevron-down" 
                            class="h-5 w-5 text-gray-500 transition-transform duration-200" 
                            :class="{'transform rotate-180': selected == 1}"
                        ></i>
                    </button>
                    <div 
                        class="px-6 pb-4" 
                        x-show="selected == 1" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform -translate-y-2" 
                        x-transition:enter-end="opacity-100 transform translate-y-0" 
                        x-transition:leave="transition ease-in duration-200" 
                        x-transition:leave-start="opacity-100 transform translate-y-0" 
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                    >
                        <p class="text-gray-600">
                            Our banking hours are Monday to Friday from 9:00 AM to 6:00 PM, Saturday from 10:00 AM to 4:00 PM, and we are closed on Sundays and bank holidays.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <button 
                        class="flex items-center justify-between w-full px-6 py-4 text-left" 
                        @click="selected !== 2 ? selected = 2 : selected = null"
                    >
                        <span class="text-lg font-medium text-gray-900">How do I report a lost or stolen card?</span>
                        <i 
                            data-lucide="chevron-down" 
                            class="h-5 w-5 text-gray-500 transition-transform duration-200" 
                            :class="{'transform rotate-180': selected == 2}"
                        ></i>
                    </button>
                    <div 
                        class="px-6 pb-4" 
                        x-show="selected == 2" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform -translate-y-2" 
                        x-transition:enter-end="opacity-100 transform translate-y-0" 
                        x-transition:leave="transition ease-in duration-200" 
                        x-transition:leave-start="opacity-100 transform translate-y-0" 
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                    >
                        <p class="text-gray-600">
                            If your card is lost or stolen, please contact our 24/7 customer service immediately at our emergency hotline. You can also lock your card temporarily through our mobile banking app.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <button 
                        class="flex items-center justify-between w-full px-6 py-4 text-left" 
                        @click="selected !== 3 ? selected = 3 : selected = null"
                    >
                        <span class="text-lg font-medium text-gray-900">How can I apply for a loan?</span>
                        <i 
                            data-lucide="chevron-down" 
                            class="h-5 w-5 text-gray-500 transition-transform duration-200" 
                            :class="{'transform rotate-180': selected == 3}"
                        ></i>
                    </button>
                    <div 
                        class="px-6 pb-4" 
                        x-show="selected == 3" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform -translate-y-2" 
                        x-transition:enter-end="opacity-100 transform translate-y-0" 
                        x-transition:leave="transition ease-in duration-200" 
                        x-transition:leave-start="opacity-100 transform translate-y-0" 
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                    >
                        <p class="text-gray-600">
                            You can apply for a loan through our online banking portal, mobile app, or by visiting any of our branches. We offer various types of loans including personal, home, car, and business loans with competitive interest rates.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <button 
                        class="flex items-center justify-between w-full px-6 py-4 text-left" 
                        @click="selected !== 4 ? selected = 4 : selected = null"
                    >
                        <span class="text-lg font-medium text-gray-900">How do I set up online banking?</span>
                        <i 
                            data-lucide="chevron-down" 
                            class="h-5 w-5 text-gray-500 transition-transform duration-200" 
                            :class="{'transform rotate-180': selected == 4}"
                        ></i>
                    </button>
                    <div 
                        class="px-6 pb-4" 
                        x-show="selected == 4" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform -translate-y-2" 
                        x-transition:enter-end="opacity-100 transform translate-y-0" 
                        x-transition:leave="transition ease-in duration-200" 
                        x-transition:leave-start="opacity-100 transform translate-y-0" 
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                    >
                        <p class="text-gray-600">
                            To set up online banking, visit our website and click on the "Register" button. You'll need your account number, debit card, and personal information to complete the registration process. Alternatively, you can visit any branch for assistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/home/contact.blade.php ENDPATH**/ ?>