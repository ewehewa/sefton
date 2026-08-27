
<?php $__env->startSection('title', 'My Grant Applications'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 p-3 lg:p-4">
    <div class="max-w-8xl mx-auto">
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

        <!-- Mobile Header -->
        <div class="lg:hidden mb-2">
            <?php echo $__env->make('partials._mobile_header', [
                'title' => 'My Applications',
                'showBackButton' => true,
                'backUrl' => route('grant.index'),
                'showNotifications' => true,
                'showDarkMode' => true,
                'financeUser' => Auth::user(),
                'actionButton' => [
                    'text' => 'New',
                    'icon' => 'plus',
                    'url' => route('grant.index')
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Desktop Header -->
        <div class="hidden lg:flex items-center justify-between mb-4">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">My Grant Applications</h1>
            <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                <i class="fas fa-plus mr-2 text-xs"></i>
                New Application
            </a>
        </div>

        <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-xl shadow-sm border border-white/20 dark:border-gray-700/50 overflow-hidden mb-4">
            <?php if(count($applications) > 0): ?>
                <!-- Desktop Table -->
                <div class="hidden lg:block overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200/50 dark:divide-gray-700/50">
                        <thead class="bg-gray-50/80 dark:bg-gray-700/80 backdrop-blur-sm">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Application ID
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Type
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Date Submitted
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                   Requested Amount
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm divide-y divide-gray-200/50 dark:divide-gray-700/50">
                            <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                        #<?php echo e($application->id); ?>

                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <?php echo e(ucfirst($application->application_type)); ?>

                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <?php echo e($application->created_at->format('M d, Y')); ?>

                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-white font-medium">
                                        <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($application->requested_amount, 2, '.', ',')); ?>

                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <?php if($application->status == 'approved'): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300">
                                                Approved
                                            </span>
                                        <?php elseif($application->status == 'processing'): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900/50 text-yellow-800 dark:text-yellow-300">
                                                Processing
                                            </span>
                                        <?php elseif($application->status == 'pending'): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300">
                                                Pending
                                            </span>
                                        <?php elseif($application->status == 'rejected'): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 dark:bg-red-900/50 text-red-800 dark:text-red-300">
                                                Not Approved
                                            </span>
                                        <?php elseif($application->status == 'disbursed'): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 dark:bg-purple-900/50 text-purple-800 dark:text-purple-300">
                                                Disbursed
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm">
                                        <div class="flex items-center space-x-2">
                                            <a href="<?php echo e(route('grant.view', $application->id)); ?>" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300 transition-colors">
                                                <i class="fas fa-eye text-xs"></i>
                                                <span class="ml-1">View</span>
                                            </a>
                                            <?php if($application->status == 'pending' || $application->status == 'processing'): ?>
                                                <a href="<?php echo e(route('grant.edit', $application->id)); ?>" class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 transition-colors">
                                                    <i class="fas fa-edit text-xs"></i>
                                                    <span class="ml-1">Edit</span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Cards -->
                <div class="lg:hidden space-y-3 p-3">
                    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white/80 dark:bg-gray-700/80 backdrop-blur-sm rounded-lg border border-gray-200/50 dark:border-gray-600/50 p-3">
                            <div class="flex items-center justify-between mb-2">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">#<?php echo e($application->id); ?></div>
                                <?php if($application->status == 'approved'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300">
                                        Approved
                                    </span>
                                <?php elseif($application->status == 'processing'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900/50 text-yellow-800 dark:text-yellow-300">
                                        Processing
                                    </span>
                                <?php elseif($application->status == 'pending'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300">
                                        Pending
                                    </span>
                                <?php elseif($application->status == 'rejected'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 dark:bg-red-900/50 text-red-800 dark:text-red-300">
                                        Not Approved
                                    </span>
                                <?php elseif($application->status == 'disbursed'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 dark:bg-purple-900/50 text-purple-800 dark:text-purple-300">
                                        Disbursed
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="space-y-1 text-xs text-gray-600 dark:text-gray-400 mb-3">
                                <div><?php echo e(ucfirst($application->application_type)); ?> • <?php echo e($application->created_at->format('M d, Y')); ?></div>
                                <div class="font-medium text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($application->requested_amount, 2, '.', ',')); ?></div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <a href="<?php echo e(route('grant.view', $application->id)); ?>" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300 text-xs font-medium transition-colors">
                                    <i class="fas fa-eye mr-1"></i>View
                                </a>
                                <?php if($application->status == 'pending' || $application->status == 'processing'): ?>
                                    <a href="<?php echo e(route('grant.edit', $application->id)); ?>" class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 text-xs font-medium transition-colors">
                                        <i class="fas fa-edit mr-1"></i>Edit
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <div class="px-4 py-3 bg-gray-50/80 dark:bg-gray-700/80 backdrop-blur-sm border-t border-gray-200/50 dark:border-gray-600/50">
                    <?php echo e($applications->links()); ?>

                </div>
            <?php else: ?>
                <div class="p-6 text-center">
                    <div class="mb-4">
                        <div class="h-12 w-12 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center mx-auto">
                            <i class="fas fa-file-alt text-gray-400 dark:text-gray-500"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No Applications Yet</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-4 text-sm">You haven't submitted any grant applications yet.</p>
                    <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                        <i class="fas fa-plus mr-2 text-xs"></i>
                        Start New Application
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-xl shadow-sm border border-white/20 dark:border-gray-700/50 overflow-hidden">
            <div class="bg-gradient-to-r from-primary-50/80 to-white/80 dark:from-primary-900/20 dark:to-gray-800/80 backdrop-blur-sm border-b border-gray-100/50 dark:border-gray-700/50 px-4 py-3">
                <h2 class="text-lg font-medium text-gray-900 dark:text-white">Grant Application FAQ</h2>
            </div>
            <div class="p-4 lg:p-5">
                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">How long does the application review process take?</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            Applications are typically reviewed within 3-5 business days. You will be notified by email once a decision has been made.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">Can I edit my application after submission?</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            You may edit your application while it is still in "Under Review" status. Once the status changes, no further edits can be made.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">How soon can I reapply if my application is not approved?</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            You may submit a new application 30 days after receiving a decision on your previous application.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">Need more help?</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Contact our support team at <a href="mailto:<?php echo e($contact_email); ?>" class="text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300"><?php echo e($contact_email); ?></a>.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/user/grant/myApplications.blade.php ENDPATH**/ ?>