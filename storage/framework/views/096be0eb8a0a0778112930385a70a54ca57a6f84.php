

<?php $__env->startSection('title', 'Two-Factor Authentication'); ?>
<?php $__env->startSection('content'); ?>

<div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Left Side - Branding & Illustration (Desktop Only) -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-primary-600 to-primary-800 relative overflow-hidden">
        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white rounded-full mix-blend-overlay floating-slow"></div>
            <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-white rounded-full mix-blend-overlay floating"></div>
            <div class="absolute top-2/3 left-1/3 w-40 h-40 bg-white rounded-full mix-blend-overlay floating-slower"></div>
            
            <!-- Grid pattern -->
            <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
        </div>
        
        <!-- Content -->
        <div class="relative flex flex-col justify-center items-center w-full h-full text-white p-12 z-10">
            <!-- Logo -->
            <a href="/" class="mb-6">
                <img src="<?php echo e(asset('storage/app/public/' . $settings->logo)); ?>" alt="Logo" class="h-16 filter brightness-0 invert">
            </a>
            
            <!-- Title -->
            <h1 class="text-4xl font-extrabold mb-6 text-center">Account Security</h1>
            
            <!-- Description -->
            <p class="text-xl mb-8 max-w-md text-center text-white/80">
                Two-Factor Authentication adds an extra layer of security to your <?php echo e($settings->site_name); ?> account.
            </p>
            
            <!-- Features -->
            <div class="grid grid-cols-2 gap-6 w-full max-w-md">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="shield" class="h-5 w-5"></i>
                    </div>
                    <span>Extra Security</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="mail" class="h-5 w-5"></i>
                    </div>
                    <span>Email Verification</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="key" class="h-5 w-5"></i>
                    </div>
                    <span>Secure Access</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="lock" class="h-5 w-5"></i>
                    </div>
                    <span>Account Protection</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side - Verification Form -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="w-full max-w-md">
            <!-- Mobile Logo -->
            <div class="lg:hidden text-center mb-8">
                <a href="/">
                    <img src="<?php echo e(asset('storage/app/public/' . $settings->logo)); ?>" alt="Logo" class="h-12 mx-auto">
                </a>
            </div>
            
            <!-- Alerts -->
            <?php if(Session::has('message')): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                    <p><?php echo e(session('message')); ?></p>
                </div>
            <?php endif; ?>
            
            <?php if(Session::has('success')): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                    <p><?php echo e(session('success')); ?></p>
                </div>
            <?php endif; ?>
            
            <!-- Verification Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="px-8 pt-8 pb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Two-Factor Authentication</h2>
                    <p class="mt-2 text-sm text-gray-600">Please enter the 6-digit verification code sent to your email.</p>
                </div>
                
                <!-- Verification Form -->
                <div class="px-8 pb-8">
                    <form method="POST" action="<?php echo e(route('two-factor.verify')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <!-- Verification Code -->
                        <div class="mb-6">
                            <label for="two_factor_code" class="block text-sm font-medium text-gray-700 mb-2">Verification Code</label>
                            <div class="input-wrapper">
                                <div class="relative">
                                    <div class="input-icon">
                                        <i data-lucide="key" class="h-5 w-5"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="two_factor_code" 
                                        name="two_factor_code" 
                                        class="pl-12 w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-center tracking-widest text-lg font-semibold" 
                                        placeholder="XXXXXX" 
                                        maxlength="6" 
                                        autocomplete="off" 
                                        required>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Buttons -->
                        <div class="flex flex-col space-y-4">
                            <button 
                                type="submit"
                                class="w-full py-3 px-4 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg shadow transition duration-150 ease-in-out flex items-center justify-center">
                                <i data-lucide="log-in" class="h-5 w-5 mr-2"></i>
                                Verify and Login
                            </button>
                            
                            <a 
                                href="<?php echo e(route('two-factor.resend')); ?>"
                                onclick="event.preventDefault(); document.getElementById('resend-form').submit();"
                                class="w-full py-3 px-4 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition duration-150 ease-in-out flex items-center justify-center">
                                <i data-lucide="refresh-cw" class="h-5 w-5 mr-2"></i>
                                Resend Verification Code
                            </a>
                            <form id="resend-form" action="<?php echo e(route('two-factor.resend')); ?>" method="POST" class="hidden">
                                <?php echo e(csrf_field()); ?>

                            </form>
                            
                            <a 
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="w-full py-3 px-4 border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium rounded-lg transition duration-150 ease-in-out flex items-center justify-center">
                                <i data-lucide="log-out" class="h-5 w-5 mr-2 text-gray-400"></i>
                                Sign Out
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Help Information -->
            <div class="mt-8 bg-gray-50 rounded-lg p-5 text-left">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Didn't get the code?</h3>
                <ul class="list-disc pl-5 text-gray-600 space-y-2">
                    <li>The email may be in your spam folder</li>
                    <li>The verification code expires after 10 minutes</li>
                    <li>Make sure your email address is correct</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Focus on verification code input
        document.getElementById('two_factor_code').focus();
        
        // Auto-submit when 6 digits are entered
        document.getElementById('two_factor_code').addEventListener('input', function(e) {
            if (this.value.length === 6) {
                // Add a small delay to allow the user to see the completed code
                setTimeout(() => {
                    this.form.submit();
                }, 300);
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/libertytruist/public_html/resources/views/auth/two-factor-challenge.blade.php ENDPATH**/ ?>