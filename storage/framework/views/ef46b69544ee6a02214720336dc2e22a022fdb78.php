

<?php $__env->startSection('title', 'Verify Email'); ?>
<?php $__env->startSection('content'); ?>

<div class="container py-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Card Header -->
        <div class="bg-gradient-to-r from-primary-500 to-primary-600 px-6 py-5">
            <div class="flex items-center justify-center">
                <div class="bg-white/20 backdrop-blur-sm p-3 rounded-full">
                    <i data-lucide="mail" class="h-10 w-10 text-white"></i>
                </div>
            </div>
            <h1 class="text-white text-center font-bold text-2xl mt-4">Verify Your Email Address</h1>
            <p class="text-white/80 text-center mt-2">Please enter the 6-digit verification code sent to your email</p>
        </div>
        
        <!-- Card Content -->
        <div class="p-6 sm:p-8">
            <!-- Alerts -->
            <?php if(Session::has('message')): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-md">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i data-lucide="alert-circle" class="h-5 w-5 text-red-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Error</h3>
                            <p class="text-sm text-red-700 mt-1"><?php echo e(Session::get('message')); ?></p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button type="button" class="inline-flex rounded-md p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" onclick="this.parentElement.parentElement.parentElement.remove()">
                                    <i data-lucide="x" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif(Session::has('success')): ?>
                <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-md">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i data-lucide="check-circle" class="h-5 w-5 text-green-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-green-800">Success</h3>
                            <p class="text-sm text-green-700 mt-1"><?php echo e(Session::get('success')); ?></p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button type="button" class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="this.parentElement.parentElement.parentElement.remove()">
                                    <i data-lucide="x" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6 rounded-md">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i data-lucide="info" class="h-5 w-5 text-blue-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-blue-800">Information</h3>
                            <p class="text-sm text-blue-700 mt-1">A verification code has been sent to your email address. Please check your inbox and enter the code below.</p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button type="button" class="inline-flex rounded-md p-1.5 text-blue-500 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="this.parentElement.parentElement.parentElement.remove()">
                                    <i data-lucide="x" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(session('status')): ?>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6 rounded-md">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i data-lucide="info" class="h-5 w-5 text-blue-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-blue-800">Information</h3>
                            <p class="text-sm text-blue-700 mt-1">A new verification code has been sent to your email address. Please check your inbox.</p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button type="button" class="inline-flex rounded-md p-1.5 text-blue-500 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="this.parentElement.parentElement.parentElement.remove()">
                                    <i data-lucide="x" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Main Content -->
            <div class="text-center pt-4">
                <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-primary-50 mb-6">
                    <i data-lucide="mail-check" class="h-12 w-12 text-gray-100"></i>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Enter Verification Code</h2>
                <p class="text-gray-600 mb-6">We've sent a 6-digit verification code to your email address</p>
                
                <!-- Verification Code Form -->
                <form method="POST" action="<?php echo e(route('verification.verify-code')); ?>" class="mb-8">
                    <?php echo csrf_field(); ?>
                    <div class="mb-6">
                        <label for="verification_code" class="block text-sm font-medium text-gray-700 mb-2 text-left">Verification Code</label>
                        <input type="text" name="verification_code" id="verification_code" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-center tracking-widest text-lg font-semibold"
                               placeholder="XXXXXX" maxlength="6" autocomplete="off" required>
                    </div>
                    
                    <button type="submit" class="w-full px-4 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                        Verify Email
                    </button>
                </form>
                
                <div class="bg-gray-50 rounded-lg p-5 text-left mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Didn't get the code?</h3>
                    <ul class="list-decimal pl-5 text-gray-600 space-y-2">
                        <li>The email may be in your spam folder</li>
                        <li>The verification code expires after 60 minutes</li>
                        <li>Make sure your email address is correct</li>
                    </ul>
                </div>
                
                <!-- Actions -->
                <div class="space-y-4">
                    <a href="<?php echo e(route('verification.send')); ?>" 
                       onclick="event.preventDefault(); document.getElementById('verification').submit();" 
                       class="inline-flex items-center justify-center w-full px-4 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                        <i data-lucide="refresh-cw" class="h-5 w-5 mr-2"></i>
                        Resend Verification Code
                    </a>
                    <form id="verification" action="<?php echo e(route('verification.send')); ?>" method="POST" class="hidden">
                        <?php echo e(csrf_field()); ?>

                    </form>
                    
                    <a href="<?php echo e(route('logout')); ?>" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="inline-flex items-center justify-center w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                        <i data-lucide="log-out" class="h-5 w-5 mr-2 text-gray-400"></i>
                        Sign Out
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
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
        document.getElementById('verification_code').focus();
        
        // Auto-submit when 6 digits are entered
        document.getElementById('verification_code').addEventListener('input', function(e) {
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

<?php echo $__env->make('layouts.guest2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>