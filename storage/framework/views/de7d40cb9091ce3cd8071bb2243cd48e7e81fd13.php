
<?php $__env->startSection('title', 'Enter Filing ID'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <!-- Header with Icon -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary-100 mb-4">
                <i data-lucide="file-text" class="h-10 w-10 text-gray-600"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Enter Your Filing ID</h1>
            <p class="text-gray-600">Please enter the filing ID provided by our support team</p>
        </div>

        <!-- Session Messages -->
        <?php if(session('error')): ?>
            <div class="mb-6 bg-red-50 border-l-4 border-red-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i data-lucide="alert-circle" class="h-5 w-5 text-red-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700"><?php echo e(session('error')); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="mb-6 bg-green-50 border-l-4 border-green-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i data-lucide="check-circle" class="h-5 w-5 text-green-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700"><?php echo e(session('success')); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <div class="p-6">
                <!-- Support Notice -->
                <div class="bg-primary-50 p-4 rounded-lg mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i data-lucide="info" class="h-5 w-5 text-gray-600"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-800">Need a Filing ID?</h3>
                            <div class="mt-2 text-sm text-gray-700">
                                <p>Please contact our support team to receive your filing ID. This ID is required to process your refund request.</p>
                            </div>
                            <div class="mt-3">
                                <a href="<?php echo e(route('support')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    <i data-lucide="message-circle" class="h-4 w-4 mr-2"></i> Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filing ID Form -->
                <form action="<?php echo e(route('irs-refund.update-filing-id')); ?>" method="POST" class="space-y-6">
                    <?php echo csrf_field(); ?>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                            <i data-lucide="key" class="h-5 w-5 text-primary-500 mr-2"></i>
                            Filing ID Information
                        </h3>
                        
                        <div class="mb-4">
                            <label for="filing_id" class="block text-sm font-medium text-gray-700 mb-1">Filing ID</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="hash" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="text" name="filing_id" id="filing_id" required
                                    class="block w-full pl-10 pr-3 py-2 border <?php $__errorArgs = ['filing_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 <?php else: ?> border-gray-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Enter your filing ID"
                                    value="<?php echo e(old('filing_id')); ?>">
                            </div>
                            <?php $__errorArgs = ['filing_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200">
                            <i data-lucide="send" class="h-5 w-5 mr-2"></i> Submit Filing ID
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/globalch/public_html/resources/views/user/irs-refund/filing-id.blade.php ENDPATH**/ ?>