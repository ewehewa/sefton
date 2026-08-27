
<?php $__env->startSection('title', 'Grant Applications'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-6 mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-900">Grant Applications</h1>
        </div>

        <?php if(session('error')): ?>
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-md">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i data-lucide="alert-circle" class="h-5 w-5 text-red-500"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700"><?php echo e(session('error')); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($hasApplication): ?>
            <?php
                $statusConfig = [
                    'processing' => [
                        'gradient' => 'from-blue-50 to-indigo-50',
                        'border' => 'border-blue-200',
                        'icon' => 'file-clock',
                        'iconBg' => 'bg-blue-100',
                        'iconColor' => 'text-blue-600',
                        'title' => 'Application Processing',
                        'message' => 'Your grant application is currently being processed.',
                        'buttonBg' => 'bg-blue-600 hover:bg-blue-700 focus:ring-blue-500'
                    ],
                    'approved' => [
                        'gradient' => 'from-green-50 to-emerald-50',
                        'border' => 'border-green-200',
                        'icon' => 'check-circle',
                        'iconBg' => 'bg-green-100',
                        'iconColor' => 'text-green-600',
                        'title' => 'Application Approved',
                        'message' => 'Your grant application has been approved.',
                        'buttonBg' => 'bg-green-600 hover:bg-green-700 focus:ring-green-500'
                    ],
                    'rejected' => [
                        'gradient' => 'from-red-50 to-rose-50',
                        'border' => 'border-red-200',
                        'icon' => 'x-circle',
                        'iconBg' => 'bg-red-100',
                        'iconColor' => 'text-red-600',
                        'title' => 'Application Not Approved',
                        'message' => 'Unfortunately, your grant application was not approved.',
                        'buttonBg' => 'bg-red-600 hover:bg-red-700 focus:ring-red-500'
                    ],
                    'disbursed' => [
                        'gradient' => 'from-purple-50 to-fuchsia-50',
                        'border' => 'border-purple-200',
                        'icon' => 'check-circle-2',
                        'iconBg' => 'bg-purple-100',
                        'iconColor' => 'text-purple-600',
                        'title' => 'Grant Disbursed',
                        'message' => 'Your grant has been successfully disbursed.',
                        'buttonBg' => 'bg-purple-600 hover:bg-purple-700 focus:ring-purple-500'
                    ]
                ];
                $config = $statusConfig[$latestStatus] ?? $statusConfig['processing'];
            ?>
            <div class="bg-gradient-to-r <?php echo e($config['gradient']); ?> border <?php echo e($config['border']); ?> rounded-xl shadow-sm mb-8 overflow-hidden">
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div class="h-12 w-12 rounded-full <?php echo e($config['iconBg']); ?> flex items-center justify-center mr-4 flex-shrink-0">
                            <i data-lucide="<?php echo e($config['icon']); ?>" class="h-6 w-6 <?php echo e($config['iconColor']); ?>"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1"><?php echo e($config['title']); ?></h3>
                            <p class="text-sm text-gray-600">
                                <?php echo e($config['message']); ?>

                            </p>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="<?php echo e(route('grant.myApplications')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white <?php echo e($config['buttonBg']); ?> focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <i data-lucide="eye" class="mr-2 h-4 w-4"></i>
                            View My Applications
                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                <div class="p-6 text-center">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Select Application Type</h2>
                    <p class="text-gray-600 mb-8 max-w-3xl mx-auto">
                        Please select the type of application you would like to submit.
                        Different documentation is required for individual and company applications.
                    </p>
                    
                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition-all hover:shadow-md">
                            <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="user" class="h-6 w-6 text-primary-600"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Apply as Individual</h3>
                            <p class="text-gray-600 mb-6 text-sm">
                                For individual applicants seeking funding for programs, equipment, research or community outreach.
                            </p>
                            <a href="<?php echo e(route('grant.individual')); ?>" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Continue
                            </a>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition-all hover:shadow-md">
                            <div class="h-12 w-12 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="building" class="h-6 w-6 text-secondary-600"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Apply as Company</h3>
                            <p class="text-gray-600 mb-6 text-sm">
                                For registered organizations with an EIN, established history and defined mission.
                            </p>
                            <a href="<?php echo e(route('grant.company')); ?>" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-secondary-600 hover:bg-secondary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
                                Continue
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/index.blade.php ENDPATH**/ ?>