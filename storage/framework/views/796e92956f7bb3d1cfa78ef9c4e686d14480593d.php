<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<!-- Page Header with Breadcrumbs -->
<div class="flex flex-col mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 mb-1">Two-Factor Authentication</h1>
        <div class="flex items-center text-sm text-gray-500">
            <a href="<?php echo e(route('dashboard')); ?>" class="hover:text-primary-600">Dashboard</a>
            <i data-lucide="chevron-right" class="h-4 w-4 mx-2"></i>
            <a href="<?php echo e(route('profile')); ?>" class="hover:text-primary-600">Settings</a>
            <i data-lucide="chevron-right" class="h-4 w-4 mx-2"></i>
            <span class="font-medium text-gray-700">Security</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
    <div class="border-b border-gray-200 px-6 py-4">
        <h2 class="text-lg font-semibold text-gray-900">Email-Based Two-Factor Authentication</h2>
        <p class="text-sm text-gray-500 mt-1">
            Add an extra layer of security to your account
        </p>
    </div>
    <div class="p-6">
        <!-- Alerts -->
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-alert','data' => []]); ?>
<?php $component->withName('error-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <div class="flex items-center mb-4">
                    <?php if(auth()->user()->two_factor_enabled): ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                            <i data-lucide="shield-check" class="h-4 w-4 mr-1"></i> Enabled
                        </span>
                    <?php else: ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                            <i data-lucide="shield-off" class="h-4 w-4 mr-1"></i> Disabled
                        </span>
                    <?php endif; ?>
                    <span class="ml-3 text-gray-500 text-sm">
                        Current Status
                    </span>
                </div>
                <p class="text-gray-600 mb-4">
                    When enabled, a 6-digit verification code will be sent to your email address <strong><?php echo e(auth()->user()->email); ?></strong> each time you log in to your account.
                </p>

                <div class="bg-blue-50 rounded-lg p-4 border border-blue-100 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i data-lucide="info" class="h-5 w-5 text-blue-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-blue-800">How Two-Factor Authentication Works</h3>
                            <div class="mt-2 text-sm text-blue-700">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>When you log in with your password, a 6-digit code will be sent to your email</li>
                                    <li>You must enter this code to complete your login</li>
                                    <li>This adds an extra layer of security to your account</li>
                                    <li>The code expires after 10 minutes for security</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="<?php echo e(route('two-factor.toggle')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="px-4 py-2 border rounded-lg shadow-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors <?php echo e(auth()->user()->two_factor_enabled ? 'border-red-300 text-red-700 bg-white hover:bg-red-50 focus:ring-red-500' : 'border-transparent text-white bg-primary-600 hover:bg-primary-700 focus:ring-primary-500'); ?>">
                        <?php if(auth()->user()->two_factor_enabled): ?>
                            <i data-lucide="shield-off" class="h-5 w-5 inline mr-1"></i> Disable Two-Factor Authentication
                        <?php else: ?>
                            <i data-lucide="shield" class="h-5 w-5 inline mr-1"></i> Enable Two-Factor Authentication
                        <?php endif; ?>
                    </button>
                </form>
                                </div>
                            </div>
                        </div>

            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-lg p-5 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                        <i data-lucide="shield" class="h-5 w-5 mr-2 text-primary-600"></i>
                        Security Tips
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-700">Use a strong, unique password</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-700">Enable two-factor authentication</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-700">Keep your email secure</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-700">Log out when using shared devices</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-700">Regularly check your account activity</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/libertytruist/public_html/resources/views/user/twofa.blade.php ENDPATH**/ ?>