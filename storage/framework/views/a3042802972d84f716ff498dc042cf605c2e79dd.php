
<?php $__env->startSection('title', 'Grant Application Results'); ?>

<?php $__env->startSection('content'); ?>
<div class="container px-4 py-6 mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">Grant Application Results</h1>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
        <div class="p-8 text-center">
            <?php if($grant_limit <= 0): ?>
                <div class="mb-6">
                    <div class="h-20 w-20 rounded-full bg-yellow-100 flex items-center justify-center mx-auto">
                        <i data-lucide="alert-triangle" class="h-10 w-10 text-yellow-600"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">We're Sorry</h2>
                <h3 class="text-lg text-gray-600 mb-6">Your grant application could not be approved at this time</h3>
                
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Based on your current account status and the information provided, we are unable to approve your
                    grant application at this time. You may contact our support team for more information.
                </p>
                
                <div class="flex items-center justify-center space-x-4">
                    <a href="<?php echo e(route('dashboard')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i data-lucide="layout-dashboard" class="mr-2 h-5 w-5"></i>
                        Return to Dashboard
                    </a>
                    <a href="<?php echo e(route('support')); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i data-lucide="life-buoy" class="mr-2 h-5 w-5"></i>
                        Contact Support
                    </a>
                </div>
            <?php else: ?>
                <div class="mb-6">
                    <div class="h-20 w-20 rounded-full bg-green-100 flex items-center justify-center mx-auto">
                        <i data-lucide="check-circle" class="h-10 w-10 text-green-600"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Congratulations!</h2>
                <h3 class="text-lg text-gray-600 mb-6">Your grant application has been pre-approved</h3>
                
                <div class="mb-6">
                    <p class="text-sm text-gray-500 mb-1">You Requested</p>
                    <div class="text-base font-medium text-gray-600 mb-3">
                        <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($latest_application->requested_amount, 2, '.', ',')); ?>

                    </div>
                    
                    <p class="text-sm text-gray-500 mb-1">Pre-Approved Amount</p>
                    <div class="text-4xl font-bold text-green-600">
                        <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($grant_limit, 2, '.', ',')); ?>

                    </div>
                </div>
                
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Based on your application and account information, you have been pre-approved for the grant amount shown above.
                    Our team will review your application in detail and may contact you for additional information if needed.
                </p>
                
                <div class="flex items-center justify-center space-x-4">
                    <a href="<?php echo e(route('dashboard')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i data-lucide="layout-dashboard" class="mr-2 h-5 w-5"></i>
                        Return to Dashboard
                    </a>
                    <a href="<?php echo e(route('grant.myApplications')); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i data-lucide="list" class="mr-2 h-5 w-5"></i>
                        View My Applications
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if($grant_limit > 0): ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <div class="bg-gradient-to-r from-primary-50 to-white border-b border-gray-100 px-6 py-4">
                <h2 class="text-lg font-medium text-gray-900">Next Steps</h2>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-full bg-primary-100 text-primary-600 text-sm font-medium">
                                1
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Application Review</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Our team will review your application in detail within the next 3-5 business days.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-full bg-primary-100 text-primary-600 text-sm font-medium">
                                2
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Documentation</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                You may be asked to provide additional documentation to support your application.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-full bg-primary-100 text-primary-600 text-sm font-medium">
                                3
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Final Approval</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Once approved, funds will be disbursed according to our grant payment schedule.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-full bg-primary-100 text-primary-600 text-sm font-medium">
                                4
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Reporting</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                All grant recipients are required to submit progress reports on how funds are being utilized.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/results.blade.php ENDPATH**/ ?>